<?php
/**
 * Template Name: LADATAM - Contacto
 * Description: Página de contacto
 */

get_header();
?>

<!-- HERO -->
<section class="ladatam-hero page-hero-small">
    <div class="grid-background"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            <span class="tech-bracket">&lt;</span> Contacto <span class="tech-bracket">/&gt;</span>
        </h1>
        <p class="hero-subtitle">
            ¿Tienes preguntas? Estamos aquí para ayudarte.
        </p>
    </div>
</section>

<!-- CONTACTO -->
<section class="ladatam-section">
    <div class="container">
        <div class="contact-grid">
            <!-- FORMULARIO -->
            <div class="contact-form-wrapper">
                <h2>Envíanos un mensaje</h2>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="nombre">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" class="ladatam-input" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" class="ladatam-input" required>
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <select id="asunto" name="asunto" class="ladatam-input">
                            <option value="general">Consulta general</option>
                            <option value="cursos">Información sobre cursos</option>
                            <option value="software">Información sobre software</option>
                            <option value="comunidad">Unirme a la comunidad</option>
                            <option value="alianzas">Alianzas y colaboraciones</option>
                            <option value="soporte">Soporte técnico</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" class="ladatam-input" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="ladatam-btn ladatam-btn-primary full-width">
                        Enviar mensaje
                    </button>
                </form>
            </div>
            
            <!-- INFO DE CONTACTO -->
            <div class="contact-info">
                <h2>Otras formas de contactarnos</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div>
                        <h3>Email</h3>
                        <a href="mailto:johan@ladatam.com">johan@ladatam.com</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div>
                        <h3>Redes Sociales</h3>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/johan-salazar/" target="_blank">LinkedIn</a>
                            <a href="https://x.com/ladatamai" target="_blank">X (Twitter)</a>
                            <a href="https://www.instagram.com/ladatamai/" target="_blank">Instagram</a>
                            <a href="https://www.youtube.com/@ladatamAI" target="_blank">YouTube</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">🕐</div>
                    <div>
                        <h3>Horario de atención</h3>
                        <p>Lunes a Viernes: 9:00 - 18:00 (GMT-5)</p>
                    </div>
                </div>
                
                <div class="faq-preview">
                    <h3>Preguntas frecuentes</h3>
                    <div class="faq-item">
                        <strong>¿Los cursos son en vivo o grabados?</strong>
                        <p>Ofrecemos ambos formatos. Algunos cursos son 100% grabados para que avances a tu ritmo, y otros incluyen sesiones en vivo.</p>
                    </div>
                    <div class="faq-item">
                        <strong>¿Necesito saber programar?</strong>
                        <p>No. Todo nuestro contenido está diseñado para personas sin conocimientos técnicos previos.</p>
                    </div>
                    <div class="faq-item">
                        <strong>¿Tienen opción de pago en cuotas?</strong>
                        <p>Sí, ofrecemos diferentes opciones de pago adaptadas a cada país de Latinoamérica.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.page-hero-small {
    min-height: 40vh;
    padding-top: 140px;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    margin-top: 20px;
}

.contact-form-wrapper h2,
.contact-info h2 {
    font-size: 1.5rem;
    margin-bottom: 30px;
    color: #ffffff;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #e8e8e8;
    font-size: 0.9rem;
}

