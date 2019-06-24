<?php
namespace Affinity4\Html\Element\Form\Select;

use Affinity4\Html\Tag;

/**
 * Select Class
 * 
 * Creates a select tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Select extends Tag
{
    /**
     * Constructor
     * 
     * Creates a select tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $name
     * @param array  $attributes
     * 
     * @return string
     */
    public function __construct($children, $name, array $attributes = [])
    {
        $attributes['name'] = $name;
        parent::__construct('select', $children, $attributes);
    }
}
