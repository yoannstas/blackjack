<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require 'Player.php';

class Dealer extends Player {
    const DealerCards= 15;

    public function hit(blackjack) {

    }

}
