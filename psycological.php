<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>CSP Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTlESoSQ0Jbi9jEZT-8iEsRcfY_CrlJT32KKPM5nqRgXSlmxilSD21i1exKhb7uyElsGI&usqp=CAU");
      }
      p {
  text-align: center;
  font-size: 18px;
  color: rgb(250, 244, 244);
  font-family: fantasy;
}
.btn {
  border:black;
  background-color: rgba(164, 185, 169, 0.384);
  padding: 14px 15px;
  font-size: 18px;
  cursor: pointer;
  display: inline-block;
  font-family: fantasy;
  margin-left: 40%;
}
.btn:hover{
  background-color: rgba(162, 192, 159, 0);
  color: rgb(0, 0, 0);
}

    </style>
  </head>

  <body>
    <script src="app.js"></script>

    <h1>
    Psychological Illusions
    </h1>
    
    <!-- NAVBAR -->
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="psycological.php">Psychological</a>
      <a href="literal.php">Literal</a>
      <a href="cognitive.php">Cognitive</a>
    </div>

    <!-- ACCORDION-->
    <button class="accordion">What is it?</button>
    <div class="panel">
      <p>
        A psychological illusion tricks the mind and eyes into perceiving an image differently than displayed. 
      </p>
    </div>
    <button class="accordion">How does it work?</button>
    <div class="panel">
      <p>
        When looking at a psychological illusion, you may experience a discrepancy between your perceptions of an object or event observed under different conditions. It is a concept of illusion is defined as a process involving an interaction of logical and empirical considerations. </p>
    </div>
<br>
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

    <!-- HOVER TABS -->
    <div class="tab">
      <button
        class="tablinks"
        onmouseover="openCity(event, 'The Dynamic Ebbinghaus')"
      >
        The Dynamic Ebbinghaus
      </button>
      <button
        class="tablinks"
        onmouseover="openCity(event, 'The Sky Blue Cafe Wall Illusion')"
      >
        The Sky Blue Cafe Wall Illusion
      </button>
      <button class="tablinks" onmouseover="openCity(event, 'The Confetti')">
        Confetti
      </button>
      <button
        class="tablinks"
        onmouseover="openCity(event, 'The Rice Wave Illusion')"
      >
        The Rice Wave Illusion
      </button>
      <button
        class="tablinks"
        onmouseover="openCity(event, 'The Tilted Road Illuion')"
      >
        The Tilted Road Illuion
      </button>
    </div>
    
    
    <!-- Accordion -->
    <div id="The Dynamic Ebbinghaus" class="tabcontent">
      
      <h3>The Dynamic Ebbinghaus</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Ebbinghaus . "' ORDER BY id";

$resultQuestion = $conn->query($sqlQuestion);

if ($resultQuestion->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($rowQuestion = $resultQuestion->fetch_assoc()) {
        echo "<tr><td></td><td>" . $rowQuestion["question"]. "</td></tr>";
		$sqlOption = "SELECT id, qid, qoption FROM QuestionOption where qid=" . $rowQuestion["id"] . " ORDER BY id";
        $resultOption = $conn2->query($sqlOption);
        // echo $sqlOption . "<br/>";
        if ($resultOption->num_rows > 0) {
        	while($rowOption = $resultOption->fetch_assoc()) {
        	echo "<tr><td></td><td><input type=\"radio\" name=\"" .$rowQuestion["topic"] . "\" id=\"" . $rowOption["id"] 
        	. "\" value=\"" . $rowOption["qoption"] . "\" > <label for=\"" . $rowOption["id"] . "\" >" . $rowOption["qoption"] 
        	. "</label> </td></tr>";
        	}
        }
    }
    echo "</table>";    
} else {
    echo "0 results";
}

$conn->close();
$conn2->close();
?> 
    
    <button onclick="showEbbinghaus()">Submit</button>
    <p id="Ebbinghaus"></p>
<script>
function showEbbinghaus() {
  document.getElementById("Ebbinghaus").innerHTML = "The Ebbinghaus illusion or Titchener circles is an psycological illusion of relative size perception. The orange circle does not change size. The two main visual contributors to this illusion are the difference in the distance between the outer ring and inner circles as well as the completeness of the ring surrounding the percieved smaller circle.";
}
</script>
      <img src="http://nautilus-prod.s3.amazonaws.com/Stewart7.gif" />
    </div>

    <div id="The Sky Blue Cafe Wall Illusion" class="tabcontent">
      
      <h3>The Sky Blue Cafe Wall Illusion</h3>
<?php
include "dbConn.php";
//$sqlQuestion = "SELECT id, topic, question FROM Question ORDER BY id";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Cafe . "' ORDER BY id";

$resultQuestion = $conn->query($sqlQuestion);

