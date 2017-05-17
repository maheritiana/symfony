<?php

/* gdmBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_0facea0de7905766622dd978a4dcddc397eedfa95ba41be1d6eeb674bded635d extends Twig_Template
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
        echo "<h3>Formulaire d'article</h3>
<div class=\"well\">
    <form method=\"post\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary\" />
    </form>
</div>

";
        // line 12
        echo "<script type=\"text/javascript\" >
    \$(document).ready(function()
    {
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#gdm_blogbundle_articletype_categories');
        // On ajoute un lien pour ajouter une nouvelle catégorie
        var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\">Ajouter une catégorie</a>');
        \$container.append(\$lienAjout);
        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$lienAjout.click(function(e)
        {
            ajouterCategorie(\$container);
            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });
        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;
        // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
        if (index == 0) {
            ajouterCategorie(\$container);
        } else {
            // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
            \$container.children('div').each(function() {
                ajouterLienSuppression(\$(this));
            });
        }
        // La fonction qui ajoute un formulaire Categorie
        function ajouterCategorie(\$container)
        {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var \$prototype = \$(\$container.attr('dataprototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1)).replace(/__name__/g, index));
            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            ajouterLienSuppression(\$prototype);
            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);
            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;
        }
        // La fonction qui ajoute un lien de suppression d'une catégorie
        function ajouterLienSuppression(\$prototype)
        {
            // Création du lien
            \$lienSuppression = \$('<a href=\"#\" class=\"btn btndanger\"> Supprimer</a>');
            // Ajout du lien
            \$prototype.append(\$lienSuppression);
            // Ajout du listener sur le clic du lien
            \$lienSuppression.click(function(e)
            {
                \$prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "gdmBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  150 => 46,  137 => 35,  114 => 7,  97 => 31,  74 => 29,  70 => 28,  23 => 3,  53 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 36,  132 => 51,  128 => 49,  111 => 6,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 8,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 15,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 27,  68 => 23,  56 => 9,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 5,  26 => 6,  98 => 31,  93 => 28,  88 => 37,  78 => 21,  46 => 7,  27 => 4,  40 => 12,  44 => 12,  35 => 12,  31 => 5,  43 => 6,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 33,  115 => 43,  105 => 5,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 10,  24 => 7,  32 => 9,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 45,  144 => 44,  141 => 48,  133 => 10,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 35,  82 => 22,  80 => 30,  73 => 26,  64 => 21,  60 => 20,  57 => 19,  54 => 14,  51 => 17,  48 => 13,  45 => 7,  42 => 14,  39 => 13,  36 => 5,  33 => 6,  30 => 2,);
    }
}
