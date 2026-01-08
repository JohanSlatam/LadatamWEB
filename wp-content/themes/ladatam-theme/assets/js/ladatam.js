/**
 * LADATAM Dark Tech - JavaScript Principal
 * 
 * Animaciones y efectos interactivos para el tema LADATAM
 * 
 * @package LADATAM
 * @version 1.0.0
 */

(function($) {
    'use strict';

    // ============================================
    // CONFIGURACIÓN GLOBAL
    // ============================================
    const LADATAM = {
        // Colores del tema
        colors: {
            lima: '#d9ff18',
            amber: '#f8bb03',
            black: '#000000',
            dark: '#0a0a0a'
        },
        
        // Configuración de animaciones
        animations: {
            duration: 300,
            easing: 'ease'
        }
    };

    // ============================================
    // INICIALIZACIÓN
    // ============================================
    $(document).ready(function() {
        initHeader();
        initScrollAnimations();
        initCounters();
        initTypingEffect();
        initParallax();
        initCursorEffect();
        initCodeHighlight();
    });

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    function initHeader() {
        const $header = $('.ladatam-header, header, .elementor-location-header');
        
        if ($header.length === 0) return;
        
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 50) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        });
    }

    // ============================================
    // SCROLL ANIMATIONS (Intersection Observer)
    // ============================================
    function initScrollAnimations() {
        // Elementos a animar
        const animatedElements = document.querySelectorAll(
            '.ladatam-card, .pilar-card, .animate-on-scroll, ' +
            '.elementor-widget-container, .elementor-heading-title'
        );
        
        if (animatedElements.length === 0) return;
        
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    }

    // ============================================
    // COUNTER ANIMATION
    // ============================================
    function initCounters() {
        const counters = document.querySelectorAll('.stat-number, .counter');
        
        if (counters.length === 0) return;
        
        const observerOptions = {
            threshold: 0.5
        };
        
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    }
    
    function animateCounter(element) {
        const text = element.innerText;
        const matches = text.match(/(\d+)/);
        
        if (!matches) return;
        
        const target = parseInt(matches[0]);
        const prefix = text.substring(0, text.indexOf(matches[0]));
        const suffix = text.substring(text.indexOf(matches[0]) + matches[0].length);
        const duration = 2000;
        const increment = target / (duration / 16);
        
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            
            if (current < target) {
                element.innerText = prefix + Math.floor(current) + suffix;
                requestAnimationFrame(updateCounter);
            } else {
                element.innerText = prefix + target + suffix;
            }
        };
        
        updateCounter();
    }

    // ============================================
    // TYPING EFFECT
    // ============================================
    function initTypingEffect() {
        const typingElements = document.querySelectorAll('.typing-effect');
        
        typingElements.forEach(el => {
            const text = el.getAttribute('data-text') || el.innerText;
            const speed = parseInt(el.getAttribute('data-speed')) || 100;
            
            el.innerText = '';
            el.classList.add('typing-cursor');
            
            let i = 0;
            
            function typeWriter() {
                if (i < text.length) {
                    el.innerText += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                } else {
                    // Mantener cursor parpadeando al final
                    setTimeout(() => {
                        el.classList.remove('typing-cursor');
                    }, 2000);
                }
            }
            
            // Iniciar cuando sea visible
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    typeWriter();
                    observer.disconnect();
                }
            });
            
            observer.observe(el);
        });
    }

    // ============================================
    // PARALLAX EFFECT
    // ============================================
    function initParallax() {
        const parallaxElements = document.querySelectorAll('.parallax, .grid-background');
        
        if (parallaxElements.length === 0) return;
        
        $(window).on('scroll', function() {
            const scrolled = $(this).scrollTop();
            
            parallaxElements.forEach(el => {
                const speed = el.getAttribute('data-speed') || 0.5;
                const yPos = -(scrolled * speed);
                el.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    // ============================================
    // CUSTOM CURSOR EFFECT (Opcional)
    // ============================================
    function initCursorEffect() {
        // Solo en desktop
        if (window.innerWidth < 1024) return;
        
        // Verificar si está habilitado
        if (!document.body.classList.contains('custom-cursor-enabled')) return;
        
        const cursor = document.createElement('div');
        cursor.className = 'ladatam-cursor';
        cursor.innerHTML = '<div class="cursor-dot"></div><div class="cursor-ring"></div>';
        document.body.appendChild(cursor);
        
        const dot = cursor.querySelector('.cursor-dot');
        const ring = cursor.querySelector('.cursor-ring');
        
        let mouseX = 0, mouseY = 0;
        let ringX = 0, ringY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            dot.style.left = mouseX + 'px';
            dot.style.top = mouseY + 'px';
        });
        
        // Smooth follow for ring
        function animateRing() {
            ringX += (mouseX - ringX) * 0.1;
            ringY += (mouseY - ringY) * 0.1;
            
            ring.style.left = ringX + 'px';
            ring.style.top = ringY + 'px';
            
            requestAnimationFrame(animateRing);
        }
        
        animateRing();
        
        // Hover effects
        const hoverElements = document.querySelectorAll('a, button, .ladatam-btn, .ladatam-card');
        
        hoverElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                ring.classList.add('hover');
            });
            
            el.addEventListener('mouseleave', () => {
                ring.classList.remove('hover');
            });
        });
    }

    // ============================================
    // CODE HIGHLIGHT (Decorativo)
    // ============================================
    function initCodeHighlight() {
        const codeBlocks = document.querySelectorAll('.code-block');
        
        codeBlocks.forEach(block => {
            let html = block.innerHTML;
            
            // Comentarios
            html = html.replace(/(\/\/.*)/g, '<span class="comment">$1</span>');
            
            // Keywords
            const keywords = ['const', 'let', 'var', 'function', 'return', 'if', 'else', 'for', 'while', 'class', 'import', 'export', 'from', 'async', 'await'];
            keywords.forEach(keyword => {
                const regex = new RegExp('\\b(' + keyword + ')\\b', 'g');
                html = html.replace(regex, '<span class="keyword">$1</span>');
            });
            
            // Strings
            html = html.replace(/(['"`])(.*?)\1/g, '<span class="string">$1$2$1</span>');
            
            block.innerHTML = html;
        });
    }

    // ============================================
    // SMOOTH SCROLL
    // ============================================
    $(document).on('click', 'a[href^="#"]', function(e) {
        const target = $(this.getAttribute('href'));
        
        if (target.length) {
            e.preventDefault();
            
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800, 'swing');
        }
    });

    // ============================================
    // MOBILE MENU TOGGLE
    // ============================================
    $(document).on('click', '.mobile-menu-toggle', function() {
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
        $('body').toggleClass('menu-open');
    });

    // ============================================
    // PARTICLES EFFECT (Simple)
    // ============================================
    function createParticles(container, count = 50) {
        const particlesContainer = document.querySelector(container);
        
        if (!particlesContainer) return;
        
        for (let i = 0; i < count; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            // Random position
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            
            // Random animation
            particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
            particle.style.animationDelay = Math.random() * 2 + 's';
            
            particlesContainer.appendChild(particle);
        }
    }

    // Exponer función globalmente
    window.LADATAM = {
        ...LADATAM,
        createParticles: createParticles
    };

    // ============================================
    // PRELOADER (Opcional)
    // ============================================
    $(window).on('load', function() {
        const $preloader = $('.ladatam-preloader');
        
        if ($preloader.length) {
            $preloader.fadeOut(500, function() {
                $(this).remove();
            });
        }
        
        // Trigger animations after load
        $('body').addClass('loaded');
    });

})(jQuery);
