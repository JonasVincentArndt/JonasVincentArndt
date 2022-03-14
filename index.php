<html>
<head>
    <link rel="icon" type="image/x-icon" href="Bild36.jpg">
<title>B&uuml;roverteilung</title>
</head>
<font color="F57C0D" size="30" face="Arial black"style="border-style:Outset;border-width:thick;border-color:orange;background-color:#0D1402;">Büroverteilung</font></br></br>
<font color="#F7ECF9" size="4" face="Arial black">Hier sehen sie die bereits vergebenen Büros</br>
</html>
<?php	 
     $Verbindung = mysqli_connect("localhost","root","","meinedatenbank");
	 
	 if (!$Verbindung)     //testet den Datenbankzugriff
	 {
	 echo "keine Verbindung !";
	 }
	 else
	 {

 
 
 //__________________________ Anpassen ()
$sql = "SELECT * FROM bueros";
$result = mysqli_query($Verbindung,$sql);
?>
<html>
<body bgcolor=black>
<center>
<table bgcolor="F57C0D" width =100% border=1>
  <tr>
    <th>ID </th> 
	<th>Firma</th>
	<th>Buero</th>
	<th>Anfangsdatum</th>
	<th>Enddatum</th>
	<th>Ausstattung</th>
	<th>Sitzplätze</th>
 </tr>

<?php


while($dsatz = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $dsatz["ID"] . "</td>";
	echo "<td>" .  $dsatz["Firma"] . "</td>";
	echo "<td>" . $dsatz["buero"] . "</td>";
	echo "<td>" . $dsatz["Anfangsdatum"] . "</td>";
	echo "<td>" . $dsatz["Enddatum"] . "</td>";
	echo "<td>" . $dsatz["ausstattung"] . "</td>";
	echo "<td>" . $dsatz["Sitzplätze"] . "</td></tr>";
         // usw.
     }
?>
</table>
<form method="get" action="http://localhost/Eingangsseite.html" >
         <input type="submit" value=" weiter zur Eingangsseite"> 
    </form>

<form method="get" action="http://localhost/Index2.php" >
         <input type="submit" value=" weiter zur Gestaltungs&uuml;bersicht"> 
    </form>
<form method="get" action="http://localhost/Sitzplatz.html" >
         <input type="submit" value=" weiter zur Sitzplatzauswahl"> 
    </form>
<form method="get" action="http://localhost/Wiedersehen.html" >
         <input type="submit" value="Weiter"> 
    </form>
</body>

<?php	 
//---------------------------
 
	 echo"verbindung!";
	 mysqli_close($Verbindung);
	 };
?>
