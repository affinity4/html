<?php
namespace Affinity4\Html;

use Affinity4\Html\Tag;
use Affinity4\Html\Element\Form;
use Affinity4\Html\Element\Meta;
use Affinity4\Html\Element\Text;
use Affinity4\Html\Element\Navigation;

/**
 * Html class
 * 
 * @author Luke Watts <luke@affinity4.ie>
 * 
 * @since 0.0.1
 * 
 * @package Affinity4\Html
 */
class Html
{
    /**
     * Tag
     * 
     * Creates an HTML tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string $tag
     * @param null|string|array|\Affinity4\Html\Tag $children
     * @param array $attributes
     * 
     * @return string
     */
    public static function tag(string $tag, $children = null, array $attributes = []): string
    {
        return (string) new Tag($tag, $children, $attributes);
    }

    /**
     * A
     * 
     * Creates an anchor tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $href
     * @param array $attributes
     * 
     * @return string
     */
    public static function a($children, string $href, array $attributes = []): string
    {
        return (string) new Navigation\A($children, $href, $attributes);
    }

    /**
     * Abbr
     * 
     * Creates an abbr tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $href
     * @param array $attributes
     * 
     * @return string
     */
    public static function abbr($children, string $title = null, array $attributes = []): string
    {
        if ($title !== null) {
            $attributes['title'] = $title;
        }

        return (string) new Text\Abbr($children, $attributes);
    }

    /**
     * Address
     * 
     * Creates an address tag
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
    public static function address($children, array $attributes = []): string
    {
        return (string) new Text\Address($children, $attributes);
    }

    /**
     * B
     * 
     * Creates a bold tag
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
    public static function b($children, array $attributes = []): string
    {
        return (string) new Text\B($children, $attributes);
    }

    /**
     * Button
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
    public static function button($children, array $attributes = []): string
    {
        return (string) new Form\Button($children, $attributes);
    }

    /**
     * Doctype
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
    public static function doctype($attributes = []): string
    {
        return (string) new Meta\Doctype($attributes);
    }

    /**
     * Fieldset
     * 
     * Creates an fieldset tag
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
    public static function fieldset($children, array $attributes = []): string
    {
        return (string) new Form\Fieldset($children, $attributes);
    }

    /**
     * Form
     * 
     * Creates an form tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $method
     * @param string $action
     * @param array $attributes
     * 
     * @return string
     */
    public static function form($children, string $method, string $action,  array $attributes = []): string
    {
        return (string) new Form\Form($children, $method, $action, $attributes);
    }

    /**
     * I
     * 
     * Creates an italic tag
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
    public static function i($children, array $attributes = []): string
    {
        return (string) new Text\I($children, $attributes);
    }

    /**
     * Input
     * 
     * Creates an input tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string $name
     * @param string $type
     * @param array  $attributes
     * 
     * @return string
     */
    public static function input(string $name, string $type = 'text',  array $attributes = []): string
    {
        return (string) new Form\Input($name, $type, $attributes);
    }

    /**
     * Label
     * 
     * Creates an label tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $for
     * @param array $attributes
     * 
     * @return string
     */
    public static function label($children, string $for, array $attributes = []): string
    {
        return (string) new Form\Label($children, $for, $attributes);
    }

    /**
     * Legend
     * 
     * Creates an legend tag
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
    public static function legend($children, array $attributes = []): string
    {
        return (string) new Form\Legend($children, $attributes);
    }

    /**
     * Option
     * 
     * Creates an option tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string|int $value
     * @param array $attributes
     * 
     * @return string
     */
    public static function option($children, $value, array $attributes = []): string
    {
        return (string) new Form\Select\Option($children, $value, $attributes);
    }

    /**
     * Select
     * 
     * Creates a select tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string|array|\Affinity4\Html\Tag $children
     * @param string $name
     * @param array $attributes
     * 
     * @return string
     */
    public static function select($children, $name, array $attributes = []): string
    {
        return (string) new Form\Select\Select($children, $name, $attributes);
    }

    /**
     * Textarea
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
    public static function textarea(string $content, string $name, int $cols = 8, int $rows = 4, array $attributes = []): string
    {
        return (string) new Form\Textarea($content, $name, $cols, $rows, $attributes);
    }
}
