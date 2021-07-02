<?php
//introduction to PHP Array
echo "PHP Array <br>
why? less code <br>
Adv? multiple values can be stored in one array
";
?>
<table>
    <tr>
        <td>Key:</td>
        <td>0</td>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>Value:</td>
        <td>Shivam</td>
        <td>Terina</td>
        <td>Sukhbir</td>
    </tr>
</table>
<?php
$address=array("Terina","Shivam","Sukhbir"); //First Method to allocated value to array
echo "Address of $address[0],$address[1],$address[2] is in array variable address";
echo "<br>";
echo $address[1];
echo "<br>"; //Allocate Method to allocated value to array
$address[0]="Shivam";  $address[1]="Terina";  $address[2]="Sukhbir";  
echo "Persons are: $address[0], $address[1], and $address[2]"; 
echo "<br>"; //Allocate Method to allocated value to array
echo $address[1];
?>
<h2>Types of array</h2>
There are 3 types of array in PHP. <br>
<h3>Indexed Array</h3><br>
ex<br>
$season[0]="summer";   <br>
$season[1]="winter";   <br>
$season[2]="spring";  <br>
$season[3]="autumn";    <br>
<br>
<h3>Associative Array</h3><br>
We can associate name with each array elements in PHP using => symbol.<br>
<br>
<?php
// 1st method of assigning value
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  
// 2nd method of assigning value
$salary["Sonoo"]="350000";  
$salary["John"]="450000";  
$salary["Kartik"]="200000";  
//example 
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
echo "John salary: ".$salary["John"]."<br/>";  
echo "Kartik salary: ".$salary["Kartik"]."<br/>";  
echo "<br>";
echo $salary["Kartik"];
echo "<br>";
?>
<h3>Multidimensional Array</h3><br>
PHP multidimensional array is also known as array of arrays<br>
It allows you to store tabular data in an array.<br>
 PHP multidimensional array can be represented in the form of <br>
 matrix which is represented by row * column.<br>
<table>
    <tr>
        <td>ID:</td>
        <td>NAME</td>
        <td>Salary</td>
        
    </tr>
    <tr>
        <td>1</td>
        <td>Sonno</td>
        <td>400000</td>
    </tr>
    <tr>
        <td>2</td>
        <td>John</td>
        <td>500000</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Rahul</td>
        <td>300000</td>
    </tr>
</table>
<br>
<?php
echo "Output of above via PHP<br>";
$emp = array  (  array(1,"sonoo",400000), array(2,"john",500000),  array(3,"rahul",300000)  );  

