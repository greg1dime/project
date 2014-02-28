<?php

namespace Project\EducationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EducationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('schoolName')
            ->add('schoolType')
            ->add('graduationYear')
            ->add('startYear')
            ->add('city')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Project\EducationBundle\Entity\Education'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'project_educationbundle_education';
    }
}
