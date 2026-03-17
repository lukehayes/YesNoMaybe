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
	* Choose from a supplied list of options.
	*
	* @param array $options    The options to chose from
	*
	* @throws Exception
	*
	* @return mixed    A selected value from the list if it exists
	*/
    public function chooseFromOptions(array $options)
    {
		$this->setOptions($options);

        if(!empty($this->options))
        {
            $randomIndex = random_int(0, count($this->options) - 1);
            return $this->options[$randomIndex];
        }else
        {
            throw new \Exception(__CLASS__ . " has no options to choose from. Try adding some with RandomChoice->setOptions().");
        }
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
