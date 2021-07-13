<?php

namespace App\Form;

use App\Entity\Patients;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Nom :',
                'attr' => [
                    'class' => 'form-control'
                ],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom : ',
                'attr' => [
                    'label_class' => 'form-label',
                    'class' => 'form-control'
                ],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('birthDate', BirthdayType::class, [
                'label' => 'Date de naissance : ',
                'widget' => 'single_text',
                'attr' => [
                    'label_class' => 'form-label',
                    'class' => 'form-control'
                ],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse de courriel : ',
                'attr' => [
                    'label_class' => 'form-label',
                    'class' => 'form-control'
                ],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('vitalcardNumber', TextType::class, [
                'label' => 'Carte Vitale : ',
                'attr' => [
                    'label_class' => 'form-label',
                    'class' => 'form-control'
                ],
                'label_attr' => ['class' => 'form-label'],
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-outline-success'
                ],
                'row_attr' => [
                    'class' => 'col-1'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patients::class,
        ]);
    }
}
