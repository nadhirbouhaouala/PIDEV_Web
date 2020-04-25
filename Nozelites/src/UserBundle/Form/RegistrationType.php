<?php


namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('prenom')
                ->add('roles', ChoiceType::class, array(
                    'multiple' => true,

                    'required' => true,
                    'label' => 'Compte',
                    'choices' => array(' MEMBRE' => 'ROLE_MEMBRE',
                    'CHASSEUR' => 'ROLE_CHASSEUR'),

                 ))
                ->add('telephone')
                ->add('age')
            ->add('imageFile', VichImageType::class);
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