<?php

$array = array("bbn" => 15, "bbnn" => 15, "bbnnn" => 15);
$json = '{"bbn":15,"bbnn":15,"bbnnn":15}';
var_dump(json_decode($json, true));
var_dump(json_encode($array, true));
