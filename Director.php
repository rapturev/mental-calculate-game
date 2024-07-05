<?php

// Main class. Manages tasks of game session flow(game output and user input).

namespace MentalCalculateGame;

use MentalCalculateGame\Builder;
use MentalCalculateGame\EasyModeBuilder;
use MentalCalculateGame\MediumModeBuilder;
use MentalCalculateGame\HardModeBuilder;
use MentalCalculateGame\MathItem;

require_once 'Builder.php';
require_once 'EasyModeBuilder.php';
require_once 'MediumModeBuilder.php';
require_once 'HardModeBuilder.php';
require_once 'MathItem.php';

class Director {

    public static function startGame() {
        echo "please choose a difficulty level by entering a number: 1, 2 or 3\n";
        $difficultyLevel = readline();
        switch($difficultyLevel) {
            case '1':
                echo "start\n";
                $builder = new EasyModeBuilder();
                self::newGameStage($builder);
                break;
            case '2':
                echo "start\n";
                $builder = new MediumModeBuilder();
                self::newGameStage($builder);
                break;
            case '3':
                echo "start\n";
                $builder = new HardModeBuilder();
                self::newGameStage($builder);
                break;
            default:
                self::startGame();
        }
    }
    public static function newGameStage(Builder $builder) {
        $item = new MathItem($builder);
        $answer = readline();
        if ($answer == $item->c) {
            echo "right\n";
        } else {
            echo "wrong\n";
        }
        self::newGameStage($builder);
    }
}