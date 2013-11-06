<?php
$firstname = 'Jean Luc';
$lastname = 'Picard';
$fullname = $firstname. ' ' .$lastname;

echo $fullname

//Enter your code here, enjoy!
//keys are the ones in quotes the 1 foo case, after the => is the value that you set
$arr = array("one", "two", "three", "four", "five");
$array = array("1" => "PHP code tester Sandbox Online",  
              "2" => "This is the number 2", 
              "3" => "Number Three Checking in",
              "4" => "Value Number 4 here",
			  "5" => "5"
              );
              
foreach( $array as $key => $value ){
    echo $key."\t=>\t".$value."\n";
}
print_r($array);
var_dump($array);

$arraymulti = array(
				array("a", "b", "c"),
				array("d", "e", "f"),
				array("g", "h", "i")		
			);
/* 
Explode
*/			
$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str));

// negative limit (since PHP 5.1)
print_r(explode('|', $str));

/* This is what the above would output:
Array
(
    [0] => one
    [1] => two|three|four
)
Array
(
    [0] => one
    [1] => two
    [2] => three
) */


/*Sha1 */

$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
	
	
$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
}

$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);

//md5 seeing if the string is identical to that long number if it is does echo
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}


$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');

function trim_value(&$value) 
{ 
    $value = trim($value); 
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);

array_walk($fruit, 'trim_value');
var_dump($fruit);

$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
$bar = ucwords(strtolower($bar)); // Hello World!

$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7


$str = 'abcdef';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;

$str = "\n";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
}
