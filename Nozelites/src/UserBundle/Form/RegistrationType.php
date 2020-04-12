<?php


namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->add('roles', ChoiceType::class, array('label' => 'Type ',
                'choices' => array(' MEMBRE' => 'ROLE_MEMBRE',
                    'CHASSEUR' => 'ROLE_CHASSEUR'),
                'required' => true, 'multiple' => true,))
                ->add('telephone')
                ->add('age')
                ->add('image',FileType::class)
            ;

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}