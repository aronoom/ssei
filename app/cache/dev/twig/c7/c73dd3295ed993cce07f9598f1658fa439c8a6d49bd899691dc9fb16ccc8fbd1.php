<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_21c49c23449d2957ed1934b02641d9ca9221caaa33721005a4877684b6ba1d5e extends Twig_Template
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
        $__internal_df2644e56615906d8a14e0c9488aa249c43c2494b910c5569ab6ab4991204a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2644e56615906d8a14e0c9488aa249c43c2494b910c5569ab6ab4991204a79->enter($__internal_df2644e56615906d8a14e0c9488aa249c43c2494b910c5569ab6ab4991204a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2644e56615906d8a14e0c9488aa249c43c2494b910c5569ab6ab4991204a79->leave($__internal_df2644e56615906d8a14e0c9488aa249c43c2494b910c5569ab6ab4991204a79_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bc51ad537611009b5a8fd6c0b437e8b42351f8155e7c8d30d47fa3a6960d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc51ad537611009b5a8fd6c0b437e8b42351f8155e7c8d30d47fa3a6960d4bd->enter($__internal_4bc51ad537611009b5a8fd6c0b437e8b42351f8155e7c8d30d47fa3a6960d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_4bc51ad537611009b5a8fd6c0b437e8b42351f8155e7c8d30d47fa3a6960d4bd->leave($__internal_4bc51ad537611009b5a8fd6c0b437e8b42351f8155e7c8d30d47fa3a6960d4bd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_98828eacbe0c88bd9d40fa1920097bd2ee114381b233228ddd6947852e7b18d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98828eacbe0c88bd9d40fa1920097bd2ee114381b233228ddd6947852e7b18d4->enter($__internal_98828eacbe0c88bd9d40fa1920097bd2ee114381b233228ddd6947852e7b18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_98828eacbe0c88bd9d40fa1920097bd2ee114381b233228ddd6947852e7b18d4->leave($__internal_98828eacbe0c88bd9d40fa1920097bd2ee114381b233228ddd6947852e7b18d4_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f13e4d3913adbc7eb63635cc898e39b6cb085d28cc87ad8ce32a4448a32c4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f13e4d3913adbc7eb63635cc898e39b6cb085d28cc87ad8ce32a4448a32c4ff->enter($__internal_3f13e4d3913adbc7eb63635cc898e39b6cb085d28cc87ad8ce32a4448a32c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3f13e4d3913adbc7eb63635cc898e39b6cb085d28cc87ad8ce32a4448a32c4ff->leave($__internal_3f13e4d3913adbc7eb63635cc898e39b6cb085d28cc87ad8ce32a4448a32c4ff_prof);

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
