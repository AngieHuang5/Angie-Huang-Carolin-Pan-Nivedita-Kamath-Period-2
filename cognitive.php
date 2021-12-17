<!DOCTYPE html>
<html>

</html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>CSP Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTlESoSQ0Jbi9jEZT-8iEsRcfY_CrlJT32KKPM5nqRgXSlmxilSD21i1exKhb7uyElsGI&usqp=CAU");
      }
    p {
  text-align: center;
  font-size: 18px;
  color: rgb(243, 239, 239);
  font-family: fantasy;
}

</style>
<body>
    <h1>
        Cognitive Illusions
    </h1>
    <script src="app.js"></script>
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
        <p>A cognitive illusion is usually a picture that is meant to show an ambiguous image or images. These images
            can be
            meant to confuse the senses or to require the mind to refocus attention to see both images. These kinds of
            illusions
            are categorized as ambiguous, distorting, or paradox illusions. Ambiguous images are figures that force the
            brain to
            switch back and forth between two separate images.</p>
    </div>

    <button class="accordion">How does it work?</button>
    <div class="panel">
        <p>Cognitive illusions depend on the human mind's ability to perceive things through based on their conceptions. When looking at a cognitive illusion, the mind will assume an image based on prior exposure to a similar phenomenon.</p>
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
        <button class="tablinks" onmouseover="openCity(event, 'The Shepard Elephant')">The Shepard Elephant</button>
        <button class="tablinks" onmouseover="openCity(event, 'The Impossible Triangle')">The Impossible Triangle</button>
        <button class="tablinks" onmouseover="openCity(event, 'The Necker Cube')">The Necker Cube</button>
        <button class="tablinks" onmouseover="openCity(event, 'Infinite Staircase')">Infinite Staircase</button>
    </div>








<div id="The Shepard Elephant" class="tabcontent">
        
        <h3>The Shepard Elephant</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Elephant . "' ORDER BY id";

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
<button onclick="showElephant()">Submit</button>
    <p id="Elephant"></p>
<script>
function showElephant() {
  document.getElementById("Elephant").innerHTML = "Parts of the object (in this case the elephant’s legs) become the background, and vice versa.";
}
</script>
      <img src="https://www.centreforsight.com/wp-content/uploads/2018/03/centre_for_sight_-_literal_optical_illusions_with_elephant_legs.jpg">
    </div>

    
    
    
    
 <div id="The Impossible Triangle" class="tabcontent">
        <h3>The Impossible Triangle</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Triangle . "' ORDER BY id";

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
<button onclick="showTriangle()">Submit</button>
    <p id="Triangle"></p>
<script>
function showTriangle() {
  document.getElementById("Triangle").innerHTML = "The Triangle seems to be in an infinite loop.";
}
</script>
        <img src="https://ih1.redbubble.net/image.1384633167.4941/flat,750x1000,075,t.jpg">
    </div>





<div id="The Necker Cube" class="tabcontent">
        
        <h3>The Necker Cube</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Cube . "' ORDER BY id";

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
<button onclick="showCube()">Submit</button>
    <p id="Cube"></p>
<script>
function showCube() {
  document.getElementById("Cube").innerHTML = "This illusion is part of an ambiguous class of illusions where a two-dimensional figure, or three-dimensional object can be seen in two or more sharply distinct ways.";
}
</script>
      <img src="https://e7.pngegg.com/pngimages/15/794/png-clipart-necker-cube-penrose-triangle-impossible-cube-optical-illusion-psychology-angle-furniture.png">
    </div>
    
    


<div id="Infinite Staircase" class="tabcontent">
        
        <h3>Infinite Staircase</h3>
<?php
include "dbConn.php";
$sqlQuestion = "SELECT id, topic, question FROM Question WHERE topic='" . Staircase . "' ORDER BY id";

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
<button onclick="showStaircase()">Submit</button>
    <p id="Staircase"></p>
<script>
function showStaircase() {
  document.getElementById("Staircase").innerHTML = "When you are able to perceive the same image differently due to a distortion of its size, curve, length, or position, it is known as a distorting illusion. These illusions occur when the physical aspect of the image is modified, making you change your perception entirely. The illusion however, is not caused by a change in the dimensions of the image. Rather, the fact that you can see a change is the illusion itself, as the image remains constant but you perceive its dimensions to be ever changing rather than remaining constant.";
}
</script>
      <img src="https://www.opticalspy.com/uploads/1/4/4/9/144966/6336871_orig.jpg?150">
    </div>



</body>

</html>
