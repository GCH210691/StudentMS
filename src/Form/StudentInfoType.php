<?php

namespace App\Form;

use App\Entity\StudentInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('studentName')
            ->add('studentDoB')
            ->add('studentEmail')
            ->add('studentNumber')
            ->add('studentGender')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StudentInfo::class,
        ]);
    }
}
