<?php
// PHP - Random Quote Generator 
// Multidimesional array for quote elements 
// Inner associative array elements
$quotes = []; 

$quotes[]= [
    'quote'=>"God may allow us at times to hit rock bottom, to show us He's the rock at the bottom.",
    'source'=>"Kirk Franklin",
    'citation'=>"AZ Quotes",
    'tag'=>"Gospel Singers",
];
$quotes[]=[
    'quote'=>"Focusing on the negative only makes a difficult journey more difficult.",
    'source'=>"TobyMac",
    'citation'=>"AZ Quotes",
    'tag'=>"Gospel Singers",
];
$quotes[]=[
    'quote'=>"We may have pain, but not as great as his name.",
    'source'=>"Jamie Grace",
    'citation'=>"AZ Quotes",
    'tag'=>"Gospel Singers",
];
$quotes[]=[
    'quote'=>"Where God isn't moved by the quality of our voice but by the condition of our hearts.",
    'source'=>"Chris Tomlin",
    'citation'=>"AZ Quotes",
    'tag'=>"Gospel Singers",
];

$quotes[]=[
    'quote'=>"You are holy,great and mighty,the moon and stars DECLARE who You are...I'm so unworthy,but still You love me,forever my heart will sing of how great You are!",
    'source'=>"Phil Wickham",
    'citation'=>"AZ Quotes",
    'tag'=>"Gospel Singers",
];

//Create a function called getRandomQuote
function getRandomQuote($quotes){
    $randomNum=rand(0,4);

    //Passing on the randomly selected inner associative array
    $array = quotes[$randomNum];

    return $array;
}

//printQuote function will print the returned quote from the getRandomQuote function
function printQuote($quotes){
    //global $quotes;
    $aQuote = getRandomQuote($quotes);

    $quoteOutput='';

    if($aQuote['citation'] !='' || $aQuote['source'] !='' || $aQuote['tag'] !=''){
        $quoteOutput = "<p class='quote'>" . $aQuote['quote'] .  "</p>";
        $quoteOutput .="<p class='source'>" . $aQuote['source'];
    }
    return $quoteOutput;
}
