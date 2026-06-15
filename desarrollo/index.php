<?php
require_once 'lang.php';
$brand = 'Daptux.ai';
?>
<!doctype html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daptux.ai | <?php echo $currentLang === 'es' ? 'Software a la medida con IA' : 'Custom software with AI'; ?></title>
  <meta name="description" content="<?php echo $currentLang === 'es' ? 'Daptux.ai desarrolla software a la medida con inteligencia artificial para automatizar procesos, integrar sistemas y mejorar operaciones empresariales.' : 'Daptux.ai develops custom software with artificial intelligence to automate processes, integrate systems and improve business operations.'; ?>">
  <meta name="theme-color" content="#071A3D">
  <link rel="icon" href="assets/img/favicon.png" type="image/png">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <a class="skip-link" href="#contenido"><?php echo t('skip_link'); ?></a>

  <header class="site-header" data-header>
    <a class="brand" href="#inicio" aria-label="Daptux.ai inicio">
      <img src="assets/img/daptux-mark.jpg" alt="" class="brand__mark">
      <span class="brand__text">Daptux<span>.ai</span></span>
    </a>
    <button class="menu-button" type="button" aria-label="<?php echo t('open_menu'); ?>" aria-expanded="false" data-menu-button>
      <span></span><span></span><span></span>
    </button>
    <nav class="nav" data-nav>
      <a href="#servicios"><?php echo t('servicios'); ?></a>
      <a href="#proceso"><?php echo t('proceso'); ?></a>
      <a href="#confianza"><?php echo t('confianza'); ?></a>
      <a href="apps.php"><?php echo t('apps'); ?></a>
      <a href="#contacto"><?php echo t('contacto'); ?></a>
      <a href="pagos/"><?php echo t('app_pagos'); ?></a>
      <a class="nav__portal" href="login.php"><?php echo t('area_clientes'); ?></a>
      <div class="lang-switcher" style="margin-left: 20px; border-left: 1px solid rgba(255,255,255,0.2); padding-left: 20px;">
        <a href="<?php echo lang_url('es'); ?>" class="lang-btn<?php echo $currentLang === 'es' ? ' active' : ''; ?>" style="margin-right: 10px; color: <?php echo $currentLang === 'es' ? '#1F5EFF' : 'inherit'; ?>; text-decoration: none; font-weight: <?php echo $currentLang === 'es' ? 'bold' : 'normal'; ?>;">ES</a>
        <a href="<?php echo lang_url('en'); ?>" class="lang-btn<?php echo $currentLang === 'en' ? ' active' : ''; ?>" style="color: <?php echo $currentLang === 'en' ? '#1F5EFF' : 'inherit'; ?>; text-decoration: none; font-weight: <?php echo $currentLang === 'en' ? 'bold' : 'normal'; ?>;">EN</a>
      </div>
    </nav>
  </header>

  <main id="contenido">
    <section class="hero" id="inicio">
      <div class="hero__media" aria-hidden="true"></div>
      <div class="hero__overlay"></div>
      <div class="hero__content">
        <p class="eyebrow"><?php echo t('hero_eyebrow'); ?></p>
        <h1><?php echo t('hero_title'); ?></h1>
        <p class="hero__lead"><?php echo t('hero_lead'); ?></p>
        <div class="hero__actions">
          <a class="button button--primary" href="#contacto"><?php echo t('hero_cta1'); ?></a>
          <a class="button button--ghost" href="#servicios"><?php echo t('hero_cta2'); ?></a>
        </div>
        <dl class="hero__signals" aria-label="Señales de valor">
          <div><dt><?php echo t('signal1_title'); ?></dt><dd><?php echo t('signal1_desc'); ?></dd></div>
          <div><dt><?php echo t('signal2_title'); ?></dt><dd><?php echo t('signal2_desc'); ?></dd></div>
          <div><dt><?php echo t('signal3_title'); ?></dt><dd><?php echo t('signal3_desc'); ?></dd></div>
        </dl>
      </div>
    </section>

    <section class="section section--intro">
      <div class="section__inner intro-grid">
        <div>
          <p class="eyebrow eyebrow--dark"><?php echo t('intro_eyebrow'); ?></p>
          <h2><?php echo t('intro_title'); ?></h2>
        </div>
        <p class="intro-copy"><?php echo t('intro_copy'); ?></p>
      </div>
    </section>

    <section class="section" id="servicios">
      <div class="section__inner">
        <div class="section-heading">
          <p class="eyebrow eyebrow--dark"><?php echo t('services_eyebrow'); ?></p>
          <h2><?php echo t('services_title'); ?></h2>
        </div>
        <div class="service-grid">
          <article class="service-card">
            <span class="service-card__number">01</span>
            <h3><?php echo t('service1_title'); ?></h3>
            <p><?php echo t('service1_desc'); ?></p>
          </article>
          <article class="service-card">
            <span class="service-card__number">02</span>
            <h3><?php echo t('service2_title'); ?></h3>
            <p><?php echo t('service2_desc'); ?></p>
          </article>
          <article class="service-card">
            <span class="service-card__number">03</span>
            <h3><?php echo t('service3_title'); ?></h3>
            <p><?php echo t('service3_desc'); ?></p>
          </article>
          <article class="service-card">
            <span class="service-card__number">04</span>
            <h3><?php echo t('service4_title'); ?></h3>
            <p><?php echo t('service4_desc'); ?></p>
          </article>
          <article class="service-card">
            <span class="service-card__number">05</span>
            <h3><?php echo t('service5_title'); ?></h3>
            <p><?php echo t('service5_desc'); ?></p>
          </article>
          <article class="service-card">
            <span class="service-card__number">06</span>
            <h3><?php echo t('service6_title'); ?></h3>
            <p><?php echo t('service6_desc'); ?></p>
          </article>
        </div>
      </div>
    </section>
            <h3>QA, documentación y soporte</h3>
            <p>Pruebas, documentación técnica, manuales, mantenimiento y mejora continua para software existente.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--dark" id="proceso">
      <div class="section__inner">
        <div class="section-heading">
          <p class="eyebrow">Proceso IA first</p>
          <h2>De la idea al software funcionando, con menos fricción.</h2>
        </div>
        <div class="process">
          <div class="process__step"><span>1</span><h3>Entendemos</h3><p>Levantamos requerimientos, dolores y prioridades reales.</p></div>
          <div class="process__step"><span>2</span><h3>Prototipamos</h3><p>Mostramos una versión visual temprana antes de construir todo.</p></div>
          <div class="process__step"><span>3</span><h3>Construimos</h3><p>Desarrollamos con IA como acelerador y revisión experta.</p></div>
          <div class="process__step"><span>4</span><h3>Probamos</h3><p>Validamos flujos, datos, errores y experiencia de usuario.</p></div>
          <div class="process__step"><span>5</span><h3>Mejoramos</h3><p>Documentamos, soportamos y evolucionamos la solución.</p></div>
        </div>
      </div>
    </section>

    <section class="section" id="confianza">
      <div class="section__inner trust-layout">
        <div>
          <p class="eyebrow eyebrow--dark">Para quién es</p>
          <h2>Empresas y equipos que necesitan moverse más rápido.</h2>
          <p>Trabajamos con dueños de empresa, gerentes, equipos de operaciones, líderes comerciales, áreas de tecnología y desarrolladores que necesitan apoyo para entregar mejor software.</p>
        </div>
        <div class="trust-list">
          <div><strong>Empresas</strong><span>Procesos manuales, reportes lentos, datos dispersos, integraciones pendientes.</span></div>
          <div><strong>Equipos de software</strong><span>Prototipado, QA, documentación, soporte, mejoras y capacidad adicional.</span></div>
          <div><strong>Proyectos nuevos</strong><span>Validación rápida, MVP, sistemas internos y automatización con IA.</span></div>
        </div>
      </div>
    </section>

    <section class="cta-band">
      <div class="section__inner cta-band__inner">
        <h2>Si tienes un proceso que se repite, se puede mejorar.</h2>
        <a class="button button--primary" href="#contacto">Iniciar conversación</a>
      </div>
    </section>

    <section class="section contact-section" id="contacto">
      <div class="section__inner contact-layout">
        <div>
          <p class="eyebrow eyebrow--dark">Contacto</p>
          <h2>Cuéntanos qué quieres automatizar, integrar o construir.</h2>
          <p>Deja tus datos y una idea breve del reto. Revisaremos tu caso para proponerte un primer camino claro.</p>
          <div class="contact-note">
            <strong>Daptux.ai</strong>
            <span>Software a la medida con IA para empresas.</span>
          </div>
        </div>

        <form class="contact-form" action="contact.php" method="post">
          <div class="field-row">
            <label>Nombre
              <input type="text" name="nombre" autocomplete="name" required>
            </label>
            <label>Empresa
              <input type="text" name="empresa" autocomplete="organization" required>
            </label>
          </div>
          <div class="field-row">
            <label>WhatsApp
              <input type="tel" name="telefono" autocomplete="tel" required>
            </label>
            <label>Correo
              <input type="email" name="correo" autocomplete="email">
            </label>
          </div>
          <label>¿Qué quieres automatizar, integrar o construir?
            <textarea name="automatizar" rows="4" required></textarea>
          </label>
          <fieldset class="form-group">
            <legend>¿Qué usan hoy para manejar ese proceso?</legend>
            <div class="choice-grid">
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="Excel"> Excel</label>
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="ERP"> ERP</label>
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="CRM"> CRM</label>
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="WhatsApp"> WhatsApp</label>
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="Software interno"> Software interno</label>
              <label class="choice-option"><input type="checkbox" name="herramientas[]" value="Otro"> Otro</label>
            </div>
          </fieldset>
          <div class="field-row">
            <label>Presupuesto aproximado
              <select name="presupuesto">
                <option value="Aún no definido">Aún no definido</option>
                <option value="Menos de $2M COP">Menos de $2M COP</option>
                <option value="$2M a $5M COP">$2M a $5M COP</option>
                <option value="$5M a $10M COP">$5M a $10M COP</option>
                <option value="$10M a $25M COP">$10M a $25M COP</option>
                <option value="Más de $25M COP">Más de $25M COP</option>
              </select>
            </label>
            <label>Urgencia
              <select name="urgencia">
                <option value="Este mes">Este mes</option>
                <option value="1 a 3 meses">1 a 3 meses</option>
                <option value="3 a 6 meses">3 a 6 meses</option>
                <option value="Solo explorando">Solo explorando</option>
              </select>
            </label>
          </div>
          <label>Servicio de interés
            <select name="servicio">
              <option value="Software a la medida">Software a la medida</option>
              <option value="Automatización de procesos">Automatización de procesos</option>
              <option value="Integración de sistemas">Integración de sistemas</option>
              <option value="IA aplicada al negocio">IA aplicada al negocio</option>
              <option value="QA, documentación o soporte">QA, documentación o soporte</option>
            </select>
          </label>
          <label>Comentarios adicionales
            <textarea name="mensaje" rows="3"></textarea>
          </label>
          <p class="form-help">Te responderemos con una primera orientación clara según tu necesidad, urgencia y presupuesto.</p>
          <button class="button button--primary" type="submit">Enviar solicitud</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="section__inner footer-inner">
      <span>Daptux.ai</span>
      <span>Software a la medida con inteligencia artificial.</span>
    </div>
  </footer>


  <a class="whatsapp-float" href="https://wa.me/573212727665?text=Hola%2C%20quiero%20automatizar%20un%20proceso." target="_blank" rel="noopener" aria-label="Escribir a Daptux.ai por WhatsApp" title="Escríbenos por WhatsApp">
    <img class="whatsapp-float__icon" src="assets/img/whatsapp-mark.svg" width="28" height="28" alt="" aria-hidden="true">
    <span class="whatsapp-float__text">WhatsApp</span>
  </a>

  <script src="assets/js/main.js"></script>
</body>
</html>
