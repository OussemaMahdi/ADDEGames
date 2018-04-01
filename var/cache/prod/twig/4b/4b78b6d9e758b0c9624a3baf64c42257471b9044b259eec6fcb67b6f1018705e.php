<?php

/* UserBundle:User:accueilAdmin.html.twig */
class __TwigTemplate_7f824320a1e714e44d94051cbc3ecf5d853194483bdf1fbb1e63554dd166f069 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:accueilAdmin.html.twig", 1);
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
        $this->loadTemplate("adminAside.html.twig", "UserBundle:User:accueilAdmin.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "UserBundle:User:accueilAdmin.html.twig";
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
        return new Twig_Source("", "UserBundle:User:accueilAdmin.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/User/accueilAdmin.html.twig");
    }
}
