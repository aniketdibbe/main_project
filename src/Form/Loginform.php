<?php

namespace App\Form;

use PharIo\Manifest\Email;
use symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class Loginform extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(child:"email",EmailType::class,[
                'label'=>'Email',
                'label_attr'=>[
                    'class'=>'form-label'
                ],
                'attr'=>[
                    'class'=>'form-control',
                    'placeholder'=>'example@example.com'
                ],
                'constraints'=>[
                    new NotBlank(),
                    new Email([
                        'mode'=>'strict'
                    ])
                ]
            ])
            ->add(child:"full_name",TestType::class,[
                'label'=>'Name',
                'label_attr'=>[
                    'class'=>'form-label'
                ],
                'attr'=>[
                    'class'=>'form-control',
                    'placeholder'=>'pimcore'
                ],
                'constraints'=>[
                    new NotBlank()
                   
                    ])
                ]
            ])
    }

}
















?>