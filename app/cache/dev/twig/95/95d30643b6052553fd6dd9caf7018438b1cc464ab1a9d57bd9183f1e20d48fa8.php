<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_06ef76c28bbfc640519c3cbc716ce638348c884c67edd8f49c64556a1ec364b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
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
        $__internal_fa020d58ad1f378c5e10341bbcc106e23b832ba500e4eb7623c3064512782ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa020d58ad1f378c5e10341bbcc106e23b832ba500e4eb7623c3064512782ca2->enter($__internal_fa020d58ad1f378c5e10341bbcc106e23b832ba500e4eb7623c3064512782ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa020d58ad1f378c5e10341bbcc106e23b832ba500e4eb7623c3064512782ca2->leave($__internal_fa020d58ad1f378c5e10341bbcc106e23b832ba500e4eb7623c3064512782ca2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_89da22b2f9aecec545895287b5b4d09dfb34e0624aeeeee12c859008474390bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89da22b2f9aecec545895287b5b4d09dfb34e0624aeeeee12c859008474390bf->enter($__internal_89da22b2f9aecec545895287b5b4d09dfb34e0624aeeeee12c859008474390bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_89da22b2f9aecec545895287b5b4d09dfb34e0624aeeeee12c859008474390bf->leave($__internal_89da22b2f9aecec545895287b5b4d09dfb34e0624aeeeee12c859008474390bf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_07cf5d044daa8f372e95701446a79f2c6b0e219b8fd2fc7627389570be6a25e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07cf5d044daa8f372e95701446a79f2c6b0e219b8fd2fc7627389570be6a25e9->enter($__internal_07cf5d044daa8f372e95701446a79f2c6b0e219b8fd2fc7627389570be6a25e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_07cf5d044daa8f372e95701446a79f2c6b0e219b8fd2fc7627389570be6a25e9->leave($__internal_07cf5d044daa8f372e95701446a79f2c6b0e219b8fd2fc7627389570be6a25e9_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24aeb2c911980e603df1d097cf1d38e03d581ab187d5ea0ca757326287e0ecc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24aeb2c911980e603df1d097cf1d38e03d581ab187d5ea0ca757326287e0ecc2->enter($__internal_24aeb2c911980e603df1d097cf1d38e03d581ab187d5ea0ca757326287e0ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_24aeb2c911980e603df1d097cf1d38e03d581ab187d5ea0ca757326287e0ecc2->leave($__internal_24aeb2c911980e603df1d097cf1d38e03d581ab187d5ea0ca757326287e0ecc2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
