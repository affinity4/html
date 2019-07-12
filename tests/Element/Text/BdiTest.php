<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Bdi;

class BdiTest extends TestCase
{
    public function testBBdiCreatesBdiTag()
    {
        $this->assertEquals('<bdi class="bdi-text">Text</bdi>', (string) new Bdi('Text', ['class' => 'bdi-text']));
    }
}
