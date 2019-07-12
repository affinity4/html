<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Element\Text\Address;

class AddressTest extends TestCase
{
    public function testAddressCreatesAddressTag()
    {
        $this->assertEquals('<address class="address">Text</address>', (string) new Address('Text', ['class' => 'address']));
    }
}
