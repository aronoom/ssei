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
        $__internal_cc632b3f33ba1b04de802e8ee702ee3ca9eeb9598f184768082dd63029e3b7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc632b3f33ba1b04de802e8ee702ee3ca9eeb9598f184768082dd63029e3b7fe->enter($__internal_cc632b3f33ba1b04de802e8ee702ee3ca9eeb9598f184768082dd63029e3b7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc632b3f33ba1b04de802e8ee702ee3ca9eeb9598f184768082dd63029e3b7fe->leave($__internal_cc632b3f33ba1b04de802e8ee702ee3ca9eeb9598f184768082dd63029e3b7fe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c79a5cbfc1121e848a705d0773ede2a3f43e6892ce571d784bda1624d50ad41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c79a5cbfc1121e848a705d0773ede2a3f43e6892ce571d784bda1624d50ad41->enter($__internal_2c79a5cbfc1121e848a705d0773ede2a3f43e6892ce571d784bda1624d50ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_2c79a5cbfc1121e848a705d0773ede2a3f43e6892ce571d784bda1624d50ad41->leave($__internal_2c79a5cbfc1121e848a705d0773ede2a3f43e6892ce571d784bda1624d50ad41_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c348d4362e2bdac9806b2e536105d36057a0bfb13c6cec3ffc32e7f6ff4218c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c348d4362e2bdac9806b2e536105d36057a0bfb13c6cec3ffc32e7f6ff4218c4->enter($__internal_c348d4362e2bdac9806b2e536105d36057a0bfb13c6cec3ffc32e7f6ff4218c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_c348d4362e2bdac9806b2e536105d36057a0bfb13c6cec3ffc32e7f6ff4218c4->leave($__internal_c348d4362e2bdac9806b2e536105d36057a0bfb13c6cec3ffc32e7f6ff4218c4_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_046bedc3d8affffaa8dd386a2fee0f0b3eddcc496e567abf4350a751fe8812b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046bedc3d8affffaa8dd386a2fee0f0b3eddcc496e567abf4350a751fe8812b5->enter($__internal_046bedc3d8affffaa8dd386a2fee0f0b3eddcc496e567abf4350a751fe8812b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_046bedc3d8affffaa8dd386a2fee0f0b3eddcc496e567abf4350a751fe8812b5->leave($__internal_046bedc3d8affffaa8dd386a2fee0f0b3eddcc496e567abf4350a751fe8812b5_prof);

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