for ($row = 0; $row < 3; $row++) 
{  
    for ($col = 0; $col < 3; $col++) 
    {  
        echo $emp[$row][$col]."  ";  
    }  
echo "<br/>";  
}  
?>
<h2>PHP Array function</h2>
PHP provides various array functions to access and manipulate the elements of array. <br>
<h3>1st. array()</h3>
<?php    
$season=array("summer","winter","spring","autumn");    
echo "Season are: $season[0], $season[1], $season[2] and $season[3]";    
?> 
<h3>2) PHP array_change_key_case() function</h3>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
print_r(array_change_key_case($salary,CASE_UPPER)); 
echo "<br>";
print_r(array_change_key_case($salary,CASE_LOWER));   
?>   
<h3>PHP array_chunk() function</h3>
PHP array_chunk() function splits array into chunks.<br>
By using array_chunk() method, you can divide array into many parts.
<br>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000","Shivam"=>"600000","Terina"=>"700000","Sukhbir"=>"1000");    
print_r(array_chunk($salary,2));   
?> 
<h3>PHP count() function</h3>
PHP count() function counts all elements in an array
<br>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000","Shivam"=>"600000","Terina"=>"700000","Sukhbir"=>"1000");    
echo count($salary);
?>
<h3>PHP sort() function</h3>
PHP sort() function sorts all the elements in an array.
<br>
<?php    
$season=array("summer","winter","spring","autumn");    
sort($season);  
foreach( $season as $s )    
{    
  echo "$s<br />";    
}    
?>
<h3>6) PHP array_reverse() function</h3>
PHP array_reverse() function returns an array<br> containing elements in reversed order.
<br>
<?php    
$season=array("summer","winter","spring","autumn");    
$reverseseason=array_reverse($season);  
foreach( $reverseseason as $s )    
{    
  echo "$s<br />";    
}      
?> 
<h3>7) PHP array_search() function</h3>
PHP array_search() function searches the specified value in an array. <br> It returns key if search is successful.
<br>
<?php 
//mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )     
$season=array("summer","winter","spring","autumn");    
$key=array_search("spring",$season);  
echo $key;    
?>   
<h3>8) PHP array_intersect() function</h3>
PHP array_intersect() function returns the intersection of two array. <br>
In other words, it returns the matching elements of two array.
<br>
<?php    
$name1=array("sonoo","john","vivek","smith");    
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);  
foreach( $name3 as $n )    
{    
  echo "$n<br />";    
}   
?> 
//revisiong PHP foreach loop
<h2>PHP foreach loop</h2>
The foreach loop is used to traverse the array elements.<br> 
It works only on array and object. <br>
<b>It provides an easiest way to iterate the elements of an array.</b><br>
It will issue an error if you try to use it with the variables<br> 
of different datatype.<br>
The foreach loop works on elements basis rather than index. <br>
<br>
<img src="../20210616_basiclayout/includes/img/flowchart_foreach.png" alt="flowchart for foreach loop">
<br>
<?php  
    //declare array  
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
      
    //access array elements using foreach loop  
    foreach ($season as $element) {  
        echo "$element";  
        echo "</br>";  
    }  
?>  
<br>
PHP program to print associative array elements using foreach loop.
<br>
<?php
//declare array  
$employee = array (  
    "Name" => "Alex",  
    "Email" => "alex_jtp@gmail.com",  
    "Age" => 21,  
    "Gender" => "Male"  
);  
  
//display associative array element through foreach loop  
foreach ($employee as $key => $element) {  
    echo $key . " : " . $element;  
    echo "</br>";   
}  
?>
<br>
Using foreach to print Multi-dimensional array
<br>
<?php 
/*need further explaination 
    //declare multi-dimensional array  
    $a = array();  
    $a[0][0] = "Alex";  
    $a[0][1] = "Bob";  
    $a[1][0] = "Camila";  
    $a[1][1] = "Denial";  
      
    //display multi-dimensional array elements through foreach loop  
    foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2<br>";  
        }  
    }
    */  
?>  
<br>
Dynamic Array
<br>
<?php  
    //dynamic array  
    foreach (array ('j', 'a', 'v', 'a') as $elements) 
    {  
        echo "$elements<br>";
    }  
    echo "hie";
?>

<?php
//PHP Functions


?>
<h1>PHP function </h1>
<p>
PHP function is a piece of code that can be reused many times.<br>
 It can take input as argument list and return value. There are thousands of built-in functions in PHP.
</p>
<h2>Advantage of PHP Functions</h2>
<b>Code Reusability:</b>PHP functions are defined only once and can be invoked many times, <br>
like in other programming languages.<br>

<b>Less Code:</b> It saves a lot of code because you don't need to write the logic many times. <br>
By the use of function, you can write the logic only once and reuse it.<br>

<b>Easy to understand:</b> PHP functions separate the programming logic.<br> 
So it is easier to understand the flow of the application because every logic is divided in the form of functions.<br>
<h2>Syntax</h2>
function functionname(){  <br>
//code to be executed  
}  <br>
<h3>example1</h3>
<?php  
//example1
function sayHello(){  
echo "Hello PHP Function";  
}  
//calling functions
sayHello();
?>

