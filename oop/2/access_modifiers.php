<?php

class Example {
    public $a=1;
    protected $b=2;
    private $c=3;

    function Show_abs()
    {
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }

    public function hello_everyone()
    {
        return "hello everyone.<br />";
    }

    //public by default
    function hello()
    {
        $output = $this->hello_everyone();
        $output .= $this->hello_family();
        $output .= $this->hello_me();
        return $output;
    }

    protected function hello_family()
    {
        return "hello family.<br />";
    }

    private function hello_me()
    {
        return "hello me.<br />";
    }
}

$example = new Example();
echo "public a: {$example->a}<br />}";
echo "protected b: {$example->b}<br />";
echo "privet c: {$example->c}<br />";
$example->Show_abs();
echo "<br />"

echo "<br />";
echo "hello everyone: {$example->hello_everyone()}.<br />";
echo "hello family: {$example->hello_family()}.<br />";
echo "hello me: {$example->hello_me()}. <br />";
echo $example->hello();

?>
