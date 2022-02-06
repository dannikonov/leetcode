<?php

class Bitset
{
    private $set = [];
    private $flipped = false;
    private $count = 0;

    /**
     * @param Integer $size
     */
    function __construct($size)
    {
        $this->set = array_fill(0, $size, false);
        $this->flipped = false;
    }

    /**
     * @param Integer $idx
     * @return NULL
     */
    function fix($idx)
    {
        if ($this->flipped) {
            $this->count += $this->set[$idx] === true;
            $this->set[$idx] = false;
        } else {
            $this->count += $this->set[$idx] === false;
            $this->set[$idx] = true;
        }
    }

    /**
     * @param Integer $idx
     * @return NULL
     */
    function unfix($idx)
    {
        if ($this->flipped) {
            $this->count -= $this->set[$idx] === false;
            $this->set[$idx] = true;
        } else {
            $this->count -= $this->set[$idx] === true;
            $this->set[$idx] = false;
        }
    }

    /**
     * @return NULL
     */
    function flip()
    {
        $this->flipped = !$this->flipped;
        $this->count = count($this->set) - $this->count;
    }

    /**
     * @return Boolean
     */
    function all()
    {
        return $this->count === count($this->set);
    }

    /**
     * @return Boolean
     */
    function one()
    {
        return !!$this->count;
    }

    /**
     * @return Integer
     */
    function count()
    {
        return $this->count;
    }

    /**
     * @return String
     */
    function toString()
    {
        $result = '';
        if ($this->flipped) {
            foreach ($this->set as &$bit) {
                $result .= $bit ? '0' : '1';
            }
        } else {
            foreach ($this->set as &$bit) {
                $result .= $bit ? '1' : '0';
            }
        }

        return $result;
    }
}

/**
 * Your Bitset object will be instantiated and called as such:
 * $obj = Bitset($size);
 * $obj->fix($idx);
 * $obj->unfix($idx);
 * $obj->flip();
 * $ret_4 = $obj->all();
 * $ret_5 = $obj->one();
 * $ret_6 = $obj->count();
 * $ret_7 = $obj->toString();
 */

$obj = new  Bitset(2);
var_dump($obj->toString());
$obj->flip();
var_dump($obj->toString());
$obj->unfix(1);
var_dump($obj->all());
var_dump($obj->toString());
$obj->fix(1);
var_dump($obj->toString());
$obj->fix(1);
var_dump($obj->toString());
$obj->unfix(1);
var_dump($obj->toString());
var_dump($obj->all());
var_dump($obj->count());
var_dump($obj->toString());
