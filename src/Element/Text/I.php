<?php
namespace Affinity4\Html\Element\Text;

use Affinity4\Html\Tag;

/**
 * I Class
 * 
 * Creates an italic tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class I extends Tag
{
    /**
     * Constructor
     * 
     * Creates an italic tag
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
    public function __construct($children = '', array $attributes = [])
    {
        parent::__construct('i', $children, $attributes);
    }
}
