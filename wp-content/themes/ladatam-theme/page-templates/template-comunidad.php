<?php
/**
 * Template Name: LADATAM - Comunidad
 * Description: Página de comunidad
 */

get_header();
?>

<!-- HERO -->
<section class="ladatam-hero page-hero">
    <div class="grid-background"></div>
    <div class="hero-content">
        <span class="ladatam-badge">🌎 COMUNIDAD</span>
        <h1 class="hero-title">
            <span class="tech-bracket">{</span> No aprendas solo <span class="tech-bracket">}</span>
        </h1>
        <p class="hero-subtitle">
            LADATAM es una comunidad latinoamericana de personas que están<br>
            aprendiendo y aplicando IA y datos en contextos reales.
        </p>
    </div>
</section>

<!-- BENEFICIOS -->
<section class="ladatam-section">
    <div class="container">
        <h2 class="section-title">🤝 En la comunidad encontrarás</h2>
        
        <div class="community-grid">
            <div class="community-card ladatam-card">
                <div class="community-icon">💬</div>
                <h3>Espacios de preguntas y discusión</h3>
                <p>Resuelve tus dudas con la ayuda de otros miembros y expertos</p>
            </div>
            <div class="community-card ladatam-card">
                <div class="community-icon">📂</div>
                <h3>Casos reales compartidos</h3>
                <p>Aprende de las experiencias de otros profesionales</p>
            </div>
            <div class="community-card ladatam-card">
                <div class="community-icon">🎥</div>
                <h3>Sesiones en vivo con expertos</h3>
                <p>Webinars exclusivos y Q&A con especialistas</p>
            </div>
            <div class="community-card ladatam-card">
                <div class="community-icon">🔗</div>
                <h3>Networking profesional</h3>
                <p>Conecta con profesionales de toda Latinoamérica</p>
            </div>
            <div class="community-card ladatam-card">
                <div class="community-icon">🧠</div>
                <h3>Aprendizaje colaborativo</h3>
                <p>Grupos de estudio y proyectos en equipo</p>
            </div>
        </div>
        
        <p class="section-tagline">
            <span class="text-lima">👉 Porque aprender acompañado acelera resultados.</span>
        </p>
    </div>
</section>

<!-- TESTIMONIOS -->
<section class="ladatam-section section-dark">
    <div class="container">
        <h2 class="section-title">Lo que dicen nuestros miembros</h2>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-quote">"Por fin entendí cómo usar ChatGPT para mi negocio. Los casos prácticos de la comunidad fueron clave."</p>
                <div class="testimonial-author">
                    <strong>María González</strong>
                    <span>Emprendedora, México</span>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-quote">"Automaticé el 40% de mis tareas administrativas gracias a lo que aprendí aquí. Y sin programar una línea."</p>
                <div class="testimonial-author">
                    <strong>Carlos Mendoza</strong>
                    <span>Gerente de Operaciones, Colombia</span>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-quote">"La comunidad es increíble. Siempre hay alguien dispuesto a ayudar y compartir experiencias."</p>
                <div class="testimonial-author">
                    <strong>Ana Lucía Vargas</strong>
                    <span>Consultora, Perú</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ladatam-section section-cta-final">
    <div class="container text-center">
        <h2>Únete a la comunidad</h2>
        <p>Forma parte de la red de profesionales que está transformando LATAM con datos e IA.</p>
        <div class="cta-buttons">
            <a href="/registro" class="ladatam-btn ladatam-btn-dark">Únete gratis</a>
        </div>
    </div>
</section>

<style>
.page-hero {
    min-height: 60vh;
    padding-top: 140px;
}

.community-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 50px;
}

.community-card {
    padding: 40px 30px;
    text-align: center;
}

.community-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.community-card h3 {
    font-size: 1.15rem;
    margin-bottom: 10px;
    color: #ffffff;
}

.community-card p {
    color: #888888;
    font-size: 0.95rem;
}

.section-tagline {
    text-align: center;
    font-size: 1.3rem;
    font-weight: 700;
    margin-top: 50px;
}

.section-dark {
    background: #0a0a0a;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.testimonial-card {
    background: #1a1a1a;
    border-left: 4px solid #d9ff18;
    padding: 30px;
    border-radius: 0 12px 12px 0;
}

.testimonial-quote {
    font-size: 1.1rem;
    font-style: italic;
    color: #ffffff;
    margin-bottom: 20px;
    position: relative;
}

.testimonial-quote::before {
    content: '"';
    font-size: 3rem;
    color: #d9ff18;
    position: absolute;
    top: -10px;
    left: -5px;
    opacity: 0.5;
}

.testimonial-author strong {
    display: block;
    color: #d9ff18;
    margin-bottom: 5px;
}

.testimonial-author span {
    font-size: 0.85rem;
    color: #888888;
}

.text-center {
    text-align: center;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}
</style>

<?php get_footer(); ?>
