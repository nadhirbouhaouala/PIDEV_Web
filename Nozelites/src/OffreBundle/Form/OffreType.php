<?php

namespace OffreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type', ChoiceType::class, [
            'choices'  => [
                'Offre de stage' => 'Offre de stage',
                'Offre de travail' => 'Offre de travail',
            ],
            'required'   => true,
            'attr' => ['class' => 'with-border'],
            ])
            ->add('idrecepteur',null,[
                'label' => 'Elite',
                'required' => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('entreprise', null, [
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('domaine', ChoiceType::class, [
                'choices'  => [
                    'Aéronautique Et Espace' => 'Aéronautique Et Espace',
                    'Agriculture - Agroalimentaire' => 'Agriculture - Agroalimentaire',
                    'Audiovisuel, Cinéma' => 'Audiovisuel, Cinéma',
                    'Audit, Comptabilité, Gestion' => 'Audit, Comptabilité, Gestion',
                    'Automobile' => 'Automobile',
                    'Banque, Assurance' => 'Banque, Assurance',
                    'Bâtiment, Travaux Publics' => 'Bâtiment, Travaux Publics',
                    'Biologie, Chimie, Pharmacie' => 'Biologie, Chimie, Pharmacie',
                    'Commerce, Distribution' => 'Commerce, Distribution',
                    'Communication' => 'Communication',
                    'Création, Métiers D\'art' => 'Création, Métiers D\'art',
                    'Culture, Patrimoine' => 'Culture, Patrimoine',
                    'Défense, Sécurité, Armée' => 'Défense, Sécurité, Armée',
                    'Documentation, Bibliothèque' => 'Documentation, Bibliothèque',
                    'Droit' => 'Droit',
                    'Edition, Livre' => 'Edition, Livre',
                    'Enseignement' => 'Enseignement',
                    'Environnement' => 'Environnement',
                    'Ferroviaire' => 'Ferroviaire',
                    'Foires, Salons Et Congrès' => 'Foires, Salons Et Congrès',
                    'Fonction Publique' => 'Fonction Publique',
                    'Hôtellerie, Restauration' => 'Hôtellerie, Restauration',
                    'Humanitaire' => 'Humanitaire',
                    'Immobilier' => 'Immobilier',
                    'Industrie' => 'Industrie',
                    'Informatique, Télécoms, Web' => 'Informatique, Télécoms, Web',
                    'Journalisme' => 'Journalisme',
                    'Langues' => 'Langues',
                    'Marketing, Publicité' => 'Marketing, Publicité',
                    'Médical' => 'Médical',
                    'Mode-Textile' => 'Mode-Textile',
                    'Paramédical' => 'Paramédical',
                    'Propreté Et Services Associés' => 'Propreté Et Services Associés',
                    'Psychologie' => 'Psychologie',
                    'Ressources Humaines' => 'Ressources Humaines',
                    'Sciences Humaines Et Sociales' => 'Sciences Humaines Et Sociales',
                    'Secrétariat' => 'Secrétariat',
                    'Social' => 'Social',
                    'Spectacle - Métiers De La Scène' => 'Spectacle - Métiers De La Scène',
                    'Sport' => 'Sport',
                    'Tourisme' => 'Tourisme',
                    'Transport-Logistique' => 'Transport-Logistique',
                ],
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('poste', null, [
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('requis', null, [
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('description', null, [
                'required'   => true,
                'attr' => ['class' => 'with-border'],
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' => ['class' => 'button red ripple-effect ico'],
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NozelitesBundle\Entity\Offre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'offrebundle_offre';
    }
}
