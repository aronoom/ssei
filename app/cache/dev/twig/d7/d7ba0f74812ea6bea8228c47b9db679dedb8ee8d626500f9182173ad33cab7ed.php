<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e2a08e97af30b6e2de62ecf65bdf7253a73e37a2db565b50c2e28ac396fa9cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70d275ec5fd9e20e04af9bf17fe08d5dc2a38eab408acab8329ca4728753ed48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d275ec5fd9e20e04af9bf17fe08d5dc2a38eab408acab8329ca4728753ed48->enter($__internal_70d275ec5fd9e20e04af9bf17fe08d5dc2a38eab408acab8329ca4728753ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_70d275ec5fd9e20e04af9bf17fe08d5dc2a38eab408acab8329ca4728753ed48->leave($__internal_70d275ec5fd9e20e04af9bf17fe08d5dc2a38eab408acab8329ca4728753ed48_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5dd4cd32bb1b6174103600c46f7ea5cb14711962ecc70f0dd48e7e175c3a8519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd4cd32bb1b6174103600c46f7ea5cb14711962ecc70f0dd48e7e175c3a8519->enter($__internal_5dd4cd32bb1b6174103600c46f7ea5cb14711962ecc70f0dd48e7e175c3a8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5dd4cd32bb1b6174103600c46f7ea5cb14711962ecc70f0dd48e7e175c3a8519->leave($__internal_5dd4cd32bb1b6174103600c46f7ea5cb14711962ecc70f0dd48e7e175c3a8519_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3d728fdd77114d9435552ba29d48cbdaec64b2f6827cace9f2e114df2500855f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d728fdd77114d9435552ba29d48cbdaec64b2f6827cace9f2e114df2500855f->enter($__internal_3d728fdd77114d9435552ba29d48cbdaec64b2f6827cace9f2e114df2500855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d728fdd77114d9435552ba29d48cbdaec64b2f6827cace9f2e114df2500855f->leave($__internal_3d728fdd77114d9435552ba29d48cbdaec64b2f6827cace9f2e114df2500855f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b36b8fdc27f64f97ce6292b7c0e8cc333bb427a5eff6902c9b7268dca17d6b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36b8fdc27f64f97ce6292b7c0e8cc333bb427a5eff6902c9b7268dca17d6b25->enter($__internal_b36b8fdc27f64f97ce6292b7c0e8cc333bb427a5eff6902c9b7268dca17d6b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b36b8fdc27f64f97ce6292b7c0e8cc333bb427a5eff6902c9b7268dca17d6b25->leave($__internal_b36b8fdc27f64f97ce6292b7c0e8cc333bb427a5eff6902c9b7268dca17d6b25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
