<header>
  <div class="row-fluid">
    <nav class="nav-icons">
      <div class="logo_cliente"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_menu.png" alt=""/></a></div>
      <div class="menu_pop">
        <?
          if ( Yii::app()->user->obj->group->temPermissaoAction( 'empreendimento', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('empreendimento/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Empreendimento</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'assessoria', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('assessoria/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Assessoria</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'diferencial', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('diferencial/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Diferenciais</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'caracteristica', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('caracteristica/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Caracter&iacute;sticas</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'video', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('video/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Galeria</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'invista', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('invista/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Interesse</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'contato', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('contato/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Contatos</span></a>
        <?
          }
        ?>
      </div>
      <div class="menu_suporte"> D&uacute;vidas ou suporte <a href="mailto:atendimento@alavanca.digital">atendimento@alavanca.digital</a> <a href="http://www.alavanca.digital" target="_blank">www.alavanca.digital</a> </div>
    </nav>
  </div>
</header>