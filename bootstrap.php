<?php

use Smarty\Smarty;

if (!class_exists('Smarty')) {
    return;
}

$smartyInstance = isset($GLOBALS['smarty']) ? $GLOBALS['smarty'] : null;

if ($smartyInstance instanceof Smarty) {
    $smartyInstance->registerPlugin('block', 't', 'smarty_block_t');
}
