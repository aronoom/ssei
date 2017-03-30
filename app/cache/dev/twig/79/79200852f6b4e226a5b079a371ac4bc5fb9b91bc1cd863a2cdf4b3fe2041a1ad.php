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
        $__internal_1b5d1cb1aba3fd67dcf99304e819df8dc705eba1d59e8b01adb7c37e4a683a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5d1cb1aba3fd67dcf99304e819df8dc705eba1d59e8b01adb7c37e4a683a26->enter($__internal_1b5d1cb1aba3fd67dcf99304e819df8dc705eba1d59e8b01adb7c37e4a683a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1b5d1cb1aba3fd67dcf99304e819df8dc705eba1d59e8b01adb7c37e4a683a26->leave($__internal_1b5d1cb1aba3fd67dcf99304e819df8dc705eba1d59e8b01adb7c37e4a683a26_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8009b961c8e773cee510e29f85391e36f6abccb8c17beb785cd302759ceab460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8009b961c8e773cee510e29f85391e36f6abccb8c17beb785cd302759ceab460->enter($__internal_8009b961c8e773cee510e29f85391e36f6abccb8c17beb785cd302759ceab460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8009b961c8e773cee510e29f85391e36f6abccb8c17beb785cd302759ceab460->leave($__internal_8009b961c8e773cee510e29f85391e36f6abccb8c17beb785cd302759ceab460_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4e726bc8e2379347cc71fcb7fcebd8211dcd6ec47fa103cb9cdb61bc3450a227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e726bc8e2379347cc71fcb7fcebd8211dcd6ec47fa103cb9cdb61bc3450a227->enter($__internal_4e726bc8e2379347cc71fcb7fcebd8211dcd6ec47fa103cb9cdb61bc3450a227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e726bc8e2379347cc71fcb7fcebd8211dcd6ec47fa103cb9cdb61bc3450a227->leave($__internal_4e726bc8e2379347cc71fcb7fcebd8211dcd6ec47fa103cb9cdb61bc3450a227_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9b3724ac276d810074686236d93149fdf684fea65f930d0c2c5c523b24c44247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3724ac276d810074686236d93149fdf684fea65f930d0c2c5c523b24c44247->enter($__internal_9b3724ac276d810074686236d93149fdf684fea65f930d0c2c5c523b24c44247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9b3724ac276d810074686236d93149fdf684fea65f930d0c2c5c523b24c44247->leave($__internal_9b3724ac276d810074686236d93149fdf684fea65f930d0c2c5c523b24c44247_prof);

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
