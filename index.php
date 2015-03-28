<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 28/3/15
 * Time: 14:56
 */


class Baddie
{
    public $evilness = 10;
    public $name;

    public function __construct($evilness, $name)
    {
        $this->evilness = $evilness;
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "A ".__CLASS__." has been destroyed";
    }

    public function __toString()
    {
        return $this->name;
    }

}

$ganon = new Baddie(8, 'Ganon');

echo $ganon->evilness;
echo "<br />";
echo $ganon->name;
echo "<br />";
echo $ganon;
echo "<br />";
unset($ganon);