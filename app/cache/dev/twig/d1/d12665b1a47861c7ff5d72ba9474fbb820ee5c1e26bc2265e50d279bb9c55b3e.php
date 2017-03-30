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
        $__internal_8e5bcb36cd8ed1b1db6bd48dd35957f333cf0e48ff6351543e0ca66ed0c879d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5bcb36cd8ed1b1db6bd48dd35957f333cf0e48ff6351543e0ca66ed0c879d9->enter($__internal_8e5bcb36cd8ed1b1db6bd48dd35957f333cf0e48ff6351543e0ca66ed0c879d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5bcb36cd8ed1b1db6bd48dd35957f333cf0e48ff6351543e0ca66ed0c879d9->leave($__internal_8e5bcb36cd8ed1b1db6bd48dd35957f333cf0e48ff6351543e0ca66ed0c879d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54023266821d62c5198b20757a794b72cc167a3af5a983ff38bfab2460c27664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54023266821d62c5198b20757a794b72cc167a3af5a983ff38bfab2460c27664->enter($__internal_54023266821d62c5198b20757a794b72cc167a3af5a983ff38bfab2460c27664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54023266821d62c5198b20757a794b72cc167a3af5a983ff38bfab2460c27664->leave($__internal_54023266821d62c5198b20757a794b72cc167a3af5a983ff38bfab2460c27664_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7fe8150841a27672918dfff072e57151aab594cd65218610383c317c7f78c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fe8150841a27672918dfff072e57151aab594cd65218610383c317c7f78c46->enter($__internal_a7fe8150841a27672918dfff072e57151aab594cd65218610383c317c7f78c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7fe8150841a27672918dfff072e57151aab594cd65218610383c317c7f78c46->leave($__internal_a7fe8150841a27672918dfff072e57151aab594cd65218610383c317c7f78c46_prof);

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
