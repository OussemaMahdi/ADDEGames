<?php

/* @User/User/accueilAdmin.html.twig */
class __TwigTemplate_017a18c118d34c4e9ef227cb46503847386adc27fb4bdb50b41642c6f30bdeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/User/accueilAdmin.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_aside($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->loadTemplate("adminAside.html.twig", "@User/User/accueilAdmin.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/User/accueilAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/User/accueilAdmin.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle\\Resources\\views\\User\\accueilAdmin.html.twig");
    }
}
