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
        $__internal_5a2ecbdf895035c3d67ea3c7c51289d4680f4375b7b33a29f3aeaed292eb0fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2ecbdf895035c3d67ea3c7c51289d4680f4375b7b33a29f3aeaed292eb0fe9->enter($__internal_5a2ecbdf895035c3d67ea3c7c51289d4680f4375b7b33a29f3aeaed292eb0fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2ecbdf895035c3d67ea3c7c51289d4680f4375b7b33a29f3aeaed292eb0fe9->leave($__internal_5a2ecbdf895035c3d67ea3c7c51289d4680f4375b7b33a29f3aeaed292eb0fe9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5efb1142052322a4b384f1ec0a7ddb9eb3f4f1e6ea3daf7319b179a8327764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5efb1142052322a4b384f1ec0a7ddb9eb3f4f1e6ea3daf7319b179a8327764->enter($__internal_0d5efb1142052322a4b384f1ec0a7ddb9eb3f4f1e6ea3daf7319b179a8327764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_0d5efb1142052322a4b384f1ec0a7ddb9eb3f4f1e6ea3daf7319b179a8327764->leave($__internal_0d5efb1142052322a4b384f1ec0a7ddb9eb3f4f1e6ea3daf7319b179a8327764_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c33a9a9813623e3b99a46a248cd55a787c05cfb70a165ada35f99257ae98f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c33a9a9813623e3b99a46a248cd55a787c05cfb70a165ada35f99257ae98f2e->enter($__internal_2c33a9a9813623e3b99a46a248cd55a787c05cfb70a165ada35f99257ae98f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_2c33a9a9813623e3b99a46a248cd55a787c05cfb70a165ada35f99257ae98f2e->leave($__internal_2c33a9a9813623e3b99a46a248cd55a787c05cfb70a165ada35f99257ae98f2e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9458faec8db3f2aa44ac2b4a47995da55bac4afed60a9504db3e2af46156ad92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9458faec8db3f2aa44ac2b4a47995da55bac4afed60a9504db3e2af46156ad92->enter($__internal_9458faec8db3f2aa44ac2b4a47995da55bac4afed60a9504db3e2af46156ad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9458faec8db3f2aa44ac2b4a47995da55bac4afed60a9504db3e2af46156ad92->leave($__internal_9458faec8db3f2aa44ac2b4a47995da55bac4afed60a9504db3e2af46156ad92_prof);

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
