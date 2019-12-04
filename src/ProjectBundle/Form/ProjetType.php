<?php

namespace ProjectBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet',null, array('attr' => array('class' => 'input','placeholder' => 'nomProjet'),'error_bubbling' => false))
            ->add('votreFinance',null, array('attr' => array('class' => ' input','placeholder' => 'votreFinance')))
            ->add('montant',null, array('attr' => array('class' => ' input','placeholder' => 'montant')))
            ->add('compteBancaire',null, array('attr' => array('class' => ' input','placeholder' => 'compteBancaire',)))
            ->add('dateDebutProjet',DateType::class, array('label' => 'dateDebutProjet','widget' => 'single_text', 'format' => 'yyyy-MM-dd','attr' => array('class' => ' input')))
            ->add('dateFinProjet',DateType::class, array('label' => 'dateFinProjet','widget' => 'single_text', 'format' => 'yyyy-MM-dd','attr' => array('class' => ' input')))

            ->add('adresseProjet',null, array('attr' => array('class' => ' input','placeholder' => 'adresseProjet')))
            ->add('telProjet',null, array('attr' => array('class' => ' input','placeholder' => 'telProjet')))
            ->add('nbreTeam',null, array('attr' => array('class' => 'input','placeholder' => 'nbreTeam')))
            ->add('descriptionProjet', TextareaType::class, array('attr' => array('class' => 'input','placeholder' => 'description')))
            ->add('emailProjet',EmailType::class, array('attr' => array('class' => 'input','placeholder' => 'email')))
            ->add('image')
            ->add('idCategorie',EntityType::class,['class'=>'ProjectBundle\Entity\Categories','attr' => array('class' => 'input'),
                'choice_label' => 'nom',
                'multiple' => false,
                'expanded' => false,])
           /* ->add('idEtat',EntityType::class,['class'=>'ProjectBundle\Entity\EtatCrow','attr' => array('class' => 'input'),
                'choice_label' => 'etat',
                'multiple' => false,
                'expanded' => false,])*/
        ->add('file');


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Projet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_projet';
    }


}
