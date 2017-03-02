<?php

namespace Proc\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //->add('imageFile') 
        $builder->add('id')
            ->add('username')
            ->add('contactAgent','text')
            ->add('email','email')
            ->add('adresseAgent')
            ->add('service_user')
            ->add('fonction_user')
            ->add('direction_user')
            ->add('plainPassword','password');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proc\UserBundle\Entity\Agent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_agent';
    }


}
