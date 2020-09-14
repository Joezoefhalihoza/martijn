<?php
print("Hoe oud ben je?\n");
$leeftijd = trim(fgets(STDIN));
print ("Je bent " . $leeftijd . ", dus je mag ");

if ($leeftijd < 18) {
    print("nog niet ");
}

print ("stemmen");
?>