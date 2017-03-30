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
        $__internal_d30a264f7b0c7c1212acac584e58e9dba11a119f8a2ec69296913012fd47fccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30a264f7b0c7c1212acac584e58e9dba11a119f8a2ec69296913012fd47fccf->enter($__internal_d30a264f7b0c7c1212acac584e58e9dba11a119f8a2ec69296913012fd47fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d30a264f7b0c7c1212acac584e58e9dba11a119f8a2ec69296913012fd47fccf->leave($__internal_d30a264f7b0c7c1212acac584e58e9dba11a119f8a2ec69296913012fd47fccf_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_204a21016870f78ca97f3c4759818ddef89b60e8180f8bf9c3f14471b43859f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204a21016870f78ca97f3c4759818ddef89b60e8180f8bf9c3f14471b43859f6->enter($__internal_204a21016870f78ca97f3c4759818ddef89b60e8180f8bf9c3f14471b43859f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_204a21016870f78ca97f3c4759818ddef89b60e8180f8bf9c3f14471b43859f6->leave($__internal_204a21016870f78ca97f3c4759818ddef89b60e8180f8bf9c3f14471b43859f6_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d0d8d4be931977b22dae1ef0bd6883f09bf104c9a2843205ccfa8efb119d5caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d8d4be931977b22dae1ef0bd6883f09bf104c9a2843205ccfa8efb119d5caa->enter($__internal_d0d8d4be931977b22dae1ef0bd6883f09bf104c9a2843205ccfa8efb119d5caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d0d8d4be931977b22dae1ef0bd6883f09bf104c9a2843205ccfa8efb119d5caa->leave($__internal_d0d8d4be931977b22dae1ef0bd6883f09bf104c9a2843205ccfa8efb119d5caa_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b92909d3e633095eabdeca3798eedd3c53d78ceb957a64245dcf3000ac7623c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b92909d3e633095eabdeca3798eedd3c53d78ceb957a64245dcf3000ac7623c->enter($__internal_7b92909d3e633095eabdeca3798eedd3c53d78ceb957a64245dcf3000ac7623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b92909d3e633095eabdeca3798eedd3c53d78ceb957a64245dcf3000ac7623c->leave($__internal_7b92909d3e633095eabdeca3798eedd3c53d78ceb957a64245dcf3000ac7623c_prof);

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
