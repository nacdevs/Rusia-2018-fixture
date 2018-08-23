<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="cssfixt/scorestyle.css">
  </head>
  <body>
    <?php
	
    $group=array("A","B","C","D","E","F","G","H");
    $rgroup=0;
    $pos;
    $equipo1;
    $equipo2;
    $tiempo;
    $status;
    $estadio;
    $score;    
	
	$countriesEN=array("Afghanistan","Albania","Algeria","Andorra","Angola","Antigua & Deps","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia Herzegovina","Botswana","Brazil","Brunei","Bulgaria","Burkina","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Central African Rep","Chad","Chile","China","Colombia","Comoros","Congo","Costa Rica","Croatia","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","East Timor","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Ivory Coast","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Korea North","South Korea","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Morroco","Mozambique","Myanmar"," {Burma}","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Romania","Russia","Rwanda","St Kitts & Nevis","St Lucia","Saint Vincent & the Grenadines","Samoa","San Marino","Sao Tome & Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Sudan","Spain","Sri Lanka","Sudan","Suriname","waziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","England","United States","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe");
	
	$countriesES=array("Afganistán","Albania","Argelia","Andorra","Angola","Antigua y Deps","Argentina","Armenia","Australia","Austria","Azerbaiyán","Bahamas","Bahrein","Bangladesh","Barbados","Bielorrusia","Bélgica","Belice","Benín","Bhután","Bolivia","Bosnia Herzegovina","Botswana","Brasil ","Brunei","Bulgaria","Burkina","Burundi","Camboya","Camerún","Canadá","Cabo Verde","Rep. Centroafricana","Chad","Chile","China","Colombia","Comoras","Congo","Costa-Rica","Croacia","Cuba","Chipre","República Checa","Dinamarca","Djibouti","Dominica","República Dominicana","Timor Oriental","Ecuador","Egipto","El Salvador","Guinea Ecuatorial","Eritrea","Estonia","Etiopía","Fiji","Finlandia","Francia","Gabón","Gambia","Georgia","Alemania","Ghana","Grecia","Granada","Guatemala","Guinea","Guinea- Bissau","Guyana","Haití","Honduras","Hungría","Islandia","India","Indonesia","Irán","Iraq","Irlanda","Israel","Italia","Costa de Marfil","Jamaica","Japón","Jordania","Kazajstán","Kenia","Kiribati","Corea del Norte","Corea","Kosovo","Kuwait ","Kirguistán","Laos","Letonia","Líbano","Lesotho","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Macedonia","Madagascar","Malawi","Malasia","Maldivas","Mali","Malta","Islas Marshall","Mauritania","Mauricio","México","Micrones ia","Moldavia","Mónaco","Mongolia","Montenegro","Marruecos","Mozambique","Myanmar","(Birmania)","Namibia","Nauru","Nepal","Holanda","Nueva Zelanda","Nicaragua","Níger","Nigeria","Noruega","Omán","Pakistán","Palau","Panamá","Papúa Nueva Guinea ","Paraguay","Perú","Filipinas","Polonia","Portugal","Qatar","Rumania","Rusia","Ruanda","San Cristóbal y Nieves","Santa Lucía","San Vicente y las Granadinas","Samoa","San Marino","Santo Tomé y Príncipe","Arabia Saudita","Senegal","Serbia ","Seychelles","Sierra Leona","Singapur","Eslovaquia","Eslovenia","Islas Salomón","Somalia","Sudáfrica","Sudán del Sur","España","Sri Lanka","Sudán","Surinam","wazilandia","Suecia","Suiza","Siria","Taiwán","Tayikistán","Tanzania","Tailandia","Togo","Tonga","Trinidad y Tobago","Túnez","Turquía","Turkmenistán","Tuvalu","Uganda","Ucrania","Emiratos Árabes Unidos","Reino-Unido","Estados Unidos","Uruguay","Uzbekistán","Vanuatu","Ciudad del Vaticano","Venezuela","Vietnam","Yemen","Zambia","Zimbabue");

	for($i=0 ; $i<8; $i++){
		${'jsonFix' . $i} = file_get_contents("jsons/json".$group[$i].".json");
	}	


    function strToArray($json){
      $decodedText = html_entity_decode($json);
      $jsonFix	= str_replace('\\', '', $decodedText);
      $dataFix = json_decode($jsonFix,true);
      $testFix = $dataFix["data"]["fixtures"];

      return $testFix;

    }

     ?>

<div class="container">
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6 ruslogo">

    </div>
    <div class="col-md-3">

    </div>
  </div>

</div>

<?php
	for($i=0 ; $i<8; $i++){	
	
	prntData( ${'jsonFix' . $i});
	}
	
	
function prntData($json){
	  $letra=$GLOBALS['group'];
	  $letcount=$GLOBALS['rgroup'];
	  echo '</div>
	  <div class="container" >
			  <div class="col-md-12" style="margin-top:50px">
			<h2 class="roboto">Grupo '.$letra[$letcount] .'</h2>
		  </div>
		</div>

	  <div class="container containall" style=";">'
	;
	
	$GLOBALS['rgroup']=$letcount+1;
	$testFix=strToArray($json);
	
	
	//Traductor

	for($i=0 ; $i<sizeof($testFix); $i++){		
		
		$equipo1f=$testFix[$i]["home_name"];
		$equipo2f=$testFix[$i]["away_name"];

		$countEN=$GLOBALS['countriesEN'];
		$countES=$GLOBALS['countriesES'];

    for($j=0; $j<sizeof($countEN); $j++){
		  if($equipo1f==$countEN[$j]){
			$equipo1f=$countES[$j];
			break;
      }}
	  
    for($k=0; $k<sizeof($countEN); $k++){
			if($equipo2f==$countEN[$k]){
			  $equipo2f=$countES[$k];
			  break;
        }}

    echo '<div class="col-md-4 roboto" style="margin-top:30px;">';
    echo '<div class="col-md-6 '.$equipo1f.' eq1"  style="height:150px;border-radius: 4px 0px 4px 0px;"><h3 class="my-4 white labels1">'.$equipo1f."</h3></div> ";
    echo '<div class="col-md-6 '.$equipo2f.' eq2"  style="height:150px;border-radius: 0px 4px 0px 4px;"><h3 class="my-4 white labels2">'.$equipo2f."</h3></div>";
    echo '<div class="col-md-11 white bar" id="bard"><h4 style=" "> Estadio: '.$testFix[$i]["location"].'</h4><h4"float:right;">Fecha: '.$testFix[$i]["date"].' Hora: '.$testFix[$i]["time"].'</h4></div>';
    echo '</div>';
      


  }
}

 ?>

 
   <script type="text/javascript">
	//.JS responsive
	
    if ($(window).width() < 1000) {
		var element = document.getElementByClass("eq1");
		element.classList.remove("col-md-6");
		element.classList.add("col-md-12");
		element.classList.add("flag");
		}

	if ($(window).width() < 1000) {
		  var element2 = document.getElementByClass("eq2");
		  element2.classList.remove("col-md-6");
		  element2.classList.add("col-md-12");
		  element2.classList.add("flag");
		  }


	if ($(window).width() < 1000) {
		  var element3 = document.getElementById("bard");
		  element3.classList.remove("col-md-11");
		  element3.classList.add("col-md-12");
		 }
		 
	$(function() {
		$('.eq1').hover(function() {
		$('.eq2').css('background-color', 'yellow');
	  }, function() {
		// on mouseout, reset the background colour
		$('#b').css('background-color', '');
	  });
	}); 
    </script>

  </body>
</html>
