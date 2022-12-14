<?php

/**
 * This is the model base class for the table "contato".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Contato".
 *
 * Columns in table "contato" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $idcontato
 * @property string $ip
 * @property string $data
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string $ativo
 *
 */
abstract class BaseContato extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'contato';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Contatos', $n);
	}

	public static function representingColumn() {
		return array('nome');
	}

	public function rules() {
		return array(
			array('ip, nome, email, telefone', 'length', 'max'=>100),
			array('ativo', 'length', 'max'=>1),
			array('data', 'safe'),
			array('email', 'email'),
			array('nome, email, telefone', 'required'),
			array('ip, data, nome, email, telefone, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idcontato, ip, data, nome, email, telefone, ativo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'idcontato' => Yii::t('app', 'Idcontato'),
			'ip' => Yii::t('app', 'Ip'),
			'data' => Yii::t('app', 'Data'),
			'nome' => Yii::t('app', 'Nome'),
			'email' => Yii::t('app', 'E-mail'),
			'telefone' => Yii::t('app', 'Telefone'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;
		$criteria->compare('idcontato', $this->idcontato);
		$criteria->compare('ip', $this->ip, true);
		$criteria->compare('data', $this->data, true);
		$criteria->compare('nome', $this->nome, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('telefone', $this->telefone, true);
		$criteria->compare('ativo', $this->ativo, true);
		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
	public function afterSave(){
		$message = new YiiMailMessage;
		$message->view = 'contato';
		$message->setBody(array('contato' => $this),'text/html','latin1');
		$message->subject = 'Contato'.' - '.date('d/m/Y H:i:s');
		$message->addTo(Yii::app()->params['email_contato']);
		$message->setReplyTo($this->email);
    $message->setFrom(array('naoresponda@alavancaemails.com.br'=>Yii::app()->name));
    Yii::app()->mail->send($message);
	}  
}