<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
const CATEGORIES = [
    'Action',
    'Aventure',
    'Animation',
    'Fantastique',
    'Horreur',
];
public function load(ObjectManager $manager) {
    foreach (self::CATEGORIES as $key => $CategoryName) {
        $Category = new Category();
        $Category -> setName($CategoryName);

        $manager->persist($Category);
    }
        $manager->flush();

}












}