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
Console::log('                                          ____ _    _ ____ _  _ ___                                             ', 'red');
Console::log('                                          |    |    | |___ |\ |  |                                              ', 'red');
Console::log('                                          |___ |___ | |___ | \|  |                                              ', 'red');
Console::log('                                                                                                                ', 'white');
Console::log('================================================================================================================', 'white');
Console::log('', 'white');

if (isset($_SERVER['argv'])){
    if (count($_SERVER['argv']) === 1){
        Console::log('processor.php Options: ', 'white');
        Console::log('   -help         display this message', 'white');
        Console::log('   -create       create new gossip message wizard', 'white');
        Console::log('   -add          add gossip message from cli parameters', 'white');
        Console::log('   -list         list all gossip', 'white');
        Console::log('   -read         read gossip message', 'white');
        Console::log('   -status       display this servers stats for gossip_db and', 'white');
        Console::log('                 displays the status of this network_db', 'white');
        Console::log('', 'white');
        Console::log('usage:', 'white');
        Console::log('   client.php -create', 'white');
        Console::log('   client.php -add MyName "The Message" MyNet 123456', 'white');
        Console::log('   client.php -list MyNet 123456', 'white');
        Console::log('   client.php -read MSG_ID MyNet 123456', 'white');
        Console::log('   client.php -status network', 'white');
        Console::log('   client.php -status gossip', 'white');
        Console::log('', 'white');
    }else{
        Console::log('Client is working with args', 'white');
        print_r($_SERVER['argv']);
    }
}

?>