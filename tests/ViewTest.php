<?php


use Badtomcat\Routing\RequestContext;
use Badtomcat\Routing\Exception\MethodNotAllowedException;

class ViewTest extends PHPUnit_Framework_TestCase
{


    public function testConfig()
    {
        $test = new \Badtomcat\Config\Config();
        $test->batch([
            'a' => 'b',
            'c' => [
                'd' => 'foo'
            ]
        ]);
        $this->assertEquals('foo',$test->get('c.d'));
        $test->set('b.b','cc');
        $data = $test->all();
        $this->assertTrue($data['b']['b'] == 'cc');

    }
}

