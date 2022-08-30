
<div class="form">
  <?php
  $form = $this->beginWidget( 'GxActiveForm', array(
    'id' => 'empreendimento-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
      'class' => 'form-horizontal',
      'enctype' => 'multipart/form-data',
      'action' => $this->createUrlRel( $this->action->id ),
    )
  ) );
  ?>
  <?
  $this->renderPartial( "//layouts/erros", array(
    'model' => $model,
  ) );
  ?>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'titulo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'titulo', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'chamada',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textArea($model, 'chamada',array('rows'=>'10','class'=>'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'frase',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'frase', array('maxlength' => 200,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'imagem',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->fileField($model, 'imagem', array('class' => 'input-xxlarge')); ?> <br/>
        <img style="margin-top:10px;" class="img-polaroid" src="<?php echo Yii::app()->request->baseUrl; ?>/<?=$model->Imagem->getAttachment('p');?>" />
        <?
        if ( !empty( $model->imagem ) ) {
          ?>
        <div style="margin-top:10px;">
          <label class="checkbox" for="<?=get_class($model)?>_imagem_delete"><?php echo $form->checkbox($model,'imagem_delete'); ?> Excluir imagem</label>
        </div>
        <?
        }
        ?>
      </dd>
      <dd style="margin-top: 10px"><strong>Tamanho recomendado:</strong> 1920x1080px</dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'video_titulo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->editorBox($model,'video_titulo','100%',500); ; ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'ativo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->checkBox($model, 'ativo'); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt>&nbsp;</dt>
      <dd>
        <button type="submit" class="btn">
        <?
        if ( $this->action->id == 'create' ) {
          ?>
        <i class="icon-plus"></i>&nbsp;Cadastrar
        <?
        } else {
          ?>
        <i class="icon-pencil"></i>&nbsp;Atualizar
        <?
        }
        ?>
        </button>
        <?
        if ( Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'index' ) ) {
          ?>
        <a class="btn" href="<?php echo $this->createUrlRel('index');?>"><i class="icon-chevron-left"></i> Voltar</a>
        <?
        }
        ?>
        <?
        if ( $this->action->id == 'update' && Yii::app()->user->obj->group->temPermissaoAction( $this->id, 'delete' ) ) {
          ?>
        <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idempreendimento));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
        <?
        }
        ?>
      </dd>
    </dl>
  </div>
  <?
  $this->endWidget();
  ?>
</div>
<!-- form -->