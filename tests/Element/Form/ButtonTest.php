<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Button;

class ButtonTest extends TestCase
{
    public function testButtonCreatesButtonTag()
    {
        $this->assertEquals('<button class="btn">Button</button>', (string) new Button('Button', ['class' => 'btn']));
    }
}
