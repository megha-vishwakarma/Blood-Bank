<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration</title>
<link rel="stylesheet" href="form.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">    <!--Heading-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="form.css">

<style>
  .pTitle {
    text-align: justify;
   text-align:center;
    font-size: 65px;
    /*background-color: rgb(17, 7, 11)     rgb(102, 11, 46);*/
    background-image: linear-gradient(to left, rgb(163, 32, 32),rgb(32, 18, 24));
    opacity: 0.85;
    font-family: 'Bungee Inline', cursive;
    font-family: 'Cinzel Decorative', cursive;
    color: #fff;
    margin-top: 10px;
}
h4{
    font-family: 'Tahoma';
    font-size: 30px;
    color: rgb(245, 235, 235);
  }
  </style>
</head>
<body>  
<div class="pTitle">Red Ray
          <h4>"Donate blood and get real blessings.”</h4>
        </div> 
<div id="outside">
<form id="registration" action="insert.php" method="POST">
  <h4>Register Now</h4>
  <p><b>Note:</b> Fill out all the details to make an account.</p>
  <fieldset>
    <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
    <legend>Account Details</legend>
    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div>
      <label id="name-label" for="name">Full Name:</label>
      <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
    <div>
      <label for="address-label">Residential Address:</label>
      <input type="text" id="address" name="uaddress" size=70px placeholder="Enter address here" required>   </div>
    <div>
      <label id="email-label" for="Email">Email ID:</label>
      <input type="email" required id="email" name="useremail" size=30px placeholder="Enter email here" required>  </div>
    <div>
      <label id="number-label" for="phone">Contact No:</label>
      <input type="number" id="number" name="contact" placeholder="Enter 10 digit number" max="9999999999" required> </div>
    <div>
      <label for="Gender">Gender:</label>
       <p> 
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other
      </p>
    </div>
    <div>
    <label for="age-label">Age:</label>
    <input type="number" name="age" min="16" required> </div>
    <div>
    <label for="password">New Password:</label>
    <input type="password" name="password" placeholder="atleast 6 characters long" required>  </div>
  </fieldset>
  <div id="submitbutton">
    <button type="submit" id="submit" onclick="Request send">Submit</button>   </div>
 </form>
  </div>
</body>
</html>