<?php
/*interface Iterator
{
    public function rewind();
    public function key();
    public function current();
    public function next();
    public function valid();
}*/

/*class MaClasse
{
    protected $arg1 = 'plop';
    protected $arg2 = 'plip';

}

$c = new Maclasse();
foreach ($c as $key=>$value)
{
    echo $key .' : '. $value. '<br>';
}
*/

class Maclasse implements Iterator 
{
    protected $n;
    const MAX = 5;

    public function rewind()
    {
        $this->n = 0;
    }

    public function next()
    {
        $this->n++;
    }

    public function key()
    {
        return 'increment '.($this->n+1);
    }

    public function current()
    {
        return $this->n;
    }

    public function valid()
    {
        return $this->n<=self::MAX;
    }
}

$c = new Maclasse();
foreach($c as $key => $val)
{
    echo $key.' : '.$val. '<br>';
}