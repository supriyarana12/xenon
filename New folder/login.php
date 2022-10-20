<html>
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
<title> login </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">

//<script language= "JavaScript">
function msg()
{  if(document.form1.username.value == "")
  {
     alert ("Please enter a value");
     document.form1.username.focus();
    return false;
  }
   alert( "Thanks");
 var url="home.php";
  window.location = url ;
   return true;
}
//</script>
</head>
<body bgcolor = pink>
<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVEVTS</font>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
     <a href="login.php " style="color: white">LOGIN</a>
    <a href="register.php "  style="color: white">REGISTER</a>
</div>
<br><br>

<div class=main>
<center>

<form name="form1" action="action1.php" method="post">
<table cellpadding=7>
<h1>LOGIN</h1>
<tr><td>Email Address :</td>
<td> <input type="text" name = "username" placeholder="Email " size="50"> </td></tr>
<script language= "JavaScript">
document.form1.username.focus();
</script>
<tr><td>Password : </td>
<td> <input type="Password" name="pwd1 " placeholder="Password" size="50"></td></tr>
</table><br><br>

<a href="action1.php"> <input type="submit" name = b1 value="LOGIN NOW" style="background-color:#C71585; font-size:20; "onclick="return msg();"></a>

</form>
</body>
</html>
