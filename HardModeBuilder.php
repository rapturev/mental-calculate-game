<?php

// Number randomizer interface implementation. This implemetation works in hard difficulty game mode.


namespace MentalCalculateGame;

use MentalCalculateGame\Builder;

require_once 'Builder.php';

class HardModeBuilder implements Builder {
    public function produceRandomNumber(): int {
        return rand(0, 1000);
    }
}