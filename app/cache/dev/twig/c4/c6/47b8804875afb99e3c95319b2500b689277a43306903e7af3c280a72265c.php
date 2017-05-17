<?php

/* gdmBlogBundle:Blog:coms.html.twig */
class __TwigTemplate_c4c647b8804875afb99e3c95319b2500b689277a43306903e7af3c280a72265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"well\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 3
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")), "auteur"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : $this->getContext($context, "com")), "contenu"), "html", null, true);
            echo " </br>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle:Blog:coms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
