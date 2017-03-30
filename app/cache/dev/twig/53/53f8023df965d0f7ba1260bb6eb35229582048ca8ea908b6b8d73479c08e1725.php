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
        $__internal_48b9afc12ccc06df881f416bc8ec7eb0400739308994a32ca3a7a3d0337e0502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b9afc12ccc06df881f416bc8ec7eb0400739308994a32ca3a7a3d0337e0502->enter($__internal_48b9afc12ccc06df881f416bc8ec7eb0400739308994a32ca3a7a3d0337e0502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b9afc12ccc06df881f416bc8ec7eb0400739308994a32ca3a7a3d0337e0502->leave($__internal_48b9afc12ccc06df881f416bc8ec7eb0400739308994a32ca3a7a3d0337e0502_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4368875c3886c1d1197c3f2879769ba3cfb503b873ff8d6722f03a4487394250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4368875c3886c1d1197c3f2879769ba3cfb503b873ff8d6722f03a4487394250->enter($__internal_4368875c3886c1d1197c3f2879769ba3cfb503b873ff8d6722f03a4487394250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4368875c3886c1d1197c3f2879769ba3cfb503b873ff8d6722f03a4487394250->leave($__internal_4368875c3886c1d1197c3f2879769ba3cfb503b873ff8d6722f03a4487394250_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51fe46f97431a927b3c11feb87b497d79cba11001a884399b8fcbda1ecfe8325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe46f97431a927b3c11feb87b497d79cba11001a884399b8fcbda1ecfe8325->enter($__internal_51fe46f97431a927b3c11feb87b497d79cba11001a884399b8fcbda1ecfe8325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51fe46f97431a927b3c11feb87b497d79cba11001a884399b8fcbda1ecfe8325->leave($__internal_51fe46f97431a927b3c11feb87b497d79cba11001a884399b8fcbda1ecfe8325_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0a337fd81a65565e42aaf4b2221d28df6fdc7a86ac4b862a5b04547ec698955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a337fd81a65565e42aaf4b2221d28df6fdc7a86ac4b862a5b04547ec698955->enter($__internal_f0a337fd81a65565e42aaf4b2221d28df6fdc7a86ac4b862a5b04547ec698955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0a337fd81a65565e42aaf4b2221d28df6fdc7a86ac4b862a5b04547ec698955->leave($__internal_f0a337fd81a65565e42aaf4b2221d28df6fdc7a86ac4b862a5b04547ec698955_prof);

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
