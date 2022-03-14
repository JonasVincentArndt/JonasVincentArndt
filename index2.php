<html>
<head>
    <link rel="icon" type="image/x-icon" href="Bild36.jpg">
<title>Gestaltungs&uuml;bersicht</title>
</head>
<font color="F57C0D" size="30" face="Arial black"style="border-style:Outset;border-width:thick;border-color:orange;background-color:#0D1402;">Gestaltungsübersicht</font></br></br>
<font color="#F7ECF9" size="4" face="Arial black">Hier sehen sie die von ihnen vorgenommene Gestaltung</br>
</html>
<?php	 
     $Verbindung = mysqli_connect("localhost","root","","meinedb");
	 
	 if (!$Verbindung)     //testet den Datenbankzugriff
	 {
	 echo "keine Verbindung !";
	 }
	 else
	 {

 
 
 //__________________________ Anpassen ()
$sql = "SELECT * FROM design";
$result = mysqli_query($Verbindung,$sql);
?>
<html>

<body bgcolor=black>
<center>
<table bgcolor="F57C0D" width =100% border=1>
  <tr>
    <th>Bueronummer </th> 
    <th>Name</th>
	<th>Wandfarbe</th>
	<th>Holz</th>
	<th>Moebelfarbe</th>
	<th>Fensterrollofarbe</th>
	<th>Gardinenfarbe</th>
	<th>Farbe der Tischunterlage</th>
	<th>Farbe der Stuhlpolsterung</th>
	<th>Farbe der Heizung</th>
	<th>Farbe der Tischlampe</th>
	<th>Farbe des Kühlgeraetes</th>
 </tr>

<?php


while($dsatz = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $dsatz["bueronummer"] . "</td>";
    echo "<td>" .  $dsatz["name"] . "</td>";
	echo "<td>" .  $dsatz["wandfarbe"] . "</td>";
	echo "<td>" . $dsatz["holz"] . "</td>";
	echo "<td>" . $dsatz["moebelfarbe"] . "</td>";
	echo "<td>" . $dsatz["fensterrollofarbe"] . "</td>";
	echo "<td>" . $dsatz["gardinenfarbe"] . "</td>";
	echo "<td>" . $dsatz["farbedertischunterlage"] . "</td>";
	echo "<td>" . $dsatz["farbederstuhlpolsterung"] . "</td>";
	echo "<td>" . $dsatz["farbederheizung"] . "</td>";
	echo "<td>" . $dsatz["farbedertischlampe"] . "</td>";
	echo "<td>" . $dsatz["farbedesKuehlgeraetes"] . "</td></tr>";
         // usw.
     }
?>
</table>
<form method="get" action="http://localhost/Index.php" >
         <input type="submit" value=" weiter zur B&uuml;roverteilung"> 
    </form>
<Form method="get" action="http://localhost/eingabe.html" >
         <input type="submit" value=" weiter zur Eingabeseite">
		 </form>	
<Form method="get" action="http://localhost/Gestaltung.html" >
         <input type="submit" value="zur&uuml;ck zur Gestaltung">
		 </form>
</body>

<?php	 
//---------------------------
 
	 echo"verbindung!";
	 mysqli_close($Verbindung);
	 };
?>