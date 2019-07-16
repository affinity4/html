<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Del;

class DelTest extends TestCase
{
    public function testDelCreatesDelTag()
    {
        $this->assertEquals('<del class="del-text">Text</del>', (string) new Del('Text', ['class' => 'del-text']));
    }
}