if ($resultQuestion->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($rowQuestion = $resultQuestion->fetch_assoc()) {
        echo "<tr><td></td><td>" . $rowQuestion["question"]. "</td></tr>";
		$sqlOption = "SELECT id, qid, qoption FROM QuestionOption where qid=" . $rowQuestion["id"] . " ORDER BY id";
        $resultOption = $conn2->query($sqlOption);
        // echo $sqlOption . "<br/>";
        if ($resultOption->num_rows > 0) {
        	while($rowOption = $resultOption->fetch_assoc()) {
        	echo "<tr><td></td><td><input type=\"radio\" name=\"" .$rowQuestion["topic"] . "\" id=\"" . $rowOption["id"] 
        	. "\" value=\"" . $rowOption["qoption"] . "\" > <label for=\"" . $rowOption["id"] . "\" >" . $rowOption["qoption"] 
        	. "</label> </td></tr>";
        	}
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
$conn2->close();
?> 
<button onclick="showCafe()">Submit</button>
    <p id="Cafe"></p>
<script>
function showCafe() {
  document.getElementById("Cafe").innerHTML = "The horizontal lines are perfectly parallel.";
}
</script>
      <img
        src="http://static.nautil.us/15395_0e2e84a82d94dc94d5749d44d4c6c73b.png"
      />
    </div>

    <div id="The Confetti" class="tabcontent">
      
      <h3>The Confetti</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Confetti . "' ORDER BY id";

$resultQuestion = $conn->query($sqlQuestion);

if ($resultQuestion->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($rowQuestion = $resultQuestion->fetch_assoc()) {
        echo "<tr><td></td><td>" . $rowQuestion["question"]. "</td></tr>";
		$sqlOption = "SELECT id, qid, qoption FROM QuestionOption where qid=" . $rowQuestion["id"] . " ORDER BY id";
        $resultOption = $conn2->query($sqlOption);
        // echo $sqlOption . "<br/>";
        if ($resultOption->num_rows > 0) {
        	while($rowOption = $resultOption->fetch_assoc()) {
        	echo "<tr><td></td><td><input type=\"radio\" name=\"" .$rowQuestion["topic"] . "\" id=\"" . $rowOption["id"] 
        	. "\" value=\"" . $rowOption["qoption"] . "\" > <label for=\"" . $rowOption["id"] . "\" >" . $rowOption["qoption"] 
        	. "</label> </td></tr>";
        	}
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
$conn2->close();
?> 
<button onclick="showConfetti()">Submit</button>
    <p id="Confetti"></p>
<script>
function showConfetti() {
  document.getElementById("Confetti").innerHTML = "This illusion demonstrates the imperfect way our eyes percieve color. When you place a solid-colored shape behind bars of different colors, those bars influence how we see what's between them. Our brains want to fill in the gaps between the stripes. Depending on the surrounding shades, a circle that's really peach may look like it's "tinted" pink, green, or yellow.";
}
</script>
      <img
        src="http://static.nautil.us/15396_5b46370c9fd40a27ce2b2abc281064de.png"
      />
    </div>
    <div id="The Rice Wave Illusion" class="tabcontent">
      
      <h3>The Rice Wave Illusion</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Rice . "' ORDER BY id";

$resultQuestion = $conn->query($sqlQuestion);

if ($resultQuestion->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($rowQuestion = $resultQuestion->fetch_assoc()) {
        echo "<tr><td></td><td>" . $rowQuestion["question"]. "</td></tr>";
		$sqlOption = "SELECT id, qid, qoption FROM QuestionOption where qid=" . $rowQuestion["id"] . " ORDER BY id";
        $resultOption = $conn2->query($sqlOption);
        // echo $sqlOption . "<br/>";
        if ($resultOption->num_rows > 0) {
        	while($rowOption = $resultOption->fetch_assoc()) {
        	echo "<tr><td></td><td><input type=\"radio\" name=\"" .$rowQuestion["topic"] . "\" id=\"" . $rowOption["id"] 
        	. "\" value=\"" . $rowOption["qoption"] . "\" > <label for=\"" . $rowOption["id"] . "\" >" . $rowOption["qoption"] 
        	. "</label> </td></tr>";
        	}
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
$conn2->close();
?>
<button onclick="showRice()">Submit</button>
    <p id="Rice"></p>
<script>
function showRice() {
  document.getElementById("Rice").innerHTML = "The rice grains appear to me moving because of the illusionary motion our eyes when going from light to dark colors.";
}
</script>
      <img
        src="http://static.nautil.us/15397_8e452e79cd525671ce2fb6997b73aaf9.png"
      />
    </div>
    <div id="The Tilted Road Illuion" class="tabcontent">
      <h3>The Tilted Road Illuion</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Road . "' ORDER BY id";

$resultQuestion = $conn->query($sqlQuestion);

if ($resultQuestion->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($rowQuestion = $resultQuestion->fetch_assoc()) {
        echo "<tr><td></td><td>" . $rowQuestion["question"]. "</td></tr>";
		$sqlOption = "SELECT id, qid, qoption FROM QuestionOption where qid=" . $rowQuestion["id"] . " ORDER BY id";
        $resultOption = $conn2->query($sqlOption);
        // echo $sqlOption . "<br/>";
        if ($resultOption->num_rows > 0) {
        	while($rowOption = $resultOption->fetch_assoc()) {
        	echo "<tr><td></td><td><input type=\"radio\" name=\"" .$rowQuestion["topic"] . "\" id=\"" . $rowOption["id"] 
        	. "\" value=\"" . $rowOption["qoption"] . "\" > <label for=\"" . $rowOption["id"] . "\" >" . $rowOption["qoption"] 
        	. "</label> </td></tr>";
        	}
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
$conn2->close();
?>
<button onclick="showRoad()">Submit</button>
    <p id="Road"></p>
<script>
function showRoad() {
  document.getElementById("Road").innerHTML = "Now the illusion comes only when the same slanted image next to itself as we have here, your brain becomes convinced that one road is straight when next to another road so when the lines from the images intersect the common edge at an angle, your brain exaggerates the angle to causing the other image to appear more slanted. Try covering the image that looks slanted to see that the other image is also slanted. Once you remove your hand, one image will revert to looking straight.";
Reply";
}
</script>

      <img
        src="http://static.nautil.us/15398_5edba33a1dcf1876318fb7013a0a8134.png"
      />
    </div>
  </body>
</html>
