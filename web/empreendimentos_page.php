
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TOT Incorpora&ccedil;&otilde;es - Chapec&oacute;</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/fancybox.css');?> <?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/formularios.css');?></style>
</head>
<body class="">
  <header>
    <div id="topo" data-aos="fade-down" data-aos-duration="1000"><?php include("topo.php"); ?></div>
    <div id="banner"><?php include("banner_lista.php"); ?></div>
  </header>
  <section class="chamadas">
    <div class="conteudo">
      <div class="chamada_esq" data-aos="fade-up" data-aos-duration="1000">
        <a href="quem-somos">Transformar o jeito de viver e ter a experi&ecirc;ncia de ser o lugar que voc&ecirc; sempre quis,<strong> essa &eacute; a TOT Incorpora&ccedil;&atilde;o.</strong><br />
        <span class="hvr-grow">CONHE&Ccedil;A MAIS</span></a>
      </div>
      <div class="chamada_dir" data-aos="fade-up" data-aos-duration="1500">
        <a href="contato">D&uacute;vidas, Coment&aacute;rios e Sugest&otilde;es?<br /><strong>Fale com a TOT</strong><br />
        <span class="custom-btn">FALE CONOSCO</span></a>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <section class="destaque" data-aos="fade-down" data-aos-duration="1000">
    <div class="conteudo">
      <h2><span><img src="img/banner_localizacao.svg" width="52" height="65" alt="O 1&ordm; empreendimento da Housi em Chapec&oacute;"/></span>O 1&ordm; empreendimento<br />da Housi em Chapec&oacute;<br />est&aacute; localizado no ponto<br />alto do centro de cidade.</h2>
      <h3>E &eacute; a escolha certa para <strong>morar ou investir</strong> com seguran&ccedil;a.</h3>
    </div>
  </section>
  <section class="diferenciais">
    <div class="conteudo">
    <?
      $clear=0;
      for ($i=1; $i<7; $i++){
        $clear++;
        if ($clear%2==0){
          $efeito = "data-aos='fade-right'";
        }else{
          $efeito = "data-aos='fade-left'";
        }
    ?>
      <div class="caracteristicas" <?=$efeito?> data-aos-duration="1000">
        <div><img src="img/_del/car_<?=$i?>.png" alt=""/></div>
        <div>Pronto para morar, decorado e com serviços completos.</div>
      </div>
      <?
        if ($clear%2==0){		
      ?>
        <div class="clear"></div>
      <?
        }
      ?>      
    <?
      }
    ?>	  
	<div class="clear"></div>  
	</div>
  </section>
  <section class="sobre">
    <div class="conteudo">
      <div class="titulos" data-aos="fade-down" data-aos-duration="1000"><h2>Sobre o empreendimento</h2></div>
      <div class="galeria" data-aos="fade-up" data-aos-duration="1000">
        <?
          for ($i=0; $i<10; $i++){
        ?>
          <div>
            <div class="sobre_lista">
              <div>
                <a href="#">
                <span class="ordem">01</span>
                <span class="tit">BICICLET&Aacute;RIO</span>
                <span class="area">&Aacute;REA COMUM</span>
              </a></div>
            </div>
          </div>
        <?
          }
        ?>      
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <section><div><img src="img/_del/empreendimentos.jpg" width="1920" height="1081" class="imgfull" alt=""/></div></section>
  <section class="assessoria">
    <div class="conteudo">
      <div class="coluna_esq">Toda a assessoria da <span>Housi.</span></div>
      <div class="coluna_dir">
        <div>
          <?
            for ($i=0; $i<3; $i++){
          ?>
            <div class="assessoria_lista">
              <div class="icone"><img src="img/_del/housi_decor.svg" height="65" alt=""/></div>
              <div class="texto">Facilidade no pagamento.<br />Pix, cart&atilde;o de cr&eacute;dito sem<br />comprometer seu limite e boleto.</div>
              <div class="clear"></div>
            </div>
          <?
            }
          ?>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="videos">
        <?
          for ($i=0; $i<10; $i++){
        ?>
          <div><a href="https://www.youtube.com/watch?v=54exMWzGZyA" class="various fancybox"><div class="play"><i class="icon-play"></i></div><img src="img/_del/video.jpg" width="1333" height="679" alt=""/></a></div>
        <?
          }
        ?>      
      </div>
    </div>
  </section>
  <section class="invista">
    <div class="conteudo">
      <h2>Invista no 1&ordm; empreendimento Housi de Chapec&oacute;</h2>
      <div class="txt">
        <p>A Housi chegou em Chapec&oacute; para voc&ecirc; encontrar o seu jeito de investir. <strong>Com maior seguran&ccedil;a e rentabilidade garantida.</strong> Tudo isso, recebendo a assessoria da Housi.</p>
        <p><strong>Por que investir?</strong><br />
          &bull; Valoriza&ccedil;&atilde;o do empreendimento.<br />
          &bull; Projeto inovador para a regi&atilde;o.<br />
          &bull; Est&aacute; alinhado com as tend&ecirc;ncias do mercado.<br />
          &bull; Aeroporto na cidade.</p>
      </div>
      <div class="chamada">Encontre o melhor retorno. N&oacute;s entramos em contato com voc&ecirc;.</div>
      <div class="formulario">
        <form id="form1" name="form1" method="post" action="">
          <div class="colunas"><input name="email" type="text" id="email" placeholder="Nome" /></div>
          <div class="colunas col_esq"><input name="email" type="text" id="email" placeholder="Telefone" /></div>
          <div class="colunas col_dir"><input name="email" type="text" id="email" placeholder="E-mail" /></div>
          <div class="colunas col_esq"><input name="email" type="text" id="email" placeholder="Endereço" /></div>
          <div class="colunas col_dir opcoes"><label>Desejo ser:</label><label for="morador">Morador</label><input type="radio" value="Morador" id="morador" name="opcao" class="radio" /><label for="investidor">Investidor</label><input type="radio" value="Investidor" id="investidor" name="opcao" class="radio" /><div class="clear"></div></div>
          <div class="colunas col_esq captcha"><img src="img/_del/captcha.png" width="307" height="80" alt=""/></div>
          <div class="colunas col_dir"><button name="enviar" type="submit" value="">Enviar</button></div>
          <div class="colunas clear"></div>
        </form>      
      </div>
    </div>
  </section>
  <footer><?php include("rodape.php")?></footer>
<?php include("scripts.php"); ?>
<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.slick.min.js&amp;cid=<?=$cid?>"></script> 
<script type="text/javascript">
$(document).ready( function(){
	$('.galeria').slick({
	  dots: false,arrows: true,infinite: true,speed: 300,slidesToShow: 4,slidesToScroll: 4,autoplay:false,fade: false,
	  responsive: [
      {breakpoint: 980,settings: {slidesToShow: 3,slidesToScroll: 3},},
      {breakpoint: 780,settings: {slidesToShow: 2,slidesToScroll: 2},},
      {breakpoint: 580,settings: {slidesToShow: 1,slidesToScroll: 1},},
    ]
	});
	$('.videos').slick({
	  dots: false,arrows: true,infinite: true,speed: 300,slidesToShow: 1,slidesToScroll: 1,autoplay:false,fade: false,
	});
});
</script>	  
<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.fancybox.min.js&amp;cid=<?=$cid?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".various").fancybox({
    maxWidth    : 800,
    maxHeight   : 600,
    fitToView   : false,
    width       : '70%',
    height      : '70%',
    autoSize    : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
})  
</script> 
</body>
</html>