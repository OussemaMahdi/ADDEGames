<?php

/* UserBundle:Jen:show.html.twig */
class __TwigTemplate_25098135fb7dd1580e26580ec00ff76dad138d6693628dd2eb3ce5de5b76b50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Jen:show.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5aedf008eeb298205dfffe1bdd65f3dab8a592d5f7457f94c0750302f231592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5aedf008eeb298205dfffe1bdd65f3dab8a592d5f7457f94c0750302f231592->enter($__internal_c5aedf008eeb298205dfffe1bdd65f3dab8a592d5f7457f94c0750302f231592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:show.html.twig"));

        $__internal_f18e7ff3d1e3356364359eda8313a4ac1046f1d594137329390032c29e3fd248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18e7ff3d1e3356364359eda8313a4ac1046f1d594137329390032c29e3fd248->enter($__internal_f18e7ff3d1e3356364359eda8313a4ac1046f1d594137329390032c29e3fd248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Jen:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5aedf008eeb298205dfffe1bdd65f3dab8a592d5f7457f94c0750302f231592->leave($__internal_c5aedf008eeb298205dfffe1bdd65f3dab8a592d5f7457f94c0750302f231592_prof);

        
        $__internal_f18e7ff3d1e3356364359eda8313a4ac1046f1d594137329390032c29e3fd248->leave($__internal_f18e7ff3d1e3356364359eda8313a4ac1046f1d594137329390032c29e3fd248_prof);

    }

    // line 3
    public function block_aside($context, array $blocks = array())
    {
        $__internal_cbae36a7b50116af6f5b57cdc4555778c7e373bf5cfcd8c6d62c06cec21d83de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbae36a7b50116af6f5b57cdc4555778c7e373bf5cfcd8c6d62c06cec21d83de->enter($__internal_cbae36a7b50116af6f5b57cdc4555778c7e373bf5cfcd8c6d62c06cec21d83de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_9afeb6be67961473b05b7107816ff11019c0da3ea8809477339d2081fd3c4ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afeb6be67961473b05b7107816ff11019c0da3ea8809477339d2081fd3c4ed9->enter($__internal_9afeb6be67961473b05b7107816ff11019c0da3ea8809477339d2081fd3c4ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 4
        echo "    ";
        $this->loadTemplate("userAside.html.twig", "UserBundle:Jen:show.html.twig", 4)->display($context);
        
        $__internal_9afeb6be67961473b05b7107816ff11019c0da3ea8809477339d2081fd3c4ed9->leave($__internal_9afeb6be67961473b05b7107816ff11019c0da3ea8809477339d2081fd3c4ed9_prof);

        
        $__internal_cbae36a7b50116af6f5b57cdc4555778c7e373bf5cfcd8c6d62c06cec21d83de->leave($__internal_cbae36a7b50116af6f5b57cdc4555778c7e373bf5cfcd8c6d62c06cec21d83de_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c73f19ebf613dd9e05285e904ef30b9cfc8c77c20eb99435eddaf3ede218f41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73f19ebf613dd9e05285e904ef30b9cfc8c77c20eb99435eddaf3ede218f41d->enter($__internal_c73f19ebf613dd9e05285e904ef30b9cfc8c77c20eb99435eddaf3ede218f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57be461ef4926e23be4745147749bfcf8d346c1fbaceab206913e364505c1b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57be461ef4926e23be4745147749bfcf8d346c1fbaceab206913e364505c1b79->enter($__internal_57be461ef4926e23be4745147749bfcf8d346c1fbaceab206913e364505c1b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Jen</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbenseignants</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "nbEnseignants", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbetudiants</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "nbEtudiants", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbacteurs</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "nbActeurs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Outils</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "outils", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dispositifs</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "dispositifs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Synopsys</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "synopsys", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jen_edit", array("id" => $this->getAttribute((isset($context["jen"]) ? $context["jen"] : $this->getContext($context, "jen")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_57be461ef4926e23be4745147749bfcf8d346c1fbaceab206913e364505c1b79->leave($__internal_57be461ef4926e23be4745147749bfcf8d346c1fbaceab206913e364505c1b79_prof);

        
        $__internal_c73f19ebf613dd9e05285e904ef30b9cfc8c77c20eb99435eddaf3ede218f41d->leave($__internal_c73f19ebf613dd9e05285e904ef30b9cfc8c77c20eb99435eddaf3ede218f41d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Jen:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  149 => 55,  143 => 52,  137 => 49,  127 => 42,  120 => 38,  113 => 34,  106 => 30,  99 => 26,  92 => 22,  85 => 18,  78 => 14,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block aside %}
    {% include 'userAside.html.twig' %}
{% endblock %}

{% block body %}
    <h1>Jen</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ jen.id }}</td>
            </tr>
            <tr>
                <th>Intitule</th>
                <td>{{ jen.intitule }}</td>
            </tr>
            <tr>
                <th>Nbenseignants</th>
                <td>{{ jen.nbEnseignants }}</td>
            </tr>
            <tr>
                <th>Nbetudiants</th>
                <td>{{ jen.nbEtudiants }}</td>
            </tr>
            <tr>
                <th>Nbacteurs</th>
                <td>{{ jen.nbActeurs }}</td>
            </tr>
            <tr>
                <th>Outils</th>
                <td>{{ jen.outils }}</td>
            </tr>
            <tr>
                <th>Dispositifs</th>
                <td>{{ jen.dispositifs }}</td>
            </tr>
            <tr>
                <th>Synopsys</th>
                <td>{{ jen.synopsys }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('jen_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('jen_edit', { 'id': jen.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "UserBundle:Jen:show.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/Jen/show.html.twig");
    }
}
