<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1/9/2018
 * Time: 6:50 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = 'utf-8'>
    <title>Javascript Review</title>
</head>

<body>

</body>
</html>

<script>
    //Print to console
    console.log("Introduction to Javascript");

    //FizzBuzz
    console.log("Beginning of FizzBuzz");
    for (var i = 1; i <= 100; i++){
        if(i % 3 === 0 && i % 5 === 0){
            console.log("FizzBuzz");
        }
        else if (i % 3 === 0){
            console.log("Fizz")
        }
        else if(i % 5 === 0){
            console.log("Buzz");
        }
        else{
            console.log(i);
        }
    }
    console.log("End of FizzBuzz");

    //CountBs function to count number of "B"s in the string
    function countBs(string){
        var count = countChar(string, "B");
        return (count);
    }

    //Count char counts the number of times a character is in a string
    function countChar(str,char){
        var count = 0;
        for(var i = 0; i < str.length; i++){
            if(str.charAt(i) === char){
                count++;
            }
        }
        return count;
    }

    //Test cases for countBs and CountChar
    console.log("Counting B's from 'BBBBBAAAB': " + countBs("BBBBBAAAB"));
    console.log("countChar is counting C's from 'AAAACCCD': " + countChar("AAAACCCD", "C"));

</script>