<h2>PHP Function Arguments</h2>
<p>
We can pass the information in PHP function through arguments which is separated by comma.<br>
PHP supports Call by Value (default), Call by Reference, <br>
Default argument values and Variable-length argument list.<br>
<h3>example2</h3> 
<?php  
function sayHello1($name)
{  
echo "Hello $name<br/>";  
}  
sayHello1("Sonoo");  
echo"<br>";
sayHello1("Vimal");  
echo"<br>";
sayHello1("John");  
?>
<h3>example3- sumFun</h3>
<?php
function sumFun($num1,$num2)
{
    $num3=$num1+$num2;
    echo "$num3<br/>";
}
$num1=9222229;
$num2=1990;
sumFun($num1,$num2);
?>
<h2>PHP Call By Reference</h2>
<p>
Value passed to the function doesn't modify the actual value by default (call by value).
 <br>But we can do so by passing value as a reference.
to pass value as a reference, you need to use <b>ampersand (&) </b>symbol before the argument name<br>
</p>
<h3>example4- function call by reference</h3>
<?php
function adder(&$shiv)  
{  
    $shiv .= 'Call By Reference</b>';  
}  

$str = 'Hello ';  
adder($str);  
echo $str; 
?>
<h2>PHP Function: Default Argument Value</h2>
We can specify a default argument value in function.
<h3>example5a- function call by reference</h3>
<?php  
function sayHello2($name="Sonoo"){  
echo "Hello $name<br/>";  
}
sayHello2("shiv");  
sayHello2(); //calling default argument value
?>
<h3>example5b- function call by reference</h3>
<?php  
function increment(&$i)  
{  
    $i++;  
}  
$i = 10;  
increment($i);  
echo $i;  
?>  
<h2>PHP Function: Returning Value</h2>
<h3>example6- Check Using return below</h3>
<?php  
function cube($n){  
return $n*$n*$n;  
}  
echo "Cube of 3 is: ".cube(3);  
?>  
<h2>PHP Function: Returning Value</h2>
<p>
PHP Parameterized functions are the functions with parameters. <br>
You can pass any number of parameters inside a function. <br>
These passed parameters act as variables inside your function.
</p>
<?php  
        //Adding two numbers  
         function add($x, $y) {  
            $sum = $x + $y;  
            echo "Sum of two numbers is = $sum <br><br>";  
         }   
         add(467, 943);  
  
         //Subtracting two numbers  
         function sub($x, $y) {  
            $diff = $x - $y;  
            echo "Difference between two numbers is = $diff";  
         }   
         sub(943, 467);  
      ?>  
<h3>Addition and Subtraction with Dynamic number</h3>
In this example, we have passed two parameters $x and $y inside two functions add() and sub().
<?php  
//add() function with two parameter  
function add1($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  
//sub() function with two parameter  
function sub1($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  
//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add1($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub1($_POST['first'],$_POST['second']);  
}  
?>  
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>
<h2>PHP Variable Length Argument Function</h2>
PHP supports variable length argument function. <br>
It means you can pass 0, 1 or n number of arguments in function. <br>
To do so, you need to use 3 ellipses (dots) before the argument name.<br>
<h3>example7- Length Argument Function</h3>
<?php  
function add3(...$numbers) 
{  
    $sum = 0;  
    foreach ($numbers as $n) 
    {  
        $sum += $n;  
    }  
    return $sum;  
}  
echo add3(1,2,3,4); // calling function
?>
<h2>PHP Recursive Function</h2>
we call current function within function.<br> It is also known as recursion.<br>
It is recommended to avoid recursive function call over 200 recursion level<br> 
because it may smash the stack and may cause the termination of script.<br>
<h3>example8a- Recursive Function </h3>
<?php    
function display4($number) 
{    
    if($number<=5)
    {    
     echo "$number <br/>";    
     display4($number+1);    
    }  
}    
display4(1);
?>
<h3>example8b- Factorial Number </h3>
<?php    
function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}    

