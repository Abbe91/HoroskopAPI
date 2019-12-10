<?php 
    $jsondata =file_get_contents("horoscopeInfo.json");
    $json = json_decode($jsondata,true);
      // Här kan vi testa om visar något innan vi skrivar hela json filen
   // echo $json['horoscopels'][0]['name'];
    $output = "<ul>";
    foreach($json['horoscopels'] as $horoscopel){
        $output .="<h4>" .$horoscopel['name']."</h4>";
        $output .="<li>" .$horoscopel['gloss']."</li>";
        $output .="<li>" .$horoscopel['element']."</li>";
        $output .="<li>" .$horoscopel['longitude_start']."</li>";
        $output .="<li>" .$horoscopel['longitude_end']."</li>";
    }
    $output .="</ul>";
    echo $output;
  


?>