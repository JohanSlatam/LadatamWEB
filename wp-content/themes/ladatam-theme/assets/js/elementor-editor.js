/**
 * LADATAM - Elementor Editor Scripts
 * Scripts para mejorar la experiencia en el editor de Elementor
 */

(function($) {
    'use strict';
    
    // Esperar a que Elementor cargue
    $(window).on('elementor:init', function() {
        console.log('🚀 LADATAM Theme cargado en Elementor Editor');
        
        // Agregar tooltip con clases disponibles
        elementor.hooks.addAction('panel/open_editor/section', function(panel, model, view) {
            // Información sobre clases LADATAM disponibles
        });
    });
    
})(jQuery);
