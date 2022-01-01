<div style='
color:darkcyan ;
  font-family: Times New Roman; 
  font-size: 20px;
   width: 110px;
    height: 40px;
    border: 2px solid darkgoldenrod;
    border-radius: 8px;
    background: cornsilk ;
    text-decoration: darkcyan'> Result:

<?php
//isset() function checks whether a variable is set and is not NULL.
if (isset($_REQUEST['input'])) {
    $input = $_REQUEST['input'];
    try {
        echo
        calculator($input);
    } catch (ParseError $error) {
        echo "Try again";
    } catch (Error $error) {
        echo $error->getMessage();
    }
}


function calculator($input)
{
    //The preg_replace() function returns a string or array of strings where all matches of a pattern or list of patterns found in the input are replaced with substrings.
    $input = preg_replace("/[^a-z0-9+\-*\/]/", "", $input);
    $input2 = "NULL";


    if ($input != "")
        $input2 = @eval("return " . $input . ";");

    if ($input2 == null)
        throw new Error("Something went wrong!");


    return $input2;
}



echo "
<div></div>

<br>
<br>
<br>


<a href='index.html'
 style='
    color:darkcyan ;
    font-family: Times New Roman; 
    font-size: 14px; 
    width: auto;
    height: 60px;
    border: 1px solid darkgoldenrod;
    border-radius: 8px;
    background: cornsilk;'
   >Back to calculator</a>";