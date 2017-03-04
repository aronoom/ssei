<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_be988ca5939a9ad7c1dc7c2a528d8df8eaebb58454171cfeb115638328c8c7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_da94117bf6abc5d57bde9fd1be27cddf31a043dda659adc9c3b9adbb9ea33059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da94117bf6abc5d57bde9fd1be27cddf31a043dda659adc9c3b9adbb9ea33059->enter($__internal_da94117bf6abc5d57bde9fd1be27cddf31a043dda659adc9c3b9adbb9ea33059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da94117bf6abc5d57bde9fd1be27cddf31a043dda659adc9c3b9adbb9ea33059->leave($__internal_da94117bf6abc5d57bde9fd1be27cddf31a043dda659adc9c3b9adbb9ea33059_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0cae9d980cd7ccda3fdf31ef2625dbea94daac0b316da4f8d7fdb7a0c573c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cae9d980cd7ccda3fdf31ef2625dbea94daac0b316da4f8d7fdb7a0c573c58->enter($__internal_f0cae9d980cd7ccda3fdf31ef2625dbea94daac0b316da4f8d7fdb7a0c573c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_f0cae9d980cd7ccda3fdf31ef2625dbea94daac0b316da4f8d7fdb7a0c573c58->leave($__internal_f0cae9d980cd7ccda3fdf31ef2625dbea94daac0b316da4f8d7fdb7a0c573c58_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7aa27a354246c9d8c2353682439547c0c5b6eca51dee5c87ba2733edf4fc7df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa27a354246c9d8c2353682439547c0c5b6eca51dee5c87ba2733edf4fc7df1->enter($__internal_7aa27a354246c9d8c2353682439547c0c5b6eca51dee5c87ba2733edf4fc7df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_7aa27a354246c9d8c2353682439547c0c5b6eca51dee5c87ba2733edf4fc7df1->leave($__internal_7aa27a354246c9d8c2353682439547c0c5b6eca51dee5c87ba2733edf4fc7df1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd2d9e6efaefe54aee6534ec81cc3d85dfdd9d596a332cabfe098585bb895afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2d9e6efaefe54aee6534ec81cc3d85dfdd9d596a332cabfe098585bb895afa->enter($__internal_cd2d9e6efaefe54aee6534ec81cc3d85dfdd9d596a332cabfe098585bb895afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_cd2d9e6efaefe54aee6534ec81cc3d85dfdd9d596a332cabfe098585bb895afa->leave($__internal_cd2d9e6efaefe54aee6534ec81cc3d85dfdd9d596a332cabfe098585bb895afa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
