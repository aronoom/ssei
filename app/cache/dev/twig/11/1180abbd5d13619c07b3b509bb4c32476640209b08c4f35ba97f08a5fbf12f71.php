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
        $__internal_a19d3abc468926722e03e604691512aa4d26bfa52cdb924f83e29af09ed6cfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19d3abc468926722e03e604691512aa4d26bfa52cdb924f83e29af09ed6cfbf->enter($__internal_a19d3abc468926722e03e604691512aa4d26bfa52cdb924f83e29af09ed6cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19d3abc468926722e03e604691512aa4d26bfa52cdb924f83e29af09ed6cfbf->leave($__internal_a19d3abc468926722e03e604691512aa4d26bfa52cdb924f83e29af09ed6cfbf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb061e00b6e33b875cd5b17f733685877b746ac71399880feea979ebde89c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb061e00b6e33b875cd5b17f733685877b746ac71399880feea979ebde89c13->enter($__internal_0fb061e00b6e33b875cd5b17f733685877b746ac71399880feea979ebde89c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_0fb061e00b6e33b875cd5b17f733685877b746ac71399880feea979ebde89c13->leave($__internal_0fb061e00b6e33b875cd5b17f733685877b746ac71399880feea979ebde89c13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_69e207b796aca76fbd951ecc1905df07118f9254e2d080c4deb5c0063a39751e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e207b796aca76fbd951ecc1905df07118f9254e2d080c4deb5c0063a39751e->enter($__internal_69e207b796aca76fbd951ecc1905df07118f9254e2d080c4deb5c0063a39751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_69e207b796aca76fbd951ecc1905df07118f9254e2d080c4deb5c0063a39751e->leave($__internal_69e207b796aca76fbd951ecc1905df07118f9254e2d080c4deb5c0063a39751e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_285e92f9ca55caf925c1fb322fd0a9853a509a2cc010f3b1d46b61ca76cd132a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285e92f9ca55caf925c1fb322fd0a9853a509a2cc010f3b1d46b61ca76cd132a->enter($__internal_285e92f9ca55caf925c1fb322fd0a9853a509a2cc010f3b1d46b61ca76cd132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_285e92f9ca55caf925c1fb322fd0a9853a509a2cc010f3b1d46b61ca76cd132a->leave($__internal_285e92f9ca55caf925c1fb322fd0a9853a509a2cc010f3b1d46b61ca76cd132a_prof);

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
