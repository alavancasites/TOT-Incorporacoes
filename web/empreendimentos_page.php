<? /*
include_once("extranet/autoload.php");
$model = new Contato();
$captcha = new Captcha();
$form = new CActiveForm();

if(isset($_POST["g-recaptcha-response"])){
  $captcha->response = $_POST["g-recaptcha-response"];
}
if(is_array($_POST['Contato'])){
  if($captcha->validate()){

    $model->attributes = $_POST['Contato'];
    $model->data = date('d/m/Y H:i:s');
    $model->ip = $_SERVER['REMOTE_ADDR'];

    if($model->save()){
      $model = new Contato();
      $sucesso = 1;
      header("Location: contato#fale-conosco?sucesso=1");
    }

    $erro = CHtml::errorSummary($model);

  }else{
    $erro = '<div class="errorSummary">Falha na verificação de segurança, por favor, marque a opção "Não sou um robô"</div>';
  }
}*/
?>
<?
$model = new Invista();
if(is_array($_POST['Invista'])){
	$model->attributes = $_POST['Invista'];
	$model->data = date('d/m/Y H:i:s');
	$model->ip = $_SERVER['REMOTE_ADDR'];

	if($model->save()){
		$model = new Invista();
		$sucesso = 1;
		header("Location: empreendimentos?sucesso=1#invista");
	}
}
$erro = CHtml::errorSummary($model);
$form = new CActiveForm();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TOT Incorpora&ccedil;&otilde;es - Chapec&oacute;</title>
<?php include("header.php"); ?>
<style type="text/css"><?php echo file_get_contents ('css/fancybox.css');?> <?php echo file_get_contents ('css/slick.css');?><?php echo file_get_contents ('css/formularios.css');?></style>
</head>
<body class="empreendimentos_infos">
<?php
  $criteria = new CDbCriteria();
  $criteria->order = 'idempreendimento desc';
  $criteria->addCondition( "ativo = 1" );
  $empreendimentos = Empreendimento::model()->findAll( $criteria );
  foreach ( $empreendimentos as $empreendimento ) {
?>
  <header>
    <div id="topo" data-aos="fade-down" data-aos-duration="1000"><?php include("topo.php"); ?></div>
    <div id="banner"><?php include("banner_lista.php"); ?></div>
  </header>
  <section class="destaque" data-aos="fade-down" data-aos-duration="1000">
    <div class="conteudo">
      <h2><span><img src="img/banner_localizacao.svg" width="52" height="65" alt="O 1&ordm; empreendimento da Housi em Chapec&oacute;"/></span>O 1&ordm; empreendimento<br />da Housi em Chapec&oacute;<br />est&aacute; localizado no ponto<br />alto do centro de cidade.</h2>
      <h3><?=$empreendimento->chamada?></h3>
    </div>
  </section>
  <section class="diferenciais">
    <div class="conteudo">
    <?
      $clear=0;
      $criteria = new CDbCriteria();
      $criteria->order = 'iddiferencial asc';
      $criteria->addCondition( "ativo = 1" );
      $diferenciais = Diferencial::model()->findAll( $criteria );
      foreach ( $diferenciais as $diferencial ) {
        $clear++;
        if ($clear%2==0){
          $efeito = "data-aos='fade-up'";
        }else{
          $efeito = "data-aos='fade-up'";
        }
    ?>
      <div class="caracteristicas" <?=$efeito?> data-aos-duration="1000">
        <div><img src="extranet/uploads/Diferencial/<?=$diferencial->icone?>" alt="<?=$diferencial->titulo?>"/></div>
        <div><?=$diferencial->texto?></div>
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
          $criteria = new CDbCriteria();
          $criteria->order = 'ordem asc';
          $criteria->addCondition( "ativo = 1" );
          $caracteristicas = Caracteristica::model()->findAll( $criteria );
          foreach ( $caracteristicas as $caracteristica ) {
        ?>
          <div>
            <div class="sobre_lista">
              <div>
                <a>
                <span class="ordem"><?=$caracteristica->ordem?></span>
                <span class="tit"><?=$caracteristica->titulo?></span>
                <span class="area"><?=$caracteristica->area?></span>
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
  <section><div><img src="extranet/uploads/Empreendimento/<?=$empreendimento->imagem?>" width="1920" height="1081" class="imgfull" alt="<?=$empreendimento->chamada?>"/></div></section>
  <section class="assessoria">
    <div class="conteudo">
      <div class="coluna_esq"><?=$empreendimento->video_titulo?></div>
      <div class="coluna_dir">
        <div>
          <?
            $criteria = new CDbCriteria();
            $criteria->order = 'idassessoria asc';
            $criteria->addCondition( "ativo = 1" );
            $assessorias = Assessoria::model()->findAll( $criteria );
            foreach ( $assessorias as $assessoria ) {
          ?>
            <div class="assessoria_lista">
              <div class="icone"><img src="extranet/uploads/Assessoria/<?=$assessoria->icone?>" height="65" alt="<?=$assessoria->titulo?>"/></div>
              <div class="texto"><?=$assessoria->texto?></div>
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
          $criteria = new CDbCriteria();
          $criteria->order = 'idvideo asc';
          $criteria->addCondition( "ativo = 1" );
          $videos = Video::model()->findAll( $criteria );
          foreach ( $videos as $video ) {
            if ($video->video != NULL){
        ?>
          <div><a href="<?=$video->video?>" class="various fancybox"><div class="play"><i class="icon-play"></i></div><img src="img/_del/video.jpg" width="1333" height="679" class="imgfull" alt="<?=$video->titulo?>"/></a></div>
        <?
          }else{
        ?>  
          <div><img src="extranet/uploads/Video/<?=$video->imagem?>" width="1333" height="679" alt="<?=$video->titulo?>" class="imgfull"/></div>
        <?
            }
          }
        ?>      
      </div>
    </div>
  </section>
<?php
  }
?>  
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
      <?
        if(!empty($erro)){
      ?>
        <div class="error margin20"><?=$erro;?></div>
      <?
        }if($_GET['sucesso'] == 1){
      ?>
        <div class="sucesso_msg">Contato enviado com sucesso. Obrigado!</div>
      <?
        }
      ?>
      <form id="invista" name="form1" method="post" action="empreendimentos#invista">
        <input type="hidden" name="grava" value="1" />
        <?php echo $form->textField($model,'nome',array('class'=>'colunas','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('nome'))); ?>
        <?php echo $form->textField($model,'telefone',array('class'=>'colunas col_esq','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('telefone'))); ?>
        <?php echo $form->textField($model,'email',array('class'=>'colunas col_dir','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('email'))); ?>
        <?php echo $form->textField($model,'endereco',array('class'=>'colunas col_esq','maxlength'=>100,'placeholder'=>$model->getAttributeLabel('endereco'))); ?>
        <div class="colunas col_dir opcoes">
          <label>Desejo ser:</label><span class="limpa"></span>
          <label class="morador" for="morador">Morador</label><input type="radio" value="Morador" id="morador" name="Invista[opcao]" class="radio" /><span class="limpa"></span>
          <label for="investidor">Investidor</label><input type="radio" value="Investidor" id="investidor" name="Invista[opcao]" class="radio" />
          <div class="clear"></div>
        </div>
        <div class="colunas col_esq captcha"><?// $captcha->create(); ?></div>
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
    height      : '50%',
    autoSize    : true,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
})  
</script> 
</body>
</html>