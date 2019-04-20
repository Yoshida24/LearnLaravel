<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Database\Factoties\UserFactory;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


     public function testHello(){
       $this->assertTrue(true);

       $response = $this->get('/');
       $response->assertStatus(200);

       $response = $this->get('/hello');
       $response->assertStatus(302);

       $user = factory(User::class)->create();
       $response = $this->actingAs($user)->get('/hello');
       $response->assertStatus(200);

     }

     /*
    public function testExample()
    {
        $this->assertTrue(true);

        $arr =[];
        $this->assertEmpty($arr);

        $msg = 'Hello';
        $this->assertEquals('Hello',$msg);

        $n = random_int(0,100);
        $this->assertLessThan(100,$n);
    }
    */
}
