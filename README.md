# xenon
website on EVENT MANAGEMENT

Project Report
Event Management System
    	Submitted By:
	Supriya Rana 

About Project:



Project Title                     Event Management System

Objective                        Making a web based application which						will help to event organizing company to						organize and manage   their event more 						efficiently and smoothly.


Starting                            Date 15-06-2022

Completion                      Date 30-06-2022


Tools Used                             Wamp server, Notepad, MS Word.


Languages used                HTML, Java Script, PHP, and CSS.        
Action.php
<?php

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$country = $_POST["country_name"];
$email = $_POST["email_address"];
$subject = $_POST["subject_detail"];

$db = mysqli_connect("localhost","root","","testdb");

if(!$db)
{
    die("Connection failed: ");
}

    $sql="INSERT INTO tblemp(First_name,Last_name,Country,Email,Subject) VALUES ('$firstname','$lastname','$country','$email','$subject')";
    $result=mysqli_query($db,$sql);
 
 if(!$result)
 {
    echo mysqli_error();
 }
 else
 {
   echo "records added successfully.";
 }
 header("location:http://localhost/New%20folder/home.php");
mysqli_close($db);

?>
Action1.php
<?php

$email = $_POST["username"];
$pswd = $_POST["pwd1"];

$db = mysqli_connect("localhost","root","","testdb");

if(!$db)
{
    die("Connection failed: ");
}

    $sql="INSERT INTO signup(Email_address,Password) VALUES ('$email','$pswd')";
    $result=mysqli_query($db,$sql);
 
 if(!$result)
 {
    echo mysqli_error();
 }
 else
 {
   echo "records added successfully.";
 }
 header("location:http://localhost/New%20folder/home.php");
mysqli_close($db);

?>

CSS code
.header {
  overflow: hidden;
  background : black;
  position: fixed;
  top:0;
}
.header a{
  float: right;
  display : block;
 font-family:calibri;
 padding:14px 23px;
}
 .header a:hover{
    background :red;
    transition: all .4s ease;
}
.main{
margin-top:80px;
height:700px;
#background-color:orange;
background-size: cover;
}

Main
<html>
<head>
<title> event management </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
</head>
<body>
<div class="header" ><br>&emsp;
 <img src="download.jpg" height=100> </a><font color=white>recreate your imaginations...</font>&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     <a href="login.html " style="color: white">LOGIN</a>
    <a href="register.html "  style="color: white">REGISTER</a>
</div>
<br><br>
<div class="main ">
<br><br><br>&emsp;&emsp;
<img src="images (1).jpg"><br><br>
<CENTER><font size=6 , face=arial black, color=red><b> KEY EVENTS - BEST EVENT MANAGEMENT COMPANY IN TRICITY</font> 
<br><br><BR><BR>
<font size=20>What makes a good event??</font>  <br><br>
<font size=4>Creativity, cutomized staging, design, special effects, innovation, ideology, passion, etc are the aspects which a succesful event
 rely upon.<br><br>We at Key-Events strictly follow above mentioned asects to be able to manage events successfully. Key-Events
is one of the leading Events Management company in tricity having years of exerience in events management.<br><br><br><br></center>
<font size=6 , face=arial black, color=blue>TERMS & CONDITIONS</font>
<ul type=square> users terms
<li>The Useris required to read and accept all of the terms and conditions laid down in this Terms and Conditions (“Terms” or “Agreement”) and the linked Privacy Policy, before you use the applications, websites, content, products, and services (“Services”)made available to you by the Company on the Website.</li>
<li>All information accessed or viewed by the User is considered confidential and is for only authorized personnel or business purposes.</li>
<li>In case of Event Cancellation/postpone, the Booking Fees will not be refunded.</li>
<li>The Website takes no responsibility for the services that are provided by any third party vendors.</li>
<li>The right to use the Website is personal to the User and is not transferable to any other person or entity.</li>
<li>The User will only be issued a receipt for the money that you pay to the company at the time of registration for an event.</li>
<li>The Company and Organisers reserve the rights of frisk and restrict entry.</li>
<li>The Company do not take responsibility for the loss or theft of any personal belongings at the event venue or on the way of reaching event venue.</li>
</ul>
<ul> organizers terms
<li>The Organiser is required to read and accept all of the terms and conditions laid down in this Terms and Conditions (“Terms” or “Agreement”) and the linked Privacy Policy, before you use the applications, websites, content, products, and services (“Services”)made available to you by the Company on the Website.</li>
<li>All information accessed or viewed by the Organiser is considered confidential and is for only authorized personal or business purposes.</li>
<li>It is the responsibility of the Organiser to communicate its refund policy to the Company and to issue refunds to the users via the Website.</li>
<li>In case of Event Cancellation, a non-refundable fee of 4.71% will be charged by MeraEvents from the Organizer(s).</li>
<li>In case of Individuals/exempted tax payers please email us the signed scanned copy of your declaration on your compnay letter head.</li>
</ul>
</div>
</body>
</html>
Output:
 
 

