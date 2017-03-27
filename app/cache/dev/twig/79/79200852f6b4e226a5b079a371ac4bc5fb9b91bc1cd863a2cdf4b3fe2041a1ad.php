<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_46d3c444e6f1d0aac9af620c03d6536df699212296d1c7a29d5f79a6ad5d981a extends Twig_Template
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
        $__internal_5d674308e01f77184aeab16e0034951f57272ae2722274fb9f0eeccf987ac4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d674308e01f77184aeab16e0034951f57272ae2722274fb9f0eeccf987ac4b4->enter($__internal_5d674308e01f77184aeab16e0034951f57272ae2722274fb9f0eeccf987ac4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5d674308e01f77184aeab16e0034951f57272ae2722274fb9f0eeccf987ac4b4->leave($__internal_5d674308e01f77184aeab16e0034951f57272ae2722274fb9f0eeccf987ac4b4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6ef0db6ffb3c5bfc5d5722baeea77238dd8bf7ac47b3c848c4178715fc1e93c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef0db6ffb3c5bfc5d5722baeea77238dd8bf7ac47b3c848c4178715fc1e93c0->enter($__internal_6ef0db6ffb3c5bfc5d5722baeea77238dd8bf7ac47b3c848c4178715fc1e93c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ef0db6ffb3c5bfc5d5722baeea77238dd8bf7ac47b3c848c4178715fc1e93c0->leave($__internal_6ef0db6ffb3c5bfc5d5722baeea77238dd8bf7ac47b3c848c4178715fc1e93c0_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9080d8d117d24c4192fb8d99fcf45e9147d20b394fa9b5c977b4cded0e14a001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9080d8d117d24c4192fb8d99fcf45e9147d20b394fa9b5c977b4cded0e14a001->enter($__internal_9080d8d117d24c4192fb8d99fcf45e9147d20b394fa9b5c977b4cded0e14a001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9080d8d117d24c4192fb8d99fcf45e9147d20b394fa9b5c977b4cded0e14a001->leave($__internal_9080d8d117d24c4192fb8d99fcf45e9147d20b394fa9b5c977b4cded0e14a001_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99ab5941240123bae50b414820ebc33db4ded4fd47787bb7e6561358cbd98290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ab5941240123bae50b414820ebc33db4ded4fd47787bb7e6561358cbd98290->enter($__internal_99ab5941240123bae50b414820ebc33db4ded4fd47787bb7e6561358cbd98290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_99ab5941240123bae50b414820ebc33db4ded4fd47787bb7e6561358cbd98290->leave($__internal_99ab5941240123bae50b414820ebc33db4ded4fd47787bb7e6561358cbd98290_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
