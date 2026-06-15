<?php
// Sistema de multiidioma para archivos PHP del desarrollo
// Almacena el idioma en sesión y cookie

session_start();

// Obtener idioma de parámetro GET, sesión o cookie, default ES
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    setcookie('daptux_lang', $_GET['lang'], time() + 31536000, '/'); // 1 año
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = isset($_COOKIE['daptux_lang']) ? $_COOKIE['daptux_lang'] : 'es';
}

$currentLang = $_SESSION['lang'];

// Traducciones en línea (alternativa a JSON)
$translations = [
    'es' => [
        'skip_link' => 'Saltar al contenido',
        'open_menu' => 'Abrir menú',
        'close_menu' => 'Cerrar menú',
        'open_submenu' => 'Abrir submenú',
        'servicios' => 'Servicios',
        'proceso' => 'Proceso',
        'confianza' => 'Confianza',
        'apps' => 'Apps',
        'contacto' => 'Contacto',
        'app_pagos' => 'App pagos',
        'area_clientes' => 'Área clientes',
        'hero_eyebrow' => 'Software IA first para empresas',
        'hero_title' => 'Daptux.ai',
        'hero_lead' => 'Creamos software a la medida con inteligencia artificial para automatizar procesos, integrar sistemas y convertir ideas en soluciones reales.',
        'hero_cta1' => 'Cuéntanos tu proyecto',
        'hero_cta2' => 'Ver servicios',
        'signal1_title' => 'IA + criterio humano',
        'signal1_desc' => 'Velocidad sin perder control.',
        'signal2_title' => 'Prototipos rápidos',
        'signal2_desc' => 'Validas antes de invertir de más.',
        'signal3_title' => 'Mejora continua',
        'signal3_desc' => 'Software que evoluciona contigo.',
        'intro_eyebrow' => 'Qué resolvemos',
        'intro_title' => 'Procesos que hoy viven entre Excel, WhatsApp y sistemas desconectados.',
        'intro_copy' => 'Daptux ayuda a empresas a ordenar información, automatizar tareas repetitivas, conectar herramientas y construir software propio cuando una solución genérica ya no alcanza.',
        'services_eyebrow' => 'Servicios',
        'services_title' => 'Soluciones a medida para operar mejor',
        'service1_title' => 'Software a la medida',
        'service1_desc' => 'Aplicaciones web, portales internos y herramientas operativas diseñadas alrededor de tu proceso real.',
        'service2_title' => 'Automatización de procesos',
        'service2_desc' => 'Flujos que reducen trabajo manual, errores, reprocesos y dependencia de personas clave.',
        'service3_title' => 'Integración de sistemas',
        'service3_desc' => 'Conectamos ERP, CRM, hojas de cálculo, formularios, bases de datos y herramientas existentes.',
        'service4_title' => 'Dashboards y datos',
        'service4_desc' => 'Indicadores claros para tomar decisiones sin depender de reportes manuales o información dispersa.',
        'service5_title' => 'IA aplicada al negocio',
        'service5_desc' => 'Asistentes, análisis, clasificación, generación de documentos y soporte operativo con revisión humana.',
        'service6_title' => 'Consultoría digital',
        'service6_desc' => 'Asesoramiento en transformación digital, roadmaps técnicos y decisiones de arquitectura.',
        'portfolio_eyebrow' => 'Apps desarrolladas',
        'portfolio_title' => 'Apps desarrolladas por Daptux.',
        'portfolio_lead' => 'Software real para procesos empresariales: soluciones creadas para ordenar operaciones, centralizar información y mejorar flujos de trabajo.',
        'portfolio_cta1' => 'Ver FlowPay',
        'portfolio_cta2' => 'Crear una app',
    ],
    'en' => [
        'skip_link' => 'Skip to content',
        'open_menu' => 'Open menu',
        'close_menu' => 'Close menu',
        'open_submenu' => 'Open submenu',
        'servicios' => 'Services',
        'proceso' => 'Process',
        'confianza' => 'Trust',
        'apps' => 'Apps',
        'contacto' => 'Contact',
        'app_pagos' => 'Payments App',
        'area_clientes' => 'Client Area',
        'hero_eyebrow' => 'AI-first software for enterprises',
        'hero_title' => 'Daptux.ai',
        'hero_lead' => 'We create custom software with artificial intelligence to automate processes, integrate systems and turn ideas into real solutions.',
        'hero_cta1' => 'Tell us your project',
        'hero_cta2' => 'View services',
        'signal1_title' => 'AI + human judgment',
        'signal1_desc' => 'Speed without losing control.',
        'signal2_title' => 'Quick prototypes',
        'signal2_desc' => 'Validate before investing more.',
        'signal3_title' => 'Continuous improvement',
        'signal3_desc' => 'Software that evolves with you.',
        'intro_eyebrow' => 'What we solve',
        'intro_title' => 'Processes that today live between Excel, WhatsApp and disconnected systems.',
        'intro_copy' => 'Daptux helps companies organize information, automate repetitive tasks, connect tools and build custom software when a generic solution is no longer enough.',
        'services_eyebrow' => 'Services',
        'services_title' => 'Custom solutions to operate better',
        'service1_title' => 'Custom software',
        'service1_desc' => 'Web applications, internal portals and operational tools designed around your real process.',
        'service2_title' => 'Process automation',
        'service2_desc' => 'Workflows that reduce manual work, errors, rework and dependence on key people.',
        'service3_title' => 'Systems integration',
        'service3_desc' => 'We connect ERP, CRM, spreadsheets, forms, databases and existing tools.',
        'service4_title' => 'Dashboards and data',
        'service4_desc' => 'Clear indicators to make decisions without relying on manual reports or scattered information.',
        'service5_title' => 'Business AI',
        'service5_desc' => 'Assistants, analytics, classification, document generation and operational support with human review.',
        'service6_title' => 'Digital consulting',
        'service6_desc' => 'Advice on digital transformation, technical roadmaps and architecture decisions.',
        'portfolio_eyebrow' => 'Developed apps',
        'portfolio_title' => 'Apps developed by Daptux.',
        'portfolio_lead' => 'Real software for business processes: solutions created to organize operations, centralize information and improve workflows.',
        'portfolio_cta1' => 'View FlowPay',
        'portfolio_cta2' => 'Create an app',
    ]
];

// Función auxiliar para traducir
function t($key) {
    global $currentLang, $translations;
    return $translations[$currentLang][$key] ?? $key;
}

// Generar URL con cambio de idioma
function lang_url($lang) {
    $url = $_SERVER['PHP_SELF'];
    $query = $_SERVER['QUERY_STRING'];
    
    // Agregar o actualizar parámetro lang
    if (strpos($query, 'lang=') !== false) {
        $query = preg_replace('/lang=(es|en)/', 'lang=' . $lang, $query);
    } else {
        $query = ($query ? $query . '&' : '') . 'lang=' . $lang;
    }
    
    return $url . ($query ? '?' . $query : '');
}
?>
