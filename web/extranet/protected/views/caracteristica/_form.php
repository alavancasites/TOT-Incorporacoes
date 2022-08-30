<div class="form">
  <?php
  $form = $this->beginWidget( 'GxActiveForm', array(
    'id' => 'caracteristica-form',
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
      <dt><?php echo $form->labelEx($model,'ordem',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'ordem', array('class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'empreendimento_idempreendimento',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->dropDownList($model, 'empreendimento_idempreendimento', GxHtml::listDataEx(Empreendimento::model()->findAllAttributes(null, true)), array('class' => 'input-xxlarge','empty'=>'Selecione...')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'titulo',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'titulo', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'area',array('class'=>'control-label')); ?> </dt>
      <dd> <?php echo $form->textField($model, 'area', array('maxlength' => 100,'class' => 'input-xxlarge')); ?> </dd>
    </dl>
  </div>
  <div class="formSep">
    <dl class="dl-horizontal">
      <dt><?php echo $form->labelEx($model,'imagem',array('class'=>'control-label')); ?> </dt>
      <dd>
        <?php
        $this->widget( 'application.extensions.Plupload.PluploadWidget', array(
          'model' => $model,
          'attribute' => 'imagem',
        ) );
        ?>
      </dd>
      <dd style="margin-top: 10px;"><strong>Tamanho da imagem:</strong> 660x440px</dd>
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
        <a class="btn btn-delete" href="<?php echo $this->createUrlRel('delete',array('id'=>$model->idcaracteristica));?>" style="margin-left:30px;"><i class="icon-trash"></i> Excluir</a>
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