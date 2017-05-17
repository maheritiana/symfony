<?php

/* gdmBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_36a1020098015ee1b67571be11583d217db0692335af4580621d93ed8cdc6d92 extends Twig_Template
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
        echo "<h3>Les derniers articles</h3>
<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gdmblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  19 => 1,  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 10,  119 => 8,  114 => 7,  111 => 6,  105 => 5,  99 => 47,  97 => 44,  88 => 37,  86 => 35,  80 => 32,  74 => 29,  70 => 28,  54 => 14,  35 => 11,  23 => 3,  56 => 9,  53 => 8,  49 => 10,  43 => 6,  40 => 12,  33 => 6,  30 => 2,  65 => 18,  57 => 13,  50 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 5,);
    }
}
