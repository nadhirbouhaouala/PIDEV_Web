<?php

namespace OffreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idDestinataire',null,[
                'label' => ' À',
                'required' => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('objet', null, [
                'label' => ' Objet',
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('texte', TextareaType::class, [
                'label' => ' Votre message',
                'required'   => true,
                'attr' => ['class' => 'with-border'],

            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NozelitesBundle\Entity\Message'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'offrebundle_message';
    }
}
