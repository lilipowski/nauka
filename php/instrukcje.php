<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $d=5;
    $e=6;
    $f="napis";

    if($d==5)
        {
            echo "a jest rowne 5";
        }
    else if($d<5)
        {
        echo "a jest mniejsze od 5";
        }
    else
        {
            "a jest wieksze od 5";
        }

        echo "<br>";
    
    if($e<6)
        {
            echo "b jest mniejsze od 6";
        }
    else if($e>6)
        {
            echo "b jest wieksze od 6";
        }
    else
        {
            echo "b jest rowne 6";
        }

        echo "<br>";
    if($f=="napis")
        {
        echo $f;
        }
    else
    {
        echo "zmienna c to nie napis";
    }

    $a=1;
    $b=6;
    $c=-8;
    $delta=$b*$b-4*($a*$c);
    
    echo "<br>";

    if($delta>0)
        {
            echo "delta ma 2 rozwiązania";
            echo "<br>";
            echo $x1=((-$b + sqrt($delta))/2 * $a);
            echo "<br>";
            echo $x2=((-$b - sqrt($delta))/2 * $a);
        }
    else if($delta==0)
        {
            echo "delta ma 1 rozwiązanie";
            echo "<br>";
            echo $x0=((-$b)/2*$a);
        }
    else
        {
            echo "delta nie ma rozwiązań";
        }
    ?>
</body>
</html>