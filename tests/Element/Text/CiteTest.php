<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Cite;

class CiteTest extends TestCase
{
    public function testCiteCreatesCiteTag()
    {
        $this->assertEquals('<cite class="cite-text">Text</cite>', (string) new Cite('Text', ['class' => 'cite-text']));
    }
}
