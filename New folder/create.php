<html>
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
<title>create event</title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
<script language= "JavaScript">
function msg()
{ 
   alert( "thanks");
 var url="payment.php";
  window.location = url ;
   return true;
}
</script>
</head>
<body>
<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVENTS</font>
<font color=white> recreate your imaginations...</font> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="head.php "  style="color: white">Logout</a>
        <a href="contact.php "  style="color:white ">Contact Us</a>
        <a href="services.php "  style="color:white ">Services</a>
        <a href="create.php "  style="color:white ">Create Event</a>
        <a href="home.php " style="color:white ">Home</a>
&emsp;&emsp;&emsp;&emsp;
</div>
<br><br><br><br><br>
<form method= "post" action= "create.php" > <fieldset>
<center><font style= boardway size=40> <b><i><u> Create Event</u></i></b></font></center><br>
<br>
<center><font face="Book Antiqua" size="6">Minimum Booking Amount Rs. 1000/-</font></center>
<br>
TITLE : <input type="text" placeholder="event" name="title" required><br><br>
DATE TO :
<input type="date" name = "date1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DATE FROM : <input type="date" name = " date2 ">
<br><br>
TIME TO : <input type="time" name = " time1 "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
TIME FROM : <input type="time" name = " time2 ">
<br><br>

ENTERTAINMENTS:-<br><br>
<input type="checkbox" name="music"  value="music">
Music &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="dance"  value="dance">
Dance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="cartoons"  value="cartoons">
Cartoons <br><br>

DECORATIONS:- <br><br>
<input type="checkbox" name="light"  value="light">
Light &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="chair"  value="chair">
Chair &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="stage"  " value="stage">
Stage &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="flowers"  value="flowers">
Flowers <br><br>

FOOD:- <br><br>
<input type="checkbox" name="veg"  value="veg">
Veg &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;

<input type="checkbox" name="nonveg"  value="nonveg">
Non-Veg &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;

<input type="checkbox" name="veg+nonveg"  value="veg+nonveg">
Veg+Non-Veg <br><br>
NO. OF CHAIRS : <input type="text" placeholder="no.of chairs" name="chairs"><br><br>

ADDRESS : <input type="text" placeholder="enter address" name="address" required><br><br>

MOBILE NUMBER : <input type="number" size="10" placeholder="number" name="number"><br><br>

Email Id : <input type="email" placeholder="e-mail" name="email"><br><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<input type="RESET" name = " reset1" style="background-color:yellow; font-size:20;">&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="button" name = b1 value="BOOK WITH PAYMENT" style="background-color:green; font-size:20; "onclick="return msg();">

</form> <br><br>



