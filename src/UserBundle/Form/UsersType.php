<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullname')
                ->add('adresse')
                ->add('tel')
                ->add('roles', ChoiceType::Class ,
                                    array('label' =>'Type ',
                                        'choices' => array( 'Utilisateur Normale' => 'ROLE_USER', 'Entreprise' => 'ROLE_ENTREPRISE'),
                                        'required' => true, 'multiple' => true));
            }/**
     * {@inheritdoc}
     */

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Users'
        ));
    }

    /**
     * {@inheritdoc}
     */

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}
