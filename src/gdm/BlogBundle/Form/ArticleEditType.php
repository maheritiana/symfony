<?php

namespace gdm\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleEditType extends ArticleType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
        parent::buildForm($builder, $options);
        // On supprime celui qu'on ne veut pas dans le formulaire de modification
        $builder->remove('date');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gdm_blogbundle_articleedittype';
    }
}
