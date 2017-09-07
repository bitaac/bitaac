<?php

use Bitaac\Core\Bitaac;

Bitaac::extend('player:isVip', function ($player, $account) {
    return true;
});
