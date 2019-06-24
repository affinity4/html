<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\I;

class ITest extends TestCase
{
    public function testBCreatesItalicTag()
    {
        $this->assertEquals('<i class="italic-text">Text</i>', (string) new I('Text', ['class' => 'italic-text']));
    }
}
