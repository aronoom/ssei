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
        $__internal_b842d4fc90d45d26a7608e692f6d5fa3439adf5543ca23f86378c3a332fcba75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b842d4fc90d45d26a7608e692f6d5fa3439adf5543ca23f86378c3a332fcba75->enter($__internal_b842d4fc90d45d26a7608e692f6d5fa3439adf5543ca23f86378c3a332fcba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b842d4fc90d45d26a7608e692f6d5fa3439adf5543ca23f86378c3a332fcba75->leave($__internal_b842d4fc90d45d26a7608e692f6d5fa3439adf5543ca23f86378c3a332fcba75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_240d0df16f293a13052af39927cb5fc37990d0a7f13c41ef3141f966052eeef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240d0df16f293a13052af39927cb5fc37990d0a7f13c41ef3141f966052eeef3->enter($__internal_240d0df16f293a13052af39927cb5fc37990d0a7f13c41ef3141f966052eeef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_240d0df16f293a13052af39927cb5fc37990d0a7f13c41ef3141f966052eeef3->leave($__internal_240d0df16f293a13052af39927cb5fc37990d0a7f13c41ef3141f966052eeef3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a137798f5c1c9662c26e1f2ebc07325142a8297eea85c68c1bc6352b28da02ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a137798f5c1c9662c26e1f2ebc07325142a8297eea85c68c1bc6352b28da02ed->enter($__internal_a137798f5c1c9662c26e1f2ebc07325142a8297eea85c68c1bc6352b28da02ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a137798f5c1c9662c26e1f2ebc07325142a8297eea85c68c1bc6352b28da02ed->leave($__internal_a137798f5c1c9662c26e1f2ebc07325142a8297eea85c68c1bc6352b28da02ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea4b40b052cff66744cb427f2bc2d4d9db0096740e3cb7c3920b19d3467de5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4b40b052cff66744cb427f2bc2d4d9db0096740e3cb7c3920b19d3467de5e3->enter($__internal_ea4b40b052cff66744cb427f2bc2d4d9db0096740e3cb7c3920b19d3467de5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea4b40b052cff66744cb427f2bc2d4d9db0096740e3cb7c3920b19d3467de5e3->leave($__internal_ea4b40b052cff66744cb427f2bc2d4d9db0096740e3cb7c3920b19d3467de5e3_prof);

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
