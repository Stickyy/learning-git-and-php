<? 
// this is a one-liner comment\

/*this is a multiline comment
with a second line here
and ending here */

//print_r($_POST); // format variables into strings
//echo "email is: ".$_POST["email"]."<br />"; //"" is string - then put one after the other using . //[] access specific bit of array

if (!file_exists("./allusers.txt")) { // ! =not. So if the file does not exist then make the file 
	file_put_contents("./allusers.txt", "");
}
$txt = file_get_contents("./allusers.txt"); // all variables start with $- declares the variable. 
$txt .= print_r($_POST, true); // 2 special variables - $_POST/$_GET 
//file_put_contents("./allusers.txt", $txt); // put the text contents into ullusers.txt

// this gets complicated
$f = fopen("./allusers.csv", "a+");
fputcsv($f, $_POST);
fclose($f);


// header("Location: /thankyou.html"); //ask server to send user to the file called thankyou.html


?>