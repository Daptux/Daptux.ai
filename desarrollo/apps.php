<?php
require_once 'lang.php';
$brand = 'Daptux.ai';
?>
<!doctype html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $currentLang === 'es' ? 'Apps desarrolladas | Daptux.ai' : 'Apps developed | Daptux.ai'; ?></title>
  <meta name="description" content="<?php echo $currentLang === 'es' ? 'Apps y productos desarrollados por Daptux.ai para automatizar procesos empresariales, pagos, portales internos y experiencias digitales.' : 'Apps and products developed by Daptux.ai to automate business processes, payments, internal portals and digital experiences.'; ?>">
  <meta name="theme-color" content="#071A3D">
  <link rel="icon" href="assets/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="portfolio-page">
  <a class="skip-link" href="#contenido"><?php echo t('skip_link'); ?></a>

  <header class="site-header" data-header>
    <a class="brand" href="index.php#inicio" aria-label="Daptux.ai inicio">
      <img src="assets/img/daptux-mark.jpg" alt="" class="brand__mark">
      <span class="brand__text">Daptux<span>.ai</span></span>
    </a>
    <button class="menu-button" type="button" aria-label="<?php echo t('open_menu'); ?>" aria-expanded="false" data-menu-button>
      <span></span><span></span><span></span>
    </button>
    <nav class="nav" data-nav>
      <a href="index.php#servicios"><?php echo t('servicios'); ?></a>
      <a href="index.php#proceso"><?php echo t('proceso'); ?></a>
      <a href="index.php#confianza"><?php echo t('confianza'); ?></a>
      <a class="nav__active" href="apps.php"><?php echo t('apps'); ?></a>
      <a href="index.php#contacto"><?php echo t('contacto'); ?></a>
      <a href="pagos/"><?php echo t('app_pagos'); ?></a>
      <a class="nav__portal" href="login.php"><?php echo t('area_clientes'); ?></a>
      <div class="lang-switcher" style="margin-left: 20px; border-left: 1px solid rgba(255,255,255,0.2); padding-left: 20px;">
        <a href="<?php echo lang_url('es'); ?>" class="lang-btn<?php echo $currentLang === 'es' ? ' active' : ''; ?>" style="margin-right: 10px; color: <?php echo $currentLang === 'es' ? '#1F5EFF' : 'inherit'; ?>; text-decoration: none; font-weight: <?php echo $currentLang === 'es' ? 'bold' : 'normal'; ?>;">ES</a>
        <a href="<?php echo lang_url('en'); ?>" class="lang-btn<?php echo $currentLang === 'en' ? ' active' : ''; ?>" style="color: <?php echo $currentLang === 'en' ? '#1F5EFF' : 'inherit'; ?>; text-decoration: none; font-weight: <?php echo $currentLang === 'en' ? 'bold' : 'normal'; ?>;">EN</a>
      </div>
    </nav>
  </header>

  <main id="contenido">
    <section class="portfolio-hero">
      <div class="section__inner portfolio-hero__inner">
        <div class="portfolio-hero__copy">
          <p class="eyebrow"><?php echo t('portfolio_eyebrow'); ?></p>
          <h1><?php echo t('portfolio_title'); ?></h1>
          <p class="portfolio-hero__lead"><?php echo t('portfolio_lead'); ?></p>
          <div class="portfolio-hero__actions">
            <a class="button button--primary" href="https://daptux.com/pagos/" target="_blank" rel="noopener"><?php echo t('portfolio_cta1'); ?></a>
            <a class="button button--ghost" href="index.php#contacto"><?php echo t('portfolio_cta2'); ?></a>
          </div>
        </div>
        <a class="portfolio-hero__preview" href="https://daptux.com/pagos/" target="_blank" rel="noopener" aria-label="Abrir Daptux FlowPay">
          <span class="browser-bar"><i></i><i></i><i></i></span>
          <div class="flowpay-mock" aria-hidden="true">
            <div class="flowpay-mock__top">
              <span>Daptux FlowPay</span>
              <strong>Corte activo</strong>
            </div>
            <div class="flowpay-mock__stats">
              <span><strong>18</strong> solicitudes</span>
              <span><strong>$42.8M</strong> seleccionado</span>
              <span><strong>6</strong> por revisar</span>
            </div>
            <div class="flowpay-mock__table">
              <div><span>DP-00021</span><strong>Banco pendiente</strong><em class="status status--blue">Seleccionado</em></div>
              <div><span>DP-00022</span><strong>RUT validado</strong><em class="status status--green">Listo</em></div>
            </div>
          </div>
        </a>
      </div>
    </section>

    <section class="portfolio-strip" aria-label="Resumen de proyectos">
      <div class="section__inner portfolio-strip__inner">
        <div><strong>3</strong><span>apps publicadas</span></div>
        <div><strong>100%</strong><span>orientadas a procesos reales</span></div>
        <div><strong>IA first</strong><span>diseño, desarrollo y mejora continua</span></div>
      </div>
    </section>

    <section class="section portfolio-section">
      <div class="section__inner">
        <div class="section-heading">
          <p class="eyebrow eyebrow--dark">Producto destacado</p>
          <h2>Daptux FlowPay</h2>
          <p class="portfolio-heading-copy">Aplicacion para recibir, consultar, priorizar y archivar solicitudes de pago empresariales con documentos, proyectos, estados personalizados y paquetes por corte.</p>
        </div>

        <article class="portfolio-feature">
          <a class="portfolio-feature__media" href="https://daptux.com/pagos/" target="_blank" rel="noopener" aria-label="Abrir Daptux FlowPay">
            <span class="browser-bar"><i></i><i></i><i></i></span>
            <img src="assets/img/apps/daptux-flowpay.jpg" alt="Daptux FlowPay">
          </a>
          <div class="portfolio-feature__content">
            <span class="portfolio-tag">Producto propio</span>
            <h3>Gestion de pagos y solicitudes documentales</h3>
            <p>FlowPay ayuda a centralizar radicados, soportes, estados, proyectos, cortes de pago y paquetes descargables para contabilidad.</p>
            <ul class="portfolio-points">
              <li>Formulario publico para recibir solicitudes.</li>
              <li>Area de clientes con seguimiento y organizacion interna.</li>
              <li>Descarga de paquetes ZIP por radicado o por corte de pago.</li>
            </ul>
            <div class="portfolio-actions">
              <a class="button button--primary" href="https://daptux.com/pagos/" target="_blank" rel="noopener">Abrir proyecto</a>
              <a class="portfolio-link" href="index.php#contacto">Quiero algo similar</a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="section portfolio-section portfolio-section--soft">
      <div class="section__inner">
        <div class="section-heading">
          <p class="eyebrow eyebrow--dark">Mas proyectos</p>
          <h2>Portales y aplicaciones web listas para uso empresarial.</h2>
        </div>

        <div class="portfolio-grid">
          <article class="portfolio-card">
            <a class="portfolio-card__media" href="https://brmc-account-service.onrender.com/login" target="_blank" rel="noopener" aria-label="Abrir BRMC">
              <span class="browser-bar"><i></i><i></i><i></i></span>
              <img src="assets/img/apps/brmc.jpg" alt="BRMC">
            </a>
            <div class="portfolio-card__body">
              <span class="portfolio-tag">Portal empresarial</span>
              <h3>BRMC</h3>
              <p>Portal de acceso seguro para gestion operativa, consulta de informacion y flujos internos de cuenta.</p>
              <div class="portfolio-card__meta">
                <span>Login seguro</span>
                <span>Gestion interna</span>
                <span>Web app</span>
              </div>
              <a class="portfolio-link" href="https://brmc-account-service.onrender.com/login" target="_blank" rel="noopener">Ver proyecto</a>
            </div>
          </article>

          <article class="portfolio-card">
            <a class="portfolio-card__media" href="https://kaivor.vercel.app/auth/login" target="_blank" rel="noopener" aria-label="Abrir Kaivor">
              <span class="browser-bar"><i></i><i></i><i></i></span>
              <img src="assets/img/apps/kaivor.jpg" alt="Kaivor">
            </a>
            <div class="portfolio-card__body">
              <span class="portfolio-tag">Producto digital</span>
              <h3>Kaivor</h3>
              <p>Aplicacion web moderna con autenticacion y una experiencia pensada para usuarios recurrentes.</p>
              <div class="portfolio-card__meta">
                <span>Autenticacion</span>
                <span>UX moderna</span>
                <span>Producto web</span>
              </div>
              <a class="portfolio-link" href="https://kaivor.vercel.app/auth/login" target="_blank" rel="noopener">Ver proyecto</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="section__inner cta-band__inner">
        <h2>Tu proceso tambien puede convertirse en una app clara y facil de operar.</h2>
        <a class="button button--primary" href="index.php#contacto">Hablemos del proyecto</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="section__inner footer-inner">
      <span>Daptux.ai</span>
      <span>Software a la medida con inteligencia artificial.</span>
    </div>
  </footer>

  <a class="whatsapp-float" href="https://wa.me/573212727665?text=Hola%2C%20quiero%20automatizar%20un%20proceso." target="_blank" rel="noopener" aria-label="Escribir a Daptux.ai por WhatsApp" title="Escribenos por WhatsApp">
    <img class="whatsapp-float__icon" src="assets/img/whatsapp-mark.svg" width="28" height="28" alt="" aria-hidden="true">
    <span class="whatsapp-float__text">WhatsApp</span>
  </a>

  <script src="assets/js/main.js"></script>
</body>
</html>
