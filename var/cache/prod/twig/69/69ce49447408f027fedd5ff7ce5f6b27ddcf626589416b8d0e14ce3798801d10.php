<?php

/* UserBundle:User:accueilUser.html.twig */
class __TwigTemplate_bee3fff36771d693f9f57ee79eea5c3350b476c01f9cde17db060849e88cf3eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:User:accueilUser.html.twig", 1);
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

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->loadTemplate("userAside.html.twig", "UserBundle:User:accueilUser.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "UserBundle:User:accueilUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:User:accueilUser.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/User/accueilUser.html.twig");
    }
}
