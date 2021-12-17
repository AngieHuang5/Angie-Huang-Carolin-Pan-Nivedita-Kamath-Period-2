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
    <button class="accordion">Afterimage</button>
    <div class="panel">
        <p>Instances where your brain fills in the gaps of a sight that it thinks should be there.</p>
    </div>

    <button class="accordion">Examples</button>
    <div class="panel">
        <p>Three different types of opticla illusions: psychological illusions, literal illusions, and cognitive
            illusions.</p>
    </div>

    <button class="accordion">Hermann Grid</button>
    <div class="panel">
        <p>Here you will see a white grid with black squares, but as you move your eyes across the patter, you will see
            grey spots in places where black lines cross over each other</p>
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
        <button class="tablinks" onmouseover="openCity(event, 'The Dynamic Ebbinghaus')">The Dynamic Ebbinghaus</button>
        <button class="tablinks" onmouseover="openCity(event, 'The Skye Blue Cafe Wall Illusion')">The Skye Blue Cafe Wall Illusion</button>
        <button class="tablinks" onmouseover="openCity(event, 'Confetti')">Confetti</button>
        <button class="tablinks" onmouseover="openCity(event, 'The Rice Wave Illusion')">The Rice Wave Illusion</button>
        <button class="tablinks" onmouseover="openCity(event, 'The Tilted Road Illuion')">The Tilted Road Illusion</button>
    </div>

<!--
    <div id="The Dynamic Ebbinghaus" class="tabcontent">

        <div class="questions" style="background-color:lightblue" >
            <h1>How many legs does this elephant have?<span id='a1'></span> </h1><br>
            <form id="d1">
                <input type="radio" name="choice" value="answer1"> 4
                <input type="radio" name="choice" value=> 5
                <input type="radio" name="choice" value="Application"> I can't tell.
                <input type="radio" name="choice" value="Application"> That's not an elephant!
                <br>
                <input type="submit" value="submit" onclick="validate(choice.value, '4', 'd1','a1')">
            </form>
        </div>
-->
        <script>
            var validate = function (valore, rightanswer, form, span) {

                var formname = document.getElementById(form)
                var spanname = document.getElementById(span)

                spanname.innerHTML = rightanswer;

                if (valore == rightanswer) {
                    formname.innerHTML = "<div style='background-color:lightgreen'><h1>You're right. " + rightanswer + "</h1></div>";
                }
                else {

                    formname.innerHTML = "<div style='background-color:pink'><h1>Sorry, you where wrong: The answer was: " + rightanswer + "</h1></div>";
                }
            };
        </script>

<div id="The Dynamic Ebbinghaus" class="tabcontent">
        
        <h3>The Dynamic Ebbinghaus</h3>
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
        <p>The orange circle does not change size.</p>
        <img
            src="https://www.centreforsight.com/wp-content/uploads/2018/03/centre_for_sight_-_literal_optical_illusions_with_elephant_legs.jpg">
    </div>

    <div id="The Skye Blue Cafe Wall Illusion" class="tabcontent">
        
        <h3>The Skye Blue Cafe Wall Illusion</h3>
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
        <p> The horizontal lines are perfectly parallel.</p>
        <img src="http://static.nautil.us/15395_0e2e84a82d94dc94d5749d44d4c6c73b.png">
    </div>

    <div id="Confetti" class="tabcontent">
        
        <h3>Confetti</h3>
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
        <p>The circles are actually the same color, but the lines make them look different.</p>
        <img src="http://static.nautil.us/15396_5b46370c9fd40a27ce2b2abc281064de.png">
    </div>
    <div id="The Rice Wave Illusion" class="tabcontent">
        
        <h3>The Rice Wave Illusion</h3>
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
        <p>The image looks like it is animated.</p>
        <img src="http://static.nautil.us/15397_8e452e79cd525671ce2fb6997b73aaf9.png">
    </div>
    <div id="The Tilted Road Illuion" class="tabcontent">
        <h3>The Tilted Road Illuion</h3>
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
        <p>same picture, but looks like it is taken from two different angles.</p>
        <img src="http://static.nautil.us/15398_5edba33a1dcf1876318fb7013a0a8134.png">
    </div>
    <div id="The Train Illusion" class="tabcontent">
        
        <h3>The Train Illusion</h3>
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
        <p>Train is moving in two directions.</p>
        <img src="http://nautilus-prod.s3.amazonaws.com/Stewart9.gif">
    </div>
</body>

</html>