<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_7a85dfcff9e60fab64bfd85f0fb1a48cca97c2174ce21e461dd823de0fa7d574 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  62 => 23,  51 => 15,  98 => 40,  93 => 9,  78 => 40,  44 => 10,  36 => 7,  22 => 2,  57 => 16,  38 => 13,  27 => 4,  19 => 1,  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 55,  114 => 7,  105 => 40,  99 => 47,  97 => 44,  88 => 6,  86 => 28,  80 => 19,  74 => 29,  70 => 28,  54 => 21,  35 => 7,  23 => 3,  56 => 9,  53 => 8,  49 => 19,  47 => 8,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  119 => 8,  111 => 6,  107 => 23,  100 => 22,  95 => 21,  90 => 16,  83 => 14,  69 => 25,  66 => 15,  64 => 12,  46 => 7,  42 => 14,  39 => 6,  32 => 12,  29 => 4,);
    }
}
