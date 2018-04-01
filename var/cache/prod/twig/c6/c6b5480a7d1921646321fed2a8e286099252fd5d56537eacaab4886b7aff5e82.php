<?php

/* @User/mission/new.html.twig */
class __TwigTemplate_36979cd575e11a2512c71b61648a5a98f395664aa3ebc34bab421aa999d5cfea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/mission/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "UserBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<h1>Mission creation</h1>

\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"box box-primary\">
\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t<h3 class=\"box-title\">Mission</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<form role=\"form\">
\t\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Titre")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "titre", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Contexte Scenaristique")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contexteScenaristique", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Descriptif")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descriptif", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ludification")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ludification", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Authenticite")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "authenticite", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Immersion")));
        echo "
\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "immersion", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "images", array()), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Create\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_index");
        echo "\">Back to the list</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 68
    public function block_javascript($context, array $blocks = array())
    {
        // line 69
        echo "\t<script type=\"text/javascript\">
\t
\t\t\$(document).ready(function() {
\t\t\t// On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
\t\t\tvar \$container = \$('div#sce_userbundle_mission_images');

\t\t\t// On ajoute un lien pour ajouter une nouvelle catégorie
\t\t\tvar \$addLink = \$('<a href=\"#\" id=\"add_image\" class=\"btn btn-default\">Ajouter une image</a>');
\t\t\t\$container.append(\$addLink);

\t\t\t// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
\t\t\t\$addLink.click(function(e) {
\t\t\t\taddImage(\$container);
\t\t\t\te.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t\t\t\treturn false;
\t\t\t});

\t\t\t// On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
\t\t\tvar index = \$container.find(':input').length;

\t\t\t// On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
\t\t\tif (index == 0) {
\t\t\t\taddImage(\$container);
\t\t\t} else {
\t\t\t\t\tindex=(index/2)-1;
\t\t\t\t// Pour chaque catégorie déjà existante, on ajoute un lien de suppression
\t\t\t\t\$container.children('div').each(function() {
\t\t\t\t\taddDeleteLink(\$(this));
\t\t\t\t});
\t\t\t}

\t\t\t// La fonction qui ajoute un formulaire Categorie
\t\t\tfunction addImage(\$container) {
\t\t\t\t// Dans le contenu de l'attribut « data-prototype », on remplace :
\t\t\t\t// - le texte \"__name__label__\" qu'il contient par le label du champ
\t\t\t\t// - le texte \"__name__\" qu'il contient par le numéro du champ
\t\t\t\tvar \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'N°' + (index+1))
\t\t\t\t\t\t.replace(/__name__/g, index));

\t\t\t\t// On ajoute au prototype un lien pour pouvoir supprimer la catégorie
\t\t\t\taddDeleteLink(\$prototype);

\t\t\t\t// On ajoute le prototype modifié à la fin de la balise <div>
\t\t\t\t\$container.append(\$prototype);

\t\t\t\t// Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
\t\t\t\tindex++;
\t\t\t}

\t\t\t// La fonction qui ajoute un lien de suppression d'une catégorie
\t\t\tfunction addDeleteLink(\$prototype) {
\t\t\t\t// Création du lien
\t\t\t\t\$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

\t\t\t\t// Ajout du lien
\t\t\t\t\$prototype.append(\$deleteLink);

\t\t\t\t// Ajout du listener sur le clic du lien
\t\t\t\t\$deleteLink.click(function(e) {
\t\t\t\t\t\$prototype.remove();
\t\t\t\t\te.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t}
\t\t});
\t
\t</script>
";
    }

    public function getTemplateName()
    {
        return "@User/mission/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 69,  172 => 68,  166 => 64,  157 => 58,  146 => 50,  140 => 47,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  115 => 37,  111 => 36,  107 => 35,  101 => 32,  97 => 31,  93 => 30,  87 => 27,  83 => 26,  79 => 25,  73 => 22,  69 => 21,  65 => 20,  59 => 17,  55 => 16,  51 => 15,  39 => 6,  35 => 4,  32 => 3,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/mission/new.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\mission\\new.html.twig");
    }
}
