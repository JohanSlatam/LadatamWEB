<?php
/**
 * Template Name: LADATAM - Software
 * Description: Página de herramientas SaaS
 */

get_header();
?>

<!-- HERO -->
<section class="ladatam-hero page-hero">
    <div class="grid-background"></div>
    <div class="hero-content">
        <span class="ladatam-badge ladatam-badge-amber">🧩 SOFTWARE</span>
        <h1 class="hero-title">
            <span class="text-amber">&lt;</span> Herramientas simples <span class="text-amber">/&gt;</span>
            <br>para aplicar IA sin programar
        </h1>
        <p class="hero-subtitle">
            LADATAM desarrolla productos de software propios para ayudarte<br>
            a implementar lo aprendido, sin complejidad técnica.
        </p>
    </div>
</section>

<!-- HERRAMIENTAS -->
<section class="ladatam-section">
    <div class="container">
        <h2 class="section-title">🔧 ¿Qué tipo de herramientas ofrecemos?</h2>
        
        <div class="tools-grid">
            <div class="tool-card ladatam-card">
                <div class="tool-icon">📊</div>
                <h3>Dashboards automáticos</h3>
                <p>Visualiza el estado de tu negocio en tiempo real, sin Excel complicado</p>
            </div>
            <div class="tool-card ladatam-card">
                <div class="tool-icon">👤</div>
                <h3>Análisis de clientes</h3>
                <p>Entiende a tus clientes con inteligencia artificial</p>
            </div>
            <div class="tool-card ladatam-card">
                <div class="tool-icon">🎯</div>
                <h3>Segmentación y predicción</h3>
                <p>Predice comportamientos y segmenta automáticamente</p>
            </div>
            <div class="tool-card ladatam-card">
                <div class="tool-icon">🤖</div>
                <h3>Chatbots simples</h3>
                <p>Automatiza la atención al cliente sin código</p>
            </div>
            <div class="tool-card ladatam-card">
                <div class="tool-icon">📝</div>
                <h3>Análisis de textos</h3>
                <p>Procesa encuestas, reseñas y comentarios con IA</p>
            </div>
        </div>
    </div>
</section>

<!-- PROCESO -->
<section class="ladatam-section section-dark">
    <div class="container">
        <h2 class="section-title">Así de simple</h2>
        
        <div class="process-flow">
            <div class="process-step">
                <div class="process-number">1</div>
                <h3>Sube tus datos</h3>
                <p>Excel, CSV o conecta tu herramienta</p>
            </div>
            <div class="process-arrow">→</div>
            <div class="process-step">
                <div class="process-number">2</div>
                <h3>Obtén insights</h3>
                <p>La IA procesa y analiza</p>
            </div>
            <div class="process-arrow">→</div>
            <div class="process-step">
                <div class="process-number">3</div>
                <h3>Toma decisiones</h3>
                <p>Resultados claros y accionables</p>
            </div>
        </div>
        
        <p class="process-note text-gray">
            Planes accesibles para profesionales y PYMEs.
        </p>
    </div>
</section>

<!-- DIFERENCIADOR -->
<section class="ladatam-section">
    <div class="container">
        <div class="differentiator-box">
            <p class="differentiator-text">
                <span class="text-lima">👉</span> La educación te enseña el <strong>"qué"</strong> y el <strong>"por qué"</strong>.
                <br>
                El software te da el <strong class="text-gradient">"cómo"</strong>.
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ladatam-section section-cta-final">
    <div class="container text-center">
        <h2>Próximamente</h2>
        <p>Estamos preparando nuestras herramientas. Déjanos tu email para ser el primero en probarlas.</p>
        <div class="cta-buttons">
            <a href="/contacto" class="ladatam-btn ladatam-btn-dark">Quiero acceso anticipado</a>
        </div>
    </div>
</section>

<style>
.page-hero {
    min-height: 60vh;
    padding-top: 140px;
}

.tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    margin-top: 50px;
}

.tool-card {
    padding: 40px 30px;
    text-align: center;
}

.tool-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.tool-card h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #ffffff;
}

.tool-card p {
    color: #e0e0e0;
    font-size: 0.95rem;
}

.section-dark {
    background: #0a0a0a;
}

.process-flow {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 50px;
}

.process-step {
    text-align: center;
    padding: 30px;
    background: #1a1a1a;
    border-radius: 12px;
    min-width: 200px;
}

.process-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #d9ff18 0%, #f8bb03 100%);
    color: #000000;
    font-size: 1.8rem;
    font-weight: 800;
    border-radius: 50%;
    margin-bottom: 20px;
}

.process-step h3 {
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.process-step p {
    font-size: 0.9rem;
    color: #e0e0e0;
}

.process-arrow {
    font-size: 2.5rem;
    color: #d9ff18;
}

.process-note {
    text-align: center;
    font-size: 1.1rem;
    margin-top: 40px;
}

.differentiator-box {
    max-width: 700px;
    margin: 0 auto;
    padding: 50px;
    background: #1a1a1a;
    border: 2px solid #d9ff18;
    border-radius: 16px;
    text-align: center;
}

.differentiator-text {
    font-size: 1.4rem;
    line-height: 1.8;
    color: #ffffff;
}

.text-amber {
    color: #f8bb03;
}

@media (max-width: 768px) {
    .process-arrow {
        display: none;
    }
    
    .process-flow {
        flex-direction: column;
    }
    
    .process-step {
        width: 100%;
        max-width: 300px;
    }
}
</style>

<?php get_footer(); ?>
