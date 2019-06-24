<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Navigation\A;

class ATest extends TestCase
{
    public function testACreatesAnchorTag()
    {
        $this->assertEquals('<a href="#some/link">Some Link</a>', (string) new A('Some Link', '#some/link'));
    }
}
