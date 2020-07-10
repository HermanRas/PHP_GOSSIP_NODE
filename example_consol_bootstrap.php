<?php
include_once './vendor/sallar/5257396/console.php';

Console::log('', 'white');
Console::log('', 'white');
// ::log method usage
// -------------------------------------------------------
Console::log(str_repeat('-', 60));
Console::log('TEXT White TEXT White', 'white');
Console::log("INFO Cyan Info Cyan", 'cyan');
Console::log("SUCCESS Green SUCCESS Green", 'light_green');
Console::log('WARNING Yellow WARNING Yellow', 'yellow');
Console::log('ERROR Red ERROR Red', 'red');
Console::log(str_repeat('-', 60));
// Ding!
// -------------------------------------------------------
Console::log('', 'white');
Console::log('', 'white');
echo Console::bell();