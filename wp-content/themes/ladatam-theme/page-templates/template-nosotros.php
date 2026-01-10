<?php
/**
 * Template Name: LADATAM - Nosotros
 * Description: Página sobre nosotros con misión, visión y valores
 */

get_header();
?>

<!-- HERO -->
<section class="ladatam-hero page-hero">
    <div class="grid-background"></div>
    <div class="hero-content">
        <h1 class="hero-title">
            Sobre <span class="text-gradient-animated">LADATAM</span>
        </h1>
        <p class="hero-subtitle">
            Democratizando la inteligencia artificial y los datos<br>
            para profesionales y empresas de Latinoamérica.
        </p>
    </div>
</section>

<!-- MISIÓN -->
<section class="ladatam-section">
    <div class="container">
        <div class="mission-block">
            <div class="mission-icon">🎯</div>
            <h2>Misión</h2>
            <p class="mission-text">
                Democratizar el acceso al conocimiento en analítica de datos e inteligencia artificial 
                para impulsar el desarrollo profesional y empresarial en Latinoamérica.
            </p>
        </div>
    </div>
</section>

<!-- VISIÓN -->
<section class="ladatam-section section-dark">
    <div class="container">
        <div class="mission-block">
            <div class="mission-icon">🔭</div>
            <h2>Visión</h2>
            <p class="mission-text">
                Convertir a LADATAM en el ecosistema de referencia en educación y aplicación práctica 
                de IA y datos en la región.
            </p>
        </div>
    </div>
</section>

<!-- VALORES -->
<section class="ladatam-section">
    <div class="container">
        <h2 class="section-title">💎 Nuestros Valores</h2>
        
        <div class="values-grid">
            <div class="value-card ladatam-card">
                <div class="value-icon">✨</div>
                <h3>Accesibilidad</h3>
                <p>Tecnología y conocimiento para todos, sin barreras técnicas ni económicas</p>
            </div>
            <div class="value-card ladatam-card">
                <div class="value-icon">🎯</div>
                <h3>Impacto real</h3>
                <p>Todo lo que enseñamos está diseñado para aplicarse inmediatamente</p>
            </div>
            <div class="value-card ladatam-card">
                <div class="value-icon">🧩</div>
                <h3>Simplicidad</h3>
                <p>Hacemos lo complejo simple, sin perder profundidad</p>
            </div>
            <div class="value-card ladatam-card">
                <div class="value-icon">⚖️</div>
                <h3>Ética tecnológica</h3>
                <p>Promovemos el uso responsable y consciente de la tecnología</p>
            </div>
            <div class="value-card ladatam-card">
                <div class="value-icon">🤝</div>
                <h3>Comunidad y colaboración</h3>
                <p>Crecemos juntos, compartiendo conocimiento y experiencias</p>
            </div>
        </div>
    </div>
</section>

<!-- POR QUÉ EXISTIMOS -->
<section class="ladatam-section section-dark">
    <div class="container">
        <h2 class="section-title">¿Por qué existe LADATAM?</h2>
        
        <div class="story-content">
            <p>
                La inteligencia artificial y la analítica de datos están transformando el mundo. 
                Pero en Latinoamérica, el acceso a este conocimiento sigue siendo limitado.
            </p>
            <p>
                La mayoría del contenido es en inglés, demasiado técnico, o está diseñado para 
                grandes empresas con equipos especializados.
            </p>
            <p class="highlight">
                <strong class="text-lima">LADATAM nace para cambiar eso.</strong>
            </p>
            <p>
                Creemos que cada profesional, emprendedor y PYME de la región merece acceder a 
                herramientas y conocimientos que les permitan competir en igualdad de condiciones.
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ladatam-section section-cta-final">
    <div class="container text-center">
        <h2>Sé parte del cambio</h2>
        <p>Únete a la comunidad que está transformando Latinoamérica con datos e IA.</p>
        <div class="cta-buttons">
            <a href="/registro" class="ladatam-btn ladatam-btn-dark">Empieza gratis</a>
            <a href="/contacto" class="ladatam-btn ladatam-btn-dark-outline">Contáctanos</a>
        </div>
    </div>
</section>

<style>
.page-hero {
    min-height: 50vh;
    padding-top: 140px;
}

.mission-block {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.mission-icon {
    font-size: 4rem;
    margin-bottom: 20px;
}

.mission-block h2 {
    font-size: 2.5rem;
    margin-bottom: 25px;
    color: #d9ff18;
}

.mission-text {
    font-size: 1.4rem;
    line-height: 1.8;
    color: #e8e8e8;
}

.section-dark {
    background: #0a0a0a;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 50px;
}

.value-card {
    padding: 40px 30px;
    text-align: center;
}

.value-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.value-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #d9ff18;
}

.value-card p {
    color: #e0e0e0;
    font-size: 0.95rem;
}

.story-content {
    max-width: 800px;
    margin: 40px auto 0;
    text-align: center;
}

.story-content p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #e8e8e8;
    margin-bottom: 25px;
}

.story-content .highlight {
    font-size: 1.5rem;
    margin: 40px 0;
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

.ladatam-btn-dark-outline {
    background: transparent;
    color: #000000;
    border: 2px solid #000000;
}

.ladatam-btn-dark-outline:hover {
    background: #000000;
    color: #d9ff18;
}
</style>

<?php get_footer(); ?>
