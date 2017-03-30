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
        $__internal_e56c3138e06a9cb96f21645bfc97f9d3873a1bfb12f4da2f4b7e41804e968a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c3138e06a9cb96f21645bfc97f9d3873a1bfb12f4da2f4b7e41804e968a7b->enter($__internal_e56c3138e06a9cb96f21645bfc97f9d3873a1bfb12f4da2f4b7e41804e968a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56c3138e06a9cb96f21645bfc97f9d3873a1bfb12f4da2f4b7e41804e968a7b->leave($__internal_e56c3138e06a9cb96f21645bfc97f9d3873a1bfb12f4da2f4b7e41804e968a7b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_250e31b32bf4964b9ead0414d20706daddd01e85e70c07db54709049a6ddb7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250e31b32bf4964b9ead0414d20706daddd01e85e70c07db54709049a6ddb7c6->enter($__internal_250e31b32bf4964b9ead0414d20706daddd01e85e70c07db54709049a6ddb7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_250e31b32bf4964b9ead0414d20706daddd01e85e70c07db54709049a6ddb7c6->leave($__internal_250e31b32bf4964b9ead0414d20706daddd01e85e70c07db54709049a6ddb7c6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b034ba1fcfc4847932ffe00bde5961fd9b2c2cf904b3563d88cf3584b05a320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b034ba1fcfc4847932ffe00bde5961fd9b2c2cf904b3563d88cf3584b05a320->enter($__internal_4b034ba1fcfc4847932ffe00bde5961fd9b2c2cf904b3563d88cf3584b05a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_4b034ba1fcfc4847932ffe00bde5961fd9b2c2cf904b3563d88cf3584b05a320->leave($__internal_4b034ba1fcfc4847932ffe00bde5961fd9b2c2cf904b3563d88cf3584b05a320_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04e24c72025e26840c55ca63a621aabfb583857b4fe59cb32ce2b15b1c922908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e24c72025e26840c55ca63a621aabfb583857b4fe59cb32ce2b15b1c922908->enter($__internal_04e24c72025e26840c55ca63a621aabfb583857b4fe59cb32ce2b15b1c922908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_04e24c72025e26840c55ca63a621aabfb583857b4fe59cb32ce2b15b1c922908->leave($__internal_04e24c72025e26840c55ca63a621aabfb583857b4fe59cb32ce2b15b1c922908_prof);

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
