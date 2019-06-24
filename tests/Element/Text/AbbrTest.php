<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Abbr;

class AbbrTest extends TestCase
{
    public function testAbbrCreatesAbbrTag()
    {
        $this->assertEquals('<abbr class="abbr-text">Text</abbr>', (string) new Abbr('Text', ['class' => 'abbr-text']));
    }
}
