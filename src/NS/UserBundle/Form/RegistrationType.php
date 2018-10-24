<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/20/18
 * Time: 1:04 AM
 */

namespace NS\UserBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('roles', CollectionType::class, array(

                'entry_type' => ChoiceType::class,
                'entry_options' => array(
                    'label' => false,
                    'attr' => [
                        'class' => 'selectpicker form-control'
                    ],
                    'placeholder' => 'Choose an option',
                    'choices' => array(
                        'Regular user' => 'ROLE_REGULAR_USER',
                        'Moderator' => 'ROLE_MODERATOR',
                        'Power user' => 'ROLE_POWER_USER'
                    )
                )
            ))
        ;

    }

    public function getParent()

    {
        return RegistrationFormType::class;
    }

    public function getBlockPrefix()

    {
        return 'ns_user_registration';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }

}