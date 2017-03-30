<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_c7f0c601a2fba3a16dd058d89842adec098a769e2ffa234ee3b8c55e5e9d6c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle::layout.html.twig", 1);
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
        $__internal_9e63cc11b3eebaf05cfa732d79d1122824f9730b0eff3cab7984856e49e5b648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e63cc11b3eebaf05cfa732d79d1122824f9730b0eff3cab7984856e49e5b648->enter($__internal_9e63cc11b3eebaf05cfa732d79d1122824f9730b0eff3cab7984856e49e5b648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e63cc11b3eebaf05cfa732d79d1122824f9730b0eff3cab7984856e49e5b648->leave($__internal_9e63cc11b3eebaf05cfa732d79d1122824f9730b0eff3cab7984856e49e5b648_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae5fc0ccf65eb485a724320dac3d3c6992686bd78ab2f6aa65e5ac307c62f939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5fc0ccf65eb485a724320dac3d3c6992686bd78ab2f6aa65e5ac307c62f939->enter($__internal_ae5fc0ccf65eb485a724320dac3d3c6992686bd78ab2f6aa65e5ac307c62f939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_ae5fc0ccf65eb485a724320dac3d3c6992686bd78ab2f6aa65e5ac307c62f939->leave($__internal_ae5fc0ccf65eb485a724320dac3d3c6992686bd78ab2f6aa65e5ac307c62f939_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8cbb4107317def6800675f6406afddfd79617a38c4919c3d855cef366491f241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbb4107317def6800675f6406afddfd79617a38c4919c3d855cef366491f241->enter($__internal_8cbb4107317def6800675f6406afddfd79617a38c4919c3d855cef366491f241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_8cbb4107317def6800675f6406afddfd79617a38c4919c3d855cef366491f241->leave($__internal_8cbb4107317def6800675f6406afddfd79617a38c4919c3d855cef366491f241_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfcf65afc843461f360be01a019fcfa9772633614b03e03b9ba570f3d2ba5f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcf65afc843461f360be01a019fcfa9772633614b03e03b9ba570f3d2ba5f3a->enter($__internal_cfcf65afc843461f360be01a019fcfa9772633614b03e03b9ba570f3d2ba5f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_cfcf65afc843461f360be01a019fcfa9772633614b03e03b9ba570f3d2ba5f3a->leave($__internal_cfcf65afc843461f360be01a019fcfa9772633614b03e03b9ba570f3d2ba5f3a_prof);

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
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
