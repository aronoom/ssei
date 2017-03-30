<?php

/* ZoneBundle::layout.html.twig */
class __TwigTemplate_21c49c23449d2957ed1934b02641d9ca9221caaa33721005a4877684b6ba1d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ZoneBundle::layout.html.twig", 1);
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
        $__internal_5aa8d1da59c4a32c9eac98b664f87922d43040e97119962ca5c8e9be7728cf4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa8d1da59c4a32c9eac98b664f87922d43040e97119962ca5c8e9be7728cf4e->enter($__internal_5aa8d1da59c4a32c9eac98b664f87922d43040e97119962ca5c8e9be7728cf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa8d1da59c4a32c9eac98b664f87922d43040e97119962ca5c8e9be7728cf4e->leave($__internal_5aa8d1da59c4a32c9eac98b664f87922d43040e97119962ca5c8e9be7728cf4e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_15994104ca9c616e1b38270a5e4c1dd23af91a3cf8b6d3fc448f845feb75d5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15994104ca9c616e1b38270a5e4c1dd23af91a3cf8b6d3fc448f845feb75d5e2->enter($__internal_15994104ca9c616e1b38270a5e4c1dd23af91a3cf8b6d3fc448f845feb75d5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Location |";
        
        $__internal_15994104ca9c616e1b38270a5e4c1dd23af91a3cf8b6d3fc448f845feb75d5e2->leave($__internal_15994104ca9c616e1b38270a5e4c1dd23af91a3cf8b6d3fc448f845feb75d5e2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f8e13ee48a2a49ba5a4101c6a845449f03fc26722643063b27b3d19e42fef6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e13ee48a2a49ba5a4101c6a845449f03fc26722643063b27b3d19e42fef6a->enter($__internal_8f8e13ee48a2a49ba5a4101c6a845449f03fc26722643063b27b3d19e42fef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_8f8e13ee48a2a49ba5a4101c6a845449f03fc26722643063b27b3d19e42fef6a->leave($__internal_8f8e13ee48a2a49ba5a4101c6a845449f03fc26722643063b27b3d19e42fef6a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_945c8136d3094147279da635d9006866bde6876fdadc3be7bbce5a062636be76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945c8136d3094147279da635d9006866bde6876fdadc3be7bbce5a062636be76->enter($__internal_945c8136d3094147279da635d9006866bde6876fdadc3be7bbce5a062636be76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_945c8136d3094147279da635d9006866bde6876fdadc3be7bbce5a062636be76->leave($__internal_945c8136d3094147279da635d9006866bde6876fdadc3be7bbce5a062636be76_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle::layout.html.twig";
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
{% block title %}Location |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ZoneBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/layout.html.twig");
    }
}
