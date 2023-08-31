<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Animal;

class AnimalTest extends TestCase
{
    public function test_that_check_sound_of_animal(): void
    {
        $animal = new Animal('Gato');

        $this->assertEquals('Au Au', $animal->getItsSound());
    }

    public function test_that_count_animals(): void
    {
        $animal = new Animal('Gato');

        $animal->addDescendents('DescendentA');
        $animal->addDescendents('DescendentB');

        $this->assertCount(2, $animal->getListDescendents());
    }

    public function test_that_check_if_the_cub_exist(): void
    {
        $animal = new Animal('Gato');

        $animal->addDescendents('DescendentA');
        $animal->addDescendents('DescendentsB');

        $this->assertContains('DescendentA', $animal->getListDescendents());
    }
}