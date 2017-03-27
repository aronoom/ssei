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
        $__internal_843f4ca78468deac69f6a08f6705fb91a21e260890a89d55fdf741864a9b6f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843f4ca78468deac69f6a08f6705fb91a21e260890a89d55fdf741864a9b6f92->enter($__internal_843f4ca78468deac69f6a08f6705fb91a21e260890a89d55fdf741864a9b6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_843f4ca78468deac69f6a08f6705fb91a21e260890a89d55fdf741864a9b6f92->leave($__internal_843f4ca78468deac69f6a08f6705fb91a21e260890a89d55fdf741864a9b6f92_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_76f1796ec833256179e2c0dab8b03da25dd6c6df4abf63ce51e1f6db12f7960a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f1796ec833256179e2c0dab8b03da25dd6c6df4abf63ce51e1f6db12f7960a->enter($__internal_76f1796ec833256179e2c0dab8b03da25dd6c6df4abf63ce51e1f6db12f7960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_76f1796ec833256179e2c0dab8b03da25dd6c6df4abf63ce51e1f6db12f7960a->leave($__internal_76f1796ec833256179e2c0dab8b03da25dd6c6df4abf63ce51e1f6db12f7960a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d366f6f50aa804c00856ee7f1e05d3e2ad15311d78dd7c8db7b8f63497d8901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d366f6f50aa804c00856ee7f1e05d3e2ad15311d78dd7c8db7b8f63497d8901->enter($__internal_0d366f6f50aa804c00856ee7f1e05d3e2ad15311d78dd7c8db7b8f63497d8901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d366f6f50aa804c00856ee7f1e05d3e2ad15311d78dd7c8db7b8f63497d8901->leave($__internal_0d366f6f50aa804c00856ee7f1e05d3e2ad15311d78dd7c8db7b8f63497d8901_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3f24e6070f5287aa02c7008ea53676db0565fc54b1a25b3d6b747ac0a09e06a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f24e6070f5287aa02c7008ea53676db0565fc54b1a25b3d6b747ac0a09e06a8->enter($__internal_3f24e6070f5287aa02c7008ea53676db0565fc54b1a25b3d6b747ac0a09e06a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3f24e6070f5287aa02c7008ea53676db0565fc54b1a25b3d6b747ac0a09e06a8->leave($__internal_3f24e6070f5287aa02c7008ea53676db0565fc54b1a25b3d6b747ac0a09e06a8_prof);

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
