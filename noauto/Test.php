<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new WfcHtmlReceipt();

        $obj = new WfcHtmlWrapper();
        $this->assertInternalType('string', $obj->receiptHeader());
        $this->assertInternalType('string', $obj->receiptFooter());
    }
}