Register
<html>
<head>
<title> register </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
<script language= "JavaScript">
function msg()
{ 
   alert( "thanks");
 var url="login.html";
  window.location = url ;
   return true;
}
</script>
</head>
<body>
<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVEVTS</font>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
     <a href="login.html " style="color: white">LOGIN</a>
    <a href="register.html "  style="color: white">REGISTER</a>
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
<input type="button" name = b1 value="REGISTER NOW" style="background-color:blue; font-size:20; "onclick="return msg();">
</center>
</form>
</body>
</html>
Output:
 

 
After filling the form. By clicking on register now button the login page will be opened.

Login
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
Output: 
 
 

Validation is applied in email textbox
 
 
Data is entered to database.
Now clicking on ok we will enter into the home page of our website.
HOME
<html>
<head>
<title> event management </title>
<link REL= "style sheet" TYPE=" text/css" HREF="head.css">
</head>
<body>
<div class="header" ><br>&emsp;
 <img src="download.jpg" height=100> </a><font color=white>recreate your imaginations...</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
        <a href="home.html” style="color: white ">Logout</a>
        <a href="contact.html” style="color: white">Contact Us</a>
        <a href="services.html” style="color: white">Services</a>
        <a href="view.html “style="color: white">View Event</a>
        <a href="create.html” style="color: white">Create Event</a>
        <a href="home.html” style="color: white ">Home</a>
    &emsp; &emsp; &emsp; &emsp;
</div><br><br><br><br>
<div class="main ">
<br>&emsp; &emsp;<img src="images (1).jpg"><br><br>
  <font face=" Arial black”, color=red, size=5> <b>WELCOME TO KEY EVENTS! </font> <br><br>
<font size=5> At Key-Events we strive to be most creative & innovative events management company in tricity. We believe in delivering high standard of services to our clients, keeping in mind the value for money. <br><br>Adding cherry to the cake...indeed! to any event you thought of Key-Events will help you to live those memories forever... with full zest and zeal.<br><br>In Events, need for creativity has no definite boundaries. Each client &each event has different needs. So, we at Key-Events being organizers always bring new taste to each event. Customization to each of the clients’ needs is our motive. So appointing an event management company like Key-Events will surely manage your event in a flawless manner. <br><br>keeping it short, Key-Events are pleasing, cheerful, dedicated &fun when it comes to managing events......<br><br><br><br> <font face=" Arial black", color=red>  ABOUT US</font>   <br><br>Our team of highly knowledgeable, friendly and professional event planners are always attentive to your requirements, working with you to produce an unparalleled result right down to the last detail. <a href="about.html "> read more</a></div>                 
</div>
</body>
</html>
OUTPUT:
 

About us
<html>
<head>
<title> about us </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
</head>
<body bgcolor= teal> 
<div class="header" ><br>&emsp;
<font face=" Arial black" , color=red> KEY EVEVTS</font>
<font color=white> recreate your imaginations...</font>
        <a href="head.html” style="color: white">Logout</a>
        <a href="contact.html” style="color: white ">Contact Us</a>
        <a href="services.html” style="color: white ">Services</a>
        <a href="view.html” style="color: white">View Event</a>
        <a href="create.html” style="color: white ">Create Event</a>
        <a href="home.html” style="color: white ">Home</a>
