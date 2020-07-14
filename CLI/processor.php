<?php
include_once '../vendor/sallar/5257396/console.php';
Console::log('================================================================================================================', 'white');
Console::log('                                                                                                                ', 'white');
Console::log('██████╗ ██╗  ██╗██████╗      ██████╗  ██████╗ ███████╗███████╗██╗██████╗     ███╗   ██╗ ██████╗ ██████╗ ███████╗', 'cyan');
Console::log('██╔══██╗██║  ██║██╔══██╗    ██╔════╝ ██╔═══██╗██╔════╝██╔════╝██║██╔══██╗    ████╗  ██║██╔═══██╗██╔══██╗██╔════╝', 'cyan');
Console::log('██████╔╝███████║██████╔╝    ██║  ███╗██║   ██║███████╗███████╗██║██████╔╝    ██╔██╗ ██║██║   ██║██║  ██║█████╗  ', 'cyan');
Console::log('██╔═══╝ ██╔══██║██╔═══╝     ██║   ██║██║   ██║╚════██║╚════██║██║██╔═══╝     ██║╚██╗██║██║   ██║██║  ██║██╔══╝  ', 'cyan');
Console::log('██║     ██║  ██║██║         ╚██████╔╝╚██████╔╝███████║███████║██║██║         ██║ ╚████║╚██████╔╝██████╔╝███████╗', 'cyan');
Console::log('╚═╝     ╚═╝  ╚═╝╚═╝          ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚═╝╚═╝         ╚═╝  ╚═══╝ ╚═════╝ ╚═════╝ ╚══════╝', 'cyan');
Console::log('----------------------------------------------------------------------------------------------------------------', 'white');
Console::log('                                   ___  ____ ____ ____ ____ ____ ____ ____ ____                                 ', 'yellow');
Console::log('                                   |__] |__/ |  | |    |___ [__  [__  |  | |__/                                 ', 'yellow');
Console::log('                                   |    |  \ |__| |___ |___ ___] ___] |__| |  \                                 ', 'yellow');
Console::log('                                                                                                                ', 'white');
Console::log('================================================================================================================', 'white');
Console::log('', 'white');

if (isset($_SERVER['argv'])){
    if (count($_SERVER['argv']) === 1){
        Console::log('processor.php Options: ', 'white');
        Console::log('   -help         display this message', 'white');
        Console::log('   -create       run server create wizard', 'white');
        Console::log('   -register     first register this server with other nodes', 'white');
        Console::log('   -start        starts processing gossip, a background task ', 'white');
        Console::log('', 'white');
        Console::log('usage:', 'white');
        Console::log('   processor.php -create', 'white');
        Console::log('   processor.php -register REMOTE_IP PORT NETWORK PASSWORDD', 'white');
        Console::log('   processor.php -register 192.168.1.1 6884 MyNet 123456', 'white');
        Console::log('   processor.php -start', 'white');
        Console::log('', 'white');
    }else{
        Console::log('Client is working with args', 'white');
        print_r($_SERVER['argv']);
    }
}


?>