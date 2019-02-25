<html>
<head>
<link rel="icon" href="http://localhost:3000/Icon.png">
<style>
body{
    background-color:goldenrod;
    color:red;
    text-shadow: 1px 1px blue;
}
</style>
</head>
<?php
$A1_10 = $_GET['$1_10'];
$A11_50 = $_GET['$11_50'];
$A51_100 = $_GET['$51_100'];
$A101_500 = $_GET['$101_500'];
$A501_1000 = $_GET['$501_1000'];
$A1_10_Points = 100;
$A11_50_Points = 500;
$A51_100_Points = 1000;
$A101_500_Points = 5000;
$A501_1000_Points = 10000;
$A1_10_Day = 10; //change daily for picking
$A11_50_Day = 50; //change daily for picking
$A51_100_Day = 100; //change daily for picking
$A101_500_Day = 500; //change daily for picking
$A501_1000_Day = 1000; //change daily for picking
$A1_10_Max = 10;
$A11_50_Max = 50;
$A51_100_Max = 100;
$A101_500_Max = 500;
$A501_1000_Max = 1000;
if($A1_10 == $A1_10_Day){
echo "$A1_10_Points"."<br>" ;
}
else{
echo "Sorry You Didn't Win Any Points"."<br>";
}
if($A11_50 == $A11_50_Day){
echo "$A11_50_Points"."<br>" ;
}
else{
echo "Sorry You Didn't Win Any Points"."<br>";
}
if($A51_100 == $A51_100_Day){
echo "$A51_100_Points"."<br>" ;
}
else{
echo "Sorry You Didn't Win Any Points"."<br>";
}
if($A101_500 == $A101_500_Day){
echo "$A101_500_Points"."<br>" ;
}
else{
echo "Sorry You Didn't Win Any Points"."<br>";
}
if($A501_1000 == $A501_1000_Day){
echo "$A501_1000_Points"."<br>" ;
}
else{
echo "Sorry You Didn't Win Any Points"."<br>";
}
?>