<?php

namespace OffreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserSkillsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('skill1',EntityType::class,
                    array('class' => 'OffreBundle:Skills',
                          'choice_label'=>'name',
                          'multiple'=>false))
                ->add('skill2',EntityType::class,
                    array('class' => 'OffreBundle:Skills',
                        'choice_label'=>'name',
                        'multiple'=>false))
                ->add('skill3',EntityType::class,
                    array('class' => 'OffreBundle:Skills',
                        'choice_label'=>'name',
                        'multiple'=>false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OffreBundle\Entity\UserSkills'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'offrebundle_userskills';
    }


}
