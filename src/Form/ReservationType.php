<?php

namespace App\Form;

use App\Entity\Reservation;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Typeven;
use App\Entity\Client;
use App\Entity\Salle;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libres', TextType::class)
            ->add('typeven', EntityType::class, [
                'class' => Typeven::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.libelle', 'ASC');
                },
                'choice_label' => 'libelle'
            ])
            ->add('beneficiaire', TextType::class)
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.titre', 'ASC');
                },
                'choice_label' => function($client) {
                    return $client->getTitre() . ' - ' . $client->getCpostal() . ' ' . $client->getCommune();
                }
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.libelle', 'ASC');
                },
                'choice_label' => 'libelle'
            ])
            ->add('comment', TextareaType::class)
            ->add('planning', PlanningType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}