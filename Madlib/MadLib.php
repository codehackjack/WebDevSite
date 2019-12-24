<!DOCTYPE html>
<html>
<head>
    <strong> "Mad lib" <br><br></strong>
    <title>Wacky Jack's Mad lib</title>
    
</head>

<body>
<?php
//noun array
$NounArr[0] = "Bat";
$NounArr[1] = "Smart Phone";
$NounArr[2] = "Lipstick";
$NounArr[3] = "Lolly Pop";
$NounArr[4] = "Bottle of Rhum";
$NounArr[5] = "Jar";
$NounArr[6] = "Cap";
$NounArr[7] = "Laptop";
$NounArr[8] = "Latex Glove";
$NounArr[9] = "Pickle";
$NounArr[10] = "Offensive sticker";

//verb array
$VerbArr[0] = "Run";
$VerbArr[1] = "Sprint";
$VerbArr[2] = "Sit";
$VerbArr[3] = "Fall";
$VerbArr[4] = "Jump";
$VerbArr[5] = "Drive";
$VerbArr[6] = "Spit";
$VerbArr[7] = "Sing";
$VerbArr[8] = "Choke";
$VerbArr[9] = "Sell";
$VerbArr[10] = "Buy";

//Proper noun 
$PNounArr[0] = "Peter";
$PNounArr[1] = "Richard";
$PNounArr[2] = "Haley";
$PNounArr[3] = "Hubert";
$PNounArr[4] = "Rob Robson";
$PNounArr[5] = "Kathy";
$PNounArr[6] = "Fred";
$PNounArr[7] = "Ryan";
$PNounArr[8] = "Kwasi";
$PNounArr[9] = "Marquis";
$PNounArr[10] = "Dan Eng";

//Location Array
$LocationArr[0] = "Toronto";
$LocationArr[1] = "Paris";
$LocationArr[2] = "Georgetown";
$LocationArr[3] = "Hamilton";
$LocationArr[4] = "Peterborough";
$LocationArr[5] = "Brampton";
$LocationArr[6] = $PNounArr[0]."'s House";
$LocationArr[7] = $PNounArr[0]."'s Home Town";

//use shuffle button to change the order of the array elements within the story


$str1 = " One day, ".$PNounArr[0]." was heading to ".$LocationArr[0]." and saw a ".$NounArr[0]."<br>";

$str2 = "Spooked, ".$PNounArr[0]." Opened a ".$NounArr[1]." and called a friend, ".$PNounArr[1]."<br>";

$str3 = "Once ".$PNounArr[1]." picked up the call, he soon began to sense something was terribly wrong. "."<br>"." He then decided it might be a good idea to ".$VerbArr[0]." to ".$LocationArr[0]." in order to calm down"."<br>";

$str4 = "As they approached ".$LocationArr[0].", ".$PNounArr[1]." began to worry about seeing ".$PNounArr[2]." as he was threatened by ".$PNounArr[2]."<br>". " about never returning the ".$NounArr[3].".";

echo $str1;
echo $str2;
echo $str3;
echo $str4;


?>
    
</body>
<div>
    <button type="button">Scramble the madlib
        <?php
            shuffle($LocationArr);
            shuffle($PNounArr);
            shuffle($VerbArr);
            shuffle($NounArr);
        
        ?>        

    </button>
</div>    
</html>

