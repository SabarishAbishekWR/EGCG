<?php
$sqlcon = new mysqli("localhost", "root", "", "EGCG");
$pos = $_GET['pos'];
$com = $_GET['comp'];
$query = "Select * from egcgcont where position='$pos' and compound='$com' ";
$sqliconnect = $sqlcon -> query($query);
while($row = $sqliconnect->fetch_assoc())
{
    $sqliconnect1 = $row["comp_name"];
    $sqliconnect2 = $row["position"];
    $sqliconnect3 = $row["compound"];
    $sqliconnect4 = $row["docking"];
    $sqliconnect5 = $row["hmox"];
    $sqliconnect6 = $row["antiox"];
    $sqliconnect7 = $row["image"];
    $sqliconnect8 = $row["ames"];
    $sqliconnect9 = $row["hepato"];
    $sqliconnect10 = $row["comp1"];
    $sqliconnect11 = $row["comp1.1"];
}
?>