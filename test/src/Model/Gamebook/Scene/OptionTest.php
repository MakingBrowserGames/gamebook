<?php

namespace rvilbrandt\gamebook\Model\Gamebook\Scene;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-26 at 14:13:31.
 */
class OptionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Option
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Option;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Scene\Option::setFromArray
     */
    public function testSetFromArray() {
        $this->object->setFromObject(json_decode(file_get_contents(__DIR__ . "/../../../../data/option_valid.json")));
    }

    /**
     * @covers rvilbrandt\gamebook\Model\Gamebook\Scene\Option::setFromArray
     * @expectedException rvilbrandt\gamebook\Model\MissingAttributeException
     */
    public function testSetFromArrayIncompleteJson() {
        $this->object->setFromObject(json_decode(file_get_contents(__DIR__ . "/../../../../data/object_incomplete.json")));
    }

}