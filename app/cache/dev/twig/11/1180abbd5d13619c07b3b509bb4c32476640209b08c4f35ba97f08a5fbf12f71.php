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
        $__internal_9f373c043a352e5ab20f85582dbbd03d2dcca34c476fd959526b15b108a8710a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f373c043a352e5ab20f85582dbbd03d2dcca34c476fd959526b15b108a8710a->enter($__internal_9f373c043a352e5ab20f85582dbbd03d2dcca34c476fd959526b15b108a8710a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f373c043a352e5ab20f85582dbbd03d2dcca34c476fd959526b15b108a8710a->leave($__internal_9f373c043a352e5ab20f85582dbbd03d2dcca34c476fd959526b15b108a8710a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc89a3d748db9e8f38f3d737668c05ec3c660442fff6414e2e4dbaec9abd799e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc89a3d748db9e8f38f3d737668c05ec3c660442fff6414e2e4dbaec9abd799e->enter($__internal_dc89a3d748db9e8f38f3d737668c05ec3c660442fff6414e2e4dbaec9abd799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_dc89a3d748db9e8f38f3d737668c05ec3c660442fff6414e2e4dbaec9abd799e->leave($__internal_dc89a3d748db9e8f38f3d737668c05ec3c660442fff6414e2e4dbaec9abd799e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f59e5cd35db2ae7cdaf5bdc39da049ba5b06a745c9f73c45182542398744e9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59e5cd35db2ae7cdaf5bdc39da049ba5b06a745c9f73c45182542398744e9b1->enter($__internal_f59e5cd35db2ae7cdaf5bdc39da049ba5b06a745c9f73c45182542398744e9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_f59e5cd35db2ae7cdaf5bdc39da049ba5b06a745c9f73c45182542398744e9b1->leave($__internal_f59e5cd35db2ae7cdaf5bdc39da049ba5b06a745c9f73c45182542398744e9b1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb8efd53ba44489721360477bce8b1f86eb557880340adff7f6d50a93aa12bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8efd53ba44489721360477bce8b1f86eb557880340adff7f6d50a93aa12bed->enter($__internal_eb8efd53ba44489721360477bce8b1f86eb557880340adff7f6d50a93aa12bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_eb8efd53ba44489721360477bce8b1f86eb557880340adff7f6d50a93aa12bed->leave($__internal_eb8efd53ba44489721360477bce8b1f86eb557880340adff7f6d50a93aa12bed_prof);

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
