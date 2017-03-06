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
        $__internal_4fce261f3d3dcf881c235aa60e4c0010905db6e315f46ad3533ac51371a1161d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fce261f3d3dcf881c235aa60e4c0010905db6e315f46ad3533ac51371a1161d->enter($__internal_4fce261f3d3dcf881c235aa60e4c0010905db6e315f46ad3533ac51371a1161d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fce261f3d3dcf881c235aa60e4c0010905db6e315f46ad3533ac51371a1161d->leave($__internal_4fce261f3d3dcf881c235aa60e4c0010905db6e315f46ad3533ac51371a1161d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bccf1051d08747b81f6b64cc4b21d99eb75b1c6b39e6b1e812815dd4628c035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bccf1051d08747b81f6b64cc4b21d99eb75b1c6b39e6b1e812815dd4628c035->enter($__internal_9bccf1051d08747b81f6b64cc4b21d99eb75b1c6b39e6b1e812815dd4628c035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_9bccf1051d08747b81f6b64cc4b21d99eb75b1c6b39e6b1e812815dd4628c035->leave($__internal_9bccf1051d08747b81f6b64cc4b21d99eb75b1c6b39e6b1e812815dd4628c035_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a82d8eb65d3b060806e86da393e79bc224919de01fce9b4304d3925237f661c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a82d8eb65d3b060806e86da393e79bc224919de01fce9b4304d3925237f661c->enter($__internal_4a82d8eb65d3b060806e86da393e79bc224919de01fce9b4304d3925237f661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_4a82d8eb65d3b060806e86da393e79bc224919de01fce9b4304d3925237f661c->leave($__internal_4a82d8eb65d3b060806e86da393e79bc224919de01fce9b4304d3925237f661c_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2319a89c840b1341f26a21dc4c61518b492a34f06bea953b5d89b3f64ab023b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2319a89c840b1341f26a21dc4c61518b492a34f06bea953b5d89b3f64ab023b3->enter($__internal_2319a89c840b1341f26a21dc4c61518b492a34f06bea953b5d89b3f64ab023b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_2319a89c840b1341f26a21dc4c61518b492a34f06bea953b5d89b3f64ab023b3->leave($__internal_2319a89c840b1341f26a21dc4c61518b492a34f06bea953b5d89b3f64ab023b3_prof);

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
