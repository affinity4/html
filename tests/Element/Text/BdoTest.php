<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Bdo;

class BdoTest extends TestCase
{
    public function testBdoCreatesBdoTag()
    {
        $this->assertEquals('<bdo class="bdo-text">Text</bdo>', (string) new Bdo('Text', ['class' => 'bdo-text']));
    }
}
