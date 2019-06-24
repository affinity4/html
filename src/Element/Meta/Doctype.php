<?php
namespace Affinity4\Html\Element\Meta;

use Affinity4\Html\Tag;

/**
 * Doctype Class
 * 
 * Creates a doctype tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Doctype extends Tag
{
    /**
     * Constructor
     * 
     * Creates a doctype tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param array $attributes
     * 
     * @return string
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct('!doctype html', null, $attributes);
    }
}
