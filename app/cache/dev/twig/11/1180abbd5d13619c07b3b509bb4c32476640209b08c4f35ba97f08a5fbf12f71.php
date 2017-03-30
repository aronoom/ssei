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
        $__internal_af63fcad2527426d628b59d9fbb60edf878ae68b0051d46b792ec8a9b101f962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af63fcad2527426d628b59d9fbb60edf878ae68b0051d46b792ec8a9b101f962->enter($__internal_af63fcad2527426d628b59d9fbb60edf878ae68b0051d46b792ec8a9b101f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af63fcad2527426d628b59d9fbb60edf878ae68b0051d46b792ec8a9b101f962->leave($__internal_af63fcad2527426d628b59d9fbb60edf878ae68b0051d46b792ec8a9b101f962_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c965755832c89a390ef92532e5f6678c8fe59126dd70f673a49c65c749ad7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c965755832c89a390ef92532e5f6678c8fe59126dd70f673a49c65c749ad7fa->enter($__internal_0c965755832c89a390ef92532e5f6678c8fe59126dd70f673a49c65c749ad7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_0c965755832c89a390ef92532e5f6678c8fe59126dd70f673a49c65c749ad7fa->leave($__internal_0c965755832c89a390ef92532e5f6678c8fe59126dd70f673a49c65c749ad7fa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b030e3eceebf96a3894dd3397dc45a4dba562d5f54ff150ca215a53a7ae98f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b030e3eceebf96a3894dd3397dc45a4dba562d5f54ff150ca215a53a7ae98f3->enter($__internal_0b030e3eceebf96a3894dd3397dc45a4dba562d5f54ff150ca215a53a7ae98f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_0b030e3eceebf96a3894dd3397dc45a4dba562d5f54ff150ca215a53a7ae98f3->leave($__internal_0b030e3eceebf96a3894dd3397dc45a4dba562d5f54ff150ca215a53a7ae98f3_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3fc4052fd827b8f06d9ffd06f78538a1094730cc752a6c6c39ecf53a1a48821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fc4052fd827b8f06d9ffd06f78538a1094730cc752a6c6c39ecf53a1a48821->enter($__internal_e3fc4052fd827b8f06d9ffd06f78538a1094730cc752a6c6c39ecf53a1a48821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_e3fc4052fd827b8f06d9ffd06f78538a1094730cc752a6c6c39ecf53a1a48821->leave($__internal_e3fc4052fd827b8f06d9ffd06f78538a1094730cc752a6c6c39ecf53a1a48821_prof);

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
