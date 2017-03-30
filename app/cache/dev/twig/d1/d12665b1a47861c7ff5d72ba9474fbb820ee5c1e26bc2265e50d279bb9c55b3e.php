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
        $__internal_6a45f0c4da8a5f63e474f31dad548746215129076aa00f8755eca3003336a2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a45f0c4da8a5f63e474f31dad548746215129076aa00f8755eca3003336a2e9->enter($__internal_6a45f0c4da8a5f63e474f31dad548746215129076aa00f8755eca3003336a2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a45f0c4da8a5f63e474f31dad548746215129076aa00f8755eca3003336a2e9->leave($__internal_6a45f0c4da8a5f63e474f31dad548746215129076aa00f8755eca3003336a2e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e1aef584f541d6d4c8f31548c0e1438ffc9d6773d04d2dd82b5c4c0de650b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e1aef584f541d6d4c8f31548c0e1438ffc9d6773d04d2dd82b5c4c0de650b6->enter($__internal_f8e1aef584f541d6d4c8f31548c0e1438ffc9d6773d04d2dd82b5c4c0de650b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f8e1aef584f541d6d4c8f31548c0e1438ffc9d6773d04d2dd82b5c4c0de650b6->leave($__internal_f8e1aef584f541d6d4c8f31548c0e1438ffc9d6773d04d2dd82b5c4c0de650b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c542728cb443100ad14f57c9959d7fd7760dda3fc9063dfc02faf09c386cc39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c542728cb443100ad14f57c9959d7fd7760dda3fc9063dfc02faf09c386cc39c->enter($__internal_c542728cb443100ad14f57c9959d7fd7760dda3fc9063dfc02faf09c386cc39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c542728cb443100ad14f57c9959d7fd7760dda3fc9063dfc02faf09c386cc39c->leave($__internal_c542728cb443100ad14f57c9959d7fd7760dda3fc9063dfc02faf09c386cc39c_prof);

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
