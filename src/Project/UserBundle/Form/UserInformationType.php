<?php

namespace Project\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserInformationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('birthDate')
            ->add('birthPlace')
            ->add('street')
            ->add('house_no')
            ->add('apartment_no')
            ->add('code')
            ->add('city')
            ->add('country')
            ->add('phone')
            ->add('email')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Project\UserBundle\Entity\UserInformation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'project_userbundle_userinformation';
    }
}
