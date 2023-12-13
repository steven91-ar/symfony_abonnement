<?php

namespace App\Form;

use App\ValueObject\ContactForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'row_attr' => [
                    'class' => 'mb-3',
                ],

            ])
            ->add('email', EmailType::class, [
//                'row_attr' => [
//                    'class' => 'mb-3',
//                ],

            ])
            ->add('subject', TextType::class, [
                'row_attr' => [
                    'class' => 'mb-3',
                ],

            ])
            ->add('message', TextareaType::class, [
                'row_attr' => [
                    'class' => 'mb-3',
                ],

            ])
            ->add('button', ButtonType::class, [
                'attr' => [
                    'data-bs-dismiss' => 'modal',
                ],
                'row_attr' => [
                    'class' => 'w-25 d-inline-block',
                ],
                'label' => 'Close',
            ])
            ->add('submit', SubmitType::class, [
                'row_attr' => [
                    'class' => 'w-50 d-inline-block',
                ],
                'label' => 'Send message',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactForm::class,
        ]);
    }
}
