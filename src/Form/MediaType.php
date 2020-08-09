<?php

namespace App\Form;

use App\Entity\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Vich\UploaderBundle\Form\Type\VichImageType;

class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => false,
                // 'download_label' => '...',
                'download_uri' => false,
                // 'image_uri' => true,
                'imagine_pattern' => 'squared_thumbnail_mini',
                'asset_helper' => true,
                'constraints' => [
                    new Image(['maxSize' => '5M']) // Customize this in php array
                ]
            ])
            ->add('isMain')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Media::class,
        ]);
    }
}
