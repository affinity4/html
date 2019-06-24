<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Fieldset;

class FieldsetTest extends TestCase
{
    public function testFieldsetCreatesFieldsetTag()
    {
        $this->assertEquals('<fieldset class="fieldset">Text</fieldset>', (string) new Fieldset('Text', ['class' => 'fieldset']));
    }
}
