<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Performance - Preload crítico -->
    <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
    <link rel="stylesheet" href="css/main.css">
    </noscript>
    <!-- Preload y uso correcto de Google Fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" as="style" onload="this.rel='stylesheet'">
    <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap">
    </noscript>

    <title>Nice Diseño + Comunicación | Agencia de Branding y Marketing Digital Buenos Aires</title>
    <meta name="description" content="Agencia de diseño gráfico y marketing digital en Buenos Aires. Especialistas en branding, identidad visual, sitios web y comunicación para PyMEs. +20 años de experiencia.">
    <meta name="keywords" content="diseño gráfico, branding, marketing digital, identidad visual, sitios web, comunicación, PyMEs, Buenos Aires, Argentina">
    <meta name="author" content="Nice Diseño + Comunicación">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph para redes sociales -->
    <meta property="og:title" content="Nice Diseño + Comunicación | Agencia de Branding y Marketing">
    <meta property="og:description" content="Especialistas en branding, identidad visual y marketing digital para PyMEs. +20 años creando marcas exitosas.">
    <meta property="og:image" content="https://nice.com.ar/img/og-image.jpg">
    <meta property="og:url" content="https://nice.com.ar/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Nice Diseño + Comunicación">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nice Diseño + Comunicación">
    <meta name="twitter:description" content="Agencia de branding y marketing digital en Buenos Aires">
    <meta name="twitter:image" content="https://nice.com.ar/img/twitter-card.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://nice.com.ar/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Nice Diseño + Comunicación",
        "description": "Agencia de diseño gráfico y marketing digital especializada en branding para PyMEs",
        "url": "https://nice.com.ar",
        "telephone": "+54-11-3914-1952",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Encarnación Ezcurra 420 1er Piso",
            "addressLocality": "Puerto Madero",
            "addressRegion": "Ciudad Autónoma de Buenos Aires",
            "postalCode": "C1107CLD",
            "addressCountry": "AR"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -34.6118,
            "longitude": -58.3960
        },
        "openingHours": "Mo-Fr 09:00-18:00",
        "sameAs": [
            "https://www.linkedin.com/company/nice-diseno-comunicacion"
        ],
        "founder": {
            "@type": "Person",
            "name": "Nice Diseño + Comunicación"
        },
        "foundingDate": "2003",
        "serviceArea": {
            "@type": "Country",
            "name": "Argentina"
        },
        "priceRange": "$$"
    }
    </script>

    <link rel="stylesheet" href="css/main.css<?php include "inc/ver.php" ?>">
    <script src="js/main.js<?php include "inc/ver.php" ?>" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include ("inc/headerHome.php");
    ?>
    <section class="portfolio" id="portfolio">
        <div class="section-header">
            <span class="tag">NUESTRO TRABAJO</span>
            <h2>PORTFOLIO</h2>
            <p class="txtP">Te mostramos lo más destacado en cada rubro. Si querés conocer <br>
            más podés ver nuestro historial <a href="portfolio.php" class="link-highlight"
            title="Ver portfolio completo de Nice">ingresando aquí</a></p>
        </div>
        <div class="contentPortfolio">
            <!--
            <div class="portfolio-slider" aria-label="Galería de trabajos realizados">
                    <div class="slides">
                        <div class="slide">
                            <img src="img/portfolio/Nice_Portfolio-AMG_imagenes-02.jpg" alt="AMG - Diseño web y software de gestión" loading="lazy">
                            <div class="slide-caption">
                                <p>AMG - Energía. Estrategia de comunicación digital. Desarrollo web + software de gestión de gestión de legajos + diseño de piezas de presentación + estrategia de 
                                    comunicación online + planificación y gestión de RRSS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio-Pintarelli_imagenes-01.gif" alt="PINTARELLI - Bajo Chasis" loading="lazy">
                        <div class="slide-caption">
                            <p>PINTARELLI - Metalúrgica. Diseño de piezas de comunicación: packaging, presentaciones, presupuestos, rodados+ Desarrollo web + intervención en planta.</p>
                        </div>
                    </div>
            
                        <div class="slide">
                        <img src="img/portfolio/portfolio1.jpg" alt="LONCON - Posicionamiento de marca y rediseño de logotipo" loading="lazy">
                        <div class="slide-caption">
                            <p>LONCON - Limpieza y mantenimiento. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Fotografía, diseño web, diseño de indumentaria y rodados.</p>
                        </div>
                
                    <div class="slide">
                        <img src="img/portfolio/po.jpg" alt="PAPEL OESTE - Papelera distribuidora" loading="lazy">
                        <div class="slide-caption">
                            <p>PAPEL OESTE - Papelera Mayorista. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo de e-commerce.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio-A21_imagenes-02.jpg" alt="ACEROS 21 - Identidad corporativa y diseño gráfico" loading="lazy">
                        <div class="slide-caption">
                            <p>A21 - Aceros. Diseño de piezas de comunicación: papelería, presentaciones, presupuestos + Desarrollo web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/NICE-portfolio-Grand-02.webp" alt="GRAND - Empresa de reformas" loading="lazy">
                        <div class="slide-caption">
                            <p>GRAND - Empresa de reformas en Estados Unidos. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo Web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/merlift.gif" alt="MERLIFT - Empresa de logística" loading="lazy">
                        <div class="slide-caption">
                            <p>MERLIFT - Logística. Diseño de piezas de comunicación: papelería, presentaciones, presupuestos + Desarrollo web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio-Cosde_imagenes-01.gif" alt="COSE - Diseño de marca y brochure institucional" loading="lazy">
                        <div class="slide-caption">
                            <p>COSE - Tambores industriales. Diseño de marca y piezas de comunicación. Diseño Web. Estrategia de fidelización y merchandising.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio_nyc_redes1.webp" alt="NyC Metalúrgica - Empresa metalúrgica" loading="lazy">
                        <div class="slide-caption">
                            <p>NyC Metal&uacute;rgica - Artículos publicitarios. Desarrollo de e-commerce + diseño de stand.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/webecsa.gif" alt="ECSA - Manufactura de productos de acero" loading="lazy">
                        <div class="slide-caption">
                            <p>ECSA - Resortes y alambres. Diseño de marca y piezas de comunicación. Diseño Web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/05_Web.gif" alt="AERODYM - Imagen corporativa y fotografía de producto" loading="lazy">
                        <div class="slide-caption">
                            <p>AERODYM - Aerosoles. Posicionamiento de marca. Imagen corporativa. Fotografía de producto, diseño web, papelería.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/lucero.gif" alt="LUCERO - Lavandería industrial" loading="lazy">
                        <div class="slide-caption">
                            <p>LUCERO - Lavandería industrial. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo Web.</p>
                        </div>
                    </div>         
                    
                    <div class="slide">
                        <img src="img/portfolio/06_Mailing_Post_Facebook.jpg" alt="Diseño de mailing y posts para Facebook" loading="lazy">
                        <div class="slide-caption">
                            <p>Mailing y Post en Facebook.</p>
                        </div>
                    </div>
                
                    <div class="slide">
                        <img src="img/portfolio/05_Web_1.jpg" alt="SUMAPACK - Packaging personalizado" loading="lazy">
                        <div class="slide-caption">
                            <p>SUMAPACK - Packaging personalizado.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/03_Papeleria_2.jpg" alt="TECNOLAB - Insumos de laboratorio" loading="lazy">
                        <div class="slide-caption">
                            <p>TECNOLAB - Insumos de laboratorio.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/tss.gif" alt="TSS GROUP - Servicios corporativos" loading="lazy">
                        <div class="slide-caption">
                            <p>TSS GROUP - .</p>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <button class="prev">❮</button>
                    <button class="next">❯</button>
                </div>
            </div>-->
            <div class="portfolio-slider" aria-label="Galería de trabajos realizados">

                <div class="slides">
                    <div class="slide">
                    <img src="img/portfolio/Nice_Portfolio-AMG_imagenes-02.jpg" alt="AMG - Diseño web y software de gestión" loading="lazy">
                    <div class="slide-caption">
                        <p>AMG - Energía. Estrategia de comunicación digital. Desarrollo web + software de gestión de gestión de legajos 
                            + diseño de piezas de presentación + estrategia de comunicación online + planificación y gestión de RRSS.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/portfolio/Nice_Portfolio-Pintarelli_imagenes-01.gif" alt="PINTARELLI - Bajo Chasis" loading="lazy">
                    <div class="slide-caption">
                        <p>PINTARELLI - Metalúrgica. Diseño de piezas de comunicación: packaging, presentaciones, presupuestos, rodados+ Desarrollo web + intervención en planta.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/portfolio/loncon.jpg" alt="LONCON - Posicionamiento de marca y rediseño de logotipo" loading="lazy">
                    <div class="slide-caption">
                        <p>LONCON - Limpieza y mantenimiento. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Fotografía, diseño web, diseño de indumentaria y rodados.</p>
                    </div>
                </div>
                <div class="slide">
                        <img src="img/portfolio/po.jpg" alt="PAPEL OESTE - Papelera distribuidora" loading="lazy">
                        <div class="slide-caption">
                            <p>PAPEL OESTE - Papelera Mayorista. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo de e-commerce.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio-A21_imagenes-02.jpg" alt="ACEROS 21 - Identidad corporativa y diseño gráfico" loading="lazy">
                        <div class="slide-caption">
                            <p>A21 - Aceros. Diseño de piezas de comunicación: papelería, presentaciones, presupuestos + Desarrollo web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/NICE-portfolio-Grand-02.webp" alt="GRAND - Empresa de reformas" loading="lazy">
                        <div class="slide-caption">
                            <p>GRAND - Empresa de reformas en Estados Unidos. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo Web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/merlift.gif" alt="MERLIFT - Empresa de logística" loading="lazy">
                        <div class="slide-caption">
                            <p>MERLIFT - Logística. Diseño de piezas de comunicación: papelería, presentaciones, presupuestos + Desarrollo web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio-Cosde_imagenes-01.gif" alt="COSE - Diseño de marca y brochure institucional" loading="lazy">
                        <div class="slide-caption">
                            <p>COSE - Tambores industriales. Diseño de marca y piezas de comunicación. Diseño Web. Estrategia de fidelización y merchandising.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/Nice_Portfolio_nyc_redes1.webp" alt="NyC Metalúrgica - Empresa metalúrgica" loading="lazy">
                        <div class="slide-caption">
                            <p>NyC Metal&uacute;rgica - Artículos publicitarios. Desarrollo de e-commerce + diseño de stand.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/webecsa.gif" alt="ECSA - Manufactura de productos de acero" loading="lazy">
                        <div class="slide-caption">
                            <p>ECSA - Resortes y alambres. Diseño de marca y piezas de comunicación. Diseño Web.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/05_Web.gif" alt="AERODYM - Imagen corporativa y fotografía de producto" loading="lazy">
                        <div class="slide-caption">
                            <p>AERODYM - Aerosoles. Posicionamiento de marca. Imagen corporativa. Fotografía de producto, diseño web, papelería.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/lucero.gif" alt="LUCERO - Lavandería industrial" loading="lazy">
                        <div class="slide-caption">
                            <p>LUCERO - Lavandería industrial. Posicionamiento de marca, rediseño de logotipo y piezas de comunicación. Desarrollo Web.</p>
                        </div>
                    </div>         
                    
                    <div class="slide">
                        <img src="img/portfolio/06_Mailing_Post_Facebook.jpg" alt="Diseño de mailing y posts para Facebook" loading="lazy">
                        <div class="slide-caption">
                            <p>Mailing y Post en Facebook.</p>
                        </div>
                    </div>
                
                    <div class="slide">
                        <img src="img/portfolio/05_Web_1.jpg" alt="SUMAPACK - Packaging personalizado" loading="lazy">
                        <div class="slide-caption">
                            <p>SUMAPACK - Packaging personalizado.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/03_Papeleria_2.jpg" alt="TECNOLAB - Insumos de laboratorio" loading="lazy">
                        <div class="slide-caption">
                            <p>TECNOLAB - Insumos de laboratorio.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="img/portfolio/tss.gif" alt="TSS GROUP - Servicios corporativos" loading="lazy">
                        <div class="slide-caption">
                            <p>TSS GROUP - .</p>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <button class="prev">❮</button>
                    <button class="next">❯</button>
                </div>
            </div>
        </div>
        <a href="portfolio.php" class="btn-highlight" title="Ver todos nuestros trabajos">VISITA NUESTRO HISTORIAL DE TRABAJOS</a>
    </section>
    <section>
        <div class="bgIdentidadVisual" aria-label="Concepto de identidad visual">
            <p>
                UNA IDENTIDAD VISUAL <br>
                VA MUCHO MÁS ALLÁ QUE LA <br>
                CONSTRUCCIÓN DE UN LOGOTIPO
            </p>
        </div>
    </section>
    <section class="branding" id="servicios">
        <span class="tag marginTop50">SERVICIOS</span>
    <div class="branding-titulo">
      <h2>ESTRATEGIA DE BRANDING</h2>
    </div>
    <div class="flexWidth">
        <div class="branding-estrategia-grid">
        <!-- Fila 1: Posicionamiento & estrategia -->
        <div class="branding-row flexStart">
            <div class="branding-step">
            <span class="branding-icon-bg">
                <img src="img/icon-posicionamiento.png" alt="Posicionamiento y estrategia" class="branding-icon">
            </span>
            <span class="branding-title">Posicionamiento<br>&amp; estrategia</span>
            </div>
            <div class="branding-list-potenciar">
            <span class="branding-e-line"></span>
            <ul class="branding-list">
                <li>Empleados</li>
                <li>Canales</li>
                <li>Consumidores</li>
            </ul>
            <div class="branding-potenciar">
                <span class="branding-eq">=</span>
                <span class="branding-potenciar-ventas">potenciar<br>las ventas</span>
            </div>
            </div>
        </div>
        <!-- Flecha -->
        <div class="branding-arrow-row">
            <div class="branding-arrow-down"><span class="arrow-left"></span><span class="arrow-right"></span></div>
        </div>
        <!-- Fila 2: Identidad visual -->
        <div class="branding-row flexStart">
            <div class="branding-step">
            <span class="branding-icon-bg">
                <img src="img/icon-identidad.png" alt="Identidad visual" class="branding-icon">
            </span>
            <span class="branding-title">Identidad<br>visual</span>
            </div>
            <div class="branding-list-duo">
            <span class="branding-e-line twoline"></span>
            <ul class="branding-list columResp">
                <li>Identidad corporativa</li>
                <li>Sitio web, mailing,<br>posicionamiento web.</li>
            </ul>
            <ul class="branding-list-right">
                <li>Fotografía y video</li>
                <li>Packaging</li>
                <li>Campañas de moda</li>
            </ul>
            </div>
        </div>
        <!-- Flecha -->
        <div class="branding-arrow-row">
            <div class="branding-arrow-down"><span class="arrow-left"></span><span class="arrow-right"></span></div>
        </div>
        <!-- Fila 3: Comunicación digital -->
        <div class="branding-row flexStart">
            <div class="branding-step">
            <span class="branding-icon-bg">
                <img src="img/icon-comunicacion.png" alt="Comunicación digital" class="branding-icon">
            </span>
            <span class="branding-title">Comunicación<br>digital</span>
            </div>
            <div class="branding-list-duo">
            <span class="branding-e-line"></span>
                <ul class="branding-list">
                    <li>Plan y contenidos</li>
                    <li>Diseño</li>
                    <li>Gestión</li>
                </ul>
            </div>
            <div class="branding-potenciar txt-comunicacion-digital">
            <span class="branding-comunicacion-digital" onclick="window.location.href='#contacto';">TRABAJEMOS <br>HOY EN EL BRANDING <br>DE TU NEGOCIO</span>
            </div>
        </div>
        <div class="lineServicios"></div>
        </div>
        <div class="flexWidth">
        </div>
        <div class="branding-estrategia-grid flexBetween">
            <div class="branding-step gap83">
                <span class="branding-icon-bg alignFlexStart">
                    <img src="img/icon-equipos.png" alt="Armado de equipos" class="branding-icon">
                    <span class="branding-title marginLeft15">Armada de equipos<br>
                        <small style="font-size:18px;">del propio departamento comercial o de comunicación.</small>
                    </span>
                </span>
                <div class="branding-potenciar btn-armado-equipos">
                    <span class="branding-comunicacion-digital btnConsultanosArmadoEquipos" onclick="window.location.href='#contacto';">CONSULTANOS</span>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="nosotros" id="nosotros">
        <div class="flexWidth">
            <div class="bgTopNosotros"></div>
        </div>
        <p class="somos-nice-p">Un staff de profesionales multidisciplinario pronto a cumplir <b>22 años de experiencia.</b><br>
               Somos mentes creativas que transformamos ideas en soluciones para negocios con foco en resultados. <br>
               <b>Agregamos valor a la marca cuidando los recursos de las PyMEs.</b> Armamos equipos a medida para cada proyecto, <br>
               desarrollando la estrategia e implementando las propuestas de diseño y comunicación que mejor responda a su necesidad.</p>
        <section class="team-circle-container">
        <div class="team-circle">
            <div class="txtCurvoTop">
                <img src="img/team/txtEnriquecemos.png" alt="Nos enriquecemos en el encuentro">
            </div>
            <div class="txtCurvoBottom">
                <img src="img/team/txtRelaciones.png" alt="Nos llevamos experiencias y relaciones duraderas.">
            </div>
            <!-- Miembros del equipo -->
            <div class="team-member member-principal center">
            <div class="member-photo member-principal"><img src="img/team/circleCarol.png" alt="CAROL VENICE" class="imgCarolVenice"></div>
            <h3 class="h3-principal">CAROL VENICE</h3>
            <p class="p-principal">Estrategia</p>
            </div>
            <div class="team-member pos-1">
            <div class="member-photo"><img src="img/team/circleEsteban.png" alt="ESTEBAN SELVAGGI"></div>
            <h3>ESTEBAN SELVAGGI</h3>
            <p>Posicionamiento SEO</p>
            </div>
            <div class="team-member pos-2">
            <div class="member-photo"><img src="img/team/circleAdrian.png" alt="ADRIAN BUJANDA"></div>
            <h3>ADRIAN BUJANDA</h3>
            <p>IT</p>
            </div>
            <div class="team-member pos-3">
            <div class="member-photo"><img src="img/team/circleClaudio.png" alt="CLAUDIO JORDA"></div>
            <h3>CLAUDIO JORDA</h3>
            <p>Fotografía y Video</p>
            </div>
            <div class="team-member pos-4">
            <div class="member-photo"><img src="img/team/circleNatalia.png" alt="NATALIA PIETRAFESA"></div>
            <h3>NATALIA PIETRAFESA</h3>
            <p>Contenidos</p>
            </div>
            <div class="team-member pos-5">
            <div class="member-photo"><img src="img/team/circleCruz.png" alt="MARÍA NOEL CRUZ"></div>
            <h3>MARÍA NOEL CRUZ</h3>
            <p>Comunicación</p>
            </div>
            <div class="team-member pos-6">
            <div class="member-photo"><img src="img/team/circleAnnun.png" alt="MARÍA LAURA ANNUN"></div>
            <h3>MARÍA LAURA ANNUN</h3>
            <p>Diseño Gráfico</p>
            </div>
            <div class="team-member pos-7">
            <div class="member-photo"><img src="img/team/circleAgustina.png" alt="AGUSTINA BEXIGA"></div>
            <h3>AGUSTINA BEXIGA</h3>
            <p>Diseño Gráfico</p>
            </div>
            <div class="team-member pos-8">
            <div class="member-photo"><img src="img/team/circleSantiago.png" alt="SANTIAGO PINASCO"></div>
            <h3>SANTIAGO PINASCO</h3>
            <p>Pauta</p>
            </div>
            <div class="team-member pos-9">
            <div class="member-photo"><img src="img/team/circleOlivia.png" alt="OLIVIA WEHT"></div>
            <h3>OLIVIA WEHT</h3>
            <p>Community Manager</p>
            </div>
            <div class="team-member pos-10">
            <div class="member-photo"><img src="img/team/circleSol.png" alt="SOL GIANNETTI"></div>
            <h3>SOL GIANNETTI</h3>
            <p>Contenidos</p>
            </div>
            <!-- Ejemplo de decoraciones -->
            <span class="decoration-plus pos-1">+</span>
            <span class="decoration-plus pos-2">+</span>
            <span class="decoration-plus pos-3">+</span>
            <span class="decoration-dot pos-1">•</span>
            <span class="decoration-dot pos-2">•</span>
            <span class="decoration-dot pos-3">•</span>
        </div>
        
        </section>
        <div class="flexWidth">
            <div class="bgBottomNosotros"></div>
        </div>
        <!--
        <img src="img/nosotros.jpg" alt="Equipo de Nice Diseño + Comunicación trabajando en proyectos creativos" class="imgNosotros" loading="lazy">
        <img src="img/nosotros-mobile.jpg" alt="Equipo de Nice Diseño + Comunicación" class="imgNosotrosMobile" loading="lazy">-->
        <div class="footer-header" id="contacto">
            <h2>CONTACTO</h2>
        </div>
    </section>
    <?php 
    include "inc/footer.php";
    include "inc/pie.php";
    ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php 
    include "send/form.php";
    ?>
</body>
</html>