<?php

/* gdmBlogBundle:Blog:commentaire.html.twig */
class __TwigTemplate_f9718bd7611e3f16a1ad4f60eb335b6e0681d84750e8fbf0f3f916e5bac5b7c4 extends Twig_Template
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
\t\t\tVous éditez un article déjà existant,ne le changez pas trop pour éviter aux membres de ne pas comprendre ce qu'il se passe
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
        return "gdmBlogBundle:Blog:commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 38,  76 => 27,  150 => 46,  137 => 35,  114 => 7,  97 => 44,  70 => 28,  23 => 1,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 8,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 31,  75 => 17,  68 => 23,  56 => 9,  87 => 32,  21 => 5,  26 => 6,  93 => 28,  88 => 37,  78 => 21,  46 => 7,  27 => 8,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 5,  91 => 27,  62 => 23,  49 => 10,  24 => 7,  25 => 3,  19 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 37,  111 => 6,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 7,  35 => 11,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 45,  144 => 44,  141 => 48,  133 => 10,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 36,  106 => 36,  103 => 32,  99 => 47,  95 => 28,  92 => 35,  86 => 35,  82 => 29,  80 => 32,  73 => 19,  64 => 21,  60 => 20,  57 => 19,  54 => 14,  51 => 17,  48 => 13,  45 => 7,  42 => 6,  39 => 5,  36 => 5,  33 => 6,  30 => 2,);
    }
}
