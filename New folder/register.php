<html>
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
<title> register </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
<script language= "JavaScript">
function msg()
{ 
   alert( "thanks");
 var url="login.php";
  window.location = url ;
   return true;
}
</script>
</head>
<body bgcolor= #3CB371>
<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVEVTS</font>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
     <a href="login.php " style="color: white">LOGIN</a>
    <a href="register.php "  style="color: white">REGISTER</a>
</div>
<br><br>
<div class=main>

<center>
<form> <br><br>
<h1>Registration Now</h1>
<table cellspacing=5 cellpadding=7>
<tr><td>Your Name :</td>
<td><input type="text" name="name " placeholder="Name" size="50"></td></tr>
<tr><td>Mobile number :</td>
<td><input type="text" name="number " placeholder="Mobile number" size="50"></td></tr>
<tr><td>Email Address :</td>
<td> <input type="text" name= "email" placeholder=" Email " size="50"> </td></tr>
<tr><td>Password : </td>
<td> <input type="Password" name="pass " placeholder="Password" size="50"></td></tr>
</table><br><br>
 
<input type="button" name = b1 value="REGISTER NOW" style="background-color:#C71585; font-size:20; "onclick="return msg();">

</center>
</form>
</body>
</html>
