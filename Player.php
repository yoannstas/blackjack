<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Player {
    private array $cards= [];
    private bool $lost = false;

    public function __construct(Deck $deck)
    {
        for ($i=0; $i<2; $i++){
            $this->cards[]=$deck->drawCard();
        }
    }

    public function hit(blackjack): void
    {
        if ($this->getScore() > 21){
            $this->lost= true;
        }
    }
    
    public function surrender():void
    {
        $this->lost = true;
    }

    public function getCards(): array
    {
        return $this->cards;
    }

    public function getScore(): array
    {
        $playerCards = $this->getCards();
        $score = 0;
        foreach ($playerCards as $playerCard) {
            $score += $playerCard->getValue();
        }
    }

    public function hasLost(): bool
    {
        return $this->lost;
    }


}