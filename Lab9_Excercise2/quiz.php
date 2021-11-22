<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <nav>
            <a class="nav" href="../index.html">Home</a> |
        </nav>
        <h2>Quiz Results</h2>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            
            $my_Que     = array("What is the capital of Portugal?","How many states are in the United States?","What is the name of the professor teaching EECS 448 during the Fall 2021 semester?","What is the capital of Kansas?","Where is the University of Kansas?");
            $Ans = array("Madrid", "50", "Dr. Johnson" ,"Topeka", "Lawrence");
            $input  = array("","","","","");
            $grade = 0;
            if (!empty($_POST["capital"]))
            {
                $input[0] = $_POST["capital"]; 
            }
            if (!empty($_POST["states"]))
            {
                $input[1] = $_POST["states"];
            }
            if (!empty($_POST["prof"]))
            {
                $input[2] = $_POST["prof"];
            }
            if (!empty($_POST["kansas"]))
            {
                $input[3] = $_POST["kansas"];
            }
            if (!empty($_POST["city"]))
            {
                $input[4] = $_POST["city"];
            }

            echo "<hr>";
            for ($i=0; $i<count($my_Que); $i++)
            {
                if ($input[$i] == $Ans[$i])
                {
                    $grade++;
                }
                echo "<div><b>Question " . ($i+1) . ": </b><i>" . $my_Que[$i] . "</i><br><div class='inp'> You Answered: " . $input[$i] . "<br>Correct Answer: " . $Ans[$i] . "</div></div><br><br><hr>";
            }
            echo "Score: <b>" . $grade . "/" . count($my_Que) . "</b> (<b>" . (($grade/count($my_Que))*100) . "%</b>)<br><a href='quiz.html'>Try Again</a><br>";
            
        ?>
    </body>
</html>