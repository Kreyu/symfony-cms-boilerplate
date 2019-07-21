<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture as BaseFixture;
use Faker\Factory;

abstract class Fixture extends BaseFixture
{
    protected $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }
}
