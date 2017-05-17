<?php

/* gdmUserBundle:Security:login.html.twig */
class __TwigTemplate_904161b8a6a5626b8ea5a861ea4780cd47eab64b2d0f66b44eed05acd5703b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        // line 4
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "\t\t<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 7
        echo "\t";
        // line 8
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t<label for=\"username\">Login :</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /><br />
\t\t<label for=\"password\">Mot de passe :</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t<br />
\t\t<input type=\"submit\" value=\"Connexion\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "gdmUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 8,  42 => 7,  36 => 5,  33 => 4,  31 => 3,  28 => 2,);
    }
}
