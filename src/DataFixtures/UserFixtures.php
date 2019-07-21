<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture implements FixtureGroupInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('admin');
        $user->setEmail($this->faker->safeEmail);
        $user->setPlainPassword(123);
        $user->setEnabled(true);
        $user->addRole('ROLE_ADMIN');
        $user->setCreatedAt($this->faker->dateTimeBetween('-3 months'));
        $user->setUpdatedAt($this->faker->dateTimeBetween($user->getCreatedAt()));

        $manager->persist($user);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public static function getGroups(): array
    {
        return [
            'users',
        ];
    }
}
