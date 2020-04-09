<?php include 'processform.php';?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="maicon luiz anschau">
<meta name="description" content="Ligue para nós ou preencha nossa ficha de atendimento! Somos a 1ª Plataforma de Telemedicina do RS com Suporte Emergencial ao COVID-19."/>
<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css\bootstrap.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="css\dark.css" type="text/css">
<link rel="stylesheet" href="css\swiper.css" type="text/css">
<link rel="stylesheet" href="demos\lauduz\lauduz.css" type="text/css">
<link rel="stylesheet" href="demos\lauduz\css\fonts.css" type="text/css">
<link rel="stylesheet" href="css\font-icons.css" type="text/css">
<link rel="stylesheet" href="css\animate.css" type="text/css">
<link rel="stylesheet" href="css\magnific-popup.css" type="text/css">
<link rel="stylesheet" href="one-page\css\et-line.css" type="text/css">
<link rel="stylesheet" href="css\responsive.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="demos\lauduz\css\colors.css" type="text/css">
<link rel="stylesheet" href="css\responsive.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lauduz|Entre em contato conosco</title>
</head>

<body class="stretched">

<div id="wrapper" class="clearfix">

<header id="header" class="full-header">
<div id="header-wrap">
<div class="container clearfix">
<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

<div id="logo">
<a href="../index.php" class="standard-logo" data-dark-logo="images/lauduz_logo.png"><img src="images\lauduz_logo.png" alt="lauduz Logo"></a>
<a href="../index.php" class="retina-logo" data-dark-logo="images/lauduz_logo.png"><img src="images\lauduz_logow.png" alt="lauduz Logo"></a>
</div>

<nav id="primary-menu">
<ul>
<li class="active"><a href="../index.php"><div>Home</div></a></li>
<li><a href="./index.php" data-href="#section-sobre"><div>Sobre</div></a>

</li>
<li><a href="../voluntarios-da-saude.php"><div>Voluntários da Saúde </div></a></li>
<li><a href="contato"><div>Contato</div></a></li>

</ul>
</nav>
</div>
</div>
</header>


<section id="page-title">
<div class="container clearfix">
<h1>Contato</h1>
<span>Entre em contato conosco</span>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="lauduz.org">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contato</li>
</ol>
</div>
</section>


<div id="page-menu">
<div id="page-menu-wrap">
<div class="container clearfix">



</div>
</div>
</div>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">

<div class="postcontent nobottommargin">
<h3>Entre em Contato conosco</h3>
<div class="form-widget">

<?php if (isset($msg)) {echo '<div id="formmessage"><p>', $msg , '</p></div>';} ?>
<form class="nobottommargin"  name="myform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
<div class="form-process"></div>
<div class="col_one_third">
<label for="template-contactform-name">Nome <small>*</small></label>
<input type="text" class="sm-form-control required" name="name" placeholder="Informe seu nome completo" value="<?php if (isset($clientName)) {echo $clientName;} ?>"/>
			<?php if(isset($err_name)) {echo $err_name;}?>
</div>
<div class="col_one_third">
<label for="template-contactform-email">E-mail <small>*</small></label>
<input type="email" class="required email sm-form-control"name="email" placeholder="Informe seu E-mail pessoal" value="<?php if (isset($clientEmail)) {echo $clientEmail;} ?>"/>
			<?php if(isset($err_email)) {echo $err_email;}?>
</div>
<div class="col_one_third col_last">
<label for="template-contactform-phone">Telefone</label>
<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
</div>
<div class="clear"></div>
<div class="col_two_third">
<label for="template-contactform-subject">Subject <small>*</small></label>
<input type="text" class="required sm-form-control"name="subject" placeholder="Digite seu assunto" value="<?php if (isset($clientSubject)) {echo $clientSubject;} ?>"/>
			<?php if(isset($err_subject)) {echo $err_subject;}?>
</div>

<div class="clear"></div>
<div class="col_full">
<label for="template-contactform-message">Mensagem <small>*</small></label>
<textarea class="required sm-form-control" name="message" placeholder="Escreva sua mensagem"><?php if (isset($clientMessage)) {echo $clientMessage;} ?></textarea><?php if(isset($err_message)) {echo $err_message;}?>
</div>

