<html>
<head>
    <link rel="icon" type="image/x-icon" href="Bild36.jpg">
<title>Sitzplatzverteilung</title>
</head>
<font color="F57C0D" size="30" face="Arial black"style="border-style:Outset;border-width:thick;border-color:orange;background-color:#0D1402;">Sitzplatzverteilung</font></br></br>
<font color="#F7ECF9" size="4" face="Arial black">Hier sehen sie die Sitzplatzverteilung in unseren B&uuml;ros</br>
</html>
<?php	 
     $Verbindung = mysqli_connect("localhost","root","","Sitzplatz_Firma");
	 
	 if (!$Verbindung)     //testet den Datenbankzugriff
	 {
	 echo "keine Verbindung !";
	 }
	 else
	 {

 
 
 //__________________________ Anpassen ()
$sql = "SELECT * FROM verteilung";
$result = mysqli_query($Verbindung,$sql);
?>
<html>

<body bgcolor=black>
<center>
<table bgcolor="F57C0D" width =100% border=1>
  <tr>
    <th>Bueronummer </th> 
    <th>Vorname</th>
	<th>Name</th>
    <th>Sitzplatz</th>
	<th>Firmenplätze</th>
	<th>Firma</th>
 </tr>

<?php


while($dsatz = mysqli_fetch_assoc($result)){
    echo "<tr><td>" . $dsatz["bueronummer"] . "</td>";
    echo "<td>" .  $dsatz["vorname"] . "</td>";
	echo "<td>" .  $dsatz["name"] . "</td>";
	echo "<td>" . $dsatz["Sitzplatz"] . "</td>";
	echo "<td>" . $dsatz["Firmenplätze"] . "</td>";
	echo "<td>" . $dsatz["Firma"] . "</td>";
         // usw.
     }
?>
</table>
<form method="get" action="http://localhost/index.php" >
         <input type="submit" value=" weiter zur B&uuml;roverteilung"> 
    </form>
<form method="get" action="http://localhost/Sitzplatz.html" >
         <input type="submit" value=" weiter zur Sitzplatzauswahl"> 
    </form>
<form method="get" action="http://localhost/eingabe.html" >
         <input type="submit" value=" weiter zur Eingabeseite"> 
    </form>	  
</body>

<?php	 
//---------------------------
 
	 echo"verbindung!";
	 mysqli_close($Verbindung);
	 };
?>