&emsp; &emsp; &emsp; &emsp;
</div>
<br><br
<div class = main>
<br><br><br><br>
<Center><b><u><i><font face=Arial black, size=6 , color=white>
BEST EVENT MANAGEMENT COMAPNY IN TRICITY</font></b></u></i><br><br>
<font size=4, color=white>Our team of highly knowledgeable, friendly and professional event planners are always attentive to your requirements, working with you to produce an unparalleled result right down to the last detail. We aim to make the organization process seamless and enjoyable providing you with the finest VIP client experience. StarBiz India feels pride on giving maximum value for money, researching options and working at all times to your exact budget and requirements. It is our success in this area that allows our clients to come back to us time and time again for fantastic events. StarBiz India is best event management company in Punjab.
StarBiz India has been ‘brand building’ for India, have managed large scale government events & projects and corporate events like Stone Laying Ceremony of Mohali District, Chandigarh Rose festivals, Chandigarh Carnivals, World Tourism Day, Political Rallies, Conferences & Seminars, Product Launches, B2B & B2C Events, Inaugurations, Award Functions, Press Meets, VIP Visits etc. 
StarBiz India has tirelessly worked towards making the company India’s leading event management and Entertainment Company & still continues to do the same. We care that your organized event is our personal reputation and we make it feel special with our touch of experienced professionals. We believe in delivering a high standard of quality services to our clients, keeping in mind financial aspect. StarBiz career started in Chandigarh and we achieved the award of best ‘Event Management Company in Chandigarh’. With the team of young, creative, experienced, dynamic and dedicated professionals we have pushed all areas of event management to new frontiers, with the expanded services through public relation, Media Management via print, TV & Digital promotions. Spreading over; in Punjab and winning the title for being one of the best   event management companies in Punjab gave StarBiz India new wings to fly and spread all over.  If you want to organize a royal wedding, our venture “The Big Wedding Planner” can do that for you. From venue selection to reception, all can easily handle by our expert team. With our outstanding services, you will surely experience an incredible event in your city. We strive for best and perfection leading to long-term client relationship. We claim ourselves to be outstanding in musical events, live shows, movie promotions, Weddings, road shows, political rallies, fashion shows, beauty pageants, advertisement etc.
Our Planning and technology lead us to the goal Of Event Management Company in India.  
<BR><BR>
<b><u><i><font style=Arial black, size=6>GALLERY</u><br><br>
<img src="img1.jpg" height=300>
<img src="img2.jpg" height=300><br>
<img src="img3.jpg" height=300>
<img src="img4.jpg" height=300>
</div>
</body>
</html>





Output:
 
 
Create 
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



Output:
 

SERVICES
<html>
<head>
<title> services</title>
</head>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
<body>
<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVEVTS</font>
<font color=white> recreate your imaginations...</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="head.html "  style="color: white">Logout</a>
        <a href=" contact.html"  style="color:white ">Contact Us</a>
        <a href="services.html "  style="color:white ">Services</a>
        <a href="view.html "  style="color: white">View Event</a>
        <a href="create.html "  style="color:white ">Create Event</a>
        <a href="home.html " style="color:white ">Home</a>
&emsp;&emsp;&emsp;&emsp;
</div>
<br><br><br><br><br>
<div class="service ">
<center><font style= boardway size=40> <b><i><u>SERVICES</u></i></b></font></center><br>
Key-Events provides all round services to all its clients with passion, professionalism & dedication. Ranging from a comlete event 
management to corporate events, seminars, product launch, fashion shows,
star nights, to name a few.<br><br>
We also take care of value added services for your event, right from managing booking of the venue, bar management, catering, 
host/hostess for the welcome.
</div>
<div>
<br><br><br>
<table>
<tr> 
 <td><font style= boardway size=20><b> Birthday<br> B</b></font>irthday parties are a great boost to any child’s self-esteem. 
        Making them feel like kings (or queens) for the day is one of the best 
        (and most lasting) gifts you can give them. but where and how should you start?
         Many parents feel more comfortable starting with a theme around
         which they can organize invitations, decorations, games, crafts and food.
        Both you and your child will enjoy making plans that reflect her interests —
         whether it's a sports theme, a dinosaur bash, an art party, a backyard beach picnic,
         a trip back in time, or an animal adventure.
 </td>
<td>  <img src="birthday.jpg" height=300  ></td>
 </tr>  
<tr>
  <td> <img src= "images (4).jpg" height=330></td>
<td> <font style= boardway size=20><b> Wedding<br> W</b></font>ho knew planning a wedding would have so many moving parts—and include so many people? 
To help you figure out who does what, we've put together a list of all the major players in your wedding day. (Keep in mind that most roles can be played by either gender—why not have bridesmen and groomsladies?—and by as many people as you want).
  </td>
</tr>
<tr>
 <td><font style= boardway size=20><b>Engagement<br> W</b></font>elcome to engagement season! It's time to kick off the wedding celebrations with a bang.An engagement party is a great way to share the exciting news and get family and friends together to celebrate the forthcoming union.
 </td>
