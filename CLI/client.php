<?php
if (isset($_SERVER['argv'])){
    if (count($_SERVER['argv']) === 1){
        echo 'Client HELP add an arg';
    }else{
        echo 'Client is working with args';
        print_r($_SERVER['argv']);
    }
}

?>