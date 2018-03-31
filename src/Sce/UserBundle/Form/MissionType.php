<?php

namespace Sce\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MissionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contexteScenaristique')
            ->add('descriptif')
            ->add('ludification')
            ->add('authenticite')
            ->add('immersion')
            ->add('images', CollectionType::class, array(
                'entry_type'  => ImageType::class,
                'entry_options' => ['label' => false],
                'allow_add'    => true,
                'allow_delete' => true,  
                'required'   => false,
                'label' => false,         
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sce\UserBundle\Entity\Mission'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sce_userbundle_mission';
    }


}
