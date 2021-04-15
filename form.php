<!DOCTYPE HTML>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title> Enquiry Form |Tripburg</title>
	<link rel="icon" type="image/png" href=".\logo1.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./navbar.css">
	<style>
	

.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}



.fa-linkedin {
  background: #007bb5;
  color: white;
}


.fa-instagram {
  background: #125688;
  color: white;
}

p {
	font-size: 15px;
    color: black;
	}


/*.bg {*/
    /*background-image: url("bg.jpeg");*/
	/*height: 100%; */
    /*background-position: center;*/
    /*background-repeat: no-repeat;*/
    /*background-size: cover;*/
/*}*/

 
input[type=text],input[type=tel],input[type=email] ,input[type=date],textarea {
    border: none;
    border-bottom: 2px solid black;
    font-size: 17px;
    margin: 1px;
    background-color: #f2f2f2;
 }
 .pad{
padding-left:5em
 }
	p {
	font-family: Arial;
	font-size: 17px;
	}
.form {
    border-radius: 15px;
    background-color: #f2f2f2;
    padding: 10px;
	margin-left: 100px;
	float: left;
	width:500px;
}

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</style>
</head>
<body style="background-image: url("bg.jpeg"); ">
<div class="nav">
<div class="topnav" id="myTopnav">
  <a href="./main_f.html"><img class="logo" src="./main_logo.png"></a>
  <a href="#home" class="active"><b>Home</b></a>
  <a href="#news"><b>India</b></a>
   <div class="dropdown">
    <button class="dropbtn"><b>Speciality Tours</b>
    </button>
    <div class="dropdown-content">
      <a href="./Lux.html"><strong>Luxury Tours</strong></a>
	  <a href="./coup.html"><strong>Specially Abled</strong></a>
      <a href="./coup.html"><strong>Honeymoon Special</strong></a>
      <a href="./senior.html"><strong>Seniors Special</strong></a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Destinations</b>
    </button>
   <div class="dropdown-content">
	  <a href="./europe.html"><strong>Europe</strong></a>
      <a href="./asia.html"><strong>Asia Pacific</strong></a>
      <a href="./australia.html"><strong>Australia</strong></a>
	  <a href="./NA.html"><strong>North America</strong></a>
	  <a href="./SA.html"><strong>South America</strong></a>
    </div>
  </div> 
  <a href="#about"><b>Enquire</b></a>
  <a href="#about"><b>About</b></a>
  <a href="#" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<hr>
	<marquee><b> Welcome to Tripburg.com || Exploring the World in Comfort || Big Discounts, Bigger Savings || All inclusive Tours! Book Now! Offers end on 20th October 2018 </b></marquee>
</div>
<div class="bg">
<h2 style="font-size: 30px; font-family: Arial; margin-left:100px; padding: 2px;"> Write us an Enquiry </h2>
<p style="font-size: 24px; font-family: Arial; margin-left: 100px; padding: 2px;"> Fill in these details and we will get back to <br> you with travel ideas within one working day. </p>
<div class="form">

<form action="enq.php" method="post">
<br><input type="text"  name="fname" placeholder="First Name" style="width: 500px; height: 50px;"> <br>
<br><input type="text" name="lname" placeholder="Last Name" style="width: 500px; height: 50px;"> <br>
<br><input type="tel" name="phno" placeholder="Mobile Number" style="width: 500px; height: 50px;"> <br> 
<br><input type="email" name ="email"placeholder="Email" style="width: 500px; height: 50px;"> <br> 
<textarea id="subject" name="subject" placeholder="Ask us your queries.." style="width: 500px; height: 50px;"></textarea><br>
<p>Contact via</p> 
  <input type="radio" name="contact" value="Call" checked> Call
  <input type="radio" name="contact" value="Email"> Email<br><br>
 <input type="reset"> <input type="submit"> 
</form>
</div>
</div>
</body>
</html>
