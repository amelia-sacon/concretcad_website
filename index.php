<?php
$page_title="Cadastru, topografie, geodezie";
$page_description="S.C. CONCRET CAD S.R.L. - Servicii de cadastru, topografie, geodezie";
$n=0;

include("includes/header.php");
?>
	<table width="100%"><tr><td>
	<h1>
	<script language="JavaScript"> 
	var message="S.C. CONCRET CAD S.R.L."
	var neonbasecolor="#006969";
	var neontextcolor="#AF0000";
	var flashspeed=50 
var n=0
if (document.all||document.getElementById){ 
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++) 
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
function neon(){

if (n==0){
for (m=0;m<message.length;m++)

crossref(m).style.color=neonbasecolor
}

crossref(n).style.color=neontextcolor
 if (n<message.length-1)
n++
else{ 
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
} 
}
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
 </script>
	</h1>


	
	<h3>Este o firma infiintata in anul 2011 si autorizata de catre Agentia Nationala de Cadastru si Publicitate Imobiliara, oferind servicii in domeniile:</h3>
	<ul>
	<li> Cadastrului </li>
	<li> Topografiei </li>
	<li> Geodeziei </li>
	<li> Cartografiei </li>
	<li> GIS </li>
	</ul></td>
	<td align="left"><img src="img/top.jpg" align="right" border="1" position="relative" size="contain" style="max-width:100%;height:auto;"/></td></table>

</div>

<?php
include("includes/footer.php");
?>