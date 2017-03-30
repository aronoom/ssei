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
        $__internal_259f67a22208594ccb717d0c4e49d0a27c67f5766f28f3b0dbd2b6c7a570dd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259f67a22208594ccb717d0c4e49d0a27c67f5766f28f3b0dbd2b6c7a570dd7e->enter($__internal_259f67a22208594ccb717d0c4e49d0a27c67f5766f28f3b0dbd2b6c7a570dd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259f67a22208594ccb717d0c4e49d0a27c67f5766f28f3b0dbd2b6c7a570dd7e->leave($__internal_259f67a22208594ccb717d0c4e49d0a27c67f5766f28f3b0dbd2b6c7a570dd7e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f46036a3859d1b7d7d7c083770f99daf28bc5938b99ed844d059784ba5f11d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f46036a3859d1b7d7d7c083770f99daf28bc5938b99ed844d059784ba5f11d5->enter($__internal_7f46036a3859d1b7d7d7c083770f99daf28bc5938b99ed844d059784ba5f11d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_7f46036a3859d1b7d7d7c083770f99daf28bc5938b99ed844d059784ba5f11d5->leave($__internal_7f46036a3859d1b7d7d7c083770f99daf28bc5938b99ed844d059784ba5f11d5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_68b4bcc87fb18e3e996521f15f53d03c2ce24e00527bc4612ba66446c4db1ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b4bcc87fb18e3e996521f15f53d03c2ce24e00527bc4612ba66446c4db1ddf->enter($__internal_68b4bcc87fb18e3e996521f15f53d03c2ce24e00527bc4612ba66446c4db1ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_68b4bcc87fb18e3e996521f15f53d03c2ce24e00527bc4612ba66446c4db1ddf->leave($__internal_68b4bcc87fb18e3e996521f15f53d03c2ce24e00527bc4612ba66446c4db1ddf_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e40c0cad11c6e59dc7cc96272168b7ac72f78a8b030d66bd3267179f295fe94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e40c0cad11c6e59dc7cc96272168b7ac72f78a8b030d66bd3267179f295fe94->enter($__internal_2e40c0cad11c6e59dc7cc96272168b7ac72f78a8b030d66bd3267179f295fe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_2e40c0cad11c6e59dc7cc96272168b7ac72f78a8b030d66bd3267179f295fe94->leave($__internal_2e40c0cad11c6e59dc7cc96272168b7ac72f78a8b030d66bd3267179f295fe94_prof);

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
