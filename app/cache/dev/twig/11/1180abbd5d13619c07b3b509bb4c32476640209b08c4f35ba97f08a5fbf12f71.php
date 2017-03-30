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
        $__internal_31b202a6b146ca4c4c64c94cac845bb16e7ce065d36980aa04be22e53208dc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b202a6b146ca4c4c64c94cac845bb16e7ce065d36980aa04be22e53208dc9b->enter($__internal_31b202a6b146ca4c4c64c94cac845bb16e7ce065d36980aa04be22e53208dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b202a6b146ca4c4c64c94cac845bb16e7ce065d36980aa04be22e53208dc9b->leave($__internal_31b202a6b146ca4c4c64c94cac845bb16e7ce065d36980aa04be22e53208dc9b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cad661ddda46b3b1e3070fe749678e9c6cf1d87a224a06034abc4aa8528a7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cad661ddda46b3b1e3070fe749678e9c6cf1d87a224a06034abc4aa8528a7d8->enter($__internal_9cad661ddda46b3b1e3070fe749678e9c6cf1d87a224a06034abc4aa8528a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_9cad661ddda46b3b1e3070fe749678e9c6cf1d87a224a06034abc4aa8528a7d8->leave($__internal_9cad661ddda46b3b1e3070fe749678e9c6cf1d87a224a06034abc4aa8528a7d8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5078f510bcde871aed94999111743659b71662b6601d966513756e8062f19985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5078f510bcde871aed94999111743659b71662b6601d966513756e8062f19985->enter($__internal_5078f510bcde871aed94999111743659b71662b6601d966513756e8062f19985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_5078f510bcde871aed94999111743659b71662b6601d966513756e8062f19985->leave($__internal_5078f510bcde871aed94999111743659b71662b6601d966513756e8062f19985_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_305c5a125f22dea83885aedec176fcd6896a962dd5135fb29e330696525206a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305c5a125f22dea83885aedec176fcd6896a962dd5135fb29e330696525206a2->enter($__internal_305c5a125f22dea83885aedec176fcd6896a962dd5135fb29e330696525206a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_305c5a125f22dea83885aedec176fcd6896a962dd5135fb29e330696525206a2->leave($__internal_305c5a125f22dea83885aedec176fcd6896a962dd5135fb29e330696525206a2_prof);

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
