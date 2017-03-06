<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_06ef76c28bbfc640519c3cbc716ce638348c884c67edd8f49c64556a1ec364b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
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
        $__internal_1f6a4f1b65376120f3ef849d695a06e19a925f75760e2aca5b01a8d83a5075bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6a4f1b65376120f3ef849d695a06e19a925f75760e2aca5b01a8d83a5075bc->enter($__internal_1f6a4f1b65376120f3ef849d695a06e19a925f75760e2aca5b01a8d83a5075bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6a4f1b65376120f3ef849d695a06e19a925f75760e2aca5b01a8d83a5075bc->leave($__internal_1f6a4f1b65376120f3ef849d695a06e19a925f75760e2aca5b01a8d83a5075bc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c94e2c81eda99e815075dc2301f12067972ae7e9ab7740deb1572fb5a3b474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c94e2c81eda99e815075dc2301f12067972ae7e9ab7740deb1572fb5a3b474->enter($__internal_78c94e2c81eda99e815075dc2301f12067972ae7e9ab7740deb1572fb5a3b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_78c94e2c81eda99e815075dc2301f12067972ae7e9ab7740deb1572fb5a3b474->leave($__internal_78c94e2c81eda99e815075dc2301f12067972ae7e9ab7740deb1572fb5a3b474_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d16de0b9ae9a6e7ce14ffa58692ecac8bc7841224ca6ef2fa4dde67fc8e431f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d16de0b9ae9a6e7ce14ffa58692ecac8bc7841224ca6ef2fa4dde67fc8e431f->enter($__internal_0d16de0b9ae9a6e7ce14ffa58692ecac8bc7841224ca6ef2fa4dde67fc8e431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_0d16de0b9ae9a6e7ce14ffa58692ecac8bc7841224ca6ef2fa4dde67fc8e431f->leave($__internal_0d16de0b9ae9a6e7ce14ffa58692ecac8bc7841224ca6ef2fa4dde67fc8e431f_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6f0c24ce7c432f4371d49ba1c0e12186d1b8ff73579a60f410e29b0868c8fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f0c24ce7c432f4371d49ba1c0e12186d1b8ff73579a60f410e29b0868c8fe3->enter($__internal_a6f0c24ce7c432f4371d49ba1c0e12186d1b8ff73579a60f410e29b0868c8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a6f0c24ce7c432f4371d49ba1c0e12186d1b8ff73579a60f410e29b0868c8fe3->leave($__internal_a6f0c24ce7c432f4371d49ba1c0e12186d1b8ff73579a60f410e29b0868c8fe3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
