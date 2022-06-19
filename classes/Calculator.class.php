<?php

declare(strict_types = 1);

class Calculator
{
    public int $num1;
    public int $num2;
    public string $op;

    public function __construct(int $num1, int $num2, string $op)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->op = $op;
    }

    // public function calculator()
    // {
    //     switch ($this->op) {
    //         case 'add':
    //             $result = $this->num1 + $this->num2;
    //             return $result;
    //             break;
    //         case 'subtract':
    //             $result = $this->num1 - $this->num2;
    //             return $result;
    //             break;
    //         case 'multiply':
    //             $result = $this->num1 * $this->num2;
    //             return $result;
    //             break;
    //         case 'divide':
    //             $result = $this->num1 / $this->num2;
    //             return $result;
    //             break;
            
    //         default:
    //             echo "Something is wrong";
    //             break;
    //     }
    // }

    public function calculator()
    {
        if ($this->op == "add") {
            $result = $this->num1 + $this->num2;
            return $result;
        } elseif ($this->op == "subtract") {
            $result = $this->num1 - $this->num2;
            return $result;
        } elseif ($this->op == "multiply") {
            $result = $this->num1 * $this->num2;
            return $result;
        } elseif ($this->op == "divide") {
            $result = $this->num1 / $this->num2;
            return $result;
        } else {
            return "Something is wrong";
        }
    }
}