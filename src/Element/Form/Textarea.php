<?php
namespace Affinity4\Html\Element\Form;

use Affinity4\Html\Tag;

/**
 * Textarea Class
 * 
 * Creates a textarea tag
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Textarea extends Tag
{
    /**
     * Constructor
     * 
     * Creates a textarea tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string $content
     * @param string $name
     * @param int    $cols
     * @param int    $rows
     * @param array  $attributes
     * 
     * @return string
     */
    public function __construct(string $content, string $name, int $cols = 8, int $rows = 4, array $attributes = [])
    {
        $attributes['name'] = $name;
        $attributes['cols'] = $cols;
        $attributes['rows'] = $rows;
        
        parent::__construct('textarea', $content, $attributes);
    }
}
