<?php
if(Yii::app()->user->obj->group->temPermissaoAction($this->id,'index')){
	$this->breadcrumbs[$model->label(2)] = array('index');
}
else{
	$this->breadcrumbs[] = $model->label(2);
}
if($this->hasRel()){
	$this->breadcrumbs[$model->label(2)] = array('rel'=>$this->getRel());
}
$this->breadcrumbs[] = Yii::t('app','Visualizar');
?><div class="row-fluid">
  <div class="span12">
      <div class="w-box">
          <div class="w-box-header">
            <h4>Visualizar</h4>
          </div>
          <div class="w-box-content">
          
		  <? 
          $this->renderPartial("//layouts/sucesso",array(
              'success' => $_GET['success'],
          ));
          ?>      
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('titulo'));?></dt>
            <dd><?=Util::formataTexto($model->titulo)?></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('chamada'));?></dt>
            <dd><?=Util::formataTexto($model->chamada)?></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('frase'));?></dt>
            <dd><?=Util::formataTexto($model->frase)?></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('imagem'));?></dt>
            <dd><img style="margin-top:10px;" class="img-polaroid" src="<?php echo Yii::app()->request->baseUrl; ?>/<?=$model->Imagem->getAttachment('p');?>" /></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('video_titulo'));?></dt>
            <dd><?=$model->video_titulo?></dd>
          </dl>
        </div>
        <div class="formSep">
          <dl class="dl-horizontal">
            <dt><?=Util::formataTexto($model->getAttributeLabel('ativo'));?></dt>
            <dd><?=Util::formataTexto($model->ativo ? 'Sim' : 'Não')?></dd>
          </dl>
        </div>
     
     

	<?
	if(Yii::app()->user->obj->group->temPermissaoAction('assessoria','index')){
        ?>
        <div class="formSep">
            <dl class="dl-horizontal">
                <dt><?php echo GxHtml::encode($model->getRelationLabel('assessorias')); ?></dt>
                <dd>
                <?php
                if(count($model->assessorias) > 0){
                            echo GxHtml::openTag('ul');
                    foreach($model->assessorias as $relatedModel) {
                        echo GxHtml::openTag('li');
                        echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('assessoria/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                        echo GxHtml::closeTag('li');
                    }
                    echo GxHtml::closeTag('ul');
                }
                else{
                    echo '<i>Nenhum registro encontrado</i>';
                }
                ?>
                </dd>
            </dl>
        </div>
		<?
    }
	?>

	<?
	if(Yii::app()->user->obj->group->temPermissaoAction('caracteristica','index')){
        ?>
        <div class="formSep">
            <dl class="dl-horizontal">
                <dt><?php echo GxHtml::encode($model->getRelationLabel('caracteristicas')); ?></dt>
                <dd>
                <?php
                if(count($model->caracteristicas) > 0){
                            echo GxHtml::openTag('ul');
                    foreach($model->caracteristicas as $relatedModel) {
                        echo GxHtml::openTag('li');
                        echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('caracteristica/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                        echo GxHtml::closeTag('li');
                    }
                    echo GxHtml::closeTag('ul');
                }
                else{
                    echo '<i>Nenhum registro encontrado</i>';
                }
                ?>
                </dd>
            </dl>
        </div>
		<?
    }
	?>

	<?
	if(Yii::app()->user->obj->group->temPermissaoAction('video','index')){
        ?>
        <div class="formSep">
            <dl class="dl-horizontal">
                <dt><?php echo GxHtml::encode($model->getRelationLabel('videos')); ?></dt>
                <dd>
                <?php
                if(count($model->videos) > 0){
                            echo GxHtml::openTag('ul');
                    foreach($model->videos as $relatedModel) {
                        echo GxHtml::openTag('li');
                        echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('video/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                        echo GxHtml::closeTag('li');
                    }
                    echo GxHtml::closeTag('ul');
                }
                else{
                    echo '<i>Nenhum registro encontrado</i>';
                }
                ?>
                </dd>
            </dl>
        </div>
		<?
    }
	?>
     
     
         <div class="formSep">
              <dl class="dl-horizontal">
                  <dt>&nbsp;</dt>
                  <dd>
                  	<?
                    if(Yii::app()->user->obj->group->temPermissaoAction($this->id,'update')){
                        ?>
                        <a class="btn" href="<?php echo $this->createUrlRel('update',array('id'=>$model->idempreendimento));?>"><i class="icon-edit "></i> Editar</a>
                        <?
                    }
                    ?>          
                    <?
                    if(Yii::app()->user->obj->group->temPermissaoAction($this->id,'index')){
                        ?>
                        <a class="btn" href="<?php echo $this->createUrlRel('index');?>"><i class="icon-chevron-left"></i> Voltar</a>
                        <?
                    }
                    ?>
                    <?
                    if(Yii::app()->user->obj->group->temPermissaoAction($this->id,'delete')){
                        ?>
                        <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idempreendimento));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
                        <?
                    }
                    ?>           
                  </dd>
               </dl>
           </div>
          
		</div>
      </div>
  </div>
</div>