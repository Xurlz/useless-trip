<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{

  public function testHello() : void
  {
    $_GET['name'] = 'Charles';

    ob_start();

    require 'index.php';

    $content = ob_get_clean();

    $this->assertEquals('Hello Charles', $content);

  }

}
