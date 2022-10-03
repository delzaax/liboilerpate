<?php

$phone = '000-0000-0000'; // phone params

if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
    // $phone is valid
}