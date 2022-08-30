<?php

/**
 * This is the model base class for the table "video".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Video".
 *
 * Columns in table "video" available as properties of the model,
 * followed by relations of table "video" available as properties of the model.
 *
 * @property integer $idvideo
 * @property integer $empreendimento_idempreendimento
 * @property string $titulo
 * @property string $video
 * @property string $imagem
 * @property string $ativo
 *
 * @property Empreendimento $empreendimento
 */
abstract class BaseVideo extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'video';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Galeria', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('empreendimento_idempreendimento', 'required'),
			array('empreendimento_idempreendimento', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('video', 'length', 'max'=>200),
			array('imagem', 'length', 'max'=>140),
			array('ativo', 'length', 'max'=>1),
			array('titulo, video, imagem, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idvideo, empreendimento_idempreendimento, titulo, video, imagem, ativo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'empreendimento' => array(self::BELONGS_TO, 'Empreendimento', 'empreendimento_idempreendimento'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idvideo' => Yii::t('app', 'Idvideo'),
			'empreendimento_idempreendimento' => Yii::t('app', 'Empreendimento'),
			'titulo' => Yii::t('app', 'Título'),
			'video' => Yii::t('app', 'Vídeo'),
			'imagem' => Yii::t('app', 'Imagem'),
			'ativo' => Yii::t('app', 'Ativo'),
			'empreendimento' => Yii::t('app', 'Empreendimento'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idvideo', $this->idvideo);
		$criteria->compare('empreendimento_idempreendimento', $this->empreendimento_idempreendimento);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('video', $this->video, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}