<?php auto_copyright();?>
<?php 
function auto_copyright($startYear = null) {
	$thisYear = date('Y');
    if (!is_numeric($startYear)) {
		$year = $thisYear;
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) {
		echo "Copyright &copy; $thisYear - Todos os direitos reservados";
	} else {
		echo "Copyright &copy; $year&ndash;$thisYear - Todos os direitos reservados";
	}   
 } 
 ?>
<a href="https://www.alavanca.digital" target="_blank" rel="noopener">Desenvolvido por Alavanca Sites e Sistemas</a>