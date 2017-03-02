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
        $__internal_9b6b607836f2c65929b00e0571dfcebd41de592e69fcda51a66ea6e8060223a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6b607836f2c65929b00e0571dfcebd41de592e69fcda51a66ea6e8060223a3->enter($__internal_9b6b607836f2c65929b00e0571dfcebd41de592e69fcda51a66ea6e8060223a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6b607836f2c65929b00e0571dfcebd41de592e69fcda51a66ea6e8060223a3->leave($__internal_9b6b607836f2c65929b00e0571dfcebd41de592e69fcda51a66ea6e8060223a3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb9525ee0d985e0abaee7848ff1d6589bfefe7d50fabad7ef2e68e0c4044dfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9525ee0d985e0abaee7848ff1d6589bfefe7d50fabad7ef2e68e0c4044dfe3->enter($__internal_bb9525ee0d985e0abaee7848ff1d6589bfefe7d50fabad7ef2e68e0c4044dfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_bb9525ee0d985e0abaee7848ff1d6589bfefe7d50fabad7ef2e68e0c4044dfe3->leave($__internal_bb9525ee0d985e0abaee7848ff1d6589bfefe7d50fabad7ef2e68e0c4044dfe3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f2f874c48ceacaf48eec77cb8fd4cbe359af52d240fa60203a05bdf31f5c17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2f874c48ceacaf48eec77cb8fd4cbe359af52d240fa60203a05bdf31f5c17f->enter($__internal_5f2f874c48ceacaf48eec77cb8fd4cbe359af52d240fa60203a05bdf31f5c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_5f2f874c48ceacaf48eec77cb8fd4cbe359af52d240fa60203a05bdf31f5c17f->leave($__internal_5f2f874c48ceacaf48eec77cb8fd4cbe359af52d240fa60203a05bdf31f5c17f_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_754a77454d1c43e9066add173dfd06d975450b840f5cdd53162b5e4429d16ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754a77454d1c43e9066add173dfd06d975450b840f5cdd53162b5e4429d16ccc->enter($__internal_754a77454d1c43e9066add173dfd06d975450b840f5cdd53162b5e4429d16ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_754a77454d1c43e9066add173dfd06d975450b840f5cdd53162b5e4429d16ccc->leave($__internal_754a77454d1c43e9066add173dfd06d975450b840f5cdd53162b5e4429d16ccc_prof);

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
