<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato - TOT Incorpora&ccedil;&otilde;es - Chapec&oacute;</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/formularios.css');?></style>
</head>
<body class="contato">
  <header>
    <div id="topo" data-aos="fade-down" data-aos-duration="1000"><?php include("topo.php"); ?></div>
    <div class="container" data-aos="fade-up" data-aos-duration="1000"><div class="titulo_pagina"><h2>ONDE ESTAMOS</h2></div></div>
  </header>
  <section class="gmaps" data-aos="fade-up" data-aos-duration="1000"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16895.18155833618!2d-52.637357220365494!3d-27.10040838696877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b448e5b59513%3A0xfb0559f96c255491!2sR.%20Mal.%20Mascarenhas%20de%20Moraes%20-%20Parque%20das%20Palmeiras%2C%20Chapec%C3%B3%20-%20SC!5e0!3m2!1spt-BR!2sbr!4v1661808038660!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>  
  <section class="contatos">
    <div class="conteudo">
      <div class="colunas" data-aos="fade-right" data-aos-duration="1000"><strong>Endere&ccedil;o</strong><br />
        R. [nome da rua], 00 E, [bairro]<br />
        Chapec&oacute; / Santa Catarina<br />
      00 000-000</div>
      <div class="colunas" data-aos="fade-up" data-aos-duration="1000"><strong>Hor&aacute;rios de Atendimento</strong><br />
        Segunda a Sexta-Feira<br />
        das 08h &agrave;s 18h<br />
      </div>
      <div class="colunas" data-aos="fade-left" data-aos-duration="1000"><strong>Telefone</strong><br />
        Telefone: (49) 3323.0000<br />
      WhatsApp: (49) 90000.000</div>
      <div class="clear"></div>
    </div>
  </section>
  <section class="formulario">
    <div class="conteudo">
      <div class="titulo" data-aos="fade-down" data-aos-duration="1000"><h2>Ou preencha o formul&aacute;rio que n&oacute;s entramos em contato com voc&ecirc;.</h2></div>
      <form id="form1" name="form1" method="post" action="">
        <div class="colunas" data-aos="fade-down" data-aos-duration="1000"><input name="email" type="text" id="email" placeholder="Nome" /></div>
        <div class="colunas col_esq" data-aos="fade-right" data-aos-duration="1000"><input name="email" type="text" id="email" placeholder="Telefone" /></div>
        <div class="colunas col_dir" data-aos="fade-left" data-aos-duration="1000"><input name="email" type="text" id="email" placeholder="E-mail" /></div>
        <div class="colunas col_esq captcha" data-aos="fade-right" data-aos-duration="1000"><img src="img/_del/captcha.png" width="307" height="80" alt=""/></div>
        <div class="colunas col_dir" data-aos="fade-left" data-aos-duration="1000"><button name="enviar" type="submit" value="">Enviar</button></div>
        <div class="colunas clear"></div>
      </form>      
    </div>
  </section>
  <div class="clear"></div>
  <footer data-aos="fade-up" data-aos-duration="1000"><?php include("rodape.php")?></footer>
<?php include("scripts.php"); ?>
</body>
</html>