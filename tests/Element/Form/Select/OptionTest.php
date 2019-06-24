<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Select\Option;

class OptionTest extends TestCase
{
    public function testOptionCreatesOptionTag()
    {
        $this->assertEquals('<select><option class="option" value="1">Option</option></select>', '<select>' . new Option('Option', 1, ['class' => 'option']) . '</select>');
    }
}
