<?php
namespace Affinity4\Html\Element\Form\Select;

use Affinity4\Html\Tag;

/**
 * Option Class
 * 
 * Creates an option tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Option extends Tag
{
    /**
     * Constructor
     * 
     * Creates an option tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string|int $value
     * @param array  $attributes
     * 
     * @return string
     */
    public function __construct($children, $value, array $attributes = [])
    {
        $attributes['value'] = $value;
        parent::__construct('option', $children, $attributes);
    }
}
