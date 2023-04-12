<?php

namespace Tests\Structural;

use PHPUnit\Framework\TestCase;
use Structural\Composite\Elements\InputElement;
use Structural\Composite\Elements\TextElement;
use Structural\Composite\Form;

class CompositeTest extends TestCase
{

    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}