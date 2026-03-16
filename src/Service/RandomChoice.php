<?php

namespace App\Service;

class RandomChoice
{
    private array $options = [];

    /**
    * Set the choices options.
    *
    * @param array $options    A list of all possible choices.
    */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
    * Make a choice.
    *
    * @param int $from    Lowest random number - defaults to 1
    * @param int $to      Highest random number - defaults to 10
    *
    * @return string
    */
    public function makeChoice($from = 1, $to = 10) : string
    {
        $rand = random_int($from, $to);

        if($rand < 5)
        {
            return "No";
        }else if($rand > 5) {
            return "Yes";
        }else {
            return "Maybe";
        }
    }
}
