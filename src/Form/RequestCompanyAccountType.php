<?php

namespace App\Form;

use PharIo\Manifest\Email;
use App\Entity\RequestCompanyAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RequestCompanyAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Company Name',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('note', TextType::class, [
                'label' => 'Note',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Request Account',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RequestCompanyAccount::class,
        ]);
    }
}
