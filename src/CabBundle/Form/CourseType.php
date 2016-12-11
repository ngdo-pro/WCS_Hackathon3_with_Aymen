<?php

namespace CabBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
const TEXT = 'Symfony\Component\Form\Extension\Core\Type\TextType';
const DATE = 'Symfony\Component\Form\Extension\Core\Type\DateType';
const TIME = 'Symfony\Component\Form\Extension\Core\Type\TimeType';
const SELECT = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';


class CourseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('departureDate',TEXT, array(
            "attr" => array('class' => 'datepicker'),
            "label" => "Date"))
            ->add('departureTime',null , array('label' => 'Departure at'))
            ->add('seatsAvailable')
            ->add('departure',null , array('label' => 'From :'))
            ->add('arrival', null,  array('label' => 'To :'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CabBundle\Entity\Course'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cabbundle_course';
    }


}

/*
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('departureDate', TEXT, array(
            "attr" => array('class' => 'datepicker')))
            ->add('departureTime', TIME, array(
                "attr" => array('class' => 'timepicker')
            ))->add('seatsAvailable')
            ->add('departure')
            ->add('arrival')

}
