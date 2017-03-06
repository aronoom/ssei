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
        $__internal_94b251a7ae10330cede7e38729c03ae8dafaace1a6041bc071f3907da511793a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b251a7ae10330cede7e38729c03ae8dafaace1a6041bc071f3907da511793a->enter($__internal_94b251a7ae10330cede7e38729c03ae8dafaace1a6041bc071f3907da511793a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b251a7ae10330cede7e38729c03ae8dafaace1a6041bc071f3907da511793a->leave($__internal_94b251a7ae10330cede7e38729c03ae8dafaace1a6041bc071f3907da511793a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f648526a052e4f5c1677e69b03a7b1a979d0affee2ab3f2a305326fe13f6fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f648526a052e4f5c1677e69b03a7b1a979d0affee2ab3f2a305326fe13f6fef->enter($__internal_3f648526a052e4f5c1677e69b03a7b1a979d0affee2ab3f2a305326fe13f6fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f648526a052e4f5c1677e69b03a7b1a979d0affee2ab3f2a305326fe13f6fef->leave($__internal_3f648526a052e4f5c1677e69b03a7b1a979d0affee2ab3f2a305326fe13f6fef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a33a36b57b21b7df9ea7d634ba4bdde3a2b91d0e9dd00172e44377e906f3f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a33a36b57b21b7df9ea7d634ba4bdde3a2b91d0e9dd00172e44377e906f3f6d->enter($__internal_5a33a36b57b21b7df9ea7d634ba4bdde3a2b91d0e9dd00172e44377e906f3f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a33a36b57b21b7df9ea7d634ba4bdde3a2b91d0e9dd00172e44377e906f3f6d->leave($__internal_5a33a36b57b21b7df9ea7d634ba4bdde3a2b91d0e9dd00172e44377e906f3f6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97398df90c1295b27fe25050e4a13107d5f15172be06d02965df76a0495f6630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97398df90c1295b27fe25050e4a13107d5f15172be06d02965df76a0495f6630->enter($__internal_97398df90c1295b27fe25050e4a13107d5f15172be06d02965df76a0495f6630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97398df90c1295b27fe25050e4a13107d5f15172be06d02965df76a0495f6630->leave($__internal_97398df90c1295b27fe25050e4a13107d5f15172be06d02965df76a0495f6630_prof);

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
