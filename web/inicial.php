<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/slick.css');?></style>
</head>
<body>
  <header>
    <div id="topo"><?php include("topo.php"); ?></div>
    <div id="banner"><?php include("banner_lista.php"); ?></div>
  </header>
  <section id="conteudo"></section>
  <footer><?php include("rodape.php"); ?></footer>
<?php include("scripts.php"); ?>
<?php /*?><script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script> 
<script type="text/javascript">
$(document).ready( function(){
	$('#banner').slick({
	  dots: false,arrows: true,infinite: true,speed: 300,slidesToShow: 1,slidesToScroll: 1,autoplay:true,fade: false,
	  responsive: [{breakpoint: 980,settings: {dots: true,arrows: false},},]				
	});
});
</script><?php */?>	
</body>
</html>