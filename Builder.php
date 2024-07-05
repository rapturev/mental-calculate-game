<?php

// Number randomizer interface 

namespace MentalCalculateGame;

interface Builder {
    public function produceRandomNumber(): int;
}