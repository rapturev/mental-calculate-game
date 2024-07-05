<?php

//Entry point

namespace MentalCalculateGame; 

use MentalCalculateGame\Director;

echo "hello, user. this is your mental calculating trainer\n";

require_once 'Director.php';

Director::startGame();
