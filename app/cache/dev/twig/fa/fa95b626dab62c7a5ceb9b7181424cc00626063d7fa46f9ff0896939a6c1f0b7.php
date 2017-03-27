<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_c7f0c601a2fba3a16dd058d89842adec098a769e2ffa234ee3b8c55e5e9d6c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjetBundle::base.html.twig", "ProjetBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjetBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5fd7e03e66cca812677f89aa283e8a40a509298be2ae00da98eb095a68b6dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fd7e03e66cca812677f89aa283e8a40a509298be2ae00da98eb095a68b6dad->enter($__internal_f5fd7e03e66cca812677f89aa283e8a40a509298be2ae00da98eb095a68b6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fd7e03e66cca812677f89aa283e8a40a509298be2ae00da98eb095a68b6dad->leave($__internal_f5fd7e03e66cca812677f89aa283e8a40a509298be2ae00da98eb095a68b6dad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_08da5026e9509d6fd5aa331c73d508f49709a238123443f25769fd2f688f5055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da5026e9509d6fd5aa331c73d508f49709a238123443f25769fd2f688f5055->enter($__internal_08da5026e9509d6fd5aa331c73d508f49709a238123443f25769fd2f688f5055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_08da5026e9509d6fd5aa331c73d508f49709a238123443f25769fd2f688f5055->leave($__internal_08da5026e9509d6fd5aa331c73d508f49709a238123443f25769fd2f688f5055_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1187149cc6cfc40fe9338460c0c3dc4190968293ce2a56f13f3c7006c957970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1187149cc6cfc40fe9338460c0c3dc4190968293ce2a56f13f3c7006c957970->enter($__internal_d1187149cc6cfc40fe9338460c0c3dc4190968293ce2a56f13f3c7006c957970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_d1187149cc6cfc40fe9338460c0c3dc4190968293ce2a56f13f3c7006c957970->leave($__internal_d1187149cc6cfc40fe9338460c0c3dc4190968293ce2a56f13f3c7006c957970_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76e2a53d7845fd9aff86163087c758407c411961c0a2940f0b991000f10d10f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e2a53d7845fd9aff86163087c758407c411961c0a2940f0b991000f10d10f3->enter($__internal_76e2a53d7845fd9aff86163087c758407c411961c0a2940f0b991000f10d10f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_76e2a53d7845fd9aff86163087c758407c411961c0a2940f0b991000f10d10f3->leave($__internal_76e2a53d7845fd9aff86163087c758407c411961c0a2940f0b991000f10d10f3_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::layout.html.twig";
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
        return new Twig_Source("{% extends \"ProjetBundle::base.html.twig\" %}
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
