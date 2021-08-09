<?php

require __DIR__. '/vendor/autoload.php' ;

use Intervention\Zodiac\Calculator as ZodiacCalculator;
use Intervention\Zodiac\Zodiacs\Virgo;

$z=new ZodiacCalculator;
// make zodiac from a date
$zodiac = $z->make('1995-06-17');

echo $zodiac->name(); // virgo
echo "<br>";
echo $zodiac->html(); // &#9805;
echo "<br>";
echo $zodiac->localized(); // Jungfrau
echo "<br>";
if ($zodiac instanceof Virgo) {
    # my zodiac sign is virgo ...
}

?>