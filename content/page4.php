<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">                     <!--Heading-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="form.css">
        <link rel="stylesheet" href="Main.css">
       
    </head>
    <body>
        
      
        <nav class="navbar">
        <ul>
            <li> <a href="../index.php">Home</a></li>
            <li><a href="page2.html">Blood Banks</a></li>
            <li> <a href="page3.html">How to Donate</a></li>
            <li> <a href="page1.html">About Us</a></li>
            <li> <a ></a></li><li> <a ></a></li>
            <li><a href="register.php" target="_blank">Register</a></li>
        <li><a href="login.php" target="_blank">Login</a></li> </ul>
        </ul>
      </nav>
      <div class="pTitle">Red RAy</div>

        <div id="outside">
            <form id="registration" action="icntct.php" method="POST">
          <h2 id="title">Contact us</h2>
          <fieldset>
            <legend>Personal Details</legend>
              <div><label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" placeholder="Your name"></div>
              <div>
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Your last name"></div>
              <div>
              <label for="lname">City</label>
              <input type="text" id="city" name="city" placeholder="Your city name"></div>
              <div>
             <label for="lname">Contact number</label>
              <input type="number" id="contact number" name="contact" placeholder="Your Phone number"></div>
             <div>
              <label for="lname">Email ID</label>
              <input type="email" id="mailid" name="email" placeholder="Your mail id"></div>         
              <div>
              <label for="subject">Query/Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something" style="height:80px"></textarea></div>
              <div id="submitbutton">
                <button type="submit" id="submit">Submit</button>   
            </div>
            </form>
          </div>
          </body>
          </html>