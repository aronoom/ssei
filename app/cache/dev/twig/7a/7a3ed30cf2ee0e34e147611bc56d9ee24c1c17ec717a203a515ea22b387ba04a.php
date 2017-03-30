<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_569079efa3f55f7bee06bbacf1767a2a60865902d23b83f60db0f6a79ce2b39b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0ebc606c1b8755f8a45ecec868731ac52cea990e244ed3adc4182c26272b7222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebc606c1b8755f8a45ecec868731ac52cea990e244ed3adc4182c26272b7222->enter($__internal_0ebc606c1b8755f8a45ecec868731ac52cea990e244ed3adc4182c26272b7222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ebc606c1b8755f8a45ecec868731ac52cea990e244ed3adc4182c26272b7222->leave($__internal_0ebc606c1b8755f8a45ecec868731ac52cea990e244ed3adc4182c26272b7222_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c3696ecde713e882ca6fcb75c2c013b1f87e21fcd81b135aa91789bd5a9bb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3696ecde713e882ca6fcb75c2c013b1f87e21fcd81b135aa91789bd5a9bb31->enter($__internal_6c3696ecde713e882ca6fcb75c2c013b1f87e21fcd81b135aa91789bd5a9bb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6c3696ecde713e882ca6fcb75c2c013b1f87e21fcd81b135aa91789bd5a9bb31->leave($__internal_6c3696ecde713e882ca6fcb75c2c013b1f87e21fcd81b135aa91789bd5a9bb31_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dfc3ae381eeb43fd0910ca4a005b00082ca5c44adfc4c3bdb282ef6f4eabcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfc3ae381eeb43fd0910ca4a005b00082ca5c44adfc4c3bdb282ef6f4eabcd5->enter($__internal_8dfc3ae381eeb43fd0910ca4a005b00082ca5c44adfc4c3bdb282ef6f4eabcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8dfc3ae381eeb43fd0910ca4a005b00082ca5c44adfc4c3bdb282ef6f4eabcd5->leave($__internal_8dfc3ae381eeb43fd0910ca4a005b00082ca5c44adfc4c3bdb282ef6f4eabcd5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bd8983026956d5e3cb45056e5a35c4a952fa52aad22d2795f71ccab2c753b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd8983026956d5e3cb45056e5a35c4a952fa52aad22d2795f71ccab2c753b3e->enter($__internal_9bd8983026956d5e3cb45056e5a35c4a952fa52aad22d2795f71ccab2c753b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9bd8983026956d5e3cb45056e5a35c4a952fa52aad22d2795f71ccab2c753b3e->leave($__internal_9bd8983026956d5e3cb45056e5a35c4a952fa52aad22d2795f71ccab2c753b3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
