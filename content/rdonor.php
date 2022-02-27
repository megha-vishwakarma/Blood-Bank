<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donor Registeration</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">                          <!--Heading-->
<link rel="stylesheet" href="Main.css">
<link rel="stylesheet" href="form.css">

</head>
<body>

<nav class="navbar">
        <ul>
            <li> <a href="../index.php">Home</a></li>
            <li><a href="./content/page2.html">Blood Banks</a></li>
            <li> <a href="./content/page3.html">How to Donate</a></li>
            <li>  <a href="page4.php">Contact Us</a></li>
            <li> <a ></a></li><li> <a ></a></li>
            <li><a href="./content/register.php">Register</a></li>
        <li><a href="./content/login.php" >Login</a></li> </ul>
        </ul>
      </nav>
      <div class="pTitle">Red RAy</div>


<div id="outside">
<form id="registration" action="insertd.php" method="POST">
  <h2 id="title">Register as Donor</h2>
  <div id="description"><b>Note:</b> Fill out all the details to register yourself as a donor</div>
  <fieldset>
    <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
    <legend>Account Details</legend>
    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div>
      <label id="name-label" for="name">Full Name:</label>
      <input type="text" required id="name" name="username" size= 30px placeholder="Enter name here" required>   </div>
      <div>
      <label id="email-label" for="Email">Email ID:</label>
      <input type="email" required id="email" name="useremail" size=30px placeholder="Enter email here" required>  </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter password" required>  </div>
    </fieldset>
    <fieldset>
    <legend>Personal Details</legend>
    <div>
      <label for="type-label">Blood Type:</label>
      <input type="text" name="type" placeholder="A plus" required> </div>
    <div>
    <label for="age-label">Age:</label>
    <input type="number" name="age" min="18" required> </div>
    <div>
    <label for="Gender">Gender:</label><br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other
    </div>
    <div>
        <label for="previous">Previously Blood donated:</label><br>
        <input type="radio" name="previous" value="yes" checked>Yes<br>
        <input type="radio" name="previous" value="no">No
        </div>
</fieldset>
  <div id="submitbutton">
    <button type="submit" id="submit">Submit</button></div>
 </form>
</div>
</body>
</html>