<?php

namespace NS\ScenesBundle\Form;

use Doctrine\ORM\EntityRepository;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use NS\ScenesBundle\Entity\Scene;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class StorylineType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Solo writing - When you do not need contribution from other writers' => 'Solo writing',
                    'Group writing - Only the member of the group can contribute' => 'Group writing' ,
                    'Collaborative writing - When you need contribution from other writers' => 'Collaborative writing'
                ]
            ])
            ->add('description', CKEditorType::class)
            ->add('contributors',EntityType::class, array(
                'class' => 'NSUserBundle:User',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => 'username',
                'multiple' => true,
                'required' => false
            ))

            ->add('imageFile', VichImageType::class, [
                'required' => false
            ])
            ->add('isEnabled')
            ->add('forum', EntityType::class, array(
                'class' => 'NSForumBundle:Forum',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u');
                },
                'choice_label' => 'name'
            ))
            ->add('recaptcha', EWZRecaptchaType::class, array(

                'mapped'      => false,

            ));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NS\ScenesBundle\Entity\Storyline'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ns_scenesbundle_storyline';
    }


}