<td> <img src="images (3).jpg"  height=300> </td>
</tr>
<tr>
<td><img src="Fashion.jpg"height=250 ></td>
<td><font style= boardway size=20><b>Fashion Shows<br>W</b></font>hether you are planning a fashion show for a charity fundraiser, supporting a designer friend, or promoting your own line of clothes, there are a lot of steps involved in successfully organizing a well-attended show. Assembling a team, finding a venue, booking models, and promoting your event are all integral steps that will help you organize a show that will be remembered for a long time!
</td>
</tr>
<tr>
<td><font style= boardway size=20><b>Celebs Show<br> O</b></font>ur trained staff can make necessary arrangements for you by bringing top artists & celebraties on a single platform. Thus making your event look like a star night.</td>
<td><img src ="stage.jpg" height=300></td>
</tr>
<tr>
<td> <img src="theme.png "height=500></td>
<td><font style= boardway size=20><b>Theme party<br>A</b></font>claimed events management company in managing theme parties in tricity. 
Managed lots of theme parties like new year theme, christmas theme, music theme, bollywood theme, arabian night theme, to name a few.
</td>
</tr>
</div>
</body>
</html>


Output:
 
 
PAYMENT
<html>
<head>
<title>payment</title>
<script language= "JavaScript">
function msg()
{ 
   alert( "thanks");
 var url="home.html";
  window.location = url ;
   return true;
}
</script>
</head>
<body>
<form>
<center>
<h1>Payment</h1><br>
<h2>Accepted Cards</h2></font>
<img src= "card.jpg "><br><br>
Name on Card<br>
<input type="text"  name="cardname" placeholder="Name "><br><br>
Credit Card number<br>
<input type="text"  name="cardnumber" placeholder=" 11-digit number"><br><br>
Exp <br>
<input type="text"  name="expmonth" placeholder="dd/mm/yy"><br><br>
CVV<br>
<input type="text" id="cvv" name="cvv" placeholder="352"><br><br>
<br>  <center>
<input type="button" name = b1 value="Payment" style="background-color:green; font-size:20; "onclick="msg();">  </center>
</form>
</center>
</body>
</html>
Output:
 

CONTACT US
<html>
<head>
<meta name="viewport" content ="width=device-width, initial-scale=1.0">
<title> contact </title>
<link REL= "stylesheet" TYPE=" text/css" HREF="head.css">
</head>
<body bgcolor=#F0F8FF>

<div class="header" ><br>&emsp;
<font face=" arial black" , color=red> KEY EVEVTS</font>
<font color=white> recreate your imaginations...</font>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <a href="head.php "  style="color: white ">Logout</a>
        <a href="contact.php "  style="color: white">Contact Us</a>
        <a href="services.php "  style="color: white">Services</a>
        <a href="create.php "  style="color: white">Create Event</a>
        <a href="home.php " style="color:white ">Home</a>
    &emsp;&emsp;&emsp;&emsp;
</div>
<br><br>

<div class="container">
 <div class="row'>
 <div class= "box">
  <img src="contactbg.jpg" height=1000 width=1500>
  <h1 class=heading><b>  SAY HELLO </b></h1>
</div>
<br><br>
<form action="action.php" method="post">
<br><br>
<center>
<h1>CONTACT US</h1>
<font color= hotpink>We would love to hear from you! <br>To get started planning your wedding or event, please fill out the below form or email us at below .</font>
<h3>PHONE NUMBER: +91-9459554332 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GMAIL: keyevent@gmail.com &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;    WHATSAPP NO: 7848733223        </h3>

First Name :

<input type="text"  name="first_name" placeholder=" Name" size ="30"><br><br>

Last Name :

<input type="text"  name="last_name"  placeholder=" Last name" size ="30"><br><br>

Country :

<select id="country" name="country_name" >
<option value="Austraila">Austraila</option>
<option value="canada">Canada</option>
<option value="India">India</option>
<option value="usa">USA</option>
</select><br><br>

Email :

<input type = " text" name ="email_address" placeholder =" Email " size ="30"><br><br>

Subject :

<textarea id="subject" name="subject_detail" placeholer="Write something.." style="height:200px"></textarea><br><br>

<a href="action.php"> <input type="submit" name = b1 value="SUBMIT" style="background-color:#C71585; font-size:25; "onclick="home.php"></a>

</center>
</form>
</div>
</div>
</div>
</body>
</html>


OUTPUT:
 
 

[supriya(2412) (1).docx](https://github.com/supriyarana12/xenon/files/9826003/supriya.2412.1.docx)
 


