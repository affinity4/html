<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Tag;

class TagTest extends TestCase
{
    private function getValueOfPrivateProperty($class, string $property)
    {
        $ReflectionProperty = new \ReflectionProperty($class, $property);
        $ReflectionProperty->setAccessible(true);

        return $ReflectionProperty->getValue($class);
    }

    private function invokePrivateMethod($class, string $method, array $args = null)
    {
        $ReflectionMethod = new \ReflectionMethod($class, $method);
        $ReflectionMethod->setAccessible(true);

        return ($args === null)
            ? $ReflectionMethod->invoke($class)
            : $ReflectionMethod->invokeArgs($class, $args);
    }

    public function testSelfClosingTagsConstantIsCorrect()
    {
        $valid = [
            'area',
            'base',
            'br',
            'embed',
            'hr',
            'iframe',
            'img',
            'input',
            'link',
            'meta',
            'param',
            'source'
        ];

        foreach (Tag::SELF_CLOSING_TAGS as $self_closing_tag) {
            $this->assertTrue(in_array($self_closing_tag, $valid), "Assert $self_closing_tag is in array of valid self closing tags");
        }
    }

    public function providerTestConstructorSetsSelfClosingProperty(): array
    {
        return [
            ['area'],
            ['base'],
            ['br'],
            ['embed'],
            ['hr'],
            ['iframe'],
            ['img'],
            ['input'],
            ['link'],
            ['meta'],
            ['param'],
            ['source']
        ];
    }

    /**
     * @dataProvider providerTestConstructorSetsSelfClosingProperty
     *
     * @param string $tag_name
     */
    public function testConstructorSetsSelfClosingProperty(string $tag_name)
    {
        $this->assertTrue($this->getValueOfPrivateProperty(new Tag($tag_name), 'self_closing'));
    }

    public function providerTestConstructorSetsTagProperty(): array
    {
        return [
            ['a', 'a'],
            ['b', 'b'],
            ['dl', 'dl'],
            ['ul', 'ul'],
            ['ol', 'ol'],
            ['a', 'A'],
            ['b', 'B'],
            ['dl', 'DL'],
            ['ul', 'UL'],
            ['ol', 'OL']
        ];
    }

    /**
     * @dataProvider providerTestConstructorSetsTagProperty
     * 
     * @param string $expected
     * @param string $tag_name
     */
    public function testConstructorSetsTagProperty(string $expected, string $tag_name)
    {
        $this->assertEquals($expected, $this->getValueOfPrivateProperty(new Tag($tag_name), 'tag'));
    }

    /**
     * @return array
     */
    public function providerTestConstructorSetsAttributesProperty(): array
    {
        return [
            [
                [
                    'id' => 'id',
                    'class' => 'class',
                    'style' => 'color: red'
                ]
            ],
            [
                [
                    'id' => 'id',
                    'class' => 'class',
                    'style' => 'color: red',
                    'data-attribute' => 'data',
                    'onclick' => 'function() {console.log("clicked!")}'
                ]
            ]
        ];
    }

    /**
     * @dataProvider providerTestConstructorSetsAttributesProperty
     */
    public function testConstructorSetsAttributesProperty(array $attributes)
    {
        $this->assertEquals($attributes, $this->getValueOfPrivateProperty(new Tag('div', null, $attributes), 'attributes'));
    }

    /**
     * @return array
     */
    public function providerTestConstructorSetsChildrenProperty(): array
    {
        return [
            [
                [
                    '<h1>Heading 1</h1>',
                    'Text',
                    new Tag('p', 'Paragraph', ['class' => 'content'])
                ]
            ],
            [
                'string'
            ],
            [
                null
            ],
            [
                '<h1>Heading 1</h1>',
                'Text',
                new Tag('p', 'Paragraph', ['class' => 'content']),
                null
            ]
        ];
    }

    /**
     * @dataProvider providerTestConstructorSetsChildrenProperty
     */
    public function testConstructorSetsChildrenProperty($children)
    {
        $this->assertEquals($children, $this->getValueOfPrivateProperty(new Tag('div', $children, []), 'children'));
    }

    public function providerTestGetAttributesAsHtml(): array
    {
        return [
            [
                '',
                []
            ],
            [
                'id="elementId" class="element_class" style="color: red;"',
                [
                    'id' => 'elementId',
                    'class' => 'element_class',
                    'style' => 'color: red;'
                ]
            ]
        ];
    }

    /**
     * @dataProvider providerTestGetAttributesAsHtml
     *
     * @param string $expected
     * @param array $attributes
     */
    public function testGetAttributesAsHtml(string $expected, array $attributes)
    {
        $this->assertEquals($expected, $this->invokePrivateMethod(new Tag('div', null, $attributes), 'getAttributesAsHtml'));
    }

    public function providerTestGetChildrenAsHtml(): array
    {
        return [
            'empty array becomes empty string' => [
                '',
                []
            ],
            'empty string stays empty string' => [
                '',
                ''
            ],
            'null is converted to empty string' => [
                '',
                null
            ],
            'array of string gets concatenated into one string' => [
                '<p>Test</p>',
                [
                    '<p>',
                    'Test',
                    '</p>'
                ]
            ],
            'Affinity4\Html\Tag instance becomes string' => [
                '<p>Test</p>',
                [
                    new Tag('p', 'Test', [])
                ]
            ],
            'Array of multiple Affinity4\Html\Tag objects get concatenated together' => [
                '<p>Test</p><div class="element_class" id="elementId" style="color: red;">A div</div>',
                [
                    new Tag('p', 'Test', []),
                    new Tag('div', 'A div', ['class' => 'element_class', 'id' => 'elementId', 'style' => 'color: red;'])
                ]
            ],
            'Array of multiple Affinity4\Html\Tag objects with children Affinity4\Html\Tag gets correctly compiled' => [
                '<h1>A list</h1><ul id="listId" class="list_class"><li data-id="1">One</li><li data-id="2">Two</li></ul>',
                [
                    new Tag('h1', 'A list', []),
                    new Tag('ul', [
                        new Tag('li', 'One', ['data-id' => 1]),
                        new Tag('li', 'Two', ['data-id' => 2])
                    ], [
                        'id'    => 'listId',
                        'class' => 'list_class'
                    ])
                ]
            ]
        ];
    }

    /**
     * @dataProvider providerTestGetChildrenAsHtml
     *
     * @param string $expected
     * @param array  $children
     */
    public function testGetChildrenAsHtml(string $expected, $children)
    {
        $this->assertEquals($expected, $this->invokePrivateMethod(new Tag('div', $children, []), 'getChildrenAsHtml'));
    }
}