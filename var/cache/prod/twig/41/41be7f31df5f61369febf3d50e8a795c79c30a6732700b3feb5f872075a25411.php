<?php

/* adminAside.html.twig */
class __TwigTemplate_9deaad3ec389c18f43a1bad6a95e86730489db5723fbcf8249b5eba34b35c083 extends Twig_Template
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
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <!--<img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" /> -->
            </div>
            <div class=\"pull-left info\">
                <p>Oussema Mahdi</p>

                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                <span class=\"input-group-btn\">
                    <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">NAVIGATION PRINCIPALE</li>


            <li class=\"active\">
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">
                    <i class=\"fa fa-th\"></i> <span>Gerer les utilisateurs</span>
                    <span class=\"pull-right-container\">
                        <small class=\"label pull-right bg-green\">new</small>
                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
";
    }

    public function getTemplateName()
    {
        return "adminAside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 31,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "adminAside.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\views\\adminAside.html.twig");
    }
}
