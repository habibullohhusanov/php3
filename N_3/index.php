<?php

$int = 123;
$str = "qanday12";

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "true";
} else {
    echo "false";
}

echo filter_var($str, FILTER_SANITIZE_NUMBER_INT);
