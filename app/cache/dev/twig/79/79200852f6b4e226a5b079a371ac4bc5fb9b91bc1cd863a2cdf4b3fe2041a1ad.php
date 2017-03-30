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
        $__internal_3649798ced00cf1d3d954eed0c4cb31d1fa111502ca87d3778be7d95c34e1b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3649798ced00cf1d3d954eed0c4cb31d1fa111502ca87d3778be7d95c34e1b1a->enter($__internal_3649798ced00cf1d3d954eed0c4cb31d1fa111502ca87d3778be7d95c34e1b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3649798ced00cf1d3d954eed0c4cb31d1fa111502ca87d3778be7d95c34e1b1a->leave($__internal_3649798ced00cf1d3d954eed0c4cb31d1fa111502ca87d3778be7d95c34e1b1a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4a025a867cc75aaa29f746ff20b43a45cbd258f32c1dbf4ffbd152bd22c59114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a025a867cc75aaa29f746ff20b43a45cbd258f32c1dbf4ffbd152bd22c59114->enter($__internal_4a025a867cc75aaa29f746ff20b43a45cbd258f32c1dbf4ffbd152bd22c59114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a025a867cc75aaa29f746ff20b43a45cbd258f32c1dbf4ffbd152bd22c59114->leave($__internal_4a025a867cc75aaa29f746ff20b43a45cbd258f32c1dbf4ffbd152bd22c59114_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_152740de33e129e4cd9aa3bfd3fb662eeded8b8f10070a4ab12ce12d99fa2004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152740de33e129e4cd9aa3bfd3fb662eeded8b8f10070a4ab12ce12d99fa2004->enter($__internal_152740de33e129e4cd9aa3bfd3fb662eeded8b8f10070a4ab12ce12d99fa2004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_152740de33e129e4cd9aa3bfd3fb662eeded8b8f10070a4ab12ce12d99fa2004->leave($__internal_152740de33e129e4cd9aa3bfd3fb662eeded8b8f10070a4ab12ce12d99fa2004_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c0facb48b7d9e928510600a19affea76da22d4bce878048c920b0e3dad132438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0facb48b7d9e928510600a19affea76da22d4bce878048c920b0e3dad132438->enter($__internal_c0facb48b7d9e928510600a19affea76da22d4bce878048c920b0e3dad132438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c0facb48b7d9e928510600a19affea76da22d4bce878048c920b0e3dad132438->leave($__internal_c0facb48b7d9e928510600a19affea76da22d4bce878048c920b0e3dad132438_prof);

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
