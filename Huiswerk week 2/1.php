<?php
print("Hoeveel vogels zie je? \n");
$aantal = trim(fgets(STDIN));
if ($aantal > 1) {
    print ("ik zie " . $aantal . " vogels");
} else {
    print ("ik zie " . $aantal . " vogel");
}
?>