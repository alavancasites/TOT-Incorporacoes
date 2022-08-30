<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.padrao.min.js&amp;cid=<?=$cid?>"></script> 
<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/jquery.aos.min.js&amp;cid=<?=$cid?>"></script>
<script>AOS.init();</script>

<?php /*?>
<script type="text/javascript" src="gzip/gzip.php?arquivo=../jquery/init.js&amp;cid=<?=$cid?>"></script>
<?php */?>
<?php /*?><script>var purecookieTitle="Cookies.",purecookieDesc="Ao usar este site, você aceita automaticamente que usamos cookies.",purecookieLink='<a href="politica-privacidade.pdf" target="_blank">Política de privacidade</a>',purecookieButton="Aceito os termos";function pureFadeIn(e,o){var i=document.getElementById(e);i.style.opacity=0,i.style.display=o||"block",function e(){var o=parseFloat(i.style.opacity);(o+=.02)>1||(i.style.opacity=o,requestAnimationFrame(e))}()}function pureFadeOut(e){var o=document.getElementById(e);o.style.opacity=1,function e(){(o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)}()}function setCookie(e,o,i){var t="";if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()}document.cookie=e+"="+(o||"")+t+"; path=/"}function getCookie(e){for(var o=e+"=",i=document.cookie.split(";"),t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);if(0==n.indexOf(o))return n.substring(o.length,n.length)}return null}function eraseCookie(e){document.cookie=e+"=; Max-Age=-99999999;"}function cookieConsent(){getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};</script><?php */?>
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
