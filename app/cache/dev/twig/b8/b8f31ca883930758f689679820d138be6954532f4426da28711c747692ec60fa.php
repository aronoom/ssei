<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14f2b6364f05972d94908097e663f6dead90b0a281f0d6ce8704d4c7d4889b53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f936cea6412bcc81635baf52d4ec4a9a4c186cb9a10a420dd599d9ef36dafef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f936cea6412bcc81635baf52d4ec4a9a4c186cb9a10a420dd599d9ef36dafef4->enter($__internal_f936cea6412bcc81635baf52d4ec4a9a4c186cb9a10a420dd599d9ef36dafef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f936cea6412bcc81635baf52d4ec4a9a4c186cb9a10a420dd599d9ef36dafef4->leave($__internal_f936cea6412bcc81635baf52d4ec4a9a4c186cb9a10a420dd599d9ef36dafef4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_430034e2f9ed2c8451ecbdd782217be2e96b8ba47a4abf4446af2c2bd4168371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430034e2f9ed2c8451ecbdd782217be2e96b8ba47a4abf4446af2c2bd4168371->enter($__internal_430034e2f9ed2c8451ecbdd782217be2e96b8ba47a4abf4446af2c2bd4168371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_430034e2f9ed2c8451ecbdd782217be2e96b8ba47a4abf4446af2c2bd4168371->leave($__internal_430034e2f9ed2c8451ecbdd782217be2e96b8ba47a4abf4446af2c2bd4168371_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3c6d0d6995c5ee98f3cbac297466d09a3f5cf53f25d3a99ca0f92efb4b64d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c6d0d6995c5ee98f3cbac297466d09a3f5cf53f25d3a99ca0f92efb4b64d3e->enter($__internal_b3c6d0d6995c5ee98f3cbac297466d09a3f5cf53f25d3a99ca0f92efb4b64d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3c6d0d6995c5ee98f3cbac297466d09a3f5cf53f25d3a99ca0f92efb4b64d3e->leave($__internal_b3c6d0d6995c5ee98f3cbac297466d09a3f5cf53f25d3a99ca0f92efb4b64d3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15e03f7169be3f5a983a875de407095dd0b1b168f0de5567d0720209277c3041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e03f7169be3f5a983a875de407095dd0b1b168f0de5567d0720209277c3041->enter($__internal_15e03f7169be3f5a983a875de407095dd0b1b168f0de5567d0720209277c3041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_15e03f7169be3f5a983a875de407095dd0b1b168f0de5567d0720209277c3041->leave($__internal_15e03f7169be3f5a983a875de407095dd0b1b168f0de5567d0720209277c3041_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
