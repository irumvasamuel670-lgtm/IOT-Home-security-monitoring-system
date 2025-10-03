<?php
if (isset($_POST['ruth'])) {
    $Name = $_POST['Name'];
    
    
    
    $Location = $_POST['Location'];
    $Date="";
    $Identity="";
    $Phone = "";

    $Ctu = "Kacyiru";
    $Brt = "Gisozi";
    $Rdf = "Kicukiro";
    $Pdf = "Downtown";
    if ($Location == $Ctu ) {
        echo "$Name  ";
        echo "$Date 10/5/2000";
        echo "$Identity 1234567890789";
        echo "$Phone 07896213234";
    } 
    else if( $Location == $Brt){
        echo "$Name ";
        echo "$Date 23/6/1992";
        echo "$Identity 123456789909";
        echo "$Phone 0789652345";
    }
    else if( $Location == $Rdf){
         echo "$Name "; 
        echo "$Date 12/7/2007"; 
        echo "$Identity 1200698765445"; 
        echo "$Phone 0798765433";    
    }
    else if( $Location == $Pdf){
        echo "$Name "; 
        echo "$Date 26/8/2006";
        echo "$Identity 123456789009";
        echo "$Phone 0797345278";   
    }
    else {
        echo "$Name Unknown";
    }
}
?>
