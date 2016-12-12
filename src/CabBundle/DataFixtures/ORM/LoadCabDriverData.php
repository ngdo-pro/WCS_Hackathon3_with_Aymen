<?php
namespace CabBundle\DataFixtures\ORM;


use CabBundle\Entity\CabDriver;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCabDriverData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $driver = new CabDriver();
        $driver->setName('Artiom')
            ->setLanguage('Russian - English - French')
            ->setTel1('+33 6 71 41 28 07')
            ->setTel2('+33 6 51 24 11 95')
            ->setEmail('patriot.vtc@gmail.com')
            ->setCreditCardAccepted(true);

        $driver2 = new CabDriver();
        $driver2->setName('Gustavo')
            ->setTel1('+33 7 72 81 28 07')
            ->setEmail('gustavo.hotmail@gmail.com')
            ->setCreditCardAccepted(false);

        $driver3 = new CabDriver();
        $driver3->setName('David')
            ->setTel1('+33 6 71 41 28 07')
            ->setTel2('+33 6 51 42 28 95')
            ->setEmail('david.vtc@gmail.com')
            ->setCreditCardAccepted(true);

        $driver4 = new CabDriver();
        $driver4->setName('Palani')
            ->setLanguage('English - French')
            ->setTel1('+33 6 09 47 31 38')
            ->setEmail('palani022@gmail.com')
            ->setCreditCardAccepted(false);

        $driver5 = new CabDriver();
        $driver5->setName('Rashid')
            ->setLanguage('English - French - Arabic - Italian - Spanish')
            ->setTel1('+33 6 28 33 49 29')
            ->setEmail('rashid.tahar@gmail.com')
            ->setCreditCardAccepted(false);

        $manager->persist($driver);
        $manager->persist($driver2);
        $manager->persist($driver3);
        $manager->persist($driver4);
        $manager->persist($driver5);
        $manager->flush();
    }
    public function getOrder()
    {
        return 4;
    }
}