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
        $__internal_c29f80502d8582401e51a0831875303d0c1d28e60d52a6406d1e8fd31a0f9abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f80502d8582401e51a0831875303d0c1d28e60d52a6406d1e8fd31a0f9abf->enter($__internal_c29f80502d8582401e51a0831875303d0c1d28e60d52a6406d1e8fd31a0f9abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c29f80502d8582401e51a0831875303d0c1d28e60d52a6406d1e8fd31a0f9abf->leave($__internal_c29f80502d8582401e51a0831875303d0c1d28e60d52a6406d1e8fd31a0f9abf_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_723bd6e2361af394ddc4df280f34faad4b38fdb181133524428f543d0198d3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723bd6e2361af394ddc4df280f34faad4b38fdb181133524428f543d0198d3c1->enter($__internal_723bd6e2361af394ddc4df280f34faad4b38fdb181133524428f543d0198d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_723bd6e2361af394ddc4df280f34faad4b38fdb181133524428f543d0198d3c1->leave($__internal_723bd6e2361af394ddc4df280f34faad4b38fdb181133524428f543d0198d3c1_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab332c251c16bcc0178e731291466640444dddc189a40f4a3eb4955676fb31e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab332c251c16bcc0178e731291466640444dddc189a40f4a3eb4955676fb31e9->enter($__internal_ab332c251c16bcc0178e731291466640444dddc189a40f4a3eb4955676fb31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab332c251c16bcc0178e731291466640444dddc189a40f4a3eb4955676fb31e9->leave($__internal_ab332c251c16bcc0178e731291466640444dddc189a40f4a3eb4955676fb31e9_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1df7942e63e4842fda09ba41914ca8091dd9a3d9d09a5dcf8c0ec6dd85be0fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df7942e63e4842fda09ba41914ca8091dd9a3d9d09a5dcf8c0ec6dd85be0fca->enter($__internal_1df7942e63e4842fda09ba41914ca8091dd9a3d9d09a5dcf8c0ec6dd85be0fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1df7942e63e4842fda09ba41914ca8091dd9a3d9d09a5dcf8c0ec6dd85be0fca->leave($__internal_1df7942e63e4842fda09ba41914ca8091dd9a3d9d09a5dcf8c0ec6dd85be0fca_prof);

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
