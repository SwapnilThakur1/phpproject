<!DOCTYPE html>
<html>

<head>
    <title>PHP Styling</title>

    <style>

        body{
            background-color: black;
            color: white;
        }

    </style>

</head>

<body>

    <h6>Hello PHP</h6>

    <?php




//find length
$word = "programming";
print_r(strlen($word));
echo strtoupper($word)."<br>";
echo strtolower($word)."<br>";


//Count vowels in string.

// function countVowels($word){
//       $vowels = "AEIOUaeiou";
//       $count = 0;
//       for($i=0; $i< strlen($word); $i++){
//         if(str_contains($vowels, $word[$i])){
//           $count++;
//         }
//       }
//       return $count;
// }

// print_r(countVowels("Programming"));

// function reverseString($word){
//       $rev = "";
//       $length = strlen($word);

//       for($i = $length -1; $i >= 0; $i-- ){
//         $rev .= $word[$i];
//       }

//       return $rev;

// }
// echo reverseString("Swapnil")


?>

</body>
</html>



