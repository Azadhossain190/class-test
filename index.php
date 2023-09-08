

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
<?php

echo "<h4>01- write a php program for checking marriage age of men & women by using function & conditional statement</h4>";
function Agecheck($men,$women){
    if($men >=21 && $women >=18){
        echo "MEN AND WOMEN ELIGIBLE FOR MARRY";
    }elseif ($men >=21 && $women <18) {
        echo "MAN ELIGIBLE FOR MARRY";
    }elseif($men <21 && $women >=18){
        echo "WOMEN ELIGIBLE FOR MARRY";
    }else{
        echo "NO ONE READY FOR MARRY";
    }
}
Agecheck(21,18);
echo '<br>';



echo "<h4>02- write a php program  to convert celsius to fahrenheit by using function </h4>";
function celsiuscheck($celsius){
    $fahrenheit =($celsius * 9/5) + 32;
    echo $fahrenheit;
}
celsiuscheck(17);
// echo '<br>';




echo "<h4>03- write a php program to calculate your gratting system by using conditional statement </h4>";

    $marks =100;
    if ($marks >= 80 && $marks <=100) {
        echo " Grade Is A+";
    }elseif ($marks >=70 && $marks <80) {
        echo "Grade Is A";
    }elseif($marks >=60 && $marks <70){
        echo "Grade Is A-";;
    }elseif ($marks >=50 && $marks <60) {
        echo "Grade Is B";
    }elseif($marks >=40 && $marks <50){
        echo "Grade Is C";
    }elseif($marks >=33 && $marks <40){
        echo "Grade Is D";
    }elseif($marks >=0 && $marks <33  ){
        echo "Grade Is F";
    }else{
        echo "Invalid Number";
    }
echo '<br>';




echo "<h4>04- write a php program  for calculating multiplication table of any number by using (FOR LOOP--) </h4>";
$multi =10;
for ($i=1; $i <=10 ; $i++) { 
    $result = $multi*$i;
    echo "$multi x $i =$result <br>";
}
echo '<br>';




echo "<h4>05- write a php program to check a valid password by using conditional statement </h4>";
$userpassword ='azad190148';
$dbpassword =password_hash($userpassword,PASSWORD_BCRYPT);

$check =password_verify('azad190148', $dbpassword) ;

if ($check == true) {
    echo "VALID PASSWORD ",'<br>';
    var_dump($check);
    
}else{
    echo "INVALID PASSWORD";
    
    var_dump($check);
}


