<?php

namespace StockBundle\Form;

use StockBundle\Form\CategoryType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('title')
                ->add('description')
                ->add('price')
//                ->add('categories', CollectionType::class, array('entry_type' => CategoryType::class,
//                    'allow_add' => true,
//                    'allow_delete' => true,
//                    'by_reference' => false,
//                    'error_bubbling' => true,
                ->add('categories', EntityType::class, array(
                    'class' => 'StockBundle:Category',
                    'choice_label' => 'name',
                    'placeholder' => 'choisissez une categorie',
                    'multiple' => true,
                    'expanded' => true,
                ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'StockBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'stockbundle_product';
    }

}
