<?php

/* gdmBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_841f7bfd7f06b13aac5bfe3a9ca38b51c44edfc9b8b27a0ac2255c22735bfe0f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gdmblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\"class=\"btn\">
\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\tRetour à l'article
\t\t\t</a>
\t\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  90 => 16,  83 => 14,  37 => 11,  150 => 46,  137 => 35,  114 => 7,  97 => 31,  74 => 29,  70 => 28,  23 => 3,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 24,  107 => 23,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 27,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 8,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 27,  68 => 23,  56 => 9,  50 => 10,  29 => 2,  87 => 25,  72 => 16,  55 => 15,  21 => 5,  26 => 6,  98 => 31,  93 => 28,  88 => 37,  78 => 21,  46 => 8,  27 => 4,  40 => 12,  44 => 12,  35 => 12,  31 => 5,  43 => 6,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 33,  115 => 43,  105 => 5,  101 => 32,  91 => 27,  69 => 12,  66 => 10,  62 => 23,  49 => 10,  24 => 7,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 45,  144 => 44,  141 => 48,  133 => 10,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 47,  95 => 21,  92 => 21,  86 => 35,  82 => 22,  80 => 30,  73 => 26,  64 => 9,  60 => 20,  57 => 19,  54 => 14,  51 => 17,  48 => 13,  45 => 7,  42 => 6,  39 => 5,  36 => 5,  33 => 6,  30 => 2,);
    }
}
