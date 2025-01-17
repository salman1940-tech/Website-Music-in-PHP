<?php

session_start();

include "conect.php";
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM posts LIMIT 3");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());

if(!isset($_SESSION['nome'])){
 header('location:login.php');
}


?>

 <html>
	<head>
		<title>AGRMusic</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">   
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
	  
		<script src="js/FF-cash.js" type="text/javascript"></script> 
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/easyTooltip.js"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/hover-image.js" type="text/javascript"></script>
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/tms-0.3.js"></script>
		<script type="text/javascript" src="js/tms_presets.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuad',
					preset:'diagonalFade',
					pagination:false,
					slideshow:6000,
					banners:false,
					waitBannerAnimation:false,
					pauseOnHover:true
				});
				$("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
			});


function play(url){
document.getElementById('player').src = url;
player.play();
} 
function pause(){
player.pause();
}
		</script>		
	</head>
	<body id="page1">
		<div class="extra">
<!--==============================header=================================-->
			<header>
				<div class="main">
					<div class="bg-1">
						<h1><a href="index.php">AGRMusic</a></h1>
					</div>
					<nav>
						<div class="menu-bg-tail">
							<div class="menu-bg">
								<div class="container_12">
									<div class="grid_12">
										<ul class="menu">
											<li class="item"><a href="index.php">Home</a></li>
											<li><a href="musicas.php">Músicas</a></li>
											<li><a href="clipes.php">Clipes</a></li>
											<li><a href="letras.php">Cifras</a></li>
                                           
											
										<?php
									if(isset($_SESSION['nome'])){
									echo "<li><a>".$_SESSION['nome'] . " | </a> <a href='sair.php'>Sair</a></li>"; 
										}else{ echo "<li><a href='login.php'>Login</a></li>"; 
											echo "<li><a href='cadastro.html'>Cadastro</a></li>";}
									      ?>
											
										</ul>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
				
					</div>
                    
                    			<section id="content"><div class="ic"></div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<div class="grid_12">
									<div class="padding-grid-1">
										<h3 class="letter">Músicas <strong></strong></h3>
									</div>
									<div class="wrapper p3">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a href="#"><img src="images/page2-img1.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong></strong>Mais Ouvidas</h4>
												<p class="prev-indent-bot">Ouça as músicas mais ouvidas. Músicas nacionais e internacionais para você ouvir, ler e se divertir..</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
				<li>01. Cristiano Araújo - Maus Bocados</li>
				<li>02. Wesley Safadão - Camarote </li>
				<li>03. Supercombo - Piloto Automático</li>
				<li>04. Cristiano Araújo - Maus Bocados</li>
				<li>05. Henrique & Diego - Suíte 14 ft. Mc Guimê</li>
														
													</ul>
													<ul class="list-2 fright">
			<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Cristiano Araújo - Maus Bocados.mp3');"></a></li>
			<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Wesley Safadão - Camarote [Clipe Oficial].mp3');"></a></li>
			<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Supercombo - Piloto Automático (Clipe Oficial).mp3');"></a></li>
			<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Cristiano Araújo - Maus Bocados.mp3');"></a></li>
			<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Henrique & Diego - Suíte 14 ft. Mc Guimê');"></a></li>
			
<audio src='' id="player" style="display:NONE;"></audio>
													</ul>
												</div>
											</div>
										</article>
									</div>
									<div class="wrapper p3">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a href="#"><img src="images/page2-img2.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong></strong> Populares</h4>
												<p class="prev-indent-bot">Confira para Ouvir a maior sequência de Músicas MPB (Música Popular Brasileira) Mais Tocadas nas rádios do Brasil em Janeiro de 2016.</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
										<li>01. Luan Santana - Escreve aí -DVD Luan Santana Acústico</li>
										<li>02. Não Quero Mais - Ludmilla</li>
										<li>03. Banda Vingadora - Metralhadora </li>
										<li>04. MC Bin Laden - Ta Tranquilo Ta Favorável</li>
										<li>05. Jorge & Mateus - Sosseguei </li>
														
														
													</ul>
													<ul class="list-2 fright">
		<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Luan Santana - Escreve aí - (Vídeo Oficial) - -DVD Luan Santana Acústico-.mp3');"></a></li>
		<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Não Quero Mais (Clipe Oficial) - Ludmilla.mp3');"></a></li>
		<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#"  onclick="play('musica/Banda Vingadora - Metralhadora [Clipe Oficial].mp3');"></a></li>
		<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#"  onclick="play('musica/MC Bin Laden - Ta Tranquilo Ta Favorável (Clipe Oficial).mp3');"></a></li>
		<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#"  onclick="play('musica/Jorge & Mateus - Sosseguei  - -DVD Como Sempre Feito Nunca- [Em Breve nas Lojas].mp3');"></a></li>
														
														
													</ul>
												</div>
											</div>
										</article>
									</div>
									<div class="wrapper">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a href="#"><img src="images/page2-img3.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong> </strong>Variadas </h4>
												<p class="prev-indent-bot">laylist de músicas criadas por usuários para você ouvir com letras das músicas. ... geral; artista; música; notícias ... SERTANEJO UNIVERSITARIO(VARIADAS).</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
								<li>01. Jorge & Mateus - Pergunta Boba - Part. Maestro Pinocchio</li>
								<li>02. Henrique e Juliano - NA HORA DA RAIVA </li>
											
														
													</ul>
													<ul class="list-2 fright">
						<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Jorge & Mateus - Pergunta Boba - Part. Maestro Pinocchio (Vídeo Oficial).mp3');"></a></li>
						<li><span><a class="left-list" href="javascript: pause();"></a></span><a class="right-list" href="#" onclick="play('musica/Henrique e Juliano - NA HORA DA RAIVA - DVD Novas Histórias - Ao vivo em Recife.mp3');"></a></li>
					
														</ul>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block"></div>
			</section>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="main">
				<div class="footer-bg">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12">
								<div class="footer-padding">
									<div class="wrapper">
										
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" href="https://twitter.com/?lang=pt-br"></a></li>
											<li><a class="tooltips n-2" title="Facebook" href="https://www.facebook.com/"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" href="https://www.youtube.com/"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
