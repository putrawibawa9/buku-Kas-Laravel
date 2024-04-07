<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnviromentTest extends TestCase
{
    public function testGetEnv(){
      $youtube =  env('YOUTUBE');

      self::assertEquals('Programmer Zaman Now', $youtube);
    }


    public function testDefaultEnv(){
        $author = env("AUTHOR", "eko");

        self::assertEquals("eko", $author);
    }
}
