<html>
    <head></head>
    <body>
        <h1>&nbsp;Phytagoras Hitung Nilai C</h1>
        <form action="Pythagoras.php" method="GET">
            <table>
                <tr>
                    <td>Input nilai A</td>
                    <td><input type="text" name="nilaiA"></td>
                </tr>
                <tr>
                    <td>Input nilai B</td>
                    <td><input type="text" name="nilaiB"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>


<?php
    $a = $_GET['nilaiA'];
    $b = $_GET['nilaiB'];
    $c = sqrt(($a*$a)+($b*$b));
 
    echo "<b>Hasil Form</b><br>";
    echo "Nilai A :  &nbsp; ".$a."<br>";
    echo "Nilai B :  &nbsp; ".$b."<br>";
    echo "Nilai C :  &nbsp; <b>".$c."</b>";
?>



    </body>
</html>