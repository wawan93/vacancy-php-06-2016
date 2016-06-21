<?php

class UploaderTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $uploader = new TJ\Uploader\Uploader(1,[]);
        $this->assertInstanceOf('TJ\Uploader\UploaderInterface', $uploader);
    }
}