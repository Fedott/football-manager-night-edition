<?php


namespace Fedot\FootballManager\Model;


class FieldTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNew()
    {
        $field = new Field();

        $this->assertInstanceOf(Field::class, $field);
    }

    public function testProperties()
    {
        $field = new Field();

        $field->setWidth(6800);
        $field->setLength(10500);

        $this->assertEquals(6800, $field->getWidth());
        $this->assertEquals(10500, $field->getLength());
    }
}
