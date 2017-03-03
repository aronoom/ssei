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
        $__internal_c65369f2e52aa65dddf234515c73d6945859fad3e77c677e46390c8212907b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65369f2e52aa65dddf234515c73d6945859fad3e77c677e46390c8212907b6a->enter($__internal_c65369f2e52aa65dddf234515c73d6945859fad3e77c677e46390c8212907b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c65369f2e52aa65dddf234515c73d6945859fad3e77c677e46390c8212907b6a->leave($__internal_c65369f2e52aa65dddf234515c73d6945859fad3e77c677e46390c8212907b6a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_211ea37b5b67625a61e4887c6b7508a9d237424646779fdb6971a31c63b2fb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211ea37b5b67625a61e4887c6b7508a9d237424646779fdb6971a31c63b2fb23->enter($__internal_211ea37b5b67625a61e4887c6b7508a9d237424646779fdb6971a31c63b2fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_211ea37b5b67625a61e4887c6b7508a9d237424646779fdb6971a31c63b2fb23->leave($__internal_211ea37b5b67625a61e4887c6b7508a9d237424646779fdb6971a31c63b2fb23_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f386e64e0bf00f9ab69b7a231704f0ab6d84193f72d219ea2d831be40d5b330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f386e64e0bf00f9ab69b7a231704f0ab6d84193f72d219ea2d831be40d5b330->enter($__internal_5f386e64e0bf00f9ab69b7a231704f0ab6d84193f72d219ea2d831be40d5b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_5f386e64e0bf00f9ab69b7a231704f0ab6d84193f72d219ea2d831be40d5b330->leave($__internal_5f386e64e0bf00f9ab69b7a231704f0ab6d84193f72d219ea2d831be40d5b330_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93615728e0abc99f68d1aca229f85e2c0e20c3235cfb671a81c1b357eff7d730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93615728e0abc99f68d1aca229f85e2c0e20c3235cfb671a81c1b357eff7d730->enter($__internal_93615728e0abc99f68d1aca229f85e2c0e20c3235cfb671a81c1b357eff7d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_93615728e0abc99f68d1aca229f85e2c0e20c3235cfb671a81c1b357eff7d730->leave($__internal_93615728e0abc99f68d1aca229f85e2c0e20c3235cfb671a81c1b357eff7d730_prof);

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
