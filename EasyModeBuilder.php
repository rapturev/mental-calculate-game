<?php

// Number randomizer interface implementation. Works in easy (1) difficulty game mode.

namespace MentalCalculateGame;

use MentalCalculateGame\Builder;

require_once 'Builder.php';
class EasyModeBuilder implements Builder {
    public function produceRandomNumber(): int {
        return rand(0, 10);
    }
}