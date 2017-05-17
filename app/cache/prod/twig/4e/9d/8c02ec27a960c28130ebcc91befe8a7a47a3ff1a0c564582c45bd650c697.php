<?php

/* gdmBlogBundle::layout.html.twig */
class __TwigTemplate_4e9d8c02ec27a960c28130ebcc91befe8a7a47a3ff1a0c564582c45bd650c697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gdmblog_body' => array($this, 'block_gdmblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t\tBlog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<h1>Blog</h1>
\t\t<hr>
\t\t";
        // line 8
        $this->displayBlock('gdmblog_body', $context, $blocks);
        // line 10
        echo "\t";
    }

    // line 8
    public function block_gdmblog_body($context, array $blocks = array())
    {
        // line 9
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 8,  49 => 10,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  65 => 18,  57 => 13,  50 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
