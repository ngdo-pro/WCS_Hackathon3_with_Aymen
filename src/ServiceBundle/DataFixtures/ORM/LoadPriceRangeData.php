<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 11/12/16
 * Time: 09:53
 */

namespace ServiceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ServiceBundle\Entity\PriceRange;

class LoadPriceRangeData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $priceRange = new PriceRange();
        $priceRange->setPrice('0-12');
        $manager->persist($priceRange);

        $this->addReference('priceRangeLow', $priceRange);

        $priceRange = new PriceRange();
        $priceRange->setPrice('12-25');
        $manager->persist($priceRange);

        $this->addReference('priceRangeMedium', $priceRange);

        $priceRange = new PriceRange();
        $priceRange->setPrice('25+');
        $manager->persist($priceRange);

        $this->addReference('priceRangeHigh', $priceRange);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}