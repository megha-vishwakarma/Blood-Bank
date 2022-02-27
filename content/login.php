<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login page</title>

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
    background-image: linear-gradient(to left,rgb(17, 7, 11), rgb(163, 32, 32));
    font-family: 'Bungee Inline', cursive;
    font-family: 'Cinzel Decorative', cursive;
    color: #fff;
    margin-top: 10px;
    opacity: 0.85;
}
h4{
    font-family: 'Trebuchet MS';
    font-size: 25px;
   text-align: center;
    color: rgb(245, 235, 235);
  }
  </style>
</head>


<body>  
<div class="pTitle">Red Ray
          <h4>~ A drop for you, an ocean for someone else</h4>
        </div> 
<div id="outside">
<form id="registration" action="ilogin.php" method="POST">
  <h1 id="title">Login</h1>
  <center>
  <fieldset>
    <legend>Login Details</legend>
    <br>
    <div>
     <div> <label id="name-label" for="name">Full Name:</label>
      <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
     <div> <label id="email-label" for="Email">Email ID:</label>
      <input type="email" required id="email" name="email" size=30px placeholder="Enter EmailID here" required>  </div>
    <div><label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter your password" required>  </div><br>
    </fieldset><br></center>
    <div id="submitbutton">
    <a href="../index.php"><button type="submit" id="submit">Log in</button></a></div>
</form>
</div>
</body>
</html>