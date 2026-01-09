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
            <span class="tech-bracket">{</span> Contacto <span class="tech-bracket">}</span>
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
                        <a href="mailto:hola@ladatam.com">hola@ladatam.com</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div>
                        <h3>Redes Sociales</h3>
                        <div class="social-links">
                            <a href="#" target="_blank">LinkedIn</a>
                            <a href="#" target="_blank">Twitter</a>
                            <a href="#" target="_blank">Instagram</a>
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
    color: #cccccc;
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
    color: #b0b0b0;
    font-size: 0.95rem;
    margin: 0;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-links a {
    color: #b0b0b0;
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
    color: #b0b0b0;
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
    // Aquí puedes agregar la lógica de envío del formulario
    alert('¡Gracias por tu mensaje! Te responderemos pronto.');
    this.reset();
});
</script>

<?php get_footer(); ?>
