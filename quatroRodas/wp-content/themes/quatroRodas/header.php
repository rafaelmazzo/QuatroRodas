<?php
/**
 * Header Quatro Hodas
 *
 * Seção <header> até <section id="MainContent">
 *
 * @package WordPress
 * @subpackage Quatro Rodas
 * @since Quatro Rodas 1.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Revista Quatro Rodas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />  
	
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins.js"></script>	
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>	
	<script>
		$(document).ready(function () {
			var templateDirectory = "<?php echo esc_url( get_template_directory_uri() ); ?>"
			InitQuatroRodas(templateDirectory);
		});
	</script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
        <div id="googleAdCabecalho">
            <div class="AdCabecalho730"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/googleAdCabecalho.png" /></div>
            <div class="AdCabecalho300"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/googleAdCabecalho300.png" /></div>
        </div>
		<!-- MenuTopo -->
        <section id="MenuTopo">		
            <div id="mainNav">
                <nav id="navPrincipal">
                    <a href="<?php bloginfo('url');?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/quatroRodas-logo.png" alt="Quatro Rodas" id="logoQuatroRodas" /></a>                    
                    <div id="OpenCloseMenu">
                        <a href="#" class="AbrirMenu">Abrir Menu</a>
                    </div>
                    <ul id="MenuPrincipal">
						<li class="scrollMenuLink"><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="scrollMenuLink"><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="scrollMenuLink"><a href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="scrollMenuLink"><a href="#" title="Abril"><i class="fa fa-html5" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#">Carros</a>
                            <div class="containerMegaMenu">
                                <nav class="navLateralMegaMenu navMegaMenuCarros">
                                    <a href="#">Ver todos os carros</a>
                                </nav>
                                <div class="contentMegaMenu">
                                    <div class="boxMegaMenu boxLinksCarros">
                                        <ul>
                                            <li><a href="#">Audi</a></li>
                                            <li><a href="#">Bentley</a></li>
                                            <li><a href="#">BMW</a></li>
                                            <li><a href="#">Chevrolet</a></li>
                                        </ul>
                                    </div>
                                    <div class="boxMegaMenu boxLinksCarros">
                                        <ul>
                                            <li><a href="#">Chrysler</a></li>
                                            <li><a href="#">Chevrolet</a></li>
                                            <li><a href="#">Dodge</a></li>
                                            <li><a href="#">Ferrari</a></li>
                                        </ul>
                                    </div>
                                    <div class="boxMegaMenu boxLinksCarros">
                                        <ul>
                                            <li><a href="#">Fiat</a></li>
                                            <li><a href="#">Ford</a></li>
                                            <li><a href="#">Honda</a></li>
                                            <li><a href="#">Hyundai</a></li>
                                        </ul>
                                    </div>
                                    <div class="boxMegaMenu boxLinksCarros">
                                        <ul>
                                            <li><a href="#">JAC Motos</a></li>
                                            <li><a href="#">Jaguar</a></li>
                                            <li><a href="#">Jeep</a></li>
                                            <li><a href="#">Kia</a></li>
                                        </ul>
                                    </div>
                                    <div class="boxMegaMenu boxLinksCarros">
                                        <ul>
                                            <li><a href="#">Lamborghini</a></li>
                                            <li><a href="#">Mercedes-Benz</a></li>
                                            <li><a href="#">Mitsubishi</a></li>
                                            <li><a href="#">Volkswagen</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </li>
                        <li>
                            <a href="#">Testes</a>
                            <div class="containerMegaMenu">
                                <nav class="navLateralMegaMenu">
                                    <a href="#">Ver tudo de testes</a>
                                    <a href="#">Comparativos</a>
                                    <a href="#">Imoressões</a>
                                    <a href="#">Longa duração</a>
                                    <a href="#">Teste de pista</a>
                                </nav>
                                <div class="contentMegaMenu">
                                    <div class="boxMegaMenu boxCarros">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carros/focusTitanium.png" alt="Ford Focus Titanium" />
                                        <h3>Ford Focus Fastback Titanium Plus</h3>
                                        <p>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </div>
                                    <div class="boxMegaMenu boxCarros">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carros/AudiA6.png" alt="Audi A6 2.0 TFSI" />
                                        <h3>Audi A6 2.0 TFSI</h3>
                                        <p>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </div>
                                    <div class="boxMegaMenu boxCarros">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carros/fordEcoSport.png" alt="Ford EcoSport 1.6 Powershift" />
                                        <h3>Ford EcoSport 1.6 Powershift</h3>
                                        <p>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </div>
                                    <div class="boxMegaMenu boxCarros">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carros/AudiQ3.png" alt="Audi Q3 1.4" />
                                        <h3>Audi Q3 1.4</h3>
                                        <p>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </div>
                                    <div class="boxMegaMenu boxCarros">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carros/BMW420iCabriolet.png" alt="BMW 420i Cabriolet" />
                                        <h3>BMW 420i Cabriolet</h3>
                                        <p>EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">Auto-Serviço</a></li>
                        <li><a href="#">Guia de Compras</a></li>
                        <li><a href="#">Tabela Fipe</a></li>
                        <li><a href="#">Assine</a></li>
                        <li class="menuInputBusca"><input type="text" placeholder="PESQUISAR" id="inputBusca" /> </li>
                    </ul>                    
                </nav>
            </div>
            <div class="clear"></div>
            <div id="secNav">
                <nav id="navSegundaria">
                    <ul>
                        <li class="maisAcessadosMenu">+Acessados</li>
                        <li><a href="#">Salão do automóvel</a></li>
                        <li><a href="#">Renegade</a></li>
                        <li><a href="#">Novo Sandero</a></li>
                        <li><a href="#">Novo Fox</a></li>
                        <li><a href="#">Novo Ka</a></li>
                        <li><a href="#">HB20</a></li>
                        <li><a href="#">Duster</a></li>
                        <li><a href="#">Golf</a></li>
                        <li><a href="#">Corolla</a></li>
                        <li><a href="#">Civic</a></li>
                        <li><a href="#">| A - Z |</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </section>
        <!-- /MenuTopo -->
		
		