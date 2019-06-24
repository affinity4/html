<?php
namespace Affinity4\Html\Element\Form;

use Affinity4\Html\Tag;

/**
 * Button Class
 * 
 * Creates a button tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Button extends Tag
{
    /**
     * Constructor
     * 
     * Creates a button tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param array $attributes
     * 
     * @return string
     */
    public function __construct($children, array $attributes = [])
    {   
        parent::__construct('button', $children, $attributes);
    }
}
