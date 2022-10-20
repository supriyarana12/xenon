<html>
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
<title>payment</title>
<script language= "JavaScript">
function msg()
{ 
   alert( "Thanks");
 var url="home.php";
  window.location = url ;
   return true;
}
</script>
</head>

<body bgcolor=pink>
<form>
<center>
<h1>Payment</h1><br>
<h2>Accepted Cards</h2></font>
<img src= "card.jpg ">
<br><br>
Name on Card<br>
<input type="text"  name="cardname" placeholder="Name "><br><br>
Credit Card number<br>
<input type="text"  name="cardnumber" placeholder=" 11-digit number"><br><br>
Exp <br>
<input type="text"  name="expmonth" placeholder="dd/mm/yy"><br><br>

CVV<br>
<input type="text" id="cvv" name="cvv" placeholder="352"><br><br>
<br>
<center>
<input type="button" name = b1 value="Payment" style="background-color:green; font-size:20; "onclick="msg();">
</center>
</form>
</center>
</body>
</html>


