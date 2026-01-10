<?php
/**
 * LADATAM - Contact Form Handler
 * Procesa el formulario de contacto y envía emails
 */

// Prevenir acceso directo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registrar AJAX handlers
 */
add_action('wp_ajax_ladatam_contact_form', 'ladatam_process_contact_form');
add_action('wp_ajax_nopriv_ladatam_contact_form', 'ladatam_process_contact_form');

/**
 * Procesar el formulario de contacto
 */
function ladatam_process_contact_form() {
    // Verificar nonce de seguridad
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'ladatam_contact_nonce')) {
        wp_send_json_error(array('message' => 'Error de seguridad. Por favor, recarga la página.'));
        return;
    }
    
    // Sanitizar datos
    $nombre = isset($_POST['nombre']) ? sanitize_text_field($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $asunto_tipo = isset($_POST['asunto']) ? sanitize_text_field($_POST['asunto']) : 'general';
    $mensaje = isset($_POST['mensaje']) ? sanitize_textarea_field($_POST['mensaje']) : '';
    
    // Validar campos requeridos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        wp_send_json_error(array('message' => 'Por favor, completa todos los campos requeridos.'));
        return;
    }
    
    // Validar email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Por favor, ingresa un email válido.'));
        return;
    }
    
    // Mapear tipo de asunto a texto
    $asuntos = array(
        'general' => 'Consulta general',
        'cursos' => 'Información sobre cursos',
        'software' => 'Información sobre software',
        'empresas' => 'Soluciones para empresas',
        'otro' => 'Otro'
    );
    $asunto_texto = isset($asuntos[$asunto_tipo]) ? $asuntos[$asunto_tipo] : 'Consulta general';
    
    // Configurar email
    $to = 'johan@ladatam.com';
    $subject = '[LADATAM Web] ' . $asunto_texto . ' - ' . $nombre;
    
    // Construir mensaje HTML
    $body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #000; color: #d9ff18; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #666; }
            .value { margin-top: 5px; }
            .footer { background: #1a1a1a; color: #888; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>📧 Nuevo mensaje de contacto - LADATAM</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>👤 Nombre:</div>
                    <div class='value'>{$nombre}</div>
                </div>
                <div class='field'>
                    <div class='label'>📧 Email:</div>
                    <div class='value'><a href='mailto:{$email}'>{$email}</a></div>
                </div>
                <div class='field'>
                    <div class='label'>📋 Asunto:</div>
                    <div class='value'>{$asunto_texto}</div>
                </div>
                <div class='field'>
                    <div class='label'>💬 Mensaje:</div>
                    <div class='value'>" . nl2br(esc_html($mensaje)) . "</div>
                </div>
            </div>
            <div class='footer'>
                Este mensaje fue enviado desde el formulario de contacto de ladatam.com
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Headers del email
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: LADATAM Web <noreply@ladatam.com>',
        'Reply-To: ' . $nombre . ' <' . $email . '>'
    );
    
    // Enviar email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        // Enviar email de confirmación al usuario
        $user_subject = '¡Gracias por contactar a LADATAM!';
        $user_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: #000; color: #d9ff18; padding: 20px; text-align: center; }
                .content { background: #f9f9f9; padding: 20px; }
                .footer { background: #1a1a1a; color: #888; padding: 15px; text-align: center; font-size: 12px; }
                .btn { display: inline-block; background: #d9ff18; color: #000; padding: 12px 24px; text-decoration: none; border-radius: 5px; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>¡Gracias por contactarnos!</h2>
                </div>
                <div class='content'>
                    <p>Hola <strong>{$nombre}</strong>,</p>
                    <p>Hemos recibido tu mensaje correctamente. Nuestro equipo lo revisará y te responderemos a la brevedad posible.</p>
                    <p><strong>Resumen de tu consulta:</strong></p>
                    <ul>
                        <li><strong>Asunto:</strong> {$asunto_texto}</li>
                        <li><strong>Mensaje:</strong> " . substr($mensaje, 0, 100) . (strlen($mensaje) > 100 ? '...' : '') . "</li>
                    </ul>
                    <p>Mientras tanto, te invitamos a explorar nuestros recursos:</p>
                    <p style='text-align: center;'>
                        <a href='https://ladatam.com/aprender' class='btn'>Explorar Cursos</a>
                    </p>
                </div>
                <div class='footer'>
                    LADATAM - Transformación digital para Latinoamérica<br>
                    <a href='https://ladatam.com'>ladatam.com</a>
                </div>
            </div>
        </body>
        </html>
        ";
        
        $user_headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: LADATAM <johan@ladatam.com>'
        );
        
        wp_mail($email, $user_subject, $user_body, $user_headers);
        
        wp_send_json_success(array('message' => '¡Mensaje enviado correctamente! Te responderemos pronto.'));
    } else {
        wp_send_json_error(array('message' => 'Hubo un problema al enviar el mensaje. Por favor, intenta de nuevo o escríbenos directamente a johan@ladatam.com'));
    }
}

/**
 * Agregar nonce al footer para el formulario
 */
add_action('wp_footer', 'ladatam_contact_form_scripts');
function ladatam_contact_form_scripts() {
    if (is_page_template('page-templates/template-contacto.php')) {
        ?>
        <script>
        var ladatam_ajax = {
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            nonce: '<?php echo wp_create_nonce('ladatam_contact_nonce'); ?>'
        };
        </script>
        <?php
    }
}
