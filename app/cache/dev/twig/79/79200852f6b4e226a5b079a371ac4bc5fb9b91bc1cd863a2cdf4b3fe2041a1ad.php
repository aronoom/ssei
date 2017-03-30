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
        $__internal_52acf41bffe683bba0c0137cd503e19770ada52832fa14f35682ac087c58dbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52acf41bffe683bba0c0137cd503e19770ada52832fa14f35682ac087c58dbef->enter($__internal_52acf41bffe683bba0c0137cd503e19770ada52832fa14f35682ac087c58dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_52acf41bffe683bba0c0137cd503e19770ada52832fa14f35682ac087c58dbef->leave($__internal_52acf41bffe683bba0c0137cd503e19770ada52832fa14f35682ac087c58dbef_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ec108044559603553f262dc27b2c2dec929f58e60690d87bb23ad34db72f804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec108044559603553f262dc27b2c2dec929f58e60690d87bb23ad34db72f804->enter($__internal_4ec108044559603553f262dc27b2c2dec929f58e60690d87bb23ad34db72f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4ec108044559603553f262dc27b2c2dec929f58e60690d87bb23ad34db72f804->leave($__internal_4ec108044559603553f262dc27b2c2dec929f58e60690d87bb23ad34db72f804_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_03bccf3faca1a382935cd11fe16e64838481601dfd2912fc9f0043aa10954e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bccf3faca1a382935cd11fe16e64838481601dfd2912fc9f0043aa10954e91->enter($__internal_03bccf3faca1a382935cd11fe16e64838481601dfd2912fc9f0043aa10954e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_03bccf3faca1a382935cd11fe16e64838481601dfd2912fc9f0043aa10954e91->leave($__internal_03bccf3faca1a382935cd11fe16e64838481601dfd2912fc9f0043aa10954e91_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_469312f6780fa253d51d124f961b86ea54dc4b032ad2dfde939e4b9e0084d1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469312f6780fa253d51d124f961b86ea54dc4b032ad2dfde939e4b9e0084d1ba->enter($__internal_469312f6780fa253d51d124f961b86ea54dc4b032ad2dfde939e4b9e0084d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_469312f6780fa253d51d124f961b86ea54dc4b032ad2dfde939e4b9e0084d1ba->leave($__internal_469312f6780fa253d51d124f961b86ea54dc4b032ad2dfde939e4b9e0084d1ba_prof);

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
