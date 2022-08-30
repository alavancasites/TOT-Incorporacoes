<?php

/**
 * This is the model base class for the table "empreendimento".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Empreendimento".
 *
 * Columns in table "empreendimento" available as properties of the model,
 * followed by relations of table "empreendimento" available as properties of the model.
 *
 * @property integer $idempreendimento
 * @property string $titulo
 * @property string $chamada
 * @property string $frase
 * @property string $imagem
 * @property string $video_titulo
 * @property string $ativo
 *
 * @property Assessoria[] $assessorias
 * @property Caracteristica[] $caracteristicas
 * @property Video[] $videos
 */
abstract class BaseEmpreendimento extends GxActiveRecord {
	
    
    public $imagem_delete;
	    
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'empreendimento';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Empreendimentos', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo', 'length', 'max'=>100),
			array('frase', 'length', 'max'=>200),
			array('imagem', 'length', 'max'=>120),
			array('ativo', 'length', 'max'=>1),
			array('chamada, video_titulo', 'safe'),
			array('imagem', 'file', 'types'=>'jpg,png', 'allowEmpty'=>true),
			array('imagem_delete', 'length', 'max'=>1),
			array('titulo, chamada, frase, imagem, video_titulo, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idempreendimento, titulo, chamada, frase, imagem, video_titulo, ativo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'assessorias' => array(self::HAS_MANY, 'Assessoria', 'empreendimento_idempreendimento'),
			'caracteristicas' => array(self::HAS_MANY, 'Caracteristica', 'empreendimento_idempreendimento'),
			'videos' => array(self::HAS_MANY, 'Video', 'empreendimento_idempreendimento'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idempreendimento' => Yii::t('app', 'Idempreendimento'),
			'titulo' => Yii::t('app', 'Titulo'),
			'chamada' => Yii::t('app', 'Chamada'),
			'frase' => Yii::t('app', 'Frase'),
			'imagem' => Yii::t('app', 'Imagem'),
			'video_titulo' => Yii::t('app', 'Video Titulo'),
			'ativo' => Yii::t('app', 'Ativo'),
			'assessorias' => Yii::t('app', 'Assessoria'),
			'caracteristicas' => Yii::t('app', 'Características'),
			'videos' => Yii::t('app', 'Galeria'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idempreendimento', $this->idempreendimento);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('chamada', $this->chamada, true);
		$criteria->compare('frase', $this->frase, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('video_titulo', $this->video_titulo, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}