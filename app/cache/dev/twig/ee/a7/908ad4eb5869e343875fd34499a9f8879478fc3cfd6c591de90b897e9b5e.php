<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_eea7908ad4eb5869e343875fd34499a9f8879478fc3cfd6c591de90b897e9b5e extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  87 => 20,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  62 => 23,  51 => 12,  98 => 40,  93 => 9,  78 => 40,  44 => 10,  36 => 7,  22 => 2,  57 => 14,  38 => 6,  27 => 4,  19 => 1,  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 55,  114 => 7,  105 => 40,  99 => 47,  97 => 44,  88 => 6,  86 => 28,  80 => 19,  74 => 29,  70 => 28,  54 => 21,  35 => 4,  23 => 3,  56 => 9,  53 => 8,  49 => 19,  47 => 8,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  119 => 8,  111 => 6,  107 => 23,  100 => 22,  95 => 21,  90 => 16,  83 => 14,  69 => 25,  66 => 15,  64 => 12,  46 => 7,  42 => 6,  39 => 6,  32 => 12,  29 => 5,);
    }
}
