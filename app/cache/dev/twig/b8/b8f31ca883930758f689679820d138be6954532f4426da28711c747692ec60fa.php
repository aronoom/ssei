<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14f2b6364f05972d94908097e663f6dead90b0a281f0d6ce8704d4c7d4889b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_011183d325bbaff8daae61916a96baaf6429522cfd74a77e75f1e1ed520df4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011183d325bbaff8daae61916a96baaf6429522cfd74a77e75f1e1ed520df4c2->enter($__internal_011183d325bbaff8daae61916a96baaf6429522cfd74a77e75f1e1ed520df4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011183d325bbaff8daae61916a96baaf6429522cfd74a77e75f1e1ed520df4c2->leave($__internal_011183d325bbaff8daae61916a96baaf6429522cfd74a77e75f1e1ed520df4c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e8955f37ddabdf3f1359e9c7bfd1d17e773339f420ab260c96fe73a9351671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8955f37ddabdf3f1359e9c7bfd1d17e773339f420ab260c96fe73a9351671a->enter($__internal_5e8955f37ddabdf3f1359e9c7bfd1d17e773339f420ab260c96fe73a9351671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e8955f37ddabdf3f1359e9c7bfd1d17e773339f420ab260c96fe73a9351671a->leave($__internal_5e8955f37ddabdf3f1359e9c7bfd1d17e773339f420ab260c96fe73a9351671a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9c22b046c6fbc2c46b0ace17e07d5a67019724db4b5914d2bce31b70ce475fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c22b046c6fbc2c46b0ace17e07d5a67019724db4b5914d2bce31b70ce475fa->enter($__internal_c9c22b046c6fbc2c46b0ace17e07d5a67019724db4b5914d2bce31b70ce475fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9c22b046c6fbc2c46b0ace17e07d5a67019724db4b5914d2bce31b70ce475fa->leave($__internal_c9c22b046c6fbc2c46b0ace17e07d5a67019724db4b5914d2bce31b70ce475fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83021b497eb7a3efc0ce55489c6f133d7ef65639f50f0c253650b5dfc2608df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83021b497eb7a3efc0ce55489c6f133d7ef65639f50f0c253650b5dfc2608df4->enter($__internal_83021b497eb7a3efc0ce55489c6f133d7ef65639f50f0c253650b5dfc2608df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83021b497eb7a3efc0ce55489c6f133d7ef65639f50f0c253650b5dfc2608df4->leave($__internal_83021b497eb7a3efc0ce55489c6f133d7ef65639f50f0c253650b5dfc2608df4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
