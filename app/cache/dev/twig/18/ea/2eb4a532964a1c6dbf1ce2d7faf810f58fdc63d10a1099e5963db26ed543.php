<?php

/* gdmBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_18ea2eb4a532964a1c6dbf1ce2d7faf810f58fdc63d10a1099e5963db26ed543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gdmBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gdmblog_body' => array($this, 'block_gdmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gdmBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t\tModifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_gdmblog_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<h2>Modifier un article</h2>
\t\t";
        // line 7
        $this->env->loadTemplate("gdmBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 8
        echo "\t\t<p>
\t\tVous éditez un article déjà existant,ne le changez pas trop pour éviter aux membres de ne pas comprendre ce qu'il se passe
\t\t</p>
\t\t<p>
\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gdmblog_voir", array("id" => 1));
        echo "\"class=\"btn\">
\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\tRetour à l'article
\t\t\t</a>
\t\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
