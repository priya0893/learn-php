
<h1> php variables </h1>

<?php
$p = 12;
$r = 12;
$i = $p+$r; 
echo  $i;
echo "<br>";

$first_name = "riya";
$last_name = "Sharma";

echo  "my name is $first_name $last_name ";
 
echo "<p> php allowed 8 types of deta.</p>";
echo "<ol>
<li>String</li>
<li>integer</li>
<li>flaot</li>
<li>boolean</li>
<li>null</li>
<li>Array</li>
<li>object</li>
<li>resource</li>
</ol>";

//string deta type
$string = "php is a server scripting language";
var_dump ($string);
echo "<br>";
echo "<br>";

//string number count 
echo strlen("Hello world!");
echo "<br>";

//string word count 
echo str_word_count("php can generate dynemic page.");
echo "<br>";

echo strrev("php code executed on the server.");
echo "<br>";
echo "<br>";

//integer 
$a = 9146050575;
var_dump ($a);
echo "<br>";

//float
$p = 3758357.5535;
var_dump ($p);
echo "<br>";
echo "<br>";

//array
$ab = array("valvo","bvb","somo");
var_dump($ab);

echo "<h3>Operaters</h3>";
echo "<h3>Number</h3>";
echo "<h3>constant</h3>";

echo "<h2>If, else, Ifelse </h2>";

$t = date("H");

if ($t < 20) {
    echo "Have a good morning!";
} elseif ($t < 10 ) {
    echo "have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
echo "<br>";

//one more example
$age = 10;

if ($age < 10) {
    echo "You cannot drive the car";
} elseif($age < 20 ) {
    echo "you can drive the car";
} else {
    echo "you are not able to drive you car";
}

echo "<h2>Switch</h2>";

$age = 36;

switch($age) {
    case 12:
        echo "you are 12 yeras old";
        break;

        case 26:
            echo "you are 26 years old";
            break;

            case 36:
                echo "you are 36 years old";
                break;

                default:
                echo "your age is weird ";
            };

            echo "<br>";

 $color = "red";
 
 switch($color){
    case "red":
        echo "your favorite color is red <br>";
        break;
        case "blue":
            echo "your favorite color is blue <br>";
            break;
            case "yellow":
                echo "your favorite color is yellow <br>";
                break;
                default :
                echo "here is not your any favorite color";

 }

 $dates = date("D");
 switch($dates){
    case "mon":
        echo "today is monday";
        case "tue":
            echo "today is tuesday";
            case "wed":
                echo "today is wednesday";
                case "thu":
                echo "today is thursday";
                case "fri":
                    echo "today is friday";
                    case "sat":
                        echo "today si saturday";
                        case "sun":
                            echo "today is sunday"; 

                default:
                echo "no information available for that day";

                
 };


 
 echo "<br>";
?>