.ladatam-input {
    width: 100%;
    padding: 15px;
    background: #1a1a1a;
    border: 1px solid #2a2a2a;
    border-radius: 8px;
    color: #ffffff;
    font-family: inherit;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.ladatam-input:focus {
    outline: none;
    border-color: #d9ff18;
    box-shadow: 0 0 0 3px rgba(217, 255, 24, 0.1);
}

textarea.ladatam-input {
    resize: vertical;
    min-height: 120px;
}

select.ladatam-input {
    cursor: pointer;
}

.full-width {
    width: 100%;
}

.contact-item {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #2a2a2a;
}

.contact-icon {
    font-size: 2rem;
    flex-shrink: 0;
}

.contact-item h3 {
    font-size: 1rem;
    margin-bottom: 8px;
    color: #d9ff18;
}

.contact-item a {
    color: #ffffff;
}

.contact-item a:hover {
    color: #d9ff18;
}

.contact-item p {
    color: #e0e0e0;
    font-size: 0.95rem;
    margin: 0;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-links a {
    color: #e0e0e0;
    font-size: 0.95rem;
}

.social-links a:hover {
    color: #d9ff18;
}

.faq-preview {
    margin-top: 40px;
    padding: 30px;
    background: #1a1a1a;
    border-radius: 12px;
}

.faq-preview h3 {
    font-size: 1.1rem;
    margin-bottom: 25px;
    color: #d9ff18;
}

.faq-item {
    margin-bottom: 20px;
}

.faq-item:last-child {
    margin-bottom: 0;
}

.faq-item strong {
    display: block;
    margin-bottom: 8px;
    color: #ffffff;
    font-size: 0.95rem;
}

.faq-item p {
    color: #e0e0e0;
    font-size: 0.9rem;
    margin: 0;
    line-height: 1.6;
}

@media (max-width: 900px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    // Obtener datos del formulario
    const formData = new FormData();
    formData.append('action', 'ladatam_contact_form');
    formData.append('nonce', ladatam_ajax.nonce);
    formData.append('nombre', form.querySelector('#nombre').value);
    formData.append('email', form.querySelector('#email').value);
    formData.append('asunto', form.querySelector('#asunto').value);
    formData.append('mensaje', form.querySelector('#mensaje').value);
    
    // Deshabilitar botón y mostrar loading
    submitBtn.disabled = true;
    submitBtn.textContent = 'ENVIANDO...';
    submitBtn.style.opacity = '0.7';
    
    // Enviar via AJAX
    fetch(ladatam_ajax.url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Éxito
            submitBtn.textContent = '✓ ENVIADO';
            submitBtn.style.background = '#22c55e';
            submitBtn.style.borderColor = '#22c55e';
            form.reset();
            
            // Mostrar mensaje de éxito
            showMessage(data.data.message, 'success');
            
            // Restaurar botón después de 3 segundos
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.style.background = '';
                submitBtn.style.borderColor = '';
                submitBtn.style.opacity = '';
                submitBtn.disabled = false;
            }, 3000);
        } else {
            // Error
            showMessage(data.data.message, 'error');
            submitBtn.textContent = originalText;
            submitBtn.style.opacity = '';
            submitBtn.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage('Error de conexión. Por favor, intenta de nuevo.', 'error');
        submitBtn.textContent = originalText;
        submitBtn.style.opacity = '';
        submitBtn.disabled = false;
    });
});

function showMessage(message, type) {
    // Remover mensaje anterior si existe
    const existingMsg = document.querySelector('.form-message');
    if (existingMsg) existingMsg.remove();
    
    // Crear mensaje
    const msgDiv = document.createElement('div');
    msgDiv.className = 'form-message ' + type;
    msgDiv.innerHTML = message;
    msgDiv.style.cssText = `
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-weight: 500;
        animation: fadeIn 0.3s ease;
        ${type === 'success' 
            ? 'background: rgba(34, 197, 94, 0.1); border: 1px solid #22c55e; color: #22c55e;' 
            : 'background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; color: #ef4444;'}
    `;
    
    // Insertar antes del formulario
    const form = document.getElementById('contactForm');
    form.parentNode.insertBefore(msgDiv, form);
    
    // Auto-remover después de 5 segundos
    setTimeout(() => {
        msgDiv.style.opacity = '0';
        msgDiv.style.transition = 'opacity 0.3s ease';
        setTimeout(() => msgDiv.remove(), 300);
    }, 5000);
}
</script>

<?php get_footer(); ?>
