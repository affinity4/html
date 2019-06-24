<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Input;

class InputTest extends TestCase
{
    public function testInputCreatesInputTag()
    {
        $this->assertEquals('<input class="email" name="email" type="email" />', (string) new Input('email', 'email', ['class' => 'email']));
    }
}
