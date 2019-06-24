<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Form\Textarea;

class TextareaTest extends TestCase
{
    public function testTextareaCreatesTextareaTag()
    {
        $this->assertEquals('<textarea class="content" name="content" cols="8" rows="4">This is some content...</textarea>', (string) new Textarea('This is some content...', 'content', 8, 4, ['class' => 'content']));
    }
}
