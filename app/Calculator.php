<?php

namespace App;

class Calculator {

    /**
     * @var int
     */
    protected $result;

    public function __construct()
    {
        $this->result = 0;
    }

    public function getResult(): int
    {
        return $this->result;
    }

    public function setResult(int $value): void
    {
        $this->result = $value;
    }

    public function reset(): void
    {
        $this->setResult(0);
    }

    public function sum(...$input): void
    {
        $this->result += array_sum($input);
    }

    public function multiply(...$input): void
    {
        $this->result += array_product($input);
    }

    public function divide(...$input): void
    {
        foreach ($input as $value) {
            $this->result /= $value;
        }
    }

}