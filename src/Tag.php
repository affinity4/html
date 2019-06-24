<?php
namespace Affinity4\Html;

class Tag
{
    /**
     * A list of self-closing tags
     */
    const SELF_CLOSING_TAGS = [
        'area',
        'base',
        'br',
        'embed',
        'hr',
        'iframe',
        'img',
        'input',
        'link',
        'meta',
        'param',
        'source'
    ];

    /**
     * @var string
     */
    private $tag;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var null|string|array|\Affinity4\Html\Tag[]
     */
    private $children;

    /**
     * Constructor
     * 
     * Creates an HTML tag
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @param string $tag
     * @param null|string|array|\Affinity4\Html\Tag $children
     * @param array  $attributes
     */
    public function __construct(string $tag, $children = null, array $attributes = [])
    {
        $this->self_closing = (in_array(strtolower($tag), self::SELF_CLOSING_TAGS));

        $this->tag = strtolower($tag);

        $this->attributes = $attributes;

        $this->children = $children;
    }

    /**
     * Get Attributes As HTML
     * 
     * Creates attributes for an html element from a key value array
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @return string
     */
    private function getAttributesAsHtml(): string
    {
        $attribute_html_segments = [];
        foreach ($this->attributes as $attribute => $value) {
            $attribute_html_segments[] = "$attribute=\"$value\"";
        }

        return implode(' ', $attribute_html_segments);
    }

    /**
     * Get Children as HTML
     * 
     * Creates Raw Html from an array of various types or a string
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @return string
     */
    private function getChildrenAsHtml(): string
    {
        if (is_array($this->children)) {
            $children = [];
            foreach ($this->children as $child) {
                if (!is_array($child)) {
                    if (!is_string($child)) {
                        if (is_object($child) && method_exists($child, '__toString')) {
                            $children[] = (string) $child;
                        } else {
                            $children[] = ($child !== null) ? (string) $child : '';
                        }
                    } else {
                        $children[] = $child;
                    }
                } else {
                    $children[] = $this->getChildrenAsHtml($child);
                }
            }
        } else {
            if (is_string($this->children)) {
                $children[] = $this->children;
            } else {
                if (is_object($this->children) && method_exists($this->children, '__toString')) {
                    $children[] = (string) $this->children;
                } else {
                    $children[] = ($this->children !== null) ? (string) $this->children : '';
                }
            }
        }

        return implode('', $children);
    }

    /**
     * To String
     * 
     * Allows casting the class to a string 
     * which gives the compiled html
     * 
     * @author Luke Watts <luke@affinity4.ie>
     * 
     * @since 0.0.1
     *
     * @return string
     */
    public function __toString()
    {
        $attributes = (!empty($this->getAttributesAsHtml())) ? " {$this->getAttributesAsHtml()}" : '';
        if ($this->self_closing) {
            return "<{$this->tag}$attributes />";
        } else {
            if ($this->tag === '!doctype html') {
                return "<{$this->tag}$attributes>";
            } else {
                return "<{$this->tag}$attributes>{$this->getChildrenAsHtml()}</{$this->tag}>";
            }
        }
    }
}