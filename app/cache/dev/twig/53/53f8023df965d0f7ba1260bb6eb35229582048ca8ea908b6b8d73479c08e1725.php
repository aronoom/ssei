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
        $__internal_46c00adcab6bbce120591b49de93c3a4281107845b02e5ac39b953923b5d9b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c00adcab6bbce120591b49de93c3a4281107845b02e5ac39b953923b5d9b8f->enter($__internal_46c00adcab6bbce120591b49de93c3a4281107845b02e5ac39b953923b5d9b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c00adcab6bbce120591b49de93c3a4281107845b02e5ac39b953923b5d9b8f->leave($__internal_46c00adcab6bbce120591b49de93c3a4281107845b02e5ac39b953923b5d9b8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac2bef5788c8448922285102615403bb6c1e943aaa6d94e9799e9ee00f66bc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2bef5788c8448922285102615403bb6c1e943aaa6d94e9799e9ee00f66bc9e->enter($__internal_ac2bef5788c8448922285102615403bb6c1e943aaa6d94e9799e9ee00f66bc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac2bef5788c8448922285102615403bb6c1e943aaa6d94e9799e9ee00f66bc9e->leave($__internal_ac2bef5788c8448922285102615403bb6c1e943aaa6d94e9799e9ee00f66bc9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06e5c921b7529e77898449766fd1e045bbe5941c67bfe44e14b47cf8d972015d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e5c921b7529e77898449766fd1e045bbe5941c67bfe44e14b47cf8d972015d->enter($__internal_06e5c921b7529e77898449766fd1e045bbe5941c67bfe44e14b47cf8d972015d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06e5c921b7529e77898449766fd1e045bbe5941c67bfe44e14b47cf8d972015d->leave($__internal_06e5c921b7529e77898449766fd1e045bbe5941c67bfe44e14b47cf8d972015d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6dfd90c70cdab56250d739e4fc4b898d4432f67eefb4d95834e39ad2dbbee28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfd90c70cdab56250d739e4fc4b898d4432f67eefb4d95834e39ad2dbbee28a->enter($__internal_6dfd90c70cdab56250d739e4fc4b898d4432f67eefb4d95834e39ad2dbbee28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6dfd90c70cdab56250d739e4fc4b898d4432f67eefb4d95834e39ad2dbbee28a->leave($__internal_6dfd90c70cdab56250d739e4fc4b898d4432f67eefb4d95834e39ad2dbbee28a_prof);

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
