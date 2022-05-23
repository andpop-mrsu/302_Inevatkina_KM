<?php

/** Description of the Vector class */
class Vector
{
    private $xCoordinate, $yCoordinate, $zCoordinate;

    /** Vector Class Constructor */
    public function __construct($xCoordinate, $yCoordinate, $zCoordinate)
    {
        if ($this->isNumber($xCoordinate) && $this->isNumber($yCoordinate) && $this->isNumber($zCoordinate)) {
            $this->xCoordinate = $xCoordinate;
            $this->yCoordinate = $yCoordinate;
            $this->zCoordinate = $zCoordinate;
        } else {
            echo 'Error: invalid value entered' . PHP_EOL;
        }
    }

    /** Checking for valid values */
    private function isNumber($string): bool
    {
        $string .= '';
        if ($string != '') {
            $chars = $string[0];
        } else {
            return false;
        }
        if (!(($chars >= '0' and $chars <= '9') or ($chars == '-'))) {
            return false;
        }
        $length_string = strlen($string);
        $flag_float = 0;
        for ($cycle_step = 1; $cycle_step < $length_string; $cycle_step++) {
            $chars = $string[$cycle_step];
            if ($chars >= '0' and $chars <= '9') {
                continue;
            } else {
                if ($chars == '.' or $chars == ',') {
                    $flag_float += 1;
                    if ($flag_float == 1) {
                        continue;
                    }
                }
                return false;
            }
        }

        return true;
    }

    /** Addition of vectors */
    public function addVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoordinate = $this->xCoordinate + $vector1->xCoordinate;
        $vector->yCoordinate = $this->yCoordinate + $vector1->yCoordinate;
        $vector->zCoordinate = $this->zCoordinate + $vector1->zCoordinate;

        return $vector;
    }

    /** Vector difference */
    public function subVectors(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoordinate = $this->xCoordinate - $vector1->xCoordinate;
        $vector->yCoordinate = $this->yCoordinate - $vector1->yCoordinate;
        $vector->zCoordinate = $this->zCoordinate - $vector1->zCoordinate;

        return $vector;
    }

    /** Multiplying a vector by a number */
    public function product($number): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoordinate = $number * $this->xCoordinate;
        $vector->yCoordinate = $number * $this->yCoordinate;
        $vector->zCoordinate = $number * $this->zCoordinate;

        return $vector;
    }

    /** Scalar product of vectors */
    public function scalarProduct(Vector $vector1)
    {
        return $this->xCoordinate * $vector1->xCoordinate + $this->yCoordinate * $vector1->yCoordinate + $this->zCoordinate * $vector1->zCoordinate;
    }

    /** Vector product of vectors */
    public function vectorProduct(Vector $vector1): Vector
    {
        $vector = new Vector(0, 0, 0);
        $vector->xCoordinate = (int)$this->yCoordinate * (int)$vector1->zCoordinate - (int)$this->zCoordinate * (int)$vector1->yCoordinate;
        $vector->yCoordinate = -((int)$this->xCoordinate * (int)$vector1->zCoordinate - (int)$this->zCoordinate * (int)$vector1->xCoordinate);
        $vector->zCoordinate = (int)$this->xCoordinate * (int)$vector1->yCoordinate - (int)$this->yCoordinate * (int)$vector1->xCoordinate;

        return $vector;
    }

    /** Symbolic representation of a vector */
    public function __toString()
    {
        return '(' . $this->xCoordinate . ';' . $this->yCoordinate . ';' . $this->zCoordinate . ')';
    }
}
