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
        $__internal_aed2467846b8773468ffae9943d6c2bfa24d0a136f920bde0cc6d9386ba4b68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed2467846b8773468ffae9943d6c2bfa24d0a136f920bde0cc6d9386ba4b68b->enter($__internal_aed2467846b8773468ffae9943d6c2bfa24d0a136f920bde0cc6d9386ba4b68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aed2467846b8773468ffae9943d6c2bfa24d0a136f920bde0cc6d9386ba4b68b->leave($__internal_aed2467846b8773468ffae9943d6c2bfa24d0a136f920bde0cc6d9386ba4b68b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb110c6c7811b5727c55e97811d99ce3fb1d1df2ada033bdc149c0da9e5e4e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb110c6c7811b5727c55e97811d99ce3fb1d1df2ada033bdc149c0da9e5e4e52->enter($__internal_bb110c6c7811b5727c55e97811d99ce3fb1d1df2ada033bdc149c0da9e5e4e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb110c6c7811b5727c55e97811d99ce3fb1d1df2ada033bdc149c0da9e5e4e52->leave($__internal_bb110c6c7811b5727c55e97811d99ce3fb1d1df2ada033bdc149c0da9e5e4e52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0bf5f5fe5438951ecba00a259b331ce3b0b5e0c036398869ac3371d782ec556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bf5f5fe5438951ecba00a259b331ce3b0b5e0c036398869ac3371d782ec556->enter($__internal_b0bf5f5fe5438951ecba00a259b331ce3b0b5e0c036398869ac3371d782ec556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0bf5f5fe5438951ecba00a259b331ce3b0b5e0c036398869ac3371d782ec556->leave($__internal_b0bf5f5fe5438951ecba00a259b331ce3b0b5e0c036398869ac3371d782ec556_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f03dd587596c401e8a63e43b940c6de554984a79fdc586d7bbee05433f67a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f03dd587596c401e8a63e43b940c6de554984a79fdc586d7bbee05433f67a00->enter($__internal_7f03dd587596c401e8a63e43b940c6de554984a79fdc586d7bbee05433f67a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f03dd587596c401e8a63e43b940c6de554984a79fdc586d7bbee05433f67a00->leave($__internal_7f03dd587596c401e8a63e43b940c6de554984a79fdc586d7bbee05433f67a00_prof);

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
