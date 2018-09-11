<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Forms;

use App\Domain\DTO\AddAccountDTO;
use App\Domain\DTO\Interfaces\AddAccountDTOInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'firstname',
            TextType::class,
            [
                'required' => false,
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Prénom'
                ],

            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => AddAccountDTOInterface::class,
            'empty_data' => function (FormInterface $form) {
                return new AddAccountDTO(
                    $form->get('firstname')->getData()
                );
            }
        ]);
    }
}
