<?php
use PHPUnit\Framework\TestCase;
use Affinity4\Html\Html;

class HtmlTest extends TestCase
{
    public function testTag()
    {
        $this->assertEquals('<div id="container" class="container"><div class="row"><div class="col-sm-12">12 Columns</div></div></div>', Html::tag('div', [
            Html::tag('div', [
                Html::tag('div', '12 Columns', ['class' => 'col-sm-12'])
            ], ['class' => 'row'])
        ], ['id' => 'container', 'class' => 'container']));
    }

    public function testA()
    {
        $href = '#some-link';
        $text = 'Link';
        $this->assertEquals("<a href=\"$href\">$text</a>", Html::a($text, $href));
    }

    public function testAbbr()
    {
        $this->assertEquals(
            "<abbr class=\"abbr-text\" title=\"HyperText Markup Language\">HTML</abbr>",
            Html::abbr(
                'HTML',
                'HyperText Markup Language',
                [
                    'class' => 'abbr-text'
                ]
            )
        );

        $this->assertEquals(
            "<abbr class=\"abbr-text\" title=\"HyperText Markup Language\">HTML</abbr>",
            Html::abbr(
                'HTML',
                'HyperText Markup Language',
                [
                    'class' => 'abbr-text',
                    'title' => 'This will be overwritten'
                ]
            )
        );
    }

    public function testAddress()
    {
        $text = 'Address';
        $this->assertEquals("<address class=\"address\">$text</address>", Html::address($text, ['class' => 'address']));
    }

    public function testB()
    {
        $text = 'Bold';
        $this->assertEquals("<b class=\"bold-text\">$text</b>", Html::b($text, ['class' => 'bold-text']));
    }

    public function testBdi()
    {
        $text = 'BDI';
        $this->assertEquals("<bdi class=\"bdi-text\">$text</bdi>", Html::bdi($text, ['class' => 'bdi-text']));
    }

    public function testBdo()
    {
        $text = 'BDO';
        $this->assertEquals("<bdo class=\"bdo-text\">$text</bdo>", Html::bdo($text, ['class' => 'bdo-text']));
    }

    public function testBlockquote()
    {
        $text = 'Blockquote';
        $this->assertEquals("<blockquote class=\"blockquote-text\">$text</blockquote>", Html::blockquote($text, ['class' => 'blockquote-text']));
    }

    public function testButton()
    {
        $text = 'Button';
        $this->assertEquals("<button class=\"btn\">$text</button>", Html::button($text, ['class' => 'btn']));
    }

    public function testCite()
    {
        $text = 'Cite';
        $this->assertEquals("<cite class=\"cite-text\">$text</cite>", Html::cite($text, ['class' => 'cite-text']));
    }

    public function testCode()
    {
        $text = 'Text';
        $this->assertEquals("<code class=\"code-text\">$text</code>", Html::code($text, ['class' => 'code-text']));
    }

    public function testDel()
    {
        $text = 'Text';
        $this->assertEquals("<del class=\"del-text\">$text</del>", Html::del($text, ['class' => 'del-text']));
    }

    public function testDfn()
    {
        $text = 'Text';
        $this->assertEquals("<dfn class=\"dfn-text\">$text</dfn>", Html::dfn($text, ['class' => 'dfn-text']));
    }

    public function testDoctype()
    {
        $this->assertEquals("<!doctype html>", Html::doctype());
    }

    public function testFieldset()
    {
        $this->assertEquals("<fieldset class=\"fieldset\">Text</fieldset>", Html::fieldset('Text', ['class' => 'fieldset']));
    }

    public function testForm()
    {
        $this->assertEquals("<form class=\"form\" method=\"post\" action=\"\">Form</form>", Html::form('Form', 'post', '', ['class' => 'form']));
    }

    public function testI()
    {
        $text = 'Italic';
        $this->assertEquals("<i class=\"italic-text\">$text</i>", Html::i($text, ['class' => 'italic-text']));
    }

    public function testInput()
    {
        $this->assertEquals("<input class=\"email\" name=\"email\" type=\"email\" />", Html::input('email', 'email', ['class' => 'email']));
    }

    public function testLabel()
    {
        $this->assertEquals('<label class="label" for="email">Email</label>', (string) Html::label('Email', 'email', ['class' => 'label']));
    }

    public function testLegend()
    {
        $this->assertEquals('<legend class="legend">Legend</legend>', (string) Html::legend('Legend', ['class' => 'legend']));
    }

    public function testOption()
    {
        $this->assertEquals('<select><option class="option" value="1">Option</option></select>', '<select>' . Html::option('Option', 1, ['class' => 'option']) . '</select>');
    }

    public function testSelect()
    {
        $this->assertEquals('<select class="select" name="employees"><option class="option" value="1">Option</option></select>', Html::select(
            Html::option('Option', 1, ['class' => 'option']),
            'employees',
            ['class' => 'select']
        ));
    }

    public function testTextarea()
    {
        $this->assertEquals(
            '<textarea class="content" name="content" cols="8" rows="4">This is some content...</textarea>',
            Html::textarea('This is some content...', 'content', 8, 4, ['class' => 'content'])
        );
    }
}
