<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blood Bank - Home</title>
        <link rel="stylesheet" href="chat.css">
        <link rel="stylesheet" href="home.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">                          <!--Heading-->

        <link rel="stylesheet" href="Main.css">
       
    </head>
    <body>
    <div class="pTitle">Red RAY</div>
      <nav class="navbar">
        <ul>
            <li> <a href="./content/page1.html">About Us</a></li>
            <li><a href="./content/page2.html">Blood Banks</a></li>
            <li> <a href="./content/page3.html">How to Donate</a></li>
            <li> <a href="./content/page4.php">Contact Us</a></li>
            <li> <a ></a></li><li> <a ></a></li>
            <li><a href="./content/register.php" target="_blank">Register</a></li>
        <li><a href="./content/login.php" target="_blank">Login</a></li> </ul>
        </ul>
      </nav>
<br>
<section></section>
         <!--Image Slider-->
      
         <div class="slideshow-container">
          <center>
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="./img/b2.jpg" width="800"
              height="450" class="center"> 
            </div>
        
      
        
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="./img/b3.jpg"  width="800"
              height="440" class="center">  
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="./img/b4.jpg" width="800"
              height="440" class="center">
      
            </div>
            
            </div>
       
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
        
            <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
            
          </center></section>   
     <br><br>
<!--Card-->
        <div class ="container">  
            <div class ="gallery">
             <img src="./img/find.jpg">
                  <a href="./content/findb.html"><div class="desc">FIND BLOOD</div></a>
            </div>

            <div class ="gallery">
                <img src="./img/reqt.jpg">
                   <a href="./content/reqtd.php"> <div class="desc">REQUEST DONOR</div></a>
            </div>

            <div class ="gallery">
                <img src="./img/donor.jpg">
                  <a href="./content/register.php"> <div class="desc">BE A DONOR </div></a> 
            </div>
        
        </div>
         <!-- CHAT BAR BLOCK -->
     <div class="chat-bar-collapsible">
      <button id="chat-button" type="button" class="collapsible">Chat with us!
          <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
      </button>

      <div class="content">
          <div class="full-chat-block">
              <!-- Message Container -->
              <div class="outer-container">
                  <div class="chat-container">
                      <!-- Messages -->
                      <div id="chatbox">
                          <h5 id="chat-timestamp"></h5>
                          <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                      </div>

                      <!-- User input box -->
                      <div class="chat-bar-input-block">
                          <div id="userInput">
                              <input id="textInput" class="input-box" type="text" name="msg"
                                  placeholder="Tap 'Enter' to send a message">
                              <p></p>
                          </div>

                          <div class="chat-bar-icons">
                              <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                  onclick="sendButton()"></i>
                          </div>
                      </div>

                      <div id="chat-bar-bottom">
                          <p></p>
                      </div>

                  </div>
              </div>

          </div>
      </div>

  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="responses.js"></script>
<script src="chat.js"></script>
    </body>
</html>
