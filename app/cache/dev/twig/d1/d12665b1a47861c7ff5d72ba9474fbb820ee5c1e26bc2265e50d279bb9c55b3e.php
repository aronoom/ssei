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
        $__internal_a41953b560d55b3a1751b6c196665e145ecbd4989e7c3f5b4e94a83ece8415ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41953b560d55b3a1751b6c196665e145ecbd4989e7c3f5b4e94a83ece8415ca->enter($__internal_a41953b560d55b3a1751b6c196665e145ecbd4989e7c3f5b4e94a83ece8415ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41953b560d55b3a1751b6c196665e145ecbd4989e7c3f5b4e94a83ece8415ca->leave($__internal_a41953b560d55b3a1751b6c196665e145ecbd4989e7c3f5b4e94a83ece8415ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9729ef55c3c19a78e15dd976e927d4a5ceccdb0bd338c51a7c8587c28648a644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9729ef55c3c19a78e15dd976e927d4a5ceccdb0bd338c51a7c8587c28648a644->enter($__internal_9729ef55c3c19a78e15dd976e927d4a5ceccdb0bd338c51a7c8587c28648a644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9729ef55c3c19a78e15dd976e927d4a5ceccdb0bd338c51a7c8587c28648a644->leave($__internal_9729ef55c3c19a78e15dd976e927d4a5ceccdb0bd338c51a7c8587c28648a644_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b662f074169d643de54fb160257a51067804b70f948fa2366c69d04ee51b7916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b662f074169d643de54fb160257a51067804b70f948fa2366c69d04ee51b7916->enter($__internal_b662f074169d643de54fb160257a51067804b70f948fa2366c69d04ee51b7916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b662f074169d643de54fb160257a51067804b70f948fa2366c69d04ee51b7916->leave($__internal_b662f074169d643de54fb160257a51067804b70f948fa2366c69d04ee51b7916_prof);

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