echo factorial(6);    
?>
<body>
<?php
include "../20210616_basiclayout/includes/header.php";
?>
<h1>Intro PHP String</h1>
<p>
PHP string is a sequence of characters i.e., used to store and manipulate text. <br>
PHP supports only 256-character set and so that it does not offer native Unicode support. <br>
There are 4 ways to specify a string literal in PHP.
</p>    
<h2>Example1. Single Quoted</h2>
<?php  
       $str='Hello text within single quote';  
       echo $str;  
?> 
<h2>Example2. Single Quoted multiple lines</h2>
<?php  
$str1='Hello text   
multiple line  
text within single quoted string';  
$str2='Using double "quote" directly inside single quoted string';  
$str3='Using escape sequences \n in single quoted string';  
echo "$str1 <br/> $str2 <br/> $str3";  
?>  
<h2>Example3. Single Quoted backslash (\) </h2>
<?php  
$num1=10;   
$str1='trying variable $num1';  
$str2='trying backslash n and backslash t inside single quoted string \n \t';  
$str3='Using single quote \'my quote\' and \\backslash';  
$str4='Using single quote \'my quote\' and \\backslash';  

echo "$str1 <br/> $str2 <br/> $str3";  
?>
<h2>Example4. Double Quoted backslash (\) </h2> 
<?php  
$str="Hello text within double quote";  
echo $str;  
?>  
Now, you <b>can't</b> use double quote directly inside double quoted string.
<h2>Example5 can't use double quote directly</h2> 
<?php  
$str1="Using double \"quote\" directly inside double quoted string";  
echo $str1;  
?>
We can store multiple line text, special characters and escape sequences in a double quoted PHP string.
<h2>Example6. Store multiple lines using double quote </h2> 
<?php  
$str1="Hello text   
multiple line  
text within double quoted string";  
$str2="Using double \"quote\" with backslash inside double quoted string";  
$str3="Using escape sequences \n in double quoted string";  
echo "$str1 <br/> $str2 <br/> $str3";  
?>  
In double quoted strings, <b>variable will be interpreted.</b>
<h2>Example7. value interpret using double quote </h2> 
<?php  
$num1=10;   
echo "Number is: $num1";  
?>  
<h1>Heredoc *needs research</h1>
Heredoc syntax (<<<) is the third way to delimit strings.<br>
<b>Naming Rules</b>
The identifier should follow the naming rule that it must contain only alphanumeric characters <br>
and underscores, and must start with an underscore or a non-digit character.
<h2>Example8. Heredoc  </h2> 
<?php  
/*
    $city = 'Delhi';  
    $str = <<<DEMO  
Hello! My name is Misthi, and I live in $city.  
DEMO;  
    echo $str;  
*/
 ?>   
<h1>String Functions</h1>
<h2>1) PHP strtolower() function</h2>
<?php  
$str="My name is KHAN";  
$str=strtolower($str);  
echo $str;  
?>  
<h2>2) PHP strtoupper() function</h2>
<?php  
$str="My name is KHAN";  
$str=strtoupper($str);  
echo $str;  
?>  
<h2>3) PHP ucfirst() function</h2>
The ucfirst() function returns string converting first character into uppercase.<br>
 It doesn't change the case of other characters. <br>
<?php  
$str="my name is KHAN";  
$str=ucfirst($str);  
echo $str;  
?>  
<h2>4) PHP lcfirst() function</h2>
The lcfirst() function returns string<br>
 converting first character into lowercase. It doesn't change the case of other characters. <br>
 <?php  
$str="MY name IS KHAN";  
$str=lcfirst($str);  
echo $str;  
?>
<h2>5) PHP ucwords() function</h2>  
The ucwords() function returns string converting first character of <b>each word</b> into uppercase.<br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=ucwords($str);  
echo $str;  
?>  
<h2>6) PHP strrev() function</h2>
The strrev() function returns reversed string. <br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=strrev($str);  
echo $str;  
?>  
<h2>7) PHP strlen() function</h2>
The strlen() function returns length of the string.<br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=strlen($str);  
echo $str;  

?>  

