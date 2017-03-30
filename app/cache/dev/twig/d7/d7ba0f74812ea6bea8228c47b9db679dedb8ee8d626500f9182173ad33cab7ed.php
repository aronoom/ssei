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
        $__internal_3f755546c6442134a41c6f989a45bd400ea956a26bbbab6388cf12649fa8604b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f755546c6442134a41c6f989a45bd400ea956a26bbbab6388cf12649fa8604b->enter($__internal_3f755546c6442134a41c6f989a45bd400ea956a26bbbab6388cf12649fa8604b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3f755546c6442134a41c6f989a45bd400ea956a26bbbab6388cf12649fa8604b->leave($__internal_3f755546c6442134a41c6f989a45bd400ea956a26bbbab6388cf12649fa8604b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_692f8cbdba917e4dfd80f1ab783a43a86c9058d20b7b022b45304baee8bbcdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692f8cbdba917e4dfd80f1ab783a43a86c9058d20b7b022b45304baee8bbcdea->enter($__internal_692f8cbdba917e4dfd80f1ab783a43a86c9058d20b7b022b45304baee8bbcdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_692f8cbdba917e4dfd80f1ab783a43a86c9058d20b7b022b45304baee8bbcdea->leave($__internal_692f8cbdba917e4dfd80f1ab783a43a86c9058d20b7b022b45304baee8bbcdea_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a6d1b4609a58230e656fb18f4094445aaaa627aac250da0a878c388d4cb767f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d1b4609a58230e656fb18f4094445aaaa627aac250da0a878c388d4cb767f7->enter($__internal_a6d1b4609a58230e656fb18f4094445aaaa627aac250da0a878c388d4cb767f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a6d1b4609a58230e656fb18f4094445aaaa627aac250da0a878c388d4cb767f7->leave($__internal_a6d1b4609a58230e656fb18f4094445aaaa627aac250da0a878c388d4cb767f7_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_960f6c5974c62d208f683e0f58079aa06250724686593df9172663b1df06f3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960f6c5974c62d208f683e0f58079aa06250724686593df9172663b1df06f3ac->enter($__internal_960f6c5974c62d208f683e0f58079aa06250724686593df9172663b1df06f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_960f6c5974c62d208f683e0f58079aa06250724686593df9172663b1df06f3ac->leave($__internal_960f6c5974c62d208f683e0f58079aa06250724686593df9172663b1df06f3ac_prof);

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
