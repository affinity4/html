<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\B;

class BTest extends TestCase
{
    public function testBCreatesBoldTag()
    {
        $this->assertEquals('<b class="bold-text">Text</b>', (string) new B('Text', ['class' => 'bold-text']));
    }
}
