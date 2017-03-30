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
        $__internal_56a5d127d53708a233cbe53c27daee604388bee34b1f90d7102150586129073a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a5d127d53708a233cbe53c27daee604388bee34b1f90d7102150586129073a->enter($__internal_56a5d127d53708a233cbe53c27daee604388bee34b1f90d7102150586129073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_56a5d127d53708a233cbe53c27daee604388bee34b1f90d7102150586129073a->leave($__internal_56a5d127d53708a233cbe53c27daee604388bee34b1f90d7102150586129073a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1e54eeeb7b0ef5894080572f030e74c027a61a9be6d339fefb0bbb0098b8cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e54eeeb7b0ef5894080572f030e74c027a61a9be6d339fefb0bbb0098b8cda->enter($__internal_f1e54eeeb7b0ef5894080572f030e74c027a61a9be6d339fefb0bbb0098b8cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1e54eeeb7b0ef5894080572f030e74c027a61a9be6d339fefb0bbb0098b8cda->leave($__internal_f1e54eeeb7b0ef5894080572f030e74c027a61a9be6d339fefb0bbb0098b8cda_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_680463d657743ab1b11c0f69e33ec3c5b30cf9b73b3b4e9792b1e773b4bb961e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680463d657743ab1b11c0f69e33ec3c5b30cf9b73b3b4e9792b1e773b4bb961e->enter($__internal_680463d657743ab1b11c0f69e33ec3c5b30cf9b73b3b4e9792b1e773b4bb961e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_680463d657743ab1b11c0f69e33ec3c5b30cf9b73b3b4e9792b1e773b4bb961e->leave($__internal_680463d657743ab1b11c0f69e33ec3c5b30cf9b73b3b4e9792b1e773b4bb961e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d25f0e7943cb8770fce4f2683de16853d573db39c453324a4ee9a67ca91094ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25f0e7943cb8770fce4f2683de16853d573db39c453324a4ee9a67ca91094ad->enter($__internal_d25f0e7943cb8770fce4f2683de16853d573db39c453324a4ee9a67ca91094ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d25f0e7943cb8770fce4f2683de16853d573db39c453324a4ee9a67ca91094ad->leave($__internal_d25f0e7943cb8770fce4f2683de16853d573db39c453324a4ee9a67ca91094ad_prof);

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
