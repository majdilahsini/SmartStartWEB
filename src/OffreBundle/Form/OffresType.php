<?php

namespace OffreBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffresType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                //->add('datePublication')
                ->add('niveauEtude')
                ->add('salaire')

                /*->add('entreprise', EntityType::class, array('class' => 'OffreBundle:Users',
                                                        'choice_label'=>'fullname',
                                                        'multiple'=>false))*/
                ->add('domaine', EntityType::class, array('class' => 'OffreBundle:Domaines',
                                                        'choice_label'=>'nom',
                                                        'multiple'=>false))
                ->add('langueRef',EntityType::class, array('class' => 'OffreBundle:Langues',
                                                        'choice_label'=>'nom',
                                                        'multiple'=>false))
                ->add('typePost',EntityType::class, array('class' => 'OffreBundle:TypePost',
                                                        'choice_label'=>'name',
                                                        'multiple'=>false))
                ->add('skill1',EntityType::class, array('class' => 'OffreBundle:Skills',
                                                        'choice_label'=>'name',
                                                        'multiple'=>false))
                ->add('skill2',EntityType::class, array('class' => 'OffreBundle:Skills',
                                                        'choice_label'=>'name',
                                                        'multiple'=>false))
                ->add('skill3',EntityType::class, array('class' => 'OffreBundle:Skills',
                                                                                    'choice_label'=>'name',
                                                                                    'multiple'=>false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OffreBundle\Entity\Offres'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'offrebundle_offres';
    }


}
