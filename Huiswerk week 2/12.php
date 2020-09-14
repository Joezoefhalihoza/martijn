<?php
$hetIsOchtend = TRUE;
$mamaBelt = FALSE;
$ikSlaap = FALSE;

if ($ikSlaap || (!$mamaBelt && $hetIsOchtend)){
    print("Ik neem niet op");
} else {
    print("Ik neem op");
}