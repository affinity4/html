<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Select;

class SelectTest extends TestCase
{
    public function testSelectCreatesSelectTag()
    {
        $this->assertEquals(
            '<select class="select" name="employees"><option class="option" value="1">Option</option></select>',
            (string) new Select\Select(
                new Select\Option('Option', 1, ['class' => 'option']),
                'employees',
                ['class' => 'select']
            )
        );
    }
}
