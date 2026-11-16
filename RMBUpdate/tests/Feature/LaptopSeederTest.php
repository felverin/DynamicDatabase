<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaptopSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_database_seeder_creates_the_laptop_record(): void
    {
        $this->seed();

        $this->assertDatabaseHas('laptops', [
            'brand' => 'Dell',
            'model' => 'XPS 13',
            'processor' => 'Intel Core i7',
            'ram' => 16,
        ]);

        $this->seed();

        $this->assertDatabaseCount('laptops', 1);
        $this->assertDatabaseCount('users', 1);
    }
}
