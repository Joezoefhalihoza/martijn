<?php
Print("Hoe warm wordt het?\n");
$temperatuur = trim(fgets(STDIN));
if ($temperatuur > 25) {
    print ("We gaan naar het strand.");
} else {
    print ("We blijven thuis.");
}
?>