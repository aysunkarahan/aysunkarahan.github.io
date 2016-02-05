<?php 
$max = $_POST["max"];
$min = $_POST["min"]; 
// xml okuma
$url = "http://www.mgm.gov.tr/ftpdata/analiz/sonsoa.xml";
try{
    $xml = simplexml_load_file($url);
    foreach($xml->sehirler as $val) {
        $data = $val['ili'];
        if($data == "ISTANBUL") {
          $max="Enyüksek sıcaklık :". $val->Mak."<br>";
          $max="Enydüşük sıcaklık :". $val->Min."<br>";
        }

    }
}catch(Exception $ex) {
    echo "XML Okuma Hatası :".$ex->getMessage();
}




?>
