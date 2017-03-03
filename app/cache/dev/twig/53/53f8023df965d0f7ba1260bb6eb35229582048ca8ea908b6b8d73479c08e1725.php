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
        $__internal_4ec70ab11da8e1b38a8400197162be95f5c97f7ebf8b133661e72134b6d4003f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec70ab11da8e1b38a8400197162be95f5c97f7ebf8b133661e72134b6d4003f->enter($__internal_4ec70ab11da8e1b38a8400197162be95f5c97f7ebf8b133661e72134b6d4003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec70ab11da8e1b38a8400197162be95f5c97f7ebf8b133661e72134b6d4003f->leave($__internal_4ec70ab11da8e1b38a8400197162be95f5c97f7ebf8b133661e72134b6d4003f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17292549a89cc9ee31d3e0fcabdd82b365f51014fe361be57ad999df2ceab4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17292549a89cc9ee31d3e0fcabdd82b365f51014fe361be57ad999df2ceab4a6->enter($__internal_17292549a89cc9ee31d3e0fcabdd82b365f51014fe361be57ad999df2ceab4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17292549a89cc9ee31d3e0fcabdd82b365f51014fe361be57ad999df2ceab4a6->leave($__internal_17292549a89cc9ee31d3e0fcabdd82b365f51014fe361be57ad999df2ceab4a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98de77eefd53dc579bcf0126de1e9fd99f976127f0f66591fa02ee7c86ed936d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98de77eefd53dc579bcf0126de1e9fd99f976127f0f66591fa02ee7c86ed936d->enter($__internal_98de77eefd53dc579bcf0126de1e9fd99f976127f0f66591fa02ee7c86ed936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98de77eefd53dc579bcf0126de1e9fd99f976127f0f66591fa02ee7c86ed936d->leave($__internal_98de77eefd53dc579bcf0126de1e9fd99f976127f0f66591fa02ee7c86ed936d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14a2fbbd4bf0d3c623c7095617c85a1b3fe5a3b2358965ef1ef31385451f0896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a2fbbd4bf0d3c623c7095617c85a1b3fe5a3b2358965ef1ef31385451f0896->enter($__internal_14a2fbbd4bf0d3c623c7095617c85a1b3fe5a3b2358965ef1ef31385451f0896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14a2fbbd4bf0d3c623c7095617c85a1b3fe5a3b2358965ef1ef31385451f0896->leave($__internal_14a2fbbd4bf0d3c623c7095617c85a1b3fe5a3b2358965ef1ef31385451f0896_prof);

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
