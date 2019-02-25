<!doctype>
<html>
<head>
<link rel="icon" href="http://localhost:3000/Icon.png">
<style>
.input{
background-image: linear-gradient(to right, seagreen, darkcyan, lightseagreen, lightblue, lightcyan, lightblue, lightseagreen, darkcyan, seagreen);
color: darkgoldenrod;
box-sizing: border-box;
border: 2px solid gold;
border-radius: 15px;
box-shadow: 2px 2px 10px 2px red;
text-shadow: 2px 2px gold;
}
.submit{
background-image: linear-gradient(to right, silver,gold,silver);
color: darkgoldenrod;
box-sizing: border-box;
border: 2px solid gold;
border-radius: 15px;
box-shadow: 2px 2px 10px 2px red;
text-shadow: 2px 2px gold;
}
body{
    background-color:goldenrod;
    color:forestgreen;
}
</style>
</head>
<body>
<form method="GET" action="http://localhost:3000/PHP/Programs/Number_Picker/PHP/Awnser.php">
1-10:<input class="input" type="number" name="$1_10" Required>
11-50:<input class="input" type="number" name="$11_50" Required >
51-100:<input class="input" type="number" name="$51_100" Required>
101-500:<input class="input" type="number" name="$101_500" Required>
501-1000:<input class="input" type="number" name="$501_1000" Required>
<input class="submit" type="submit" name="submit" value="Submit" Required/>
</form>
</body>
</html>