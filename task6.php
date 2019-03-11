
<?php
//$number=70;

function passing($number){

	
	if($number ==0 || $number<=29){
      echo "not achieved"." ";
	}
	elseif($number==30 || $number<=39){
     
     echo "elemetary"." ";
	}
	elseif($number==40 || $number<=49){
	echo "moderate"." ";
}
elseif($number <0 || $number>=100){
      echo "passed"." ";
;	}
return $number;
}
//function call and pass variables
 echo passing(5).'<br>';
 echo passing(40).'<br>';
 echo passing(101).'<br>';





//here am not sure about what they are looking for
 function Ratings($rate){
    //once it count more than 7 int it assign this
    $rate='12345678';
 	  switch ($rate){
 		case 12345678:
 		echo "invalid code<br>";
 		break;
 		case 1234567:
 		echo "your number are equal to 7";
 	}
 	return $rate;
 }
 //here i return function with value of rate
 echo Ratings(1234567);
?>