<div class="col_full">
<button class="button button-3d nomargin"  name="action" type="submit" id="template-contactform-submit" value="submit">Enviar</button>
</div>

</form>
</div>
</div>

<div class="sidebar col_last nobottommargin">
<address>
<strong>Sede:</strong><br>
Santa Maria - Rio Grande do Sul<br>
Brasil<br>
</address>
<abbr title="Phone Number"><strong>CENTRAL DA LAUDUZ:</strong></abbr> +55 (55) 9178-3119<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ce5e2eae3ccefede2faedffa2efe3e1">contato@lauduz.org</a>
<div class="widget noborder notoppadding">


</div>
</div>
</div>
</section>

<footer id="footer" class="noborder" style="padding: 30px 0; background-color: #FFF">
<div class="container clearfix">

<div class="footer-widgets-wrap clearfix">
<div class="col_one_fourth">
<img src="img\logo\lauduz_logo.png" alt="" height="100" style="margin-top: -30px">
</div>
<div class="col_three_fourth col_last">
<div class="col_one_fourth">
<div class="widget widget_links clearfix">
<h4>Apoio</h4>
<ul>
<li><a href="../voluntarios-da-saude.php">Seja um voluntário</a></li>
<li><a href="../voluntarios-da-saude.php">Contribuir</a></li>
<!--
<li><a href="#">Plugins</a></li>
<li><a href="#">Support Forums</a></li>
<li><a href="#">Themes</a></li>
-->
</ul>
</div>
</div>
<div class="col_one_fourth">
<div class="widget widget_links clearfix">
<h4>Médicos</h4>
<ul>
<li><a href="https://lauduz.com/cadastro-medico/" target="_Blank">Cadastre-se</a></li>
<li><a href="http://lauduz.med.br/login" target="_Blank">Acessar</a></li>
<li><a href="http://lauduz.med.br/login" target="_Blank">área do Médico</a></li>
<!--
<li><a href="#">Plugins</a></li>
<li><a href="#">Support Forums</a></li>
<li><a href="#">Themes</a></li>
-->
</ul>
</div>
</div>
<div class="col_one_fourth">
<div class="widget widget_links clearfix">
<h4>Lauduz na mídia</h4>
<ul>
<!--
<li><a href="#">Documentation</a></li>
<li><a href="#">Feedback</a></li>
<li><a href="#">Plugins</a></li>
<li><a href="#">Support Forums</a></li>
<li><a href="#">Themes</a></li>
</ul>
</div>
</div>
<div class="col_one_fourth col_last">
<div class="widget widget_links clearfix">
<h4>Sobre</h4>
<ul>
<li><a href="#">Saiba Mais</a></li>
<li><a href="#">Equipe</a></li>
<!--
<li><a href="#">Plugins</a></li>
<li><a href="#">Support Forums</a></li>
<li><a href="#">Themes</a></li>
-->
</ul>
</div>
</div>
<div class="clear"></div>
<div class="line line-sm"></div>
<div class="col_two_third">
<small class="t300" style="color: #AAA">Copyrights &copy; 2020 All Rights Reserved lauduz</small>
</div>
<div class="col_one_third col_last">
<div class="fright clearfix">

<a href="https://www.instagram.com/lauduzcovid19/" target="_Blank"class="social-icon si-mini si-rounded si-colored si-instagram">
<i class="icon-instagram"></i>
<i class="icon-instagram"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script src="js\jquery.js"></script>
<script src="js\plugins.js"></script>

<script src="js\functions.js"></script>

<script>
		// Owl Carousel Scripts
		$('#oc-features').owlCarousel({
			items: 1,
			margin: 60,
		    nav: true,
		    navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
		    dots: false,
		    stagePadding: 30,
		    responsive:{
				768: { items: 2 },
				1200: { stagePadding: 200 }
			},
		});
	</script>

<script src="js\jquery.gmap.js"></script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
</body>
</html>