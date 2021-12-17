<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>CSP Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTlESoSQ0Jbi9jEZT-8iEsRcfY_CrlJT32KKPM5nqRgXSlmxilSD21i1exKhb7uyElsGI&usqp=CAU");
      }
      p {
  text-align: center;
  font-size: 18px;
  color: rgb(245, 240, 240);
  font-family: fantasy;
}
    </style>
  </head>

  <body>
    <script src="app.js"></script>

    <h1 class="title">
        Literal Illusions
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
        A literal illusion is when the image you see is different than the actual images in the picture. 
      </p>
    </div>

    <button class="accordion">How does it work?</button>
    <div class="panel">
      <p>
        The eye and brain will choose and focus on specific objects which causes
        on part of the image to appear one way or the other. Depending on what
        the brain chooses to focus on, it can perceive two different images in
        one.
      </p>
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

    <!-- HOVER TABS -->
    <div class="tab">
      <button class="tablinks" onmouseover="openCity(event, 'Face on Mars')">
        Face on Mars
      </button>
      <button
        class="tablinks"
        onmouseover="openCity(event, 'Smile in the Sky')"
      >
        Smile in the Sky
      </button>
      <button class="tablinks" onmouseover="openCity(event, 'All is Vanity')">
        All is Vanity
      </button>
      <button class="tablinks" onmouseover="openCity(event, 'The Bakery')">
        Bakery
      </button>
    </div>
   





    <!-- Accordion -->
<div id="Face on Mars" class="tabcontent">
      <h3>Face on Mars</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Face . "' ORDER BY id";

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
<button onclick="showFace()">Submit</button>
    <p id="Face"></p>
<script>
function showFace() {
  document.getElementById("Face").innerHTML = "There appears to be a face on the surface of Mars.";
}
</script>
      <img
        src="http://ideate.xsead.cmu.edu/uploads/thumbnails/4085/thumbnails/large/pio_med.thumb.jpeg?1445291490"
      />
    </div>






<div id="Smile in the Sky" class="tabcontent">
      
      <h3>Smile in the Sky</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Smile . "' ORDER BY id";

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
<button onclick="showSmile()">Submit</button>
    <p id="Smile"></p>
<script>
function showSmile() {
  document.getElementById("Smile").innerHTML = "This photograph shows three birds flying with their wings in a position resembling a smile.";
}
</script>
      <img
        src="http://ideate.xsead.cmu.edu/uploads/thumbnails/4088/thumbnails/large/literal_optical_illusion.thumb.jpeg?1445291794"
      />
    </div>






<div id="All is Vanity" class="tabcontent">
      <h3>All is Vanity</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Vanity . "' ORDER BY id";

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
<button onclick="showVanity()">Submit</button>
    <p id="Vanity"></p>
<script>
function showVanity() {
  document.getElementById("Vanity").innerHTML = "This picture depicts both a woman sitting at a vanity and a skull. It refers to the vanity and pride of humans. In art, vanity has long been represented as a woman preoccupied with her beauty.";
}
</script>
      <img
        src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Allisvanity.jpg"
      />
    </div>





<div id="The Bakery" class="tabcontent">
      <h3>The Bakery</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Bakery . "' ORDER BY id";

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
<button onclick="showBakery()">Submit</button>
    <p id="Bakery"></p>
<script>
function showBakery() {
  document.getElementById("Bakery").innerHTML = "This image shows a woman with bread as well as skulls of different sizes.";
}
</script>
      <img
        src="http://ideate.xsead.cmu.edu/uploads/thumbnails/4091/thumbnails/large/9724930.thumb.jpeg?1445292100"
      />
    </div>
  </body>
</html>
