
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>CSP Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 <style>
      body {
       background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMjrksaMkHAHf7aYeAa3FXoEB4X6Ugp4wA9_hKoQBI_aUE7BkcrP1wNvxNqH18enXrgqs&usqp=CAU");

      }
      h1{
        text-align:center;
  font-family:fantasy;
      }
      h4{
        text-align: center;
        font-size: 25px;
          font-family: fantasy;
      }
      p {
  text-align: center;
  font-size: 18px;
  color: rgb(19, 3, 3);
  font-family: fantasy;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
    </style>
  
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
        p {
          text-align: center;
          padding: 10px;
          border: 2px solid black;
          background-color:rgba(68, 207, 68, 0.192);
          font-family: fantasy;
        }
      .container {
        position: relative;
        width: 50%;
      }
      
      .image {
        display: block;
        margin-left: 50%;
        margin-right: 50%;
        width: 100%;
        height: auto;

      }
      
      .overlay {
        position:absolute;
        bottom: 100%;
        margin-left: 50%;
        margin-right: 50%;
        background-color: rgba(124, 81, 133, 0.438);
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
      }
      
      .container:hover .overlay {
        bottom: 0;
        height: 100%;
      }
      
      .text {
        color: white;
        font-size: 20px;
        position:absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        font-family: cursive;
        font-size: 20px;
      }
      </style>
  </head>

  <body>
    <script src="app.js"></script>

    <h1 class="title">Optical Illusions</h1>


    <!-- NAVBAR -->
    <div class="topnav">
      <a href="homepage.php">Home</a>
      <a href="psycological.php">Psychological</a>
      <a href="literal.php">Literal</a>
      <a href="cognitive.php">Cognitive</a>
    </div>
    
    <h4>What do you know about optical illusions?</h4>

    </div>
    <p>Hover over the image to read the definition of optical illusions.</p>
    <div class="container">
      <img src="homepage_beard.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Optical illusion is best defined as something that tricks your eyes and
          makes you think that you can see something that is not there, or makes
          you see something as different from what it really is.</div>
      </div>

      
      
    </div>
    <p>Hover over the image to read the types of optical illusions.</p>
    <div class="container">
      <img src="homepage_umbrella.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">There are three different types of optical illusions: psychological illusions,
          literal illusions, and cognitive illusions.</div>
      </div>
    
    
    </div>
   <p>Hover over the image to read the significance of optical illusions.</p>
    <div class="container">
           <img src="homepage_sunset.jpeg" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Optical illusions teach us how our eyes and brain work together to see.
          Many artists use optical illusions to to create phenomena that fool the
          eye, confusing viewers into seeing more than what is actually there. Optical 
          illusions are even used in movies such as Hagrid in the <i>Harry Potter</i> 
          movies and the dwarves in he <i>Lord of the Rings</i> movies. Leonardo Da 
          Vinci is said to have utilized optical illusions in the <i>Mona Lisa</i> painting.</div>
      </div>
    </div>
    
   
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    </script>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  </body>
</html>


