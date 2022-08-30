<?php

Yii::import('application.models._base.BaseEmpreendimento');

class Empreendimento extends BaseEmpreendimento
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
    
    
    public function init(){
  
    }
    
    public function beforeSave(){
		if($this->imagem != "")
				unset($this->imagem);
		//{{beforeSave}}
		return parent::beforeSave();
	}
	
	public function afterFind(){
		//{{afterFind}}
		return parent::afterFind();
	}
    
    public function behaviors(){
    	return array(
			'Imagem' => array(
				  'class' => 'ext.behaviors.AttachmentBehavior',
				  'attribute' => 'imagem',
				  'fallback_image' => 'img/imagem_nao_cadastrada.png',
				  'attribute_delete' => 'imagem_delete',
				  /*
				  'attribute_size' => 'imagem_tamanho',
				  'attribute_type' => 'imagem_tipo',
				  'attribute_ext' => 'imagem_ext',
				  */
				  'path' => "uploads/:model/imagem_:id_".time().".:ext",
				  'styles' => array(
					  'p' => '200x200',
					  'g' => '800x800',
				)          
			),
        	//{{behaviors}}
        );
    }
    
        
}