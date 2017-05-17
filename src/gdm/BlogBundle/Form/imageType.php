<?php

namespace gdm\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class imageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'file');

       /* $builder->add('article', 'entity',array('class' => 'gdmBlogBundle:Article','property' => 'titre','querybuilder' =>function(\gdm\BlogBundle\Entity\ArticleRepository $r)
                {
                    return $r->getSelectList();
                }
            )
        )*/
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gdm\BlogBundle\Entity\image'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gdm_blogbundle_imagetype';
    }
}
