<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "31b9c6d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31b9c6d_0") : $this->env->getExtension('assets')->getAssetUrl("js/31b9c6d_jQuery-2.1.4.min_1.js");
            // line 12
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "31b9c6d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_31b9c6d") : $this->env->getExtension('assets')->getAssetUrl("js/31b9c6d.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>Mon Projet Symfony2</h1>
\t\t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
\t\t\t\t<p>
\t\t\t\t\t<a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votresite-web-avec-le-framework-symfony2\">Lire le tutoriel »</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Le blog</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gdmblog_accueil");
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("gdmblog_ajouter");
        echo "\">Ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("gdmBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<footer>
\t\t\t\t<p>The sky's the limit © 2012 and beyond.</p>
\t\t\t</footer>
\t\t</div>
\t\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "\t\t\t\t\t
\t</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "gdm";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "417da0f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_417da0f_0") : $this->env->getExtension('assets')->getAssetUrl("css/417da0f_bootstrap_1.css");
            // line 8
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t\t";
        } else {
            // asset "417da0f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_417da0f") : $this->env->getExtension('assets')->getAssetUrl("css/417da0f.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "\t\t";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t\t\t";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "\t\t\t<script\tsrc=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  147 => 45,  144 => 44,  140 => 36,  137 => 35,  133 => 10,  119 => 8,  114 => 7,  111 => 6,  105 => 5,  99 => 47,  97 => 44,  88 => 37,  86 => 35,  80 => 32,  74 => 29,  70 => 28,  54 => 14,  35 => 11,  23 => 1,  56 => 9,  53 => 8,  49 => 10,  43 => 6,  40 => 12,  33 => 6,  30 => 2,  65 => 18,  57 => 13,  50 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 5,);
    }
}
