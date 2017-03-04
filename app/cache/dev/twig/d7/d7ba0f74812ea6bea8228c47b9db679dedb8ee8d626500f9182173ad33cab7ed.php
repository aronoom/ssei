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
        $__internal_31ef549a2b5a41335435a41a00aab118b69881635f775f6c8eb398494e72dba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ef549a2b5a41335435a41a00aab118b69881635f775f6c8eb398494e72dba7->enter($__internal_31ef549a2b5a41335435a41a00aab118b69881635f775f6c8eb398494e72dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31ef549a2b5a41335435a41a00aab118b69881635f775f6c8eb398494e72dba7->leave($__internal_31ef549a2b5a41335435a41a00aab118b69881635f775f6c8eb398494e72dba7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2ad4614bee5e29cd28dbcb1de0a647b88fb19e9b4c1dcee6bf5e16e564bbbd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad4614bee5e29cd28dbcb1de0a647b88fb19e9b4c1dcee6bf5e16e564bbbd1d->enter($__internal_2ad4614bee5e29cd28dbcb1de0a647b88fb19e9b4c1dcee6bf5e16e564bbbd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2ad4614bee5e29cd28dbcb1de0a647b88fb19e9b4c1dcee6bf5e16e564bbbd1d->leave($__internal_2ad4614bee5e29cd28dbcb1de0a647b88fb19e9b4c1dcee6bf5e16e564bbbd1d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a425778ca4ef5f7dcfa8929ca9e8790acb863419cbfcb5e745cdfe6bc2bb4fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a425778ca4ef5f7dcfa8929ca9e8790acb863419cbfcb5e745cdfe6bc2bb4fee->enter($__internal_a425778ca4ef5f7dcfa8929ca9e8790acb863419cbfcb5e745cdfe6bc2bb4fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a425778ca4ef5f7dcfa8929ca9e8790acb863419cbfcb5e745cdfe6bc2bb4fee->leave($__internal_a425778ca4ef5f7dcfa8929ca9e8790acb863419cbfcb5e745cdfe6bc2bb4fee_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f8f1c42d679ea27b4d703b7e041d2f603586f2961f370d177bc57ce00680fd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f1c42d679ea27b4d703b7e041d2f603586f2961f370d177bc57ce00680fd72->enter($__internal_f8f1c42d679ea27b4d703b7e041d2f603586f2961f370d177bc57ce00680fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f8f1c42d679ea27b4d703b7e041d2f603586f2961f370d177bc57ce00680fd72->leave($__internal_f8f1c42d679ea27b4d703b7e041d2f603586f2961f370d177bc57ce00680fd72_prof);

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
