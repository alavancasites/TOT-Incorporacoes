<? $linkMenu = str_replace(explode("/",""),"",current(explode("?",$_SERVER['REQUEST_URI'])));?>
<div class="menuButton"><i class="icon-menu"></i></div>
<div class="menuLinks">
  <a href="inicial" <?=(strpos($linkMenu,"inicial")!==false?"class='ativado'":"")?>>HOME</a>
  <a href="quem-somos" <?=(strpos($linkMenu,"quem-somos")!==false?"class='ativado'":"")?>>QUEM SOMOS</a>
  <a href="empreendimentos" <?=(strpos($linkMenu,"empreendimentos")!==false?"class='ativado'":"")?>>EMPREENDIMENTOS</a>
  <a href="contato" <?=(strpos($linkMenu,"contato")!==false?"class='ativado'":"")?>>CONTATO</a>
</div>