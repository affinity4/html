<?php
namespace Affinity4\Html\Element\Form;

use Affinity4\Html\Tag;

/**
 * Input Class
 * 
 * Creates a input tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Input extends Tag
{
    /**
     * Constructor
     * 
     * Creates a input tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string $name
     * @param string $type
     * @param array $attributes
     * 
     * @return string
     */
    public function __construct(string $name, string $type = 'text', array $attributes = [])
    {
        $attributes['name'] = $name;
        $attributes['type'] = $type;
        
        parent::__construct('input', null, $attributes);
    }
}
