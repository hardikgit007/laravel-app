<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_show_students()
    {
        $response=Student::all();
        $this->assertTrue(true);
    }
    public function test_create_students()
    {
        $response=Student::create(['name' =>'new 1','email' =>'abc@gmail.com','address' =>'hffh ']);
        $this->assertTrue(true);
    }

    public function test_fetch_students()
    {
        $response=Student::all();
        $this->assertEquals(8,$response->count());
    }
}
