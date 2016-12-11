<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 11/12/16
 * Time: 09:46
 */

namespace ServiceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ServiceBundle\Entity\ServiceProvider;

class LoadServiceProviderData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $serviceProvider = new ServiceProvider();
        $serviceProvider->setName('Restaurant');

        $manager->persist($serviceProvider);
        $manager->flush();

        $this->addReference('service-provider', $serviceProvider);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}