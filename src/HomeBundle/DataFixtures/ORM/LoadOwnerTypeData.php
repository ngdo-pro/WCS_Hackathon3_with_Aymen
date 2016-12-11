<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 11/12/16
 * Time: 11:59
 */

namespace HomeBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HomeBundle\Entity\OwnerType;

class LoadOwnerTypeData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $ownerType = new OwnerType();
        $ownerType->setTitle('Individual');
        $manager->persist($ownerType);

        $this->addReference('individual', $ownerType);

        $ownerType = new OwnerType();
        $ownerType->setTitle('Agency');
        $manager->persist($ownerType);

        $this->addReference('agency', $ownerType);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 4;
    }
}