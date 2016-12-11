<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 11/12/16
 * Time: 09:20
 */

namespace ServiceBundle\DataFixtures\ORM;



use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ServiceBundle\Entity\Service;

class LoadServiceData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $services = array(
            array(
                "Bistrot des Amis", "1 rue Montebello 77300 Fontainebleau", "0164220033", null, "Southern French cuisine with Provencal flavours", 76, null, 10, 0, "2016-04-05 16:04:03", 1, 'priceRangeHigh', "french"
            ),
            array(
                "Le Bacchus", "4 rue Richelieu 77300 Fontainebleau", "0164222646", null, "Home made cuisine\n Closed Mondays, Wednesday lunchtime & Sunday evenings", 43, null, null, 0, "2016-09-05 17:04:03", 1, 'priceRangeHigh', "traditional"
            ),
            array(
                "Bistrot 9", "9 rue Montebello 77300 Fontainebleau", "0164228784", null, "Traditional French brasserie", 24, null, null, 0, "2016-11-05 17:04:03", 1, 'priceRangeHigh', "traditional"
            ),
            array(
                "Le Grand Café", "33 place Napoléon Bonaparte 77300 Fontainebleau", "0164222032", null, "French cuisine, nice terrace facing the old merry-go-round", 12, null, 10, 0, "2016-11-08 17:04:03", 1, 'priceRangeMedium', "french"
            ),
            array(
                "La Méditerranée", "12 rue des Pins 77300 Fontainebleau", "0164325875", null, "Traditional mediterranean cuisine.\n Lebanese & Turkish specialties.", 53, null, null, 0, "2016-10-09 17:04:03", 1, 'priceRangeMedium', "turkish"
            ),
            array(
                "Brussel's Bar", "47 rue Grande 77300 Fontainebleau", "0164222127", null, "Brasserie, Belgian cuisine", 67, null, null, 0, "2016-10-11 17:04:03", 1, 'priceRangeMedium', "belgian"
            ),
            array(
                "Ko Sun", "18 rue de la Corne 77300 Fontainebleau", "0164224505", null, "Chinese food", 86, null, 15, 0, "2016-10-11 17:04:03", 1, 'priceRangeHigh', "chinese"
            ),
            array(
                "Raj Mahal", "7 rue des 3 Maillets 77300 Fontainebleau", "0164221222", null, "Indian food", 213, null, 10, 0, "2016-10-11 17:04:03", 1, 'priceRangeMedium', "indian"
            ),
            array(
                "Il Primo Bacio", "3 rue Montebello 77300 Fontainebleau", "0160727436", null, "Italian specialties. Large groups welcome.", 14, null, null, 0, "2016-10-11 17:04:03", 1, 'priceRangeMedium', "italian"
            ),
            array(
                "Pizza Mimi", "17 rue des 3 Maillets 77300 Fontainebleau", "0164227077", null, "Pizzeria.", 195, "menu_pizza.jpg", 10, 0, "2016-10-11 17:04:03", 1, 'priceRangeMedium', "italian"
            ),
            array(
                "Le Marquis de Pombal", "4 rue du Coq Gris 77300 Fontainebleau", "0160700714", null, "Home made Portuguese cuisine.\n Take-away and home delivery possible.\n Closed Mondays", 33, null, null, 0, "2016-10-11 17:04:03", 1, 'priceRangeMedium', "portuguese"
            )
        );
        
        /** @var Service $service */
        foreach ($services as $service) {
            $serviceObj = new Service();
            $serviceObj->setName($service[0]);
            $serviceObj->setAddress($service[1]);
            $serviceObj->setPhoneNumber($service[2]);
            $serviceObj->setEmail($service[3]);
            $serviceObj->setDescription($service[4]);
            $serviceObj->setLikes($service[5]);
            $serviceObj->setMenuImg($service[6]);
            $serviceObj->setDiscount($service[7]);
            $serviceObj->setSpecialOffer($service[8]);
            $serviceObj->setCreatedAt(new \DateTime($service[9]));
            $serviceObj->setServiceProvider($this->getReference('service-provider'));
            $serviceObj->setPriceRange($this->getReference($service[11]));
            $serviceObj->setCategory($service[12]);

            $manager->persist($serviceObj);
            unset($serviceObj);
        }
        $manager->flush();
        $manager->clear();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
}