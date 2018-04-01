<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2464bebe15c1eb7b54f72dd62aff435e6f22cb9a008df4159c218884ad2fe385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3610fe902cd5e3b606367ce5b5a56496a798e4124a3fad721f73f393c4b6965f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3610fe902cd5e3b606367ce5b5a56496a798e4124a3fad721f73f393c4b6965f->enter($__internal_3610fe902cd5e3b606367ce5b5a56496a798e4124a3fad721f73f393c4b6965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c6a8ea44fed99ec49801fbbf5b3acbb3fdd44d184a2f5916253486aba87d71f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a8ea44fed99ec49801fbbf5b3acbb3fdd44d184a2f5916253486aba87d71f5->enter($__internal_c6a8ea44fed99ec49801fbbf5b3acbb3fdd44d184a2f5916253486aba87d71f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3610fe902cd5e3b606367ce5b5a56496a798e4124a3fad721f73f393c4b6965f->leave($__internal_3610fe902cd5e3b606367ce5b5a56496a798e4124a3fad721f73f393c4b6965f_prof);

        
        $__internal_c6a8ea44fed99ec49801fbbf5b3acbb3fdd44d184a2f5916253486aba87d71f5->leave($__internal_c6a8ea44fed99ec49801fbbf5b3acbb3fdd44d184a2f5916253486aba87d71f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9eabf1f8391eb41fa072561cb68fae1c94c69b629da43db6bbc70680ee94a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9eabf1f8391eb41fa072561cb68fae1c94c69b629da43db6bbc70680ee94a4->enter($__internal_7a9eabf1f8391eb41fa072561cb68fae1c94c69b629da43db6bbc70680ee94a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56296f855333e4011e7c088ea3ce030b77eba33d45953dc09a013a4326fbdaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56296f855333e4011e7c088ea3ce030b77eba33d45953dc09a013a4326fbdaa6->enter($__internal_56296f855333e4011e7c088ea3ce030b77eba33d45953dc09a013a4326fbdaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div>
        ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 12
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    <div>
        ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "    </div>
    
";
        
        $__internal_56296f855333e4011e7c088ea3ce030b77eba33d45953dc09a013a4326fbdaa6->leave($__internal_56296f855333e4011e7c088ea3ce030b77eba33d45953dc09a013a4326fbdaa6_prof);

        
        $__internal_7a9eabf1f8391eb41fa072561cb68fae1c94c69b629da43db6bbc70680ee94a4->leave($__internal_7a9eabf1f8391eb41fa072561cb68fae1c94c69b629da43db6bbc70680ee94a4_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a80d3a2dc31387c4e02e5f4fefdc39adf54255bde6bac96152b949f7c3de1fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80d3a2dc31387c4e02e5f4fefdc39adf54255bde6bac96152b949f7c3de1fd1->enter($__internal_a80d3a2dc31387c4e02e5f4fefdc39adf54255bde6bac96152b949f7c3de1fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_140378291003a3ebf7449f5ef865c1fd56aa9c1f58c22bd6654c47baa656149a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140378291003a3ebf7449f5ef865c1fd56aa9c1f58c22bd6654c47baa656149a->enter($__internal_140378291003a3ebf7449f5ef865c1fd56aa9c1f58c22bd6654c47baa656149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "        ";
        
        $__internal_140378291003a3ebf7449f5ef865c1fd56aa9c1f58c22bd6654c47baa656149a->leave($__internal_140378291003a3ebf7449f5ef865c1fd56aa9c1f58c22bd6654c47baa656149a_prof);

        
        $__internal_a80d3a2dc31387c4e02e5f4fefdc39adf54255bde6bac96152b949f7c3de1fd1->leave($__internal_a80d3a2dc31387c4e02e5f4fefdc39adf54255bde6bac96152b949f7c3de1fd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  136 => 27,  124 => 29,  122 => 27,  118 => 25,  115 => 24,  109 => 23,  100 => 20,  95 => 19,  90 => 18,  85 => 17,  83 => 16,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::accueil.html.twig' %}  

{% block body%}

    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
    
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Guide_v04\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
