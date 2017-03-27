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
        $__internal_0aefc7d23c119d54690a338552a4d5c02137b3c96e02345f328dd301b3ae54a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aefc7d23c119d54690a338552a4d5c02137b3c96e02345f328dd301b3ae54a8->enter($__internal_0aefc7d23c119d54690a338552a4d5c02137b3c96e02345f328dd301b3ae54a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aefc7d23c119d54690a338552a4d5c02137b3c96e02345f328dd301b3ae54a8->leave($__internal_0aefc7d23c119d54690a338552a4d5c02137b3c96e02345f328dd301b3ae54a8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d565ef3c18694177b5206f3507b9366af726a82e4dd34fc7d9ddc8d84e6a8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d565ef3c18694177b5206f3507b9366af726a82e4dd34fc7d9ddc8d84e6a8b1->enter($__internal_2d565ef3c18694177b5206f3507b9366af726a82e4dd34fc7d9ddc8d84e6a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_2d565ef3c18694177b5206f3507b9366af726a82e4dd34fc7d9ddc8d84e6a8b1->leave($__internal_2d565ef3c18694177b5206f3507b9366af726a82e4dd34fc7d9ddc8d84e6a8b1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b9686c7fc0782aaf467aa307d6c9d784e8d84f860bc68ec984c3cd7163b8300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9686c7fc0782aaf467aa307d6c9d784e8d84f860bc68ec984c3cd7163b8300->enter($__internal_4b9686c7fc0782aaf467aa307d6c9d784e8d84f860bc68ec984c3cd7163b8300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_4b9686c7fc0782aaf467aa307d6c9d784e8d84f860bc68ec984c3cd7163b8300->leave($__internal_4b9686c7fc0782aaf467aa307d6c9d784e8d84f860bc68ec984c3cd7163b8300_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fdd9625dd634cbb65664549b5efc03a832ca32016b55cab5b01af91fddba770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdd9625dd634cbb65664549b5efc03a832ca32016b55cab5b01af91fddba770->enter($__internal_9fdd9625dd634cbb65664549b5efc03a832ca32016b55cab5b01af91fddba770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9fdd9625dd634cbb65664549b5efc03a832ca32016b55cab5b01af91fddba770->leave($__internal_9fdd9625dd634cbb65664549b5efc03a832ca32016b55cab5b01af91fddba770_prof);

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
