<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Dfn;

class DfnTest extends TestCase
{
    public function testDfnCreatesDfnTag()
    {
        $this->assertEquals('<dfn class="dfn-text">Text</dfn>', (string) new Dfn('Text', ['class' => 'dfn-text']));
    }
}
