<?php

namespace App\Form;

use App\Entity\Songs;
use App\Entity\Chords;
use App\Entity\Authors;
use App\Entity\MusicStyle;
use App\Repository\AuthorsRepository;
use App\Repository\ChordsRepository;
use App\Repository\MusicStyleRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SongsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')

            ->add('Author', EntityType::class, [
                'class' => Authors::class,
                'query_builder' => function (AuthorsRepository $authorsRepository) {
                    return $authorsRepository->createQueryBuilder('Authors')->orderBy('Authors.Name', 'ASC');
                }
            ])

            ->add('musicStyle', EntityType::class, [
                'class' => MusicStyle::class,

                'query_builder' => function (MusicStyleRepository $musicStyleRepository) {
                    return $musicStyleRepository->createQueryBuilder('MusicStyle')->orderBy('MusicStyle.name', 'ASC');
                }
            ])

            ->add('link')

            ->add('chordChorus1', EntityType::class, [
                'class' => Chords::class,

                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])
            ->add('chordChorus1Name')

            ->add('chordChorus2', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])
            ->add('chordChorus2Name')


            ->add('chordChorus3', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordChorus3Name')

            ->add('chordChorus4', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])
            ->add('chordChorus4Name')

            ->add('chordChorus5', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])
            ->add('chordChorus5Name')

            ->add('chordChorus6', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordChorus6Name')

            ->add('chordChorus7', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordChorus7Name')

            ->add('chordChorus8', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordChorus8Name')

            ->add('chordVerse1', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse1Name')

            ->add('chordVerse2', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse2Name')

            ->add('chordVerse3', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse3Name')

            ->add('chordVerse4', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse4Name')

            ->add('chordVerse5', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse5Name')

            ->add('chordVerse6', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse6Name')

            ->add('chordVerse7', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])

            ->add('chordVerse7Name')

            ->add('chordVerse8', EntityType::class, [
                'class' => Chords::class,
                'query_builder' => function (ChordsRepository $chordsRepository) {
                    return $chordsRepository->createQueryBuilder('Chords')->orderBy('Chords.name', 'ASC');
                },
                'choice_label' => 'name',
                'placeholder' => 'Aucun accord choisis',
                'required' => false,
            ])
            ->add('chordVerse8Name')

            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer la chanson'
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Songs::class,
        ]);
    }
}
