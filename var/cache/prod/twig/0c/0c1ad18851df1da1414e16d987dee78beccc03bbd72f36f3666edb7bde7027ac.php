<?php

/* @User/Form/fields_img.html.twig */
class __TwigTemplate_74dda9df023e9c6d4bd4f72e08238c0c7a85f78f77a102e988fe45e330bab967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sce_userbundle_image_entry_widget' => array($this, 'block__sce_userbundle_image_entry_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_sce_userbundle_image_entry_widget', $context, $blocks);
    }

    public function block__sce_userbundle_image_entry_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div id=\"prototype_image\" class=\"prototype_image\">
\t\t<div class=\"input-group\">
\t\t\t<label class=\"input-group-btn\">
\t\t\t\t<span class=\"btn btn-primary\">
\t\t\t\t\tParcourir… 
\t\t\t\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("style" => "display: none;")));
        echo "
\t\t\t\t</span>
\t\t\t</label>
\t\t\t<input type=\"text\" class=\"form-control\" readonly=\"\">
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@User/Form/fields_img.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Form/fields_img.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\Form\\fields_img.html.twig");
    }
}
