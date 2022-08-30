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
$this->breadcrumbs[] = Yii::t('app','Atualizar');
?>
<div class="row-fluid">
  <div class="span12">
      <div class="w-box">
          <div class="w-box-header">
            <h4><?=Yii::t('app','Atualizar');?></h4>
          </div>
          <div class="w-box-content">
			<div class="form">
	
				<?php $form = $this->beginWidget('GxActiveForm', array(
                    'id' => 'user-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions'=> array (
                        'class' => 'form-horizontal',
                        'enctype' => 'multipart/form-data',
                        'action' => $this->createUrlRel($this->action->id),
                    )
                ));
                ?> 
            
                <? 
                $this->renderPartial("//layouts/erros",array(
                    'model' => $model,
                ));
                ?>
				<? 
				if(count($erros = $model->getErrors()) <= 0){
					$this->renderPartial("//layouts/sucesso",array(
						'success' => $_GET['success'],
					));
				}
                ?>       
                
          		<ul class="nav nav-tabs" style="padding-left:200px;padding-top:20px;">
                          <li class="active"><a href="#"><?=Yii::t('app', 'Meus dados');?></a></li>
                          <li><a href="<?=$this->createUrl('user/password');?>"><?=Yii::t('app', 'Minha senha');?></a></li>
                        </ul>
                
                <div class="formSep">
                    <dl class="dl-horizontal">
                      <dt><?php echo $form->labelEx($model,'firstName',array('class'=>'control-label')); ?>
            		</dt>
                      <dd>
                        <?php echo $form->textField($model, 'firstName', array('maxlength' => 100,'class' => 'input-xxlarge')); ?>                 
                         
                    </dd>
                   </dl>
                </div>
                
                            
                <div class="formSep">
                    <dl class="dl-horizontal">
                      <dt><?php echo $form->labelEx($model,'lastName',array('class'=>'control-label')); ?>
           			 </dt>
                      <dd>
                        <?php echo $form->textField($model, 'lastName', array('maxlength' => 100,'class' => 'input-xxlarge')); ?>                 
                         
                    </dd>
                   </dl>
                </div>
                
                            
                <div class="formSep">
                    <dl class="dl-horizontal">
                      <dt><?php echo $form->labelEx($model,'email',array('class'=>'control-label')); ?>
            		</dt>
                      <dd>
                        <?php echo $form->textField($model, 'email', array('maxlength' => 100,'class' => 'input-xxlarge')); ?>                 
                         
                    </dd>
                   </dl>
                </div>
                
               
               <div class="formSep">
                  <dl class="dl-horizontal">
                      <dt>&nbsp;</dt>
                      <dd>
                      
                      <button type="submit" class="btn">
                        <i class="icon-pencil"></i>&nbsp;Atualizar
                      </button>
                         
                    </dd>
                   </dl>
               </div>
               
                
                <? 
                $this->endWidget(); 
                ?>
                
            </div>
            <!-- form --> 
          </div>
      </div>
  </div>
</div>
