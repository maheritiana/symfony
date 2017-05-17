<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_27abc4648bb391c80b8d2d46885db9f549cf4ca15022da784ff40f32c2848865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  38 => 6,  27 => 4,  19 => 1,  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 10,  114 => 7,  105 => 5,  99 => 47,  97 => 44,  88 => 37,  86 => 35,  80 => 32,  74 => 29,  70 => 28,  54 => 11,  35 => 11,  23 => 3,  56 => 9,  53 => 8,  49 => 10,  47 => 8,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  119 => 8,  111 => 6,  107 => 23,  100 => 22,  95 => 21,  90 => 16,  83 => 14,  69 => 12,  66 => 10,  64 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 5,);
    }
}
