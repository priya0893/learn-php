<?php
echo "<h1> While Loops</h1>";

//while loop
$i = 0;
while ($i < 5) {
    echo "$i<br>";
    $i++;
};

echo "<br>";

//while loop
$x = 3;
while ($x <= 30) {
    echo "table of 3: $x <br>";
    $x = $x + 3;
};

echo "<br>";

//while loop
$y = 1;
while ($y <= 10) {
    echo $y * 2;
    echo "<br>";
    $y++;
}

echo "<h2>For loop</h2>";
echo "<br>";

//for
for ($i = 0; $i <= 5; $i++) {
    echo "this is for loop $i <br>";
}

echo "<h2>Do while loop</h2>";

//do while loop
$do = 10;
do {
    echo "Number is $do <br>";
    $do += 10;
} while ($do <= 100);

echo "<br>";

//do while loop
$t = 2;
do {
    echo "table of 2: $t <br>";
    $t += 2;
} while ($t <= 20);

echo "<br>";
echo "for loop <br>";
echo "<br>";

//for loop
for ($f = 3; $f <= 30; $f += 3) {
    echo "table of 3: $f <br >";
};

echo "<br>";
// do while loop

$T = 12;
do {
    echo "table of 5: $T <br>";
    $T += 12;
} while ($T <= 120);

//for
echo "<br>";
for ($p = 1; $p <= 15; $p += 3) {
    echo "$p <br>";
};

echo "<h2>foreach</h2>";

$months = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");

foreach ($months as $key => $value) {
    if ($key % 2 == 0) {
        echo $months[$key] . " <br>";
    }
};

echo "<br>";

$st = array("ram", "shyam", "priya", "pooja", "pawan", "nidhi", "naitik");
foreach ($st as $key => $value){
    if ($key % 2 == 0){
        echo "$st[$key] <br>";

    }
    
};

echo "<br>";

for ($f = 5; $f <= 50; $f += 5) {
    echo " table of 5: $f <br>";
};

echo "<br>";

$r = 1;
while($r <= 10){
    echo "sum number: $r <br>";
    $r +=2;

};

print "<br>";

$day = array("sunday" , "monday", "tuesday", "wednesday", "thursday" , "friday");
foreach($day as $key => $value){
    if($key % 2 == 0){
        echo "$day[$key] <br>";
    }
    
};

