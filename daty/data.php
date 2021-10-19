<?php

setlocale(LC_ALL, "polish");

echo "<hr>";
echo "Dzień miesiąc rok ".date('d-m-Y')."<br>";

echo "<hr>";

echo date('m-d-Y')."<br>";
echo date('d-F-Y')."<br>";
echo date('d-M-Y')."<br>";
echo date('l dS F Y')."<br>";
if (date('L')==1) echo "przystepny<br>"; else echo "nieprzystepny<br>";
echo strftime('%d %B %Y')."<br>";

echo "<hr>";

echo date("G:i:s")."<br>";
echo date("H:i:s")."<br>";
echo date("h:i:sa")."<br>";

echo "<hr><pre>";
$date = getdate();
print_r($date);

echo "</pre><hr>";

echo $date['seconds'];

echo "<hr>";

$today = mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today."<br>";
echo ($today/(60*60*24*365))."<br>";

 ?>
<script>setTimeout(()=>{window.location.reload();}, 1001)</script>
