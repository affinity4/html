<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Code;

class CodeTest extends TestCase
{
    public function testCodeCreatesCodeTag()
    {
        $this->assertEquals('<code class="code-text">Text</code>', (string) new Code('Text', ['class' => 'code-text']));
    }
}
