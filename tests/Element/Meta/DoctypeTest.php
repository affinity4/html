<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Meta\Doctype;

class DoctypeTest extends TestCase
{
    public function testDoctypeIsCorrect()
    {
        $this->assertEquals('<!doctype html>', (string) new Doctype());
    }
}