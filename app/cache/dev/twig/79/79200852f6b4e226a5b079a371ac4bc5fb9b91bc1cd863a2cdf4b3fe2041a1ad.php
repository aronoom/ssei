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
        $__internal_ced266f22cc663e4a77e3ef34bcc2a50c750376ea7243989111652a65bb26f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced266f22cc663e4a77e3ef34bcc2a50c750376ea7243989111652a65bb26f63->enter($__internal_ced266f22cc663e4a77e3ef34bcc2a50c750376ea7243989111652a65bb26f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ced266f22cc663e4a77e3ef34bcc2a50c750376ea7243989111652a65bb26f63->leave($__internal_ced266f22cc663e4a77e3ef34bcc2a50c750376ea7243989111652a65bb26f63_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83a48aaf6721e8d567aef656df1263b0b56fdf5feca45eec3dfcf6a2f4d8ea96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a48aaf6721e8d567aef656df1263b0b56fdf5feca45eec3dfcf6a2f4d8ea96->enter($__internal_83a48aaf6721e8d567aef656df1263b0b56fdf5feca45eec3dfcf6a2f4d8ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83a48aaf6721e8d567aef656df1263b0b56fdf5feca45eec3dfcf6a2f4d8ea96->leave($__internal_83a48aaf6721e8d567aef656df1263b0b56fdf5feca45eec3dfcf6a2f4d8ea96_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7f7b7f034236f01852d66154256d15993578e96ba78cf172a204630dc8c840a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7b7f034236f01852d66154256d15993578e96ba78cf172a204630dc8c840a6->enter($__internal_7f7b7f034236f01852d66154256d15993578e96ba78cf172a204630dc8c840a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7f7b7f034236f01852d66154256d15993578e96ba78cf172a204630dc8c840a6->leave($__internal_7f7b7f034236f01852d66154256d15993578e96ba78cf172a204630dc8c840a6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_19640e68f09e22c8337ea9104645d71e51bc8afaf8338aea363573e33df07b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19640e68f09e22c8337ea9104645d71e51bc8afaf8338aea363573e33df07b5e->enter($__internal_19640e68f09e22c8337ea9104645d71e51bc8afaf8338aea363573e33df07b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19640e68f09e22c8337ea9104645d71e51bc8afaf8338aea363573e33df07b5e->leave($__internal_19640e68f09e22c8337ea9104645d71e51bc8afaf8338aea363573e33df07b5e_prof);

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
