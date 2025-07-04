<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice</title>
    <link rel="stylesheet" href="css/main.css?ver=1.3">
    <link rel="stylesheet" href="css/mobile.min.css?ver=1.3">
    <script src="js/portfolio.js"></script>
    <script src="js/main.js?ver=1.3" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- COLOR BOX ZOOM GALLERY -->
    <script type="text/javascript" src="lib/jquery.1.7.2.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <link rel="stylesheet" href="css/colorbox.min.css" />
    <script>
        jQuery(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            jQuery(".group1").colorbox({rel:'group1', transition:"fade", width:"70%"});
            jQuery(".group2").colorbox({rel:'group2', transition:"fade", width:"70%"});
            jQuery(".group3").colorbox({rel:'group3', transition:"fade", width:"70%"});
            jQuery(".group4").colorbox({rel:'group4', transition:"fade", width:"70%"});
            jQuery(".group5").colorbox({rel:'group5', transition:"fade", width:"70%"});
            jQuery(".group6").colorbox({rel:'group6', transition:"fade", width:"70%"});
            jQuery(".group7").colorbox({rel:'group7', transition:"fade", width:"70%"});
            jQuery(".group8").colorbox({rel:'group8', transition:"fade", width:"70%"});
            jQuery(".group9").colorbox({rel:'group9', transition:"fade", width:"70%"});
            jQuery(".group10").colorbox({rel:'group10', transition:"fade", width:"70%"});
            jQuery(".group11").colorbox({rel:'group11', transition:"fade", width:"70%"});
            jQuery(".group12").colorbox({rel:'group12', transition:"fade", width:"70%"});
            jQuery(".group13").colorbox({rel:'group13', transition:"fade", width:"70%"});
            jQuery(".group14").colorbox({rel:'group14', transition:"fade", width:"70%"});
            jQuery(".group15").colorbox({rel:'group15', transition:"fade", width:"70%"});
            jQuery(".group16").colorbox({rel:'group16', transition:"fade", width:"70%"});
            jQuery(".group17").colorbox({rel:'group17', transition:"fade", width:"70%"});
            jQuery(".group18").colorbox({rel:'group18', transition:"fade", width:"70%"});
            jQuery(".group19").colorbox({rel:'group19', transition:"fade", width:"70%"});
            jQuery(".group20").colorbox({rel:'group20', transition:"fade", width:"70%"});
            jQuery(".group21").colorbox({rel:'group21', transition:"fade", width:"70%"});
            jQuery(".group22").colorbox({rel:'group22', transition:"fade", width:"70%"});
            jQuery(".group23").colorbox({rel:'group23', transition:"fade", width:"70%"});
            jQuery(".group24").colorbox({rel:'group24', transition:"fade", width:"70%"});
            jQuery(".group25").colorbox({rel:'group25', transition:"fade", width:"70%"});
            jQuery(".group26").colorbox({rel:'group26', transition:"fade", width:"70%"});
            jQuery(".group27").colorbox({rel:'group27', transition:"fade", width:"70%"});
            jQuery(".group28").colorbox({rel:'group28', transition:"fade", width:"70%"});
            jQuery(".group29").colorbox({rel:'group29', transition:"fade", width:"70%"});
            jQuery(".group30").colorbox({rel:'group30', transition:"fade", width:"70%"});
            jQuery(".group31").colorbox({rel:'group31', transition:"fade", width:"70%"});
            jQuery(".group32").colorbox({rel:'group32', transition:"fade", width:"70%"});
            jQuery(".group33").colorbox({rel:'group33', transition:"fade", width:"70%"});
            jQuery(".group34").colorbox({rel:'group34', transition:"fade", width:"70%"});
            jQuery(".group35").colorbox({rel:'group35', transition:"fade", width:"70%"});
            jQuery(".group36").colorbox({rel:'group36', transition:"fade", width:"70%"});
            jQuery(".group37").colorbox({rel:'group37', transition:"fade", width:"70%"});
            jQuery(".group38").colorbox({rel:'group38', transition:"fade", width:"70%"});
            jQuery(".group39").colorbox({rel:'group39', transition:"fade", width:"70%"});
            jQuery(".group40").colorbox({rel:'group40', transition:"fade", width:"70%"});
            jQuery(".group41").colorbox({rel:'group41', transition:"fade", width:"70%"});
            jQuery(".group42").colorbox({rel:'group42', transition:"fade", width:"70%"});
            jQuery(".group43").colorbox({rel:'group43', transition:"fade", width:"70%"});
            jQuery(".group44").colorbox({rel:'group44', transition:"fade", width:"70%"});
            jQuery(".group45").colorbox({rel:'group45', transition:"fade", width:"70%"});
            jQuery(".group46").colorbox({rel:'group46', transition:"fade", width:"70%"});
            jQuery(".group47").colorbox({rel:'group47', transition:"fade", width:"70%"});
            jQuery(".group48").colorbox({rel:'group48', transition:"fade", width:"70%"});
            jQuery(".group49").colorbox({rel:'group49', transition:"fade", width:"70%"});
            jQuery(".group50").colorbox({rel:'group50', transition:"fade", width:"70%"});
            jQuery(".group51").colorbox({rel:'group51', transition:"fade", width:"70%"});
            jQuery(".group52").colorbox({rel:'group52', transition:"fade", width:"70%"});
            jQuery(".group53").colorbox({rel:'group53', transition:"fade", width:"70%"});
            jQuery(".group56").colorbox({rel:'group56', transition:"fade", width:"70%"});
            jQuery(".group57").colorbox({rel:'group57', transition:"fade", width:"70%"});
            jQuery(".group58").colorbox({rel:'group58', transition:"fade", width:"70%"});
            jQuery(".group59").colorbox({rel:'group59', transition:"fade", width:"70%"});
            jQuery(".group60").colorbox({rel:'group60', transition:"fade", width:"70%"});
            jQuery(".group61").colorbox({rel:'group61', transition:"fade", width:"70%"});
            jQuery(".group62").colorbox({rel:'group62', transition:"fade", width:"70%"});

            jQuery(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });
            
            //Example of preserving a JavaScript event for inline calls.
            jQuery("#click").click(function(){ 
                jQuery('#click').min.css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>
</head>
<body>
    <header class="main-slider">
        <nav>
            <div class="logo">
                <a href="https://nice.com.ar/new/" target="_self">
                <img src="img/Logo-Nice.png" alt="Nice">
                </a>
            </div>
            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="/new/#portfolio">PORTFOLIO</a></li>
                    <li><a href="/new/#servicios">SERVICIOS</a></li>
                    <li><a href="/new/#nosotros">NOSOTROS</a></li>
                    <li><a href="/new/consultoria.php">CONSULTORÍA</a></li>
                    <li><a href="/new/#contacto">CONTACTO</a></li>
                </ul>
                <div class="redesSociales desktop">
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
                <button class="menu-toggle" aria-label="Menú">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>

        <div class="mobile-menu">
            <button class="close-menu" aria-label="Cerrar menú">
                <i class="fas fa-times"></i>
            </button>
            <ul>
                <li><a href="/new/#portfolio">PORTFOLIO</a></li>
                <li><a href="/new/#servicios">SERVICIOS</a></li>
                <li><a href="/new/#nosotros">NOSOTROS</a></li>
                <li><a href="/new/consultoria.php">CONSULTORÍA</a></li>
                <li><a href="/new/#contacto">CONTACTO</a></li>
            </ul>
            <div class="redesSociales">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </header>

    <section id="portfolioGral">
        <section>
            <div class="blog_entry">
                <div class="entry1_left">
                    <img src="images/corazon.png">
                </div>
                <div class="entry_rightConsult">
                    <h3>Todav&iacute;a es m&aacute;s importante el <br>logo que la esencia</h3>

                    <p class="bajada">Sin embargo, el logo es el tangible del alma de la Pyme 
                                y por eso las respuestas creativas para el desarrollo de la imagen 
                                de marca hay que encontrarlas ah&iacute;: en el diferencial invisible.
                    </p>
                    <a title="Click para chatear" href="https://api.whatsapp.com/send?phone=541139141952&text=Hola,%20Te%20contacto%20desde%20el%20sitio%20web" target="_blank" rel="noopener">
                        <div class="btnSlideConsultoria">
                            <p>¡HABLEMOS!</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--
                <div class="flexCenter">
                    <div class="contentSlideConsultoria">
                        <div class="contentImgLeftSlideConsultoria"></div>
                        <div class="contentRightSlideConsultoria">
                            <div class="txtSlideConsultoria">
                                <p class="txtCons"> 
                                <span>TODAV&Iacute;A ES M&Aacute;S IMPORTANTE EL LOGO QUE LA ESENCIA</span><br>
                                Sin embargo, el logo es el tangible del alma de la pyme <br>
                                y por eso las respuestas creativas para el desarrollo de la imagen <br>
                                de marca hay que encontrarlas ah&iacute;: en el diferencial invisible.
                                </p>
                                <div class="btnSlideConsultoria">
                                    <p>¡HABLEMOS!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </section>
            <section>
                <div class="flexCenter bgConsultoria">
                    <h2 class="titleConsultoria">Yo soy Pyme y crezco a la par de las Pymes</h2>
                    <div class="contentConsultoria heightBgConsultoria">
                        <div class="txtConsultoria">
                            <h2 style="color: #C5D501;">Consultor&iacute;a</h2>
                            <p>
                            <br>
                            Mi consultora nació con una mirada visionaria, en 2003 en pleno corralito.<br><br>

                            Durante esa crisis nacional en la que tantas pymes se reinventaron, decidí crear NICE para 
                            ofrecer a pequeñas y medianas empresas una vidriera de calidad. Jerarquizar sus productos 
                            y servicios frente a la enorme competencia de las grandes marcas.<br><br>

                            Fruto de la experiencia de 19 años como fundadora y directora comercial asesoro en 
                            el desarrollo del plan de marca, posicionamiento y comunicación; armado de departamentos 
                            de comunicación o comercial.<br><br>

                            No ofrezco una consultoría técnica sino que pongo en juego mi bagaje personal, mucho conocimiento 
                            del nicho y una escucha activa para luego proponer una estrategia posible de llevar a cabo.

                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="flexCenter bgColorCapacitacion">
                    <div class="contentConsultoria">
                        <div class="contentImgCapaciacion">
                            <img src="images/imgCarol.jpg" alt="Carol Venice">
                        </div>
                        <div class="contentTxtCapacitacion">
                            <h2>Capacitaci&oacute;n</h2>
                        
                            <p>
                            <img src="images/imgCarol.jpg" alt="Carol Venice" class="imgCapacitacionDisplay">
                            Dicto seminarios, workshops y talleres sobre branding y comunicación 
                            a medida: para pymes, asociaciones, cámaras y entidades que apoyan 
                            el desarrollo de nuevos negocios.<br><br>

                            Creo mucho en la contaminación positiva, "polinizar" espacios para elevar 
                            los standares de comunicación de este sector. <br><br>

                            Por eso desde hace ya 10 años elijo ser socia de INICIA -empresa social 
                            de apoyo a emprendedores-. Realizo aportes ¡voluntarios como consultora, 
                            capacitadora y mentora a nuevos ¡emprendedores y miembros de la red.<br><br>

                            Integro el equipo de consultores de Fundación Empujar brindando 
                            acompañamiento a emprendimientos en el marco del programa Capital 
                            Semilla. Soy mentora voluntaria de alumnos para su inserción laboral formal.<br><br>

                            Fui miembro VISTAGE por 7 años, organización líder mundial de coaching 
                            ejecutivo y asesoramiento entre p2p para CEOs y dueños de empresas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="flexCenter">
                    <div class="contentConsultoria">
                        <p class="bottomTxtConsultoria">
                            Con 19 a&ntilde;os de experiencia en la <br>
                            creaci&oacute;n de identidades visuales, asesoro <br>
                            en Dise&ntilde;o Gr&aacute;fico y Marketing
                        </p>
                    </div>
                </div>
            </section>
    </section>
    <div class="footer-brand-footer">
        <p><b>Nice | Diseño + Comunicación</b> | Encarnación Ezcurra 420 1er Piso, Puerto Madero,<br>
        C1107CLD Ciudad Autónoma de Buenos Aires. Argentina | Whatssapp: +54 11 3914 1952
        </p>
        <img src="img/corazonNice.jpg" alt="Nice 21 años" class="imgFooter">
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>