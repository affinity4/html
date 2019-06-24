<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Form;

class FormTest extends TestCase
{
    public function testFormCreatesFormTag()
    {
        $this->assertEquals('<form class="form" method="post" action="">Form</form>', (string) new Form('Form', 'post', '', ['class' => 'form']));
    }
}
