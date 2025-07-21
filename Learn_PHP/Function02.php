<!-- Global variable and local variable in php -->
 <!-- Local variable little bit different here and also contain superGlobal variable -->


 <?php
// Global variable
$abc = "Hello, PHP!";
// Function to demonstrate local variable

function testfunc(){
    $abc = "Hey local:";
    echo $abc; // This will output the local variable
};

testfunc(); // Call the function to see local variable output
echo $abc; // This will output the global variable


// Now see the how Global variable can acess in function

function testfunc2(){
    global $abc; // Declare $abc as global to access the global variable
    echo $abc; // This will output the global variable
};

testfunc2();
echo $abc;


// Super global variable
function testfunc3(){
    $GLOBALS['abc'] = "heyy"; // Declare $abc as global to access the global variable
    echo $GLOBALS['abc']; // This will output the global variable
};

testfunc3();
echo $abc; //Global variable change to heyy

?>

