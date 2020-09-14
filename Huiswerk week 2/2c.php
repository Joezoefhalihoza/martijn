<?php
print("type ik, jij of hij:\n");
$persoon = trim(fgets(STDIN));
$verjaardag = "16 april";

print ($persoon);

if ($persoon === "ik") {
    print (" ben");
}
if ($persoon === "jij") {
    print (" bent");
}
if ($persoon === "hij") {
    print (" is");
}


print (" jarig op " . $verjaardag);
?>