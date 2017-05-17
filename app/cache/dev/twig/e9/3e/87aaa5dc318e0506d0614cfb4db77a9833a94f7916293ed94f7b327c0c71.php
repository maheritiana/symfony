<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e93e87aaa5dc318e0506d0614cfb4db77a9833a94f7916293ed94f7b327c0c71 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  87 => 20,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  62 => 23,  51 => 15,  98 => 40,  93 => 9,  78 => 40,  44 => 10,  36 => 7,  22 => 2,  57 => 16,  38 => 13,  27 => 4,  19 => 1,  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 55,  114 => 7,  105 => 40,  99 => 47,  97 => 44,  88 => 6,  86 => 28,  80 => 19,  74 => 29,  70 => 28,  54 => 21,  35 => 4,  23 => 3,  56 => 9,  53 => 8,  49 => 19,  47 => 8,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  119 => 8,  111 => 6,  107 => 23,  100 => 22,  95 => 21,  90 => 16,  83 => 14,  69 => 25,  66 => 15,  64 => 12,  46 => 7,  42 => 14,  39 => 6,  32 => 12,  29 => 5,);
    }
}
