<?php

namespace Sce\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class JenType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule',null ,array('label'   => 'Intitulé',))
            ->add('nbEnseignants')
            ->add('nbEtudiants')
            ->add('nbActeurs')
            ->add('outils')
            ->add('dispositifs')
            ->add('synopsys')
            ->add('disciplines')
            ->add('communautes')
            ->add('createurs')
            ->add('cartesJen')
            ->add('missions', CollectionType::class, array(
                'entry_type'  => MissionType::class,
                'entry_options' => ['label' => false],
                'label'    => false,
                'allow_add'    => true,
                'allow_delete' => true,           
            ))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sce\UserBundle\Entity\Jen'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sce_userbundle_jen';
    }


}
