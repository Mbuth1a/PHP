<?php
//1.Declare variable age
function checkUserEligibilityToVote()
{
$age=2;
$name = " Peter";
echo $name;
if($age>=18)
{
    echo " you are eligible to vote";
}
else{
    echo " You are not eligible to vote";
}
}
//checkUserEligibilityToVote()
$marks=70;
if($marks>=80)
{
    $grade="A";
}
elseif($marks>=75)
{
    $grade="B";
}
elseif($marks>=69)
{
     $grade= "C";
}
elseif($marks>=55)
{
    $grade="D";
}
elseif($marks>=50)
{
    $grade="D-";
    
}
else{
    $grade="fail";
}
echo "Your score is" .$grade;
//new

function tax ($salary)

{

	$tax = $salary * 0.05;

	$netSalary = $salary - $tax;

	echo "Gross salary = $$salary";

	echo "<br>Tax = $$tax"; 

	echo "<br>Net salary = $$netSalary";

}

tax (500);


?>