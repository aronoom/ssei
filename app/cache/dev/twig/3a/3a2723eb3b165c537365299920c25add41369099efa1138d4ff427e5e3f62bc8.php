<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ba2259b5696e36056f209aa6ffcfccf2b8d4c13100ca4617d9bc8b7d9bb66156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3744842b19c0038ae80915befaf700805de62039c0c0c7f252b2eb010d794a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3744842b19c0038ae80915befaf700805de62039c0c0c7f252b2eb010d794a1->enter($__internal_e3744842b19c0038ae80915befaf700805de62039c0c0c7f252b2eb010d794a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3744842b19c0038ae80915befaf700805de62039c0c0c7f252b2eb010d794a1->leave($__internal_e3744842b19c0038ae80915befaf700805de62039c0c0c7f252b2eb010d794a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d73526a5db8b1c696435b27787891673d05ddeee6b5186d708b3049911c4c521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73526a5db8b1c696435b27787891673d05ddeee6b5186d708b3049911c4c521->enter($__internal_d73526a5db8b1c696435b27787891673d05ddeee6b5186d708b3049911c4c521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d73526a5db8b1c696435b27787891673d05ddeee6b5186d708b3049911c4c521->leave($__internal_d73526a5db8b1c696435b27787891673d05ddeee6b5186d708b3049911c4c521_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
