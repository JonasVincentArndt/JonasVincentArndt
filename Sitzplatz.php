<html>
<head>
<link rel="icon" type="image/x-icon" href="bild36.jpg">
<title>Sitzplatz</title>
</head>
<body bgcolor="F57C0D">
</body>
</html>
<?php
$bueronummer=($_GET['bueronummer']);
$vorname=($_GET['vorname']);
$name=($_GET['name']);
$Sitzplatz=($_GET['sitzplatz']);
$Firmenplätze=($_GET['Firmenplätze']);
$firma=($_GET['firma']);

if(!$bueronummer||!$vorname||!$name||!$Sitzplatz||!$Firmenplätze||!$firma)
{
	echo "Bitte alle Felder ausfüllen!";
	 exit;
};
        $Verbindung = mysqli_connect("localhost","root","","Sitzplatz_Firma");
		
		if (!$Verbindung)     //testet den Datenbankzugriff
	 {
	 echo "keine Verbindung !";
	 }
	 else
	 { 
echo $bueronummer;
echo $vorname;
echo $name;
echo $Sitzplatz;
echo $Firmenplätze;
echo $firma;

echo mysqli_error($Verbindung);
if(mysqli_num_rows(mysqli_query($Verbindung, "SELECT * FROM verteilung WHERE Sitzplatz= '".$Sitzplatz."'"))){
	echo "Der von ihnen gewünschte Platz , in dem von ihrer Firma gemieteten Büro ist leider bereits vergeben, wir bitten sie daher sie einen anderen Platz aus zusuchen, die noch freien Plätze in dem Büro finden sie in unserer Liste zur Sitzplatzverteilung !";
}
else
{
$sql="insert into verteilung (bueronummer,vorname,name,Sitzplatz,Firmenplätze,firma) values ('" . $bueronummer . "','" . $vorname . "','" . $name . "','" . $Sitzplatz . "','" . $Firmenplätze . "','" . $firma . "');";
?>
<form method="get" action="http://localhost/index3.php" >
         <input type="submit" value="Weiter"> 
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
	file_get_contents("index3.php");	 ?>
	 </br>
	 <form method="get" action="http://localhost/Sitzplatz.html" >
         <input type="submit" value="zur&uuml;ck zur Sitzplatzverteilung">
		 </form>
<form method="get" action="http://localhost/Index3.php" >
         <input type="submit" value=" weiter zur Sitzplatzverteilung"> 
    </form>		 