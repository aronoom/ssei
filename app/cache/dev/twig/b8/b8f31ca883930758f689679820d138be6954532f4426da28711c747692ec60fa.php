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
        $__internal_c2b2f8f3ff732aa7d1bedf58d281d46e455c2293e7a91aa8d7904a546593a375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b2f8f3ff732aa7d1bedf58d281d46e455c2293e7a91aa8d7904a546593a375->enter($__internal_c2b2f8f3ff732aa7d1bedf58d281d46e455c2293e7a91aa8d7904a546593a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b2f8f3ff732aa7d1bedf58d281d46e455c2293e7a91aa8d7904a546593a375->leave($__internal_c2b2f8f3ff732aa7d1bedf58d281d46e455c2293e7a91aa8d7904a546593a375_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe46b03dbcb6848bd934e5686df1c9829d5d99c4f5aede90ca3b95fd25370ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe46b03dbcb6848bd934e5686df1c9829d5d99c4f5aede90ca3b95fd25370ae4->enter($__internal_fe46b03dbcb6848bd934e5686df1c9829d5d99c4f5aede90ca3b95fd25370ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe46b03dbcb6848bd934e5686df1c9829d5d99c4f5aede90ca3b95fd25370ae4->leave($__internal_fe46b03dbcb6848bd934e5686df1c9829d5d99c4f5aede90ca3b95fd25370ae4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce9d6f5b33a361082bcc2e470173552059068bcf68531d2e4e3bc36c2b5b633f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9d6f5b33a361082bcc2e470173552059068bcf68531d2e4e3bc36c2b5b633f->enter($__internal_ce9d6f5b33a361082bcc2e470173552059068bcf68531d2e4e3bc36c2b5b633f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce9d6f5b33a361082bcc2e470173552059068bcf68531d2e4e3bc36c2b5b633f->leave($__internal_ce9d6f5b33a361082bcc2e470173552059068bcf68531d2e4e3bc36c2b5b633f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_098b298c4919d90cc9359cf120bd2d596c946425213df42a9fa41a5128eec49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098b298c4919d90cc9359cf120bd2d596c946425213df42a9fa41a5128eec49e->enter($__internal_098b298c4919d90cc9359cf120bd2d596c946425213df42a9fa41a5128eec49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_098b298c4919d90cc9359cf120bd2d596c946425213df42a9fa41a5128eec49e->leave($__internal_098b298c4919d90cc9359cf120bd2d596c946425213df42a9fa41a5128eec49e_prof);

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
