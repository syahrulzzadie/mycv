<?php
function show($a,$b){
	return "Param1:".$a." - Param2:".$b;
}

$args = ['Syahrul','Adiguna'];

echo show(...$args);