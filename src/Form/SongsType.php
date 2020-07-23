<?php

namespace App\Form;

use App\Entity\Songs;
use App\Entity\Authors;
use App\Entity\Chords;
use App\Entity\MusicStyle;
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
              
            ])

            ->add('musicStyle', EntityType::class, [
                'class' => MusicStyle::class,
            ])

            ->add('chordChorus1', EntityType::class, [
                'class' => Chords::class,
            ])

            ->add('chordChorus1Name')

            ->add('chordChorus2', EntityType::class, [
                'class' => Chords::class,
            ])

            ->add('chordChorus2Name')


         
            ->add('chordChorus3', EntityType::class, [
                'class' => Chords::class,
            ])

            ->add('chordChorus3Name')


        

            ->add('chordChorus4', EntityType::class, [
                'class' => Chords::class,
            ])

            ->add('chordChorus4Name')

            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer la chanson'])
                ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Songs::class,
        ]);
    }
}
