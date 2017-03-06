<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_95963c51ecc878a8e433ea0a20a62581c1ff243df1e22acf2d3f7274b2e0603f extends Twig_Template
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
        $__internal_b0ac82c54f74f48a4166770dfa80ac68d03ab6a4d17ca8ba9a716e562e058264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ac82c54f74f48a4166770dfa80ac68d03ab6a4d17ca8ba9a716e562e058264->enter($__internal_b0ac82c54f74f48a4166770dfa80ac68d03ab6a4d17ca8ba9a716e562e058264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ac82c54f74f48a4166770dfa80ac68d03ab6a4d17ca8ba9a716e562e058264->leave($__internal_b0ac82c54f74f48a4166770dfa80ac68d03ab6a4d17ca8ba9a716e562e058264_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd2806a25bcbac54c96d87bc5424a904d4ac10167abda144bf08cef785fcc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd2806a25bcbac54c96d87bc5424a904d4ac10167abda144bf08cef785fcc84->enter($__internal_7dd2806a25bcbac54c96d87bc5424a904d4ac10167abda144bf08cef785fcc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_7dd2806a25bcbac54c96d87bc5424a904d4ac10167abda144bf08cef785fcc84->leave($__internal_7dd2806a25bcbac54c96d87bc5424a904d4ac10167abda144bf08cef785fcc84_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d90790c1c60ae0989ee9d334c004a3301568e8149a467545b93686f0958fd2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90790c1c60ae0989ee9d334c004a3301568e8149a467545b93686f0958fd2f3->enter($__internal_d90790c1c60ae0989ee9d334c004a3301568e8149a467545b93686f0958fd2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_d90790c1c60ae0989ee9d334c004a3301568e8149a467545b93686f0958fd2f3->leave($__internal_d90790c1c60ae0989ee9d334c004a3301568e8149a467545b93686f0958fd2f3_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_534dc583bcd33246cdf44140b48f46b2875da8b8f6f3718dd34ddbdaa104b18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534dc583bcd33246cdf44140b48f46b2875da8b8f6f3718dd34ddbdaa104b18c->enter($__internal_534dc583bcd33246cdf44140b48f46b2875da8b8f6f3718dd34ddbdaa104b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_534dc583bcd33246cdf44140b48f46b2875da8b8f6f3718dd34ddbdaa104b18c->leave($__internal_534dc583bcd33246cdf44140b48f46b2875da8b8f6f3718dd34ddbdaa104b18c_prof);

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
