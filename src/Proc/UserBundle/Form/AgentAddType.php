<?php

namespace Proc\UserBundle\Form;

use Proc\IndicateurBundle\Form\SubdivisionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentAddType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //->add('imageFile') for image
        $builder
            ->add('username','text')
            ->add('contactAgent','text')
            ->add('email','email')
            ->add('adresseAgent')
            ->add('service_user')
            ->add('fonction_user')
            ->add('direction_user')
            ->add('plainPassword','password')
            ->add('save', SubmitType::class,[
                'label' => 'Sauvegarder',
                'attr' => ['class'=>'btn btn-primary'
                ]
            ]);
            /*->add('groupes','entity',[
                'class' => 'UserBundle:GroupUser',
                'property' => 'codeGroupUser',
                'multiple' => true
            ])*/;
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
