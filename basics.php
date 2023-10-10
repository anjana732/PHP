<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <div class="container">
        This is my first PHP website.
    </div>
    <?php
        $var1 = 5;
        $var2 = 2;
        echo $var1;
        echo $var2;
        echo"Hello World";
        echo "<br>";
        //Arithmetic Operator
        echo "Sum of var1 and var2 is: ";
        echo $var1 + $var2;
        echo "<br>";
        echo "Difference of var1 and var2 is";
        echo $var1- $var2;
        echo "<br>";
        echo "Multiplication of var1 and var2 is";
        echo $var1 * $var2;
        echo "<br>";
        echo "Division of var1 and var2 is";
        echo $var1 / $var2;
        echo "<br>";
        //Assignment Operator
        $newvar = $var1;
        echo "Value of new var : ";
        echo $newvar;
        echo "<br>";
        $newvar +=2;
        echo $newvar;
        echo "<br>";
        //Comparision Opeartor
        echo "Value of 1==4";
        echo var_dump(1==4);
        echo "<br>";
        echo "Value of 1!=4";
        echo var_dump(1!=4);
        echo "<br>";
        echo "Value of 1<=4";
        echo var_dump(1<=4);
        echo "<br>";
        echo "Value of 1>=4";
        echo var_dump(1>=4);
        echo "<br>";
        $age = 7;
        if($age>18){
            echo "You can go for party";
        }
        else if($age == 7){
            echo "Your age is 7";
        }
        else{
            echo "You can't go for party";
        }
        //Arrays in PHP
        $languages = array("Python","C++","PHP","Nodejs");
        echo $languages[0];
        echo count($languages);
        echo "<br>";
        //Loops in PHP
        //Printing 1 to 10 using while loop
        $num = 0;
        while($num <= 10){
            echo "The value is: ";
            echo $num;
            echo "<br>";
            $num++;
        }
        //Iterating through array using while loop
        $a = 0;
        while($a < count($languages)){
            echo $languages[$a];
            echo "<br>";
            $a++;
        }
        //Do-while loop in PHP
        echo "printing using do-while loop";
        $b = 0;
        do{
            echo "The value is: ";
            echo $b;
            echo "<br>";
            $b++;
        }while($b < 10);
        //For loop in PHP
        echo "Printing using for loop";
        for ($i=0; $i < 10; $i++) { 
            echo "The value is: ";
            $i;
            echo "<br>";
        }
        //For each loop in PHP
        echo"<br>Iteration by foreach loop";
        $value = 0;
        foreach($languages as $value){
            echo "The value is: ";
            echo $value;
            echo "<br>";
        }
        //Functions in PHP
        function print5(){
            echo "Five";
        }
        print5();
        
        function print_number($num){
            echo "<br> your number is: ";
            echo $num;
        }
        print_number(45);
        //Strings in PHP
        echo "<br>";
        $str = "Anjana";
        $lenn = strlen($str);
        echo "Length is: ".$lenn;
    ?>
    
</body>
</html>