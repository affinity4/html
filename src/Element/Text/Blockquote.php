<?php
namespace Affinity4\Html\Element\Text;

use Affinity4\Html\Tag;

/**
 * Blockquote Class
 * 
 * Creates a blockquote tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Blockquote extends Tag
{
    /**
     * Constructor
     * 
     * Creates a blockquote tag
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
    public function __construct($children = null, array $attributes = [])
    {
        parent::__construct('blockquote', $children, $attributes);
    }
}
