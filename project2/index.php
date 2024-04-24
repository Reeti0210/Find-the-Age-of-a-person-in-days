<?php
$date='2002-10-02';
$today=date(format:'Y-m-d');

$diff= strtotime($today) - strtotime($date);

$numofdays= $diff/(60* 60*24);

echo "There are $numofdays since $date";
?>