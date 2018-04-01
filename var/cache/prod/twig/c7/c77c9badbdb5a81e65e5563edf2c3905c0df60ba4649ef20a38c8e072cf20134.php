<?php

/* UserBundle:mission:show.html.twig */
class __TwigTemplate_3c47aa98ca980db84dc40f667b6cc99867f0eceee994430cc3af5a1e5588e9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:mission:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Mission</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contextescenaristique</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "contexteScenaristique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptif</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "descriptif", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ludification</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "ludification", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Authenticite</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "authenticite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immersion</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["mission"] ?? null), "immersion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mission_edit", array("id" => $this->getAttribute(($context["mission"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:mission:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  103 => 47,  97 => 44,  91 => 41,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:mission:show.html.twig", "C:\\wamp64\\www\\Guide_v04\\src\\Sce\\UserBundle/Resources/views/mission/show.html.twig");
    }
}
