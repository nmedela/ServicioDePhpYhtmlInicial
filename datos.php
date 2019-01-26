
<?php
$dato="sisisi";

if ($_POST[encenderprincipal]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/encenderprincipal.py");
 $dato="Luz principal encendida";
}
if ($_POST[zl1pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl1pos0.py");
}
if ($_POST[zl1pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl1pos1.py");
}
if ($_POST[zl1pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl1pos3.py");

}
if ($_POST[zl1pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl1pos2.py");
}
if ($_POST[zl1pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl1pos4.py");
}

if ($_POST[apagarprincipal]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zzzpruebaCambioEstado.py 0 36");
 $dato="Luz principal apagada";
 
}
if ($_POST[zl6pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl6pos0.py");
}
if ($_POST[zl6pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl6pos1.py");
}
if ($_POST[zl6pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl6pos3.py");

}
if ($_POST[zl6pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl6pos2.py");
}
if ($_POST[zl6pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl6pos4.py");
}


if ($_POST[zl5pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl5pos0.py");
}
if ($_POST[zl5pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl5pos1.py");
}
if ($_POST[zl5pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl5pos3.py");

}
if ($_POST[zl5pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl5pos2.py");
}
if ($_POST[zl5pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl5pos4.py");
}


if ($_POST[zl4pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl4pos0.py");
}
if ($_POST[zl4pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl4pos1.py");
}
if ($_POST[zl4pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl4pos3.py");

}
if ($_POST[zl4pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl4pos2.py");
}
if ($_POST[zl4pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl4pos4.py");
}


if ($_POST[zl3pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl3pos0.py");
}
if ($_POST[zl3pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl3pos1.py");
}
if ($_POST[zl3pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl3pos3.py");

}
if ($_POST[zl3pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl3pos2.py");
}
if ($_POST[zl3pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl3pos4.py");
}

if ($_POST[zl2pos0]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl2pos0.py");
}
if ($_POST[zl2pos1]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl2pos1.py");
}
if ($_POST[zl2pos3]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl2pos3.py");

}
if ($_POST[zl2pos2]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl2pos2.py");
}
if ($_POST[zl2pos4]){
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zl2pos4.py");
}


if ($_POST[apagarprincipal]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/apagarprincipal.py");
 $dato="Luz principal apagada";
 
}

if ($_POST[encenderizquierda]){

 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/encenderizquierda.py");
 $dato="Luz izquierda encendida";
}
if ($_POST[apagarizquierda]){  
echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/apagarizquierda.py"); 
 $dato="Luz izquierda apagada";

}
if ($_POST[encenderderecha]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/encenderderecha.py"); 
 $dato="Luz derecha encendida";

}
if ($_POST[apagarderecha]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/apagarderecha.py"); 
 $dato="Luz derecha apagada";

}
if ($_POST[atenuarambas]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/atenuar.py"); 
 $dato="Luces laterales atenuadas";

}
if ($_POST[encendertodas]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/encendertodas.py"); 
 $dato="Todas las luces encendidas";

}
if ($_POST[apagartodas]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/apagartodas.py"); 
 $dato="Todas las luces apagadas";

}
if ($_POST[escena1]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zzzpruebaCambioEstado.py 0 32"); 
 $dato="Escena 1 activada";

}
if ($_POST[escena2]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zzzpruebaCambioEstado.py 0 25"); 
 $dato="Escena 2 activada";

}
if ($_POST[escena3]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/zzzpruebaCambioEstado.py 0 15"); 
 $dato="Escena 3 activada";

}

if ($_POST[encenderaudio]){  
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/encendermusica.py"); 
 $dato="Equipo encendido";

}
if ($_POST[apagaraudio]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/apagaraudio.py");
 $dato="Equipo apagado";

}
if ($_POST[volmas1]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/volumenmas.py");
}
if ($_POST[volmenos1]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/volumenmenos.py");
}
if ($_POST[volmas2]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/volumenmas2.py");
}
if ($_POST[volmenos2]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/volumenmenos2.py");
}
if ($_POST[mute]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/mute.py");
}

if ($_POST[bassmas]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/bassmas.py");
}
if ($_POST[bassmenos]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/bassmenos.py");
}
if ($_POST[treblemas]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/treblemas.py");
header('Location: audio.html');
}
if ($_POST[treblemenos]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/treblemenos.py");

}

if ($_POST[reset]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/iniciaraudio.py");
 $dato="Se restablecieron los parametros";

}

if ($_POST[telepower]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/cr.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[reset]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/iniciaraudio.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[televolmas]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crvolmas.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[televolmenos]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crvolmenos.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[telecanmas]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crchmas.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[telecanmenos]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crchmenos.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[telesleep]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crsleep.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[telearriba]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crarriba.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[teleinput]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crinput.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[teleizquierda]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crizquierda.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[teleok]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crok.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[telederecha]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crderecha.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[teleback]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crback.py");
 $dato="Se restablecieron los parametros";

}
if ($_POST[teleabajo]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crabajo.py");
 $dato="Se restablecieron los parametros";
}
if ($_POST[teleset]){
 echo exec("sudo python2.7 /usr/lib/python2.7/dist-packages/RPi/crset.py");
 $dato="Se restablecieron los parametros";

}






if($_POST[pagina]=="app"){
 echo $dato;
}else{
if ($_POST[pagina] == "luces.html"){
header('Location: ' . $_POST[pagina]);
}else{
header('Location: audio.html');
}}
?>




