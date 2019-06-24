<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Legend;

class LegendTest extends TestCase
{
    public function testLegendCreatesLegendTag()
    {
        $this->assertEquals('<legend class="legend">Legend</legend>', (string) new Legend('Legend', ['class' => 'legend']));
    }
}
