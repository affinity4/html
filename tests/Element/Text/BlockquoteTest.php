<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Blockquote;

class BlockquoteTest extends TestCase
{
    public function testBlockquoteCreatesBlockquoteTag()
    {
        $this->assertEquals('<blockquote class="blockquote-text">Text</blockquote>', (string) new Blockquote('Text', ['class' => 'blockquote-text']));
    }
}
