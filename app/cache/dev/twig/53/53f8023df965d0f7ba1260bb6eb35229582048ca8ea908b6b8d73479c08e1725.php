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
        $__internal_e2f1fcb4a76165d5c0b8fb7e8eb420f366ea26c32f49ad15239571911b88f18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f1fcb4a76165d5c0b8fb7e8eb420f366ea26c32f49ad15239571911b88f18f->enter($__internal_e2f1fcb4a76165d5c0b8fb7e8eb420f366ea26c32f49ad15239571911b88f18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f1fcb4a76165d5c0b8fb7e8eb420f366ea26c32f49ad15239571911b88f18f->leave($__internal_e2f1fcb4a76165d5c0b8fb7e8eb420f366ea26c32f49ad15239571911b88f18f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86085a9afb2af1a8f916834da4b46f3c52eddc32b2594f846709ae20cf2dea95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86085a9afb2af1a8f916834da4b46f3c52eddc32b2594f846709ae20cf2dea95->enter($__internal_86085a9afb2af1a8f916834da4b46f3c52eddc32b2594f846709ae20cf2dea95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86085a9afb2af1a8f916834da4b46f3c52eddc32b2594f846709ae20cf2dea95->leave($__internal_86085a9afb2af1a8f916834da4b46f3c52eddc32b2594f846709ae20cf2dea95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43dd07ca2579112b691fe24098d12d30d2a92ddea221bc64b778dbed86e7f3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dd07ca2579112b691fe24098d12d30d2a92ddea221bc64b778dbed86e7f3e9->enter($__internal_43dd07ca2579112b691fe24098d12d30d2a92ddea221bc64b778dbed86e7f3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43dd07ca2579112b691fe24098d12d30d2a92ddea221bc64b778dbed86e7f3e9->leave($__internal_43dd07ca2579112b691fe24098d12d30d2a92ddea221bc64b778dbed86e7f3e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd787b9764317431c358d702c90b9daeb3ae18a76cfa7e4344d117179d390705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd787b9764317431c358d702c90b9daeb3ae18a76cfa7e4344d117179d390705->enter($__internal_fd787b9764317431c358d702c90b9daeb3ae18a76cfa7e4344d117179d390705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd787b9764317431c358d702c90b9daeb3ae18a76cfa7e4344d117179d390705->leave($__internal_fd787b9764317431c358d702c90b9daeb3ae18a76cfa7e4344d117179d390705_prof);

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
