<?php

// Number randomizer interface implementation. This implemetation works in medium difficulty game mode.


namespace MentalCalculateGame;

use MentalCalculateGame\Builder;

require_once 'Builder.php';

class MediumModeBuilder implements Builder {
    public function produceRandomNumber(): int {
        return rand(0, 100);
    }
}