<?php
/*
addcslashes()	It is used to return a string with backslashes.
addslashes()	It is used to return a string with backslashes.
bin2hex()	It is used to converts a string of ASCII characters to hexadecimal values.
chop()	It removes whitespace or other characters from the right end of a string
chr()	It is used to return a character from a specified ASCII value.
chunk_split()	It is used to split a string into a series of smaller parts.
convert_cyr_string()	It is used to convert a string from one Cyrillic character-set to another.
convert_uudecode()	It is used to decode a uuencoded string.
convert_uuencode()	It is used to encode a string using the uuencode algorithm.
count_chars()	It is used to return information about characters used in a string.
crc32()	It is used to calculate a 32-bit CRC for a string.
crypt()	It is used to create hashing string One-way.
echo()	It is used for output one or more strings.
explode()	It is used to break a string into an array.
fprint()	It is used to write a formatted string to a stream.
get_html_translation_table()	Returns translation table which is used by htmlspecialchars() and htmlentities().
hebrev()	It is used to convert Hebrew text to visual text.
hebrevc()	It is used to convert Hebrew text to visual text and new lines (\n) into <br>.
hex2bin()	It is used to convert string of hexadecimal values to ASCII characters.
htmlentities()	It is used to convert character to HTML entities.
html_entity_decode()	It is used to convert HTML entities to characters.
htmlspecialchars()	Converts the special characters to html entities.
htmlspecialchars_decode()	Converts the html entities back to special characters.
Implode()	It is used to return a string from the elements of an array.
Join()	It is the Alias of implode() function.
Levenshtein()	It is used to return the Levenshtein distance between two strings.
Lcfirst()	It is used to convert the first character of a string to lowercase.
localeconv()	Get numeric formatting information
ltrim()	It is used to remove whitespace from the left side of a string.
md5()	It is used to calculate the MD5 hash of a string.
md5_files()	It is used to calculate MD5 hash of a file.
metaphone()	It is used to calculate the metaphone key of a string.
money_format()	It is used to return a string formatted as a currency string.
nl2br()	It is used to insert HTML line breaks in front of each newline in a string.
nl_langinfo()	Query language and locale information
number_format()	It is used to format a number with grouped thousands.
ord()	It is used to return ASCII value of the first character of a string.
parse_str()	It is used to parse a query string into variables.
print()	It is used for output one or more strings.
printf()	It is used to show output as a formatted string.
quoted_printable_decode()	Converts quoted-printable string to an 8-bit string
quoted_printable_encode()	Converts the 8-bit string back to quoted-printable string
quotemeta()	Quote meta characters
rtrim()	It is used to remove whitespace from the right side of a string.
setlocale()	It is used to set locale information.
sha1()	It is used to return the SHA-1 hash of a string.
sha1_file()	It is used to return the SHA-1 hash of a file.
similar_text()	It is used to compare the similarity between two strings.
Soundex()	It is is used to calculate the soundex key of a string.
sprintf()	Return a formatted string
sscanf()	It is used to parse input from a string according to a format.
strcasecmp()	It is used to compare two strings.
strchr()	It is used to find the first occurrence of a string inside another string.
strcmp()	Binary safe string comparison (case-sensitive)
strcoll()	Locale based binary comparison(case-sensitive)
strcspn()	It is used to reverses a string.
stripcslashes()	It is used to unquote a string quoted with addcslashes().
stripos()	It is used to return the position of the first occurrence of a string inside another string.
stristr()	Case-insensitive strstr
strlen()	It is used to return the length of a string.
strncasecmp()	Binary safe case-insensitive string comparison
strnatcasecmp()	It is used for case-insensitive comparison of two strings using a "natural order" algorithm
strnatcmp()	It is used for case-sensitive comparison of two strings using a "natural order" algorithm
strncmp()	It is used to compare of the first n characters.
strpbrk()	It is used to search a string for any of a set of characters.
strripos()	It finds the position of the last occurrence of a case-insensitive substring in a string.
strrpos()	It finds the length of the last occurrence of a substring in a string.
strpos()	It is used to return the position of the first occurrence of a string inside another string.
strrchr()	It is used to find the last occurrence of a string inside another string.
strrev()	It is used to reverse a string.
strspn()	Find the initial length of the initial segment of the string
strstr()	Find the occurrence of a string.
strtok()	Splits the string into smaller strings
strtolower()	Convert the string in lowercase
strtoupper()	Convert the strings in uppercase
strtr()	Translate certain characters in a string or replace the substring
str_getcsv()	It is used to parse a CSV string into an array.
str_ireplace()	It is used to replace some characters in a string (case-insensitive).
str_pad()	It is used to pad a string to a new length.
str_repeat()	It is used to repeat a string a specified number of times.
str_replace()	It replaces all occurrences of the search string with the replacement string.
str_rot13()	It is used to perform the ROT13 encoding on a string.
str_shuffle()	It is used to randomly shuffle all characters in a string.
str_split()	It is used to split a string into an array.
strcoll()	It is locale based string comparison.
strip_tags()	It is used to strip HTML and PHP tags from a string.
str_word_count()	It is used to count the number of words in a string.
substr()	Return the part of a string
substr_compare()	Compares two strings from an offset up to the length of characters. (Binary safe comparison)
substr_count()	Count the number of times occurrence of a substring
substr_replace()	Replace some part of a string with another substring
trim()	Remove whitespace or other characters from the beginning and end of the string.
ucfirst()	Make the first character of the string to uppercase
ucwords()	Make the first character of each word in a string to uppercase
vfprintf()	Write a formatted string to a stream
vprintf()	Display the output as a formatted string according to format
vsprintf()	It returns a formatted string
wordwrap()	Wraps a string to a given number of characters
*/
?>
<!-- 20210630-->
</body>
</html> 
<?php
include "../20210616_basiclayout/includes/header.php";
?>
<h1>PHP Math Functions</h1>
<p>
PHP provides many predefined math constants and functions that can be used to perform mathematical operations.
</p>
<h2>PHP Math: abs() function</h2>
Gives abosolute value of a number
<?php  
echo (abs(-7)."<br/>"); // 7 (integer)  
echo (abs(7)."<br/>"); //7 (integer)  
echo (abs(-7.2)."<br/>"); //7.2 (float/double)  
?> 
<h2>PHP Math: ceil() function</h2>
The ceil() function rounds fractions up.
<br>    
<?php  
echo (ceil(3.3)."<br/>");// 4  
echo (ceil(7.333)."<br/>");// 8  
echo (ceil(-4.8)."<br/>");// -4  
?> 
<h2>PHP Math: floor() function</h2>
The floor() function rounds fractions down.
<br>    
<?php  
echo (floor(3.3)."<br/>");// 3  
echo (floor(7.333)."<br/>");// 7  
echo (floor(-4.8)."<br/>");// -5  
?> 
<h2>PHP Math: sqrt() function</h2>
The sqrt() function returns square root of given argument.
<br>            
<?php  
echo (sqrt(16)."<br/>");// 4  
echo (sqrt(25)."<br/>");// 5  
echo (sqrt(7)."<br/>");// 2.6457513110646  
?>  
<h2>PHP Math: decbin() function</h2>
The decbin() function converts decimal number into binary. It returns binary number as a string.
<br>            
<?php  
echo (decbin(2)."<br/>");// 10  
echo (decbin(10)."<br/>");// 1010  
echo (decbin(22)."<br/>");// 10110  
?>   

