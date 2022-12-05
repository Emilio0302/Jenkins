<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include(dirname(__FILE__) . "/../Point2D.php");
final class Point2DTest extends TestCase
{
    public function testConstructor()
    {
        $point = new Point2D(3, 5);
        $this->assertEquals($point->getX(), 3);
        $this->assertEquals($point->getY(), 5);
    }
    public function testGetX()
    {
        $p = new Point2D(4, 5);
        $this->assertEquals($p->getX(), 4);
    }
    public function testGettY()
    {
        $p = new Point2D(4, 5);
        $this->assertEquals($p->getY(), 5);
    }
    public function testSetX()
    {
        $p = new Point2D(10, 11);
        $this->expectException(InvalidArgumentException::class);
        $p->setX(-1);
    }
    public function testSetY()
    {
        $p = new Point2D(10, 11);
        $this->expectException(InvalidArgumentException::class);
        $p->setY(-20);
    }
    public function testDistance()
    {
        $p1 = new Point2D(4, 6);
        $p2 = new Point2D(5, 9);
        $distance = $p1->distance($p2);
        $this->assertEqualsWithDelta($distance, 3.1, 0.2);
    }
    public function testAdd()
    {
        $p1 = new Point2D(4, 6);
        $p1->add(4, 4);
        $this->assertEquals($p1->getX(), 8);
        $this->assertEquals($p1->getY(), 10);
    }
}
