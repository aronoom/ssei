<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_afac42027dc617f4362ef534bdfa28777f57173c96ffafb6d61ddeb18825b748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7c5123d4d68ecb8ca9c8c87ff6dabfdbb9d2c4105c2ffd986fbfd7a00229ea12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5123d4d68ecb8ca9c8c87ff6dabfdbb9d2c4105c2ffd986fbfd7a00229ea12->enter($__internal_7c5123d4d68ecb8ca9c8c87ff6dabfdbb9d2c4105c2ffd986fbfd7a00229ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5123d4d68ecb8ca9c8c87ff6dabfdbb9d2c4105c2ffd986fbfd7a00229ea12->leave($__internal_7c5123d4d68ecb8ca9c8c87ff6dabfdbb9d2c4105c2ffd986fbfd7a00229ea12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b4b97c9f04ade6f32d8a11e3e7901fabb96a8198af5a12b79fcc69d6d4c7dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4b97c9f04ade6f32d8a11e3e7901fabb96a8198af5a12b79fcc69d6d4c7dd8->enter($__internal_1b4b97c9f04ade6f32d8a11e3e7901fabb96a8198af5a12b79fcc69d6d4c7dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b4b97c9f04ade6f32d8a11e3e7901fabb96a8198af5a12b79fcc69d6d4c7dd8->leave($__internal_1b4b97c9f04ade6f32d8a11e3e7901fabb96a8198af5a12b79fcc69d6d4c7dd8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a925ebf04bbad98f6d303092c64f9053e0fda672529a45e5d77605cd9781eda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a925ebf04bbad98f6d303092c64f9053e0fda672529a45e5d77605cd9781eda0->enter($__internal_a925ebf04bbad98f6d303092c64f9053e0fda672529a45e5d77605cd9781eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a925ebf04bbad98f6d303092c64f9053e0fda672529a45e5d77605cd9781eda0->leave($__internal_a925ebf04bbad98f6d303092c64f9053e0fda672529a45e5d77605cd9781eda0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d70b954ca4cccb7258326dbccd4e29a1363ae5eb3fdf70a2e6fca7c538c05684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b954ca4cccb7258326dbccd4e29a1363ae5eb3fdf70a2e6fca7c538c05684->enter($__internal_d70b954ca4cccb7258326dbccd4e29a1363ae5eb3fdf70a2e6fca7c538c05684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d70b954ca4cccb7258326dbccd4e29a1363ae5eb3fdf70a2e6fca7c538c05684->leave($__internal_d70b954ca4cccb7258326dbccd4e29a1363ae5eb3fdf70a2e6fca7c538c05684_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
