<?php
namespace Affinity4\Html\Element\Navigation;

use Affinity4\Html\Tag;

/**
 * A Class
 * 
 * Creates an anchor tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class A extends Tag
{
    /**
     * Constructor
     * 
     * Creates an anchor tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param null|string|array|\Affinity4\Html\Tag $children
     * @param string $href
     * @param array  $attributes
     * 
     * @return string
     */
    public function __construct($children = null, string $href = '', array $attributes = [])
    {
        $attributes['href'] = $href;

        parent::__construct('a', $children, $attributes);
    }
}
