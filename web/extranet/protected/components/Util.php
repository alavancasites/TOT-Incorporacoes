<?
class Util{
	
	/*
	//Exemplos de formata��o de data
	$data_teste = '28/06/1987 23:22:00';
	echo "data: ".Util::formataDataHora($data_teste,'dd/MM/yyyy HH:mm:ss','d/m/Y H:i');
	echo "<br/>data_app: ".Util::formataDataApp('1987-06-28');
	echo "<br/>data_hora_app: ".Util::formataDataHoraApp('1987-06-28 23:22:21');
	echo "<br/>data_bd: ".Util::formataDataBanco('28/06/1987');
	echo "<br/>data_hora_bd: ".Util::formataDataHoraBanco('28/06/1987 23:22:21');
	*/
	
	public static function formataDataBanco($data){
		return Util::formataDataHora($data,Yii::app()->locale->getDateFormat(),'Y-m-d');
	}
	
	public static function formataDataHoraBanco($data){
		return Util::formataDataHora($data,Yii::app()->locale->getDateFormat().' '.Yii::app()->locale->getTimeFormat(),'Y-m-d H:i:s');	
	}
	
	public static function formataDataHoraApp($data){
		return Util::formataDataHora($data,'yyyy-MM-dd HH:mm:ss','d/m/Y H:i:s');
	}
	
	public static function formataDataApp($data){
		return Util::formataDataHora($data,'yyyy-MM-dd','d/m/Y');
	}
	
	public static function resumeData($data){
		return substr($data,0,11);
	}
	
	public static function formataDataHora($data,$formato_entrada,$formato_saida){
		$tamanho_string = strlen($formato_entrada);
		$data = substr($data,0,$tamanho_string);
		$data = str_pad($data,$tamanho_string,':00');
		return date($formato_saida,CDateTimeParser::parse($data,$formato_entrada));	
	}
	
	public static function formataTexto($texto_original = ""){
		
		if(empty($texto_original))
			return $texto_original;
		
		$texto = htmlentities($texto_original);
		
		$array_encontrar = array(
			"\n",
			"�",
		);
		$array_substituir = array(
			"<br/>",
			"-",
		);
		
		$texto = str_replace($array_encontrar,$array_substituir,$texto);
		
		return $texto;
	}
	
	public static function formataResumo($textoInteiro,$tamanho){
		$textoInteiro = strip_tags($textoInteiro);
		 if (strlen($textoInteiro)>$tamanho+25){
		  $posicao = strpos($textoInteiro ," ", $tamanho);
		  $textoParcial = strip_tags(substr ($textoInteiro, 0, $posicao)); //Pega o fragmento e elimina todas as tags html, caso existam.
		  $textoParcial .= "...";
		 }
		 else{
		  $textoParcial = strip_tags($textoInteiro);
		 }
		 return $textoParcial;
	}	
	public static function file_encode($var) {

		$var = strtolower($var);
		
		$var = ereg_replace("[����]","a",$var);	
		$var = ereg_replace("[���]","e",$var);	
		$var = ereg_replace("[�����]","o",$var);	
		$var = ereg_replace("[���]","u",$var);	
		$var = ereg_replace("[+]","",$var);	
		$var = str_replace("�","c",$var);
		$var = str_replace(" ","_",$var);
		
		
		return $var;
	}
        
        
	public static function soNumero($str) {
		return preg_replace("/[^0-9]/", "", $str);
	}
	
	public static function soLetras($str) {
		return preg_replace("/[^a-zA-Z\s]/", "", $str);
	}
        
	public static function formataMoedaFloat($valor) {
		return str_replace(",",".",(str_replace(".","",$valor)));
	}
	
	public static function formataFloatMoeda($valor) {
		return number_format($valor,2,',','.');
	}
	
	public static function formataTamanhoEmbed($embed,$width,$height){
		$embed = preg_replace('/height="(.*?)"/i', 'height="' . $height .'"', $embed);
		$embed = preg_replace('/width="(.*?)"/i', 'width="' . $width .'"', $embed);
		return $embed;
	}
	
	public static function removerAcentos($string) {
        $string = strtolower($string);
        $string = rtrim($string);
        $string = ltrim($string);
        $string = preg_replace("/[�����]/", "a", $string);
        $string = preg_replace("/[��]/", "", $string);
        $string = preg_replace("/[�����]/", "a", $string);
        $string = preg_replace("/[���]/", "e", $string);
        $string = preg_replace("/[���]/", "e", $string);
        $string = preg_replace("/[��]/", "i", $string);
        $string = preg_replace("/[��]/", "i", $string);
        $string = preg_replace("/[�����]/", "o", $string);
        $string = preg_replace("/[�����]/", "o", $string);
        $string = preg_replace("/[���]/", "u", $string);
        $string = preg_replace("/[���]/", "u", $string);
        $string = preg_replace("/�/", "c", $string);
        $string = preg_replace("/�/", "c", $string);
        $string = preg_replace("/[][><}{)(:;,!?*%~^`&#@]/", "", $string);
        $string = preg_replace("/ /", "-", $string);
        $string = str_replace("--", "-", $string);
        $string = str_replace("--", "-", $string);
        $string = str_replace(".", "", $string);
        return $string;
    }

}