<?php
namespace Affinity4\Html\Element\Form;

use Affinity4\Html\Tag;

/**
 * Label Class
 * 
 * Creates a label tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Label extends Tag
{
    /**
     * Constructor
     * 
     * Creates a label tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $for
     * @param array  $attributes
     * 
     * @return string
     */
    public function __construct($children, string $for, array $attributes = [])
    {
        $attributes['for'] = $for;
        parent::__construct('label', $children, $attributes);
    }
}