<h2>PHP Math: decoct() function</h2>
The decoct() function converts decimal number into octal. It returns octal representation of given number as a string.<br>
<?php  
echo (decoct(2)."<br/>");// 2  
echo (decoct(10)."<br/>");// 12  
echo (decoct(22)."<br/>");// 26  


/*
abs()	It is used to find the absolute (positive) value of a number.
sin()	It is used to return the sine of a number.
sinh()	It is used to return the hyperbolic sine of a number.
asin()	It is used to find the arc sine of a number.
asinh()	It is used to find the inverse hyperbolic sine of a number.
cos()	It is used to find the cosine of a number.
cosh()	It is used to return the cosh of a number.
acos()	It is used to return the arc cosine of a number.
acosh()	It is used to return the inverse hyperbolic cosine of a number.
tan()	It is used to return the tangent of a number.
tanh()	It is used to return the hyperbolic tangent of a number.
atan()	It is used to return the arc tangent of a number in radians.
atan2()	It is used to return the arc tangent of two variables x and y.
atanh()	It is used to return the inverse hyperbolic tangent of a number.
base_convert()	It is used to convert a number from one number base to another.
bindec()	It is used to convert a binary number to a decimal number.
ceil()	It is used to find round a number up to the nearest integer.
pi()	It returns the approximation value of PI.
decbin()	It converts a decimal number to a binary number.
dechex()	It converts a decimal number to a hexadecimal number.
decoct()	It converts a decimal number to an octal number
deg2rad()	It converts a degree value to a radian value.
rad2deg()	It converts a radian value to a degree value.
exp()	It is used to calculate the exponent of e.
expm1()	It is used to return exp(x) - 1.
floor()	It converts round a number down to the nearest integer.
fmod()	It returns the remainder of x/y.
getrandmax()	It returns the largest possible value returned by rand().
hexadec()	It is used to convert a hexadecimal number to a decimal number.
hypot()	It is used to calculate the hypotenuse of a right-angle triangle.
is_finite()	To check whether a value is finite or not.
is_infinite()	It is used to check whether a value is infinite or not.
is_nan()	It is used to check whether a value is 'not-a-number'.
lcg_value()	It is used to return a pseudo random number in a range between 0 and 1.
log()	It is used to return the natural logarithm of a number.
log10()	It is used to return the base-10 logarithm of a number.
log1p()	It is used to return log(1+number).
max()	It is used to return the highest value in an array, or the highest value of several specified values.
min()	It returns the lowest value in an array, or the lowest value of several specified values.
getrandmax()	It is used to return the maximum value by using rand().
mt_getrandmax()	Returns the largest possible value returned by mt_rand().
mt_rand()	Generates a random integer using Mersenne Twister algorithm.
mt_srand()	Seeds the Mersenne Twister random number generator.
octdec()	It is used to converts an octal number to a decimal number.
pow()	It is used to return x raised to the power of y.
intdiv	It returns the integer quotient of the division of dividend by divisor.
rand()	It is used to generates a random integer.
round()	It is used to round a floating-point number.
fmod()	It is used to return the floating point remainder of the division of the argument.
sqrt()	It is used to return the square root of a number.
*/
?>
<h1>PHP Include and Require</h1>
PHP allows us to create various elements and functions, which are used several times in many pages. <br>
It takes much time to script these functions in multiple pages.<br>
Therefore, use the concept of file inclusion that helps to include files in various programs and saves the effort of
 writing code multiple times.<br>
