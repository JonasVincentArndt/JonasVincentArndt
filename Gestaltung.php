<html>
<head>
	<link rel="icon" type="image/x-icon" href="Bild36.jpg">
  <title>Eingangsbest&auml;tigung der Gestaltung</title>
</head>
<body bgcolor="F57C0D">
</body>
</html>
<?php
$bueronummer=($_GET['bueronummer']);
$name=($_GET['name']);
$wandfarbe=($_GET['wandfarbe']);
$holz=($_GET['holz']);
$moebelfarbe=($_GET['moebelfarbe']);
$fensterrollofarbe=($_GET['fensterrollofarbe']);
$gardinenfarbe=($_GET['gardinenfarbe']);
$farbedertischunterlage=($_GET['farbedertischunterlage']);
$farbederstuhlpolsterung=($_GET['farbederstuhlpolsterung']);
$farbederheizung=($_GET['farbederheizung']);
$farbedertischlampe=($_GET['farbedertischlampe']);
$farbedesKuehlgeraetes=($_GET['farbedesKuehlgeraetes']);

if(!$bueronummer||!$name||!$wandfarbe||!$holz||!$moebelfarbe||!$fensterrollofarbe||!$gardinenfarbe||!$farbedertischunterlage||!$farbederstuhlpolsterung||!$farbederheizung||!$farbedertischlampe||!$farbedesKuehlgeraetes)
	{
     echo "Bitte alle Felder ausfüllen!";
	 exit;
	 };
	   
	 $Verbindung = mysqli_connect("localhost","root","","meinedb");
	  
	 if (!$Verbindung)     //testet den Datenbankzugriff
	 {
	 echo "keine Verbindung !";
	 }
	 else
	 { 
echo $bueronummer;
echo $name;
echo $wandfarbe;
echo $holz;
echo $moebelfarbe;
echo $fensterrollofarbe;
echo $gardinenfarbe;
echo $farbedertischunterlage;
echo $farbederstuhlpolsterung;
echo $farbederheizung;
echo $farbedertischlampe;
echo $farbedesKuehlgeraetes;

echo mysqli_error($Verbindung);
if(mysqli_num_rows(mysqli_query($Verbindung, "SELECT * FROM design WHERE bueronummer = '".$bueronummer."'"))){
	echo "Das Büro ist mit der von ihnen gewünschten Gestaltung bereits vergeben, wir bitten sie daher ein anderes Büro zuwählen,die bereits vergebenen Büros finden sie in unserer Liste zur Büroverteilung !";
}
else
{
$sql="insert into design (bueronummer,name,wandfarbe,holz,moebelfarbe,fensterrollofarbe,gardinenfarbe,farbedertischunterlage,farbederstuhlpolsterung,farbederheizung,farbedertischlampe,farbedesKuehlgeraetes) values ('" . $bueronummer . "','" . $name . "','" . $wandfarbe . "','" . $holz . "','" . $moebelfarbe . "','" . $fensterrollofarbe . "','" . $gardinenfarbe . "','" . $farbedertischunterlage . "','" . $farbederstuhlpolsterung . "','" . $farbederheizung . "','" . $farbedertischlampe . "','" . $farbedesKuehlgeraetes . "');";
 ?>
 <form method="get" action="http://localhost/Index2.php" >
         <input type="submit" value="weiter"> 
    </form>	
<?php	
if (mysqli_query($Verbindung, $sql)) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($Verbindung);
}
}
	 }
  mysqli_close($Verbindung);
	file_get_contents("index2.php");	 ?>
	 </br>
	 <form method="get" action="http://localhost/Eingabe.html" >
         <input type="submit" value="zur&uuml;ck zur Eingabe">
		 </form>
		