<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Em;

class EmTest extends TestCase
{
    public function testEmCreatesEmTag()
    {
        $this->assertEquals('<em class="em-text">Text</em>', (string) new Em('Text', ['class' => 'em-text']));
    }
}
