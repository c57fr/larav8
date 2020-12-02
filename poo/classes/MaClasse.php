<?php

class MaClasse
{
    protected $arg1 = 'plop';
    protected $arg2 = 'plip';

}

$c = new Maclasse();
foreach ($c as $key=>$value)
{
    echo $key .' : '. $value. '<br>';
}