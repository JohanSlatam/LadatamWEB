<?php
/**
 * Template Name: LADATAM - Aprender
 * Description: Página de educación y cursos
 */

get_header();
?>

<!-- HERO -->
<section class="ladatam-hero page-hero">
    <div class="grid-background"></div>
    <div class="hero-content">
        <span class="ladatam-badge">🎓 EDUCACIÓN</span>
        <h1 class="hero-title">
            <span class="tech-bracket">{</span> Aprende IA y datos <span class="tech-bracket">}</span>
            <br>aplicados a la vida real
        </h1>
        <p class="hero-subtitle">
            Nuestros programas están diseñados para personas no técnicas<br>
            que quieren aplicar tecnología en su trabajo o negocio.
        </p>
    </div>
</section>

<!-- CONTENIDOS -->
<section class="ladatam-section">
    <div class="container">
        <h2 class="section-title">📚 Contenidos principales</h2>
        
        <div class="content-list">
            <div class="content-item ladatam-card">
                <span class="check-icon">✅</span>
                <div>
                    <h3>Inteligencia Artificial aplicada a los negocios</h3>
                    <p>Aprende a usar ChatGPT, Claude y otras herramientas en tu día a día</p>
                </div>
            </div>
            <div class="content-item ladatam-card">
                <span class="check-icon">✅</span>
                <div>
                    <h3>Automatización de procesos con IA</h3>
                    <p>Elimina tareas repetitivas y ahorra tiempo valioso</p>
                </div>
            </div>
            <div class="content-item ladatam-card">
                <span class="check-icon">✅</span>
                <div>
                    <h3>Analítica de datos para la toma de decisiones</h3>
                    <p>Transforma datos en insights accionables</p>
                </div>
            </div>
            <div class="content-item ladatam-card">
                <span class="check-icon">✅</span>
                <div>
                    <h3>Cultura de datos y transformación digital</h3>
                    <p>Implementa una mentalidad data-driven en tu organización</p>
                </div>
            </div>
            <div class="content-item ladatam-card">
                <span class="check-icon">✅</span>
                <div>
                    <h3>IA para marketing, ventas y operaciones</h3>
                    <p>Casos prácticos por área de negocio</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FORMATOS -->
<section class="ladatam-section section-dark">
    <div class="container">
        <h2 class="section-title">🎯 Formatos disponibles</h2>
        
        <div class="formats-grid">
            <div class="format-card ladatam-card-glow">
                <div class="format-icon">📹</div>
                <h3>Cursos cortos</h3>
                <p>Prácticos y al grano, aprende en tu tiempo</p>
            </div>
            <div class="format-card ladatam-card-glow">
                <div class="format-icon">📖</div>
                <h3>Ebooks y guías</h3>
                <p>Material descargable para consultar siempre</p>
            </div>
            <div class="format-card ladatam-card-glow">
                <div class="format-icon">🎤</div>
                <h3>Workshops en vivo</h3>
                <p>Sesiones interactivas con expertos</p>
            </div>
            <div class="format-card ladatam-card-glow">
                <div class="format-icon">👥</div>
                <h3>Mentorías grupales</h3>
                <p>Acompañamiento personalizado</p>
            </div>
        </div>
        
        <p class="section-tagline">
            <span class="text-lima">👉 Aprendes hoy, lo aplicas mañana.</span>
        </p>
    </div>
</section>

<!-- CTA -->
<section class="ladatam-section section-cta">
    <div class="container text-center">
        <h2>¿Listo para empezar?</h2>
        <p class="text-gray">Explora nuestro catálogo de cursos y elige el que mejor se adapte a ti.</p>
        <div class="cta-buttons">
            <a href="/registro" class="ladatam-btn ladatam-btn-primary">Ver todos los cursos</a>
            <a href="/contacto" class="ladatam-btn ladatam-btn-secondary">Hablar con un asesor</a>
        </div>
    </div>
</section>

<style>
.page-hero {
    min-height: 60vh;
    padding-top: 140px;
}

.content-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 800px;
    margin: 40px auto 0;
}

.content-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px 30px;
}

.check-icon {
    font-size: 1.5rem;
    flex-shrink: 0;
}

.content-item h3 {
    font-size: 1.1rem;
    margin-bottom: 5px;
    color: #ffffff;
}

.content-item p {
    font-size: 0.95rem;
    color: #e0e0e0;
    margin: 0;
}

.section-dark {
    background: #0a0a0a;
}

.formats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
    margin-top: 40px;
}

.format-card {
    text-align: center;
    padding: 40px 25px;
    background: #1a1a1a;
    border-radius: 16px;
}

.format-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.format-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.format-card p {
    color: #e0e0e0;
    font-size: 0.95rem;
}

.section-tagline {
    text-align: center;
    font-size: 1.3rem;
    font-weight: 700;
    margin-top: 50px;
}

.section-cta {
    background: linear-gradient(180deg, #000000 0%, #0a0a0a 100%);
    text-align: center;
    padding: 80px 20px;
}

.section-cta h2 {
    margin-bottom: 15px;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}

.text-center {
    text-align: center;
}
</style>

<?php get_footer(); ?>