<h2>Both include and require are identical to each other, except failure.</h2>
include only generates a warning, i.e., E_WARNING, and <b>continue</b> the execution of the script.
require generates a fatal error, i.e., E_COMPILE_ERROR, <b>and stop</b> the execution of the script.
<h2>Example</h2>
<a href="https://checkpte.com/faq.html">FAQ</a> |     
<a href="https://checkpte.com/">HOME</a> |     
<?php 
//include("index.php");
//exit;
 ?>  
<h1>PHP Cookie</h1>
PHP cookie is a small piece of information which is stored at client browser. <br>It is used to recognize the user.<br>
Cookie is created at server side and saved to client browser.<br>
 Each time when client sends request to the server, cookie is embedded with request.<br>
  Such way, cookie can be received at the server side.<br>
<b>cookies in php can be created, sent and received at server end.<b>
<h2>PHP setcookie() function</h2>
PHP setcookie() function is used to set cookie with HTTP response.<b>
Once cookie is set, you can access it by $_COOKIE superglobal variable.<b>
<?php  
setcookie("user", "Sonoo");  
?>  
 
<?php  
if(!isset($_COOKIE["user"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["user"];  
}  
?>  
<h1>PHP Session</h1>
PHP session is used to store and pass information from one page to another temporarily (until user close the website).<br>
PHP session technique is widely used in shopping websites where we need to store and pass cart information <br>
e.g. username, product code, product name, product price etc from one page to another.<br>  
<b>PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers.
</b><br>
<li><a href="../20210616_basiclayout/includes/session1.php">session1.php</a></li>
<li><a href="../20210616_basiclayout/includes/sessionCounter.php">sessionCounter</a></li>
<br>

<!--20210701
Php file functions-->
<h1>PHP file Handling</h1>
PHP File System allows us to <br>
- create file, <br>
- read file line by line, <br>
- read file character by character, <br>
- write file, <br>
- append file, <br>
- delete file <br>
- close file.<br>
<h2>PHP Open File - fopen()</h2>
The PHP fopen() function is used to open a file. <br>
<?php

$handle = fopen("C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt", "r"); 
?>
<h2>PHP Close File - fclose()</h2>
The PHP fclose() function is used to close an open file pointer. <br>
<?php  
fclose($handle);  
?> 
<h2>PHP Read File - fread()</h2>
The PHP fread() function is used to read the content of the file. <br>
It accepts two arguments: resource and file size. <br>
Follow example shows how to get the content of an existing file <br>
<?php    
$filename = "C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt";    
$handle = fopen($filename, "r");//open file in read mode    
$contents = fread($handle, filesize($filename));//read file    

echo $contents;//printing data of file  
fclose($handle);//close file    
?>    
<h2>PHP Write File - fwrite()</h2>
The PHP fwrite() function is used to write content of the string into file. <br>
<?php  
$fp = fopen('C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt', 'w');//open file in write mode  
fwrite($fp, 'hello ');  
fwrite($fp, 'php file');  
fclose($fp);  
  
echo "File written successfully";  
?>  
<!--<h2>PHP Delete File - unlink()</h2>
The PHP unlink() function is used to delete file. <br>-->
<?php
/*unlink('C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt');  
   
echo "File deleted successfully"; */
$myfile=fopen("C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\demo.txt","w");
$txt = ("Hello Everyone");
echo "<br>";
fwrite($myfile,$txt);
$txt = ("How are you");
echo "<br>";
fwrite($myfile,$txt);
?>

<!-- intro php upload function -->
<h1>PHP File Upload</h1>
PHP allows you to upload single and multiple files through few lines of code only. <br>
PHP file upload features allows you to upload binary and text files both. <br>
Moreover, you can have the full control over the file to be uploaded through PHP <br>
authentication and file operation functions. <br>
<h2>PHP $_FILES</h2>
The PHP global $_FILES contains all the information of file. <br>
By the help of $_FILES global, we can <br>
get file name, <br>
file type, <br>
file size, <br>
temp file name and <br>
errors associated with file. <br>
<h3>$_FILES['filename']['name']</h3>
returns file name. <br>
<h3>$_FILES['filename']['type']</h3>
returns MIME type of the file.
<h3>$_FILES['filename']['size']</h3>
returns size of the file (in bytes).
<h3>$_FILES['filename']['tmp_name']</h3>
returns temporary file name of the file which was stored on the server.
<h3>$_FILES['filename']['error']</h3>
returns error code associated with this file.
<h3>move_uploaded_file() function</h3>
The move_uploaded_file() function moves the uploaded file to a new location.  <br>
The move_uploaded_file() function checks internally if the file is uploaded thorough the POST request.  <br>
It moves the file if it is uploaded through the POST request. <br>
<h3>example</h3>
<li> <a href="../20210616_basiclayout/includes/uploadform.html">uploadform.html</a> </li>


