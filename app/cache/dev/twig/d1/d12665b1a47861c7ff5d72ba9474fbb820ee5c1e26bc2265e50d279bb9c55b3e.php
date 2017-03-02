<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6d7c7fcf972b2ab757f7519b92ada0c81ad841c7daa1b5a27ffa2ecf2ba898de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_628607621f9b7b958353270c7707ac93e3d5cc19da596409b8ae5e9b7feafdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628607621f9b7b958353270c7707ac93e3d5cc19da596409b8ae5e9b7feafdb2->enter($__internal_628607621f9b7b958353270c7707ac93e3d5cc19da596409b8ae5e9b7feafdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628607621f9b7b958353270c7707ac93e3d5cc19da596409b8ae5e9b7feafdb2->leave($__internal_628607621f9b7b958353270c7707ac93e3d5cc19da596409b8ae5e9b7feafdb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_853ea3d029e528a0db7aee9a58339d37f8f312d3df10db9e281593a302a44a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853ea3d029e528a0db7aee9a58339d37f8f312d3df10db9e281593a302a44a13->enter($__internal_853ea3d029e528a0db7aee9a58339d37f8f312d3df10db9e281593a302a44a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_853ea3d029e528a0db7aee9a58339d37f8f312d3df10db9e281593a302a44a13->leave($__internal_853ea3d029e528a0db7aee9a58339d37f8f312d3df10db9e281593a302a44a13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5aa9757f52640d31e1100551b88b5c3571d4bb1a8c9ed310e3424531b0c82e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5aa9757f52640d31e1100551b88b5c3571d4bb1a8c9ed310e3424531b0c82e9->enter($__internal_a5aa9757f52640d31e1100551b88b5c3571d4bb1a8c9ed310e3424531b0c82e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a5aa9757f52640d31e1100551b88b5c3571d4bb1a8c9ed310e3424531b0c82e9->leave($__internal_a5aa9757f52640d31e1100551b88b5c3571d4bb1a8c9ed310e3424531b0c82e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
