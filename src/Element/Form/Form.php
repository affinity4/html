<?php
namespace Affinity4\Html\Element\Form;

use Affinity4\Html\Tag;

/**
 * Form Class
 * 
 * Creates a form tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Form extends Tag
{
    /**
     * Constructor
     * 
     * Creates a form tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param null|string|array|\Affinity4\Html\Tag $children
     * @param array $attributes
     * 
     * @return string
     */
    public function __construct($children, string $method, string $action, array $attributes = [])
    {
        $attributes['method'] = $method;
        $attributes['action'] = $action;
        
        parent::__construct('form', $children, $attributes);
    }
}
