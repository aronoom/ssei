<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_fbaabada14839e66f6867d7080b998511f1aa7a6b0fed43338752ac56c7ae641 extends Twig_Template
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
        $__internal_727195a6f151bae171e049cbad754a110ea48ee892aff1f6704e4410ab878e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727195a6f151bae171e049cbad754a110ea48ee892aff1f6704e4410ab878e62->enter($__internal_727195a6f151bae171e049cbad754a110ea48ee892aff1f6704e4410ab878e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727195a6f151bae171e049cbad754a110ea48ee892aff1f6704e4410ab878e62->leave($__internal_727195a6f151bae171e049cbad754a110ea48ee892aff1f6704e4410ab878e62_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b582f69ac0be6f37b2562280db006916259d2b1a7cbb7fbc87a5b81cc0568ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b582f69ac0be6f37b2562280db006916259d2b1a7cbb7fbc87a5b81cc0568ec->enter($__internal_7b582f69ac0be6f37b2562280db006916259d2b1a7cbb7fbc87a5b81cc0568ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_7b582f69ac0be6f37b2562280db006916259d2b1a7cbb7fbc87a5b81cc0568ec->leave($__internal_7b582f69ac0be6f37b2562280db006916259d2b1a7cbb7fbc87a5b81cc0568ec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_26a949c986f458784de7a636b0b9255784ba9da58c1438c2a23eb1a8eef6d11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a949c986f458784de7a636b0b9255784ba9da58c1438c2a23eb1a8eef6d11b->enter($__internal_26a949c986f458784de7a636b0b9255784ba9da58c1438c2a23eb1a8eef6d11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_26a949c986f458784de7a636b0b9255784ba9da58c1438c2a23eb1a8eef6d11b->leave($__internal_26a949c986f458784de7a636b0b9255784ba9da58c1438c2a23eb1a8eef6d11b_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8670117a2beb2ba658bc416d3d0945e9badad3d48b76d9a56983b2430a33ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8670117a2beb2ba658bc416d3d0945e9badad3d48b76d9a56983b2430a33ad5->enter($__internal_b8670117a2beb2ba658bc416d3d0945e9badad3d48b76d9a56983b2430a33ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b8670117a2beb2ba658bc416d3d0945e9badad3d48b76d9a56983b2430a33ad5->leave($__internal_b8670117a2beb2ba658bc416d3d0945e9badad3d48b76d9a56983b2430a33ad5_prof);

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
