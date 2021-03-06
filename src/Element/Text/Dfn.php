<?php
namespace Affinity4\Html\Element\Text;

use Affinity4\Html\Tag;

/**
 * Dfn Class
 * 
 * Creates a dfn tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Dfn extends Tag
{
    /**
     * Constructor
     * 
     * Creates a dfn tag
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
        parent::__construct('dfn', $children, $attributes);
    }
}
