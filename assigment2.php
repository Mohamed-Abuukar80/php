<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

//INFORMATION ABOUT ME 
echo ("<h2 style='color:purple'> <span style='color:orange'> Assigment: Two</span> <br>Name: Mohamed Abuukar Ali <br><span style='color:green'> Class: BIT27B</span></h2>");


echo "<h3> QUESTION 1:</h3>";

    function binaryToDecimal($binary)
    {
        $decimal = 0;
        $power = 0;
    
        while ($binary > 0) {
            $bit = $binary % 10;
            $decimal += $bit * pow(2, $power);
            $binary = (int)($binary / 10);
            $power++;
        }
    
        return $decimal;
    }

    function decimalToOctal($decimal)
    {
        $octal = 0;
        $i = 1;
    
        while ($decimal != 0) {
            $octal += ($decimal % 8) * $i;
            $decimal = (int)($decimal / 8);
            $i *= 10;
        }
    
        return $octal;
    }

    function decimalToHexadecimal($decimal)
    { 
        $hexadecimal = '';
        $hexValues = '0123456789ABCDEF';
    
        while ($decimal > 0) {
            $remainder = $decimal % 16;
            $hexadecimal = $hexValues[$remainder] . $hexadecimal;
            $decimal = (int)($decimal / 16);
        }
    
        return $hexadecimal;
    }

    $binaryNumber = '00001111 '; 

    $decimalNumber = binaryToDecimal($binaryNumber);
    $octalNumber = decimalToOctal($decimalNumber);
    $hexadecimalNumber = decimalToHexadecimal($decimalNumber);

    echo "Binary: $binaryNumber <br>";
    echo "Decimal: $decimalNumber <br>";
    echo "Octal: $octalNumber <br>";
    echo "Hexadecimal: $hexadecimalNumber";



echo "<h3> QUESTION 2:</h3>";

    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    // question 2 part a)
    echo "<b> a)  </b>  ";
    echo "Array Numbers Are: ";
    for($i =0 ; $i < count($numbers); $i++){
       echo ("$numbers[$i], ");
    }


    // question 2 part b)
    echo "<br> <b> b)  </b>  ";
    $t = 0;
    for($i =0 ; $i < count($numbers); $i++){
        if ($numbers[$i] % 2 != 0)
            $t += $numbers[$i];
     }
     echo ("The total of odd numbers in the array are : $t ");


     // question 2 part c)
     echo "<br> <b> c)  </b>  ";
    $t = 0;
    for($i =0 ; $i < count($numbers); $i++){
        if ($numbers[$i] % 2 == 0)
            $t += $numbers[$i];
     }
     echo ("The total of even numbers in the array are : $t ");



     // question 2 part d)
     echo "<br> <b> d)  </b>  ";
    $t = 0;
    for($i =0 ; $i < count($numbers); $i++){
            $t += $numbers[$i];
     }
     echo ("The total of all numbers in the array are : $t ");



    // question 2 part e)
    echo "<br> <b> e)  </b>  "; 
    $smallest = min($numbers);
    echo ("The minimum number in the array is  : $smallest");
    echo " and its positions are :";
    for($i =0 ; $i < count($numbers); $i++){
        $smallest = min($numbers);
        if($numbers[$i] === min($numbers)){
            echo $i . " ";  
            
        }
        
     }
  



    // question 2 part f)
    echo "<br> <b> f)  </b>  "; 
    $smallest = max($numbers);
    echo ("The maximum number in the array is  : $smallest");
    echo " and its positions are :";
    for($i =0 ; $i < count($numbers); $i++){
        $smallest = max($numbers);
        if($numbers[$i] === max($numbers)){
            echo $i . " ";  
            
        }
        
     }


echo "<h3> QUESTION 3:</h3>";

     $associative = array(
        'Id' => 'IT20209290122',
        'Name' => 'Mohamed Ali Hassan',
        'Phone' => '0706172827',
        'Dob' => '25-09-2022',
        'Sex' => 'male',
     );
    
    echo ("<table border ='1' width = '30%' cellspacing = '0'>");
        
    echo ("<tr style = 'background-color: lightgray;'>");
    echo ("<th style = 'align: left'> Index </th>");
    echo ("<th> values </th>");
    echo ("</tr>");
    foreach ($associative as $i1 => $row) {
        echo ("<tr><td>$i1");
        echo ("<td>$row");     
    }
    echo ("</table>");


echo "<h3> QUESTION 4:</h3>";
    $bit = array (
        'Light' => array (
            'Red'=> 'Light Red',
            'Green'=> 'Light Green',
            'Blue'=> "Light Blue",
        ),
        'Normal' => array (
            'Red'=> 'Norma Light ',
            'Green'=> 'Normal Green',
            'Blue'=> "Normal Blue",
        ),
        'Dark' => array (
            'Red' => "Dark Red",
            "Green"=> "Dark Green",
            "Blue"=> "Dark Blue",
        ),
    );
    echo ("<table border ='1' width = '50%' cellspacing = '0'>");
        foreach ($bit as $i1 => $row) {
            echo ("<tr style = 'background-color: lightgray;'><th>");
            foreach ($row as $i2 => $v)
                echo ("<th>$i2");
            break;
            // echo ("<br>");
        }
        foreach ($bit as $i1 => $row) {
            echo ("<tr><th style = 'background-color: lightgray;'>$i1");
            foreach ($row as $i2 => $v)
                echo ("<td>$v");
            // break;
            // echo ("<br>");
        }
    







    ?>
</body>
</html>