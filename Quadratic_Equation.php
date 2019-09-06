<?php


class Quadratic_equation
{
    private $number1;
    private $number2;
    private $number3;

    public function __construct($number1, $number2, $number3)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->number3 = $number3;

    }

    public function getNum()
    {
        return $this->number1 . $this->number2 . $this->number3;
    }

    public function getDiscriminant()
    {
        return ($this->number2 * $this->number2) - (4 * $this->number1 * $this->number3);
    }

    public function getRoot1()
    {
        return (-$this->number1 +  pow(($this->number2 * $this->number2 - 4 * $this->number1 * $this->number3), 0.5) / 2 * $this->number1);
    }

    public function getRoot2()
    {
        return (-$this->number1 -  pow($this->number2 * $this->number2 - 4 * $this->number1 * $this->number3, 0.5) / 2 * $this->number1);
    }

    public function getRootTwice()
    {
        return -$this->number2 / 2 * $this->number1;
    }

}