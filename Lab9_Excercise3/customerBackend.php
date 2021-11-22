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
        <center>
        <h1>Store</h1>
        </center>
        <h2>Receipt</h2>
    <?php
    $product1 = $_POST["item1"];
    $product2 = $_POST["item2"];
    $product3=$_POST["item3"];
    $shipping=$_POST["shipping"];
    $user=$_POST["username"];
    $password=$_POST["password"];
    echo"<div>";
        echo"<h3> Hello !</h3>";
        echo"<p>User: ". $user ." Your password is " . $password . "</p>";
    echo"</div>";

    echo "<table>";

    echo "<tr>";
        echo "<td></td>";
        echo "<td>Quantily</td>";
        echo "<td>Cost Per Item</td>";
        echo "<td>Sub Total</td>";
    echo"</tr>";

    echo "<tr>";
        echo "<td>Iphone 14: </td>";
        echo "<td>" . $product1 . "</td>";
        echo "<td>$799.00 </td>";
        echo "<td>$ " . $product1*(799) . "</td>";
    echo"</tr>";

    echo "<tr>";
        echo "<td>Iphone 14 Pro: </td>";
        echo "<td>" . $product2 . "</td>";
        echo "<td>$899.00 </td>";
        echo "<td>$ " . $product2*(899) . "</td>";
    echo"</tr>";

    echo "<tr>";
        echo "<td>Iphone 14 Pro Max: </td>";
        echo "<td>" . $product3 . "</td>";
        echo "<td>$1099.00 </td>";
        echo "<td>$ " . $product3*(1099) . "</td>";
    echo"</tr>";

    if($shipping==0)
    {
    echo "<tr>";
        echo "<td>Shipping Type:  </td>";
        echo "<td>Free 7 Day</td>";
        echo "<td></td>";
        echo "<td>Cost: $  " . $shipping . "</td>";
    echo"</tr>";
    }
    if($shipping==50)
    {
    echo "<tr>";
        echo "<td>Shipping Type: </td>";
        echo "<td>Overnight</td>";
        echo "<td></td>";
        echo "<td>Cost: $  " . $shipping . "</td>";
    echo"</tr>";
    }
    if($shipping==5)
    {
    echo "<tr>";
        echo "<td>Shipping Type:  </td>";
        echo "<td>Three Day</td>";
        echo "<td></td>";
        echo "<td>$  " . $shipping . "</td>";
      echo"</tr>";
    }
    echo"<tr>";
        echo"<td>Total Cost:  <td><td>";

        echo "<td>$  ". ($shipping+($product3*1099)+($product2*899)+($product1*799))  ."</td>";
    echo"</tr>";
    echo"</table>"
?>
    </body>
</html>
