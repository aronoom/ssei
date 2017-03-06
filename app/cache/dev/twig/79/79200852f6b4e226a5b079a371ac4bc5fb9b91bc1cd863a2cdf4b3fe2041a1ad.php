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
        $__internal_fe7fae64acb8a92bd77bb182989162700b42b9954847321d4213ec9893ef5e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7fae64acb8a92bd77bb182989162700b42b9954847321d4213ec9893ef5e35->enter($__internal_fe7fae64acb8a92bd77bb182989162700b42b9954847321d4213ec9893ef5e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fe7fae64acb8a92bd77bb182989162700b42b9954847321d4213ec9893ef5e35->leave($__internal_fe7fae64acb8a92bd77bb182989162700b42b9954847321d4213ec9893ef5e35_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_903fa1fc3327f0fe386781e372d9e959c96cb58f5278eb9d85f3112eeadbb638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903fa1fc3327f0fe386781e372d9e959c96cb58f5278eb9d85f3112eeadbb638->enter($__internal_903fa1fc3327f0fe386781e372d9e959c96cb58f5278eb9d85f3112eeadbb638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_903fa1fc3327f0fe386781e372d9e959c96cb58f5278eb9d85f3112eeadbb638->leave($__internal_903fa1fc3327f0fe386781e372d9e959c96cb58f5278eb9d85f3112eeadbb638_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3abeefe04095b30475780280c22cf06c54146175c46b21c9ff6e43a368994c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abeefe04095b30475780280c22cf06c54146175c46b21c9ff6e43a368994c34->enter($__internal_3abeefe04095b30475780280c22cf06c54146175c46b21c9ff6e43a368994c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3abeefe04095b30475780280c22cf06c54146175c46b21c9ff6e43a368994c34->leave($__internal_3abeefe04095b30475780280c22cf06c54146175c46b21c9ff6e43a368994c34_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_09c869b35e79320a0d78f70bfabf6762d40cd73c7e138a73269ee71e897ba4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c869b35e79320a0d78f70bfabf6762d40cd73c7e138a73269ee71e897ba4c3->enter($__internal_09c869b35e79320a0d78f70bfabf6762d40cd73c7e138a73269ee71e897ba4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09c869b35e79320a0d78f70bfabf6762d40cd73c7e138a73269ee71e897ba4c3->leave($__internal_09c869b35e79320a0d78f70bfabf6762d40cd73c7e138a73269ee71e897ba4c3_prof);

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
