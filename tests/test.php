<?php
//require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';
use GeneratePassword\GeneratePassword as obj;
echo obj::generatePassword(8);