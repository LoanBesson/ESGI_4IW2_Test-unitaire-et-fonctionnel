<?php

class Calculatrice
{
    public function add($a, $b)
    {
        return $a+$b;
    }

    public function sub($a, $b)
    {
        return $a-$b;
    }

    public function mul($a, $b)
    {
        return $a*$b;
    }

    public function div($a, $b)
    {
        return $a/$b;
    }

    public function avg($tab)
    {
        $nb = 0;
        foreach($tab as $key => $value)
            $nb += $value;

        return $nb/sizeof($tab);
    }
}