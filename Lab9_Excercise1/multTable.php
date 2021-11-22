<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <body>
        <nav>
            <a class="nav" href="../index.html">Home</a> |
        </nav>
    <?php
    
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    echo "<p> Multiplication Table</p>";

    
    echo "<table style='border: 1px solid cornflowerblue, width: 100%'>";
        echo"<tr>";
        echo"<td>  </td>";
        for($i=1; $i<=100; $i++)
        {
                echo "<td>  {$i}</td>";
        }
        echo"</tr>";
        for($j=1; $j<=100;$j++)
        {
                echo"<tr>";
                echo"<td> {$j}</td>";
                for($k=1;$k<=100;$k++)
                {
                        echo "<td>". $k*$j." </td>";
                }
                echo"</tr>";
        }
    echo"</table>"
    ?>
   </body>
</html>