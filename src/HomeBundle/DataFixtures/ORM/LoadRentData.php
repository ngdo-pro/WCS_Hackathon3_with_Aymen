<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 11/12/16
 * Time: 11:58
 */

namespace HomeBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use HomeBundle\Entity\Rent;

class LoadRentData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $rents = array(
            array(
                "50m²-950€", "221 Rue Saint Merry ,77300 Fontainebleau", "LegallicB@corning.com", "Delighted. Would fully recommend", "Excellent landlord. Extremely helpful (lives below the apartment)", 50, 950, "100 per quarter", 1, "individual", "img1.jpg"
            ),
            array(
                "40m²-970€", "54 Aristide Briand ,77300 Fontainebleau", "christ1968@hotmail.com", "Great structure and fully functional. A bit cold during winter since there are no double glass windows. Also, rental costs do not include cleaning, which has to be done by you or paid separately. Perfect for a couple.", "Owner and agency speaks fluent english and both are very kind.", 40, 970, "180 one-off to agency", 1, "agency", 'img2.jpg'
            ),
            array(
                "55m²-860€", "25 Rue de Fleury, 1er etage, porte D ,77300 Fontainebleau", "m.kolodziejek@laposte.net", "Friendly landlady, spacious 2-storie flat. Highly recommend.", "Helpful, friendly, nice.", 55, 860, "no", 1, "individual", "img3.jpg"
            ),
            array(
                "60m²-900€", "3 Place d'Armes, 77300 Fontainebleau", "feelgood77@orange.fr", "Excellent", "Excellent", 60, 900, "no", 1, "individual", "img4.jpg"
            ),
            array(
                "50m²-1000€", "11 Passage Ronsin ,77300 Fontainebleau", "leclosdutertre@wanadoo.fr", "The apartment is excellent, one bedroom, living room and kitchen. It is on the third floor with elevator. Great location in city center next to the farmer market. Owner is extremely helpful and speaks English very well.", "Owner is extremely helpful and speaks English very well.", 50, 1000, "no", 1, "individual", "img5.jpg"
            ),
            array(
                "55m²-1070€", "87 rue grande ,77300 Fontainebleau", "Gerard@gamboo.com", "Great apartment for couple. Very central location. All included. Charming balcony, fireplace and furniture. Downside: Entrance of building is dark and dirty.", "Excellent. Flexible and supportive.", 55, 1070, "Energy if is higher than 70 euros", 1, "individual", "img6.jpg"
            ),
            array(
                "38m²-880€", "36-38 Rue Grande, Appt. 2 ,77300 Fontainebleau", "magali.collet@iadfrance.fr", "Great appartment downtown Fonty", "Very friendly", 38, 880, "No - incl water, electricity, internet", 0, "agency", "img7.jpg"
            ),
            array(
                "82m²-1890€", "28 Rue d'Avon ,77300 Fontainebleau", "kamelrighi@me.com", "Spacious apartment(82 sq.m.), well equipped and decorated. 2 large bedroom with double bed, 1 bathroom, 2 open kitchen in large living room. 2 parking spots (one on the ground and one below ground). Close to a park, nice neighborhood", "He is very well accommodating and easy to communicate with. He helped me immensely to settle down when I first arrived.", 82, 1890, "Electronics, Internet, House insurance", 1, "individual", "img8.jpg"
            ),
            array(
                "58m²-950€", "38 Rue Aristide Briande ,77300 Fontainebleau", "evelynematha@yahoo.fr", "Nice cozy apartment, centre of the town and 25 mins walk to INSEAD. 2 mins to bus stop", "Very nice landlady. Has been dealing with INSEAD students for years and is very flexible and helpful.", 58, 950, "no", 1, "individual", "img9.jpg"
            )
        );
        /** @var Rent $rent */
        foreach($rents as $rent){
            $rentObj = new Rent();
            $rentObj->setName($rent[0]);
            $rentObj->setAddress($rent[1]);
            $rentObj->setEmail($rent[2]);
            $rentObj->setHouseFeedback($rent[3]);
            $rentObj->setOwnerFeedback($rent[4]);
            $rentObj->setSize($rent[5]);
            $rentObj->setMonthlyRentPrice($rent[6]);
            $rentObj->setExtra($rent[7]);
            $rentObj->setEnglish($rent[8]);
            $rentObj->setOwnerType($this->getReference($rent[9]));
            $rentObj->setImg($rent[10]);

            $manager->persist($rentObj);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 5;
    }
}