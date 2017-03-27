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
        $__internal_c95f224eafbeb9763d71d7a95ff6445020458ac79fa9623cda47d15234e0e5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95f224eafbeb9763d71d7a95ff6445020458ac79fa9623cda47d15234e0e5a8->enter($__internal_c95f224eafbeb9763d71d7a95ff6445020458ac79fa9623cda47d15234e0e5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c95f224eafbeb9763d71d7a95ff6445020458ac79fa9623cda47d15234e0e5a8->leave($__internal_c95f224eafbeb9763d71d7a95ff6445020458ac79fa9623cda47d15234e0e5a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_232f8fd0f0db93b8c5e95a0b85c14d185625c613a8aed239ff783b07a1b5875d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232f8fd0f0db93b8c5e95a0b85c14d185625c613a8aed239ff783b07a1b5875d->enter($__internal_232f8fd0f0db93b8c5e95a0b85c14d185625c613a8aed239ff783b07a1b5875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_232f8fd0f0db93b8c5e95a0b85c14d185625c613a8aed239ff783b07a1b5875d->leave($__internal_232f8fd0f0db93b8c5e95a0b85c14d185625c613a8aed239ff783b07a1b5875d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c492e3fbe6c9048a8d3f55d0993309991f7d2d2418462d37c0e55a3ae8950130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c492e3fbe6c9048a8d3f55d0993309991f7d2d2418462d37c0e55a3ae8950130->enter($__internal_c492e3fbe6c9048a8d3f55d0993309991f7d2d2418462d37c0e55a3ae8950130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c492e3fbe6c9048a8d3f55d0993309991f7d2d2418462d37c0e55a3ae8950130->leave($__internal_c492e3fbe6c9048a8d3f55d0993309991f7d2d2418462d37c0e55a3ae8950130_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f8adc6ffffcd83f6dc6e1389e16b47e139029e6e0f9bfc34a5dbe14521049e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8adc6ffffcd83f6dc6e1389e16b47e139029e6e0f9bfc34a5dbe14521049e9->enter($__internal_7f8adc6ffffcd83f6dc6e1389e16b47e139029e6e0f9bfc34a5dbe14521049e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f8adc6ffffcd83f6dc6e1389e16b47e139029e6e0f9bfc34a5dbe14521049e9->leave($__internal_7f8adc6ffffcd83f6dc6e1389e16b47e139029e6e0f9bfc34a5dbe14521049e9_prof);

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
