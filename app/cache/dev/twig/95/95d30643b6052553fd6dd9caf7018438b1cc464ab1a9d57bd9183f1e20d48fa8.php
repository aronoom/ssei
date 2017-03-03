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
        $__internal_7d23c4b7807d34444b8cf66213e0a43e02f574c77e67a482b6c7291820a4b004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d23c4b7807d34444b8cf66213e0a43e02f574c77e67a482b6c7291820a4b004->enter($__internal_7d23c4b7807d34444b8cf66213e0a43e02f574c77e67a482b6c7291820a4b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d23c4b7807d34444b8cf66213e0a43e02f574c77e67a482b6c7291820a4b004->leave($__internal_7d23c4b7807d34444b8cf66213e0a43e02f574c77e67a482b6c7291820a4b004_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5a6d13bca5b891cf33735d5836765a87c07013b28e360a856daaa14920bde6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a6d13bca5b891cf33735d5836765a87c07013b28e360a856daaa14920bde6b->enter($__internal_f5a6d13bca5b891cf33735d5836765a87c07013b28e360a856daaa14920bde6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_f5a6d13bca5b891cf33735d5836765a87c07013b28e360a856daaa14920bde6b->leave($__internal_f5a6d13bca5b891cf33735d5836765a87c07013b28e360a856daaa14920bde6b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e1541433436efa3fc039c00e00d17fa06f8945621418790c8650fbc8fd7cdc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1541433436efa3fc039c00e00d17fa06f8945621418790c8650fbc8fd7cdc80->enter($__internal_e1541433436efa3fc039c00e00d17fa06f8945621418790c8650fbc8fd7cdc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_e1541433436efa3fc039c00e00d17fa06f8945621418790c8650fbc8fd7cdc80->leave($__internal_e1541433436efa3fc039c00e00d17fa06f8945621418790c8650fbc8fd7cdc80_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0b397d8e5e732b0935c9ab1143d041ea8f11dd11130aafad9200d46043e5a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b397d8e5e732b0935c9ab1143d041ea8f11dd11130aafad9200d46043e5a04->enter($__internal_d0b397d8e5e732b0935c9ab1143d041ea8f11dd11130aafad9200d46043e5a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d0b397d8e5e732b0935c9ab1143d041ea8f11dd11130aafad9200d46043e5a04->leave($__internal_d0b397d8e5e732b0935c9ab1143d041ea8f11dd11130aafad9200d46043e5a04_prof);

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
