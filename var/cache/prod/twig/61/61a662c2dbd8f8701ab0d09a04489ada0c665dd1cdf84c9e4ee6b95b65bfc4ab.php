<?php

/* UserBundle:jen:new.html.twig */
class __TwigTemplate_6ab271cd680175b5d5bd4b6277297fe3daf0774f29ea94d9142fedb768e480c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:jen:new.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "UserBundle:Form:fields_mission.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_aside($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->loadTemplate("userAside.html.twig", "UserBundle:jen:new.html.twig", 5)->display($context);
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardphases.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/public/formWizard/css/wizardmissions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t<div class=\"box box-primary\">
\t<div class=\"box-header with-border\">
\t\t<h3 class=\"box-title\">Création d'un jeu épistémique numerique</h3>
\t</div>
\t<!-- /.box-header -->
\t<!-- form start -->
\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t<div class=\"box-body\">
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intitule", array()), 'label');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intitule", array()), 'widget', array("attr" => array("placeholder" => "intitulé")));
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intitule", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createurs", array()), 'label');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createurs", array()), 'widget');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "createurs", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group hide\">
\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- /.box-body -->
\t\t<div class=\"box-footer\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t</div>
\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    // line 46
    public function block_javascript($context, array $blocks = array())
    {
        // line 47
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(\".js-example-placeholder-multiple\").select2({
\t\t\tplaceholder: \"Select a state\"
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:jen:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  123 => 46,  116 => 42,  106 => 35,  100 => 32,  96 => 31,  92 => 30,  86 => 27,  82 => 26,  78 => 25,  72 => 22,  64 => 16,  61 => 15,  55 => 12,  51 => 11,  45 => 9,  42 => 8,  37 => 5,  34 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:jen:new.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/jen/new.html.twig");
    }
}
