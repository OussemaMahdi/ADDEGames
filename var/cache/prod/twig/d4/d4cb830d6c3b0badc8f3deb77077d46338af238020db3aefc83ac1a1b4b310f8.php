<?php

/* @Administration/Default/index.html.twig */
class __TwigTemplate_a73022782078e182ae3e2113dea21e86fb8851f460bbbc0a852efeaaed435f8e extends Twig_Template
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
        echo "Hello World!";
    }

    public function getTemplateName()
    {
        return "@Administration/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Administration/Default/index.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\AdministrationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
