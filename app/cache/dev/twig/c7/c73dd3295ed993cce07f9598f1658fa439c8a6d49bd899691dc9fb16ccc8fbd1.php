<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_21c49c23449d2957ed1934b02641d9ca9221caaa33721005a4877684b6ba1d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZoneBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a490dfe594366bcd8c365be206c6bdd7ff2650410420e0c16f05a62e28ee8de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a490dfe594366bcd8c365be206c6bdd7ff2650410420e0c16f05a62e28ee8de4->enter($__internal_a490dfe594366bcd8c365be206c6bdd7ff2650410420e0c16f05a62e28ee8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a490dfe594366bcd8c365be206c6bdd7ff2650410420e0c16f05a62e28ee8de4->leave($__internal_a490dfe594366bcd8c365be206c6bdd7ff2650410420e0c16f05a62e28ee8de4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_963a78f2007e3fcbeb33b42cd2d5742f390fc38c26d2194504334bf0ee4ead4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963a78f2007e3fcbeb33b42cd2d5742f390fc38c26d2194504334bf0ee4ead4b->enter($__internal_963a78f2007e3fcbeb33b42cd2d5742f390fc38c26d2194504334bf0ee4ead4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_963a78f2007e3fcbeb33b42cd2d5742f390fc38c26d2194504334bf0ee4ead4b->leave($__internal_963a78f2007e3fcbeb33b42cd2d5742f390fc38c26d2194504334bf0ee4ead4b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12be7044ce1d079ec6df5d23feafa5ca987eac053d8684d5280eea75708d18cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12be7044ce1d079ec6df5d23feafa5ca987eac053d8684d5280eea75708d18cf->enter($__internal_12be7044ce1d079ec6df5d23feafa5ca987eac053d8684d5280eea75708d18cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_12be7044ce1d079ec6df5d23feafa5ca987eac053d8684d5280eea75708d18cf->leave($__internal_12be7044ce1d079ec6df5d23feafa5ca987eac053d8684d5280eea75708d18cf_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57ff756f06558f6a3c22c18bb404f9ce69579c435ee9375c4b2fa8a16949e6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ff756f06558f6a3c22c18bb404f9ce69579c435ee9375c4b2fa8a16949e6f9->enter($__internal_57ff756f06558f6a3c22c18bb404f9ce69579c435ee9375c4b2fa8a16949e6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_57ff756f06558f6a3c22c18bb404f9ce69579c435ee9375c4b2fa8a16949e6f9->leave($__internal_57ff756f06558f6a3c22c18bb404f9ce69579c435ee9375c4b2fa8a16949e6f9_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Location |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ZoneBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/layout.html.twig");
    }
}
