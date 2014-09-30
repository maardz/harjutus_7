<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h2>While loop</h2>
	<?php
    $count = 10;

    while ($count <= 100) {
        echo $count. ", ";
        $count += 10;
        
        
    }
    echo "<br>";

    $count = 100;

    while ($count <= 1000) {
        echo $count. ", ";
        $count += 100;
    }

?>

<h3>Infinite while loop</h3>

<?php
/*
    $count = 1;

    while ($count <= 10) {
        echo $count;
        
    } */
?>

<h3>Conditional statements in while loop</h3>


<?php
    $count = 1;

    while ($count <= 10) {
        if ($count == 3 ) {
            echo "kolm";
        } 

        elseif($count == 7){
        	echo "seitse";
        }

        else {
            echo $count;
        }

        $count += 1;
    }
?>

	<h2>For loop</h2>
<?php

$var = "";

for ($i = 1; $i <= 10; $i++) 
{
	if($i % 2 == 0)
		$var =  $i;
	else
		$var = $i;
}

echo $var;

?>


</body>
</html>