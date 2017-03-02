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
        $__internal_8063a92162ceb6d9807dc9a45f10e5f4e1930b439e99027afda0790460fc6841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8063a92162ceb6d9807dc9a45f10e5f4e1930b439e99027afda0790460fc6841->enter($__internal_8063a92162ceb6d9807dc9a45f10e5f4e1930b439e99027afda0790460fc6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8063a92162ceb6d9807dc9a45f10e5f4e1930b439e99027afda0790460fc6841->leave($__internal_8063a92162ceb6d9807dc9a45f10e5f4e1930b439e99027afda0790460fc6841_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_925b8ab883807014e66c76e9e0ac03de9b4538ebf314051ac6f77a35caf61256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925b8ab883807014e66c76e9e0ac03de9b4538ebf314051ac6f77a35caf61256->enter($__internal_925b8ab883807014e66c76e9e0ac03de9b4538ebf314051ac6f77a35caf61256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_925b8ab883807014e66c76e9e0ac03de9b4538ebf314051ac6f77a35caf61256->leave($__internal_925b8ab883807014e66c76e9e0ac03de9b4538ebf314051ac6f77a35caf61256_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_926054396fb525e75c147497c6165f984938ba871e8b44bac4f905117e33b1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926054396fb525e75c147497c6165f984938ba871e8b44bac4f905117e33b1c7->enter($__internal_926054396fb525e75c147497c6165f984938ba871e8b44bac4f905117e33b1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_926054396fb525e75c147497c6165f984938ba871e8b44bac4f905117e33b1c7->leave($__internal_926054396fb525e75c147497c6165f984938ba871e8b44bac4f905117e33b1c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc6cb2167f9f97fa1cfc7f719cbf555a7de1a58cdab64ce48a31f44a2fffa1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6cb2167f9f97fa1cfc7f719cbf555a7de1a58cdab64ce48a31f44a2fffa1f6->enter($__internal_bc6cb2167f9f97fa1cfc7f719cbf555a7de1a58cdab64ce48a31f44a2fffa1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc6cb2167f9f97fa1cfc7f719cbf555a7de1a58cdab64ce48a31f44a2fffa1f6->leave($__internal_bc6cb2167f9f97fa1cfc7f719cbf555a7de1a58cdab64ce48a31f44a2fffa1f6_prof);

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
