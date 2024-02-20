<?php

namespace App\Model;

class Card
{
    private $suits = array('hearts', 'diamonds', 'clubs', 'spades');
    private $ranks = array(
        '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8,
        '9' => 9, '10' => 10, 'Jack' => 11, 'Queen' => 12, 'King' => 13, 'Ace' => 14
    );


    public function generateDeck()
    {
        $deck = array();
        foreach ($this->suits as $suit) {
            foreach ($this->ranks as $rank => $value) {
                $card = array(
                    'suit' => $suit,
                    'rank' => $rank,
                    'value' => $value
                );
                $deck[] = $card;
            }
        }
        shuffle($deck);
        return $deck;
    }

    public function getHand()
    {
        $deck = $this->generateDeck();

        $hand = array();
        for ($i = 0; $i < 5; $i++) {
            $hand[] = array_shift($deck);
        }

        foreach ($hand as $card) {
            echo $card['rank'] . ' of ' . $card['suit'] . "<br>";
        }

        return $hand;
    }
}
