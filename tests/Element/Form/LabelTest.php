<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Label;

class LabelTest extends TestCase
{
    public function testLabelCreatesLabelTag()
    {
        $this->assertEquals('<label class="label" for="email">Email</label>', (string) new Label('Email', 'email', ['class' => 'label']));
    }
}
