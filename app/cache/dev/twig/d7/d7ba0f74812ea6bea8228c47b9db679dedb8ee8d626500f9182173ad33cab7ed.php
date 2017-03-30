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
        $__internal_3ab6dc8aa65de1894c7ac9b23b3808232e065eb4a17a734427b54a11feffa1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab6dc8aa65de1894c7ac9b23b3808232e065eb4a17a734427b54a11feffa1bd->enter($__internal_3ab6dc8aa65de1894c7ac9b23b3808232e065eb4a17a734427b54a11feffa1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ab6dc8aa65de1894c7ac9b23b3808232e065eb4a17a734427b54a11feffa1bd->leave($__internal_3ab6dc8aa65de1894c7ac9b23b3808232e065eb4a17a734427b54a11feffa1bd_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_77574cf2a15d888d9b6cf96e9e11f8663a2273c98a78f2d710a911d094663a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77574cf2a15d888d9b6cf96e9e11f8663a2273c98a78f2d710a911d094663a8d->enter($__internal_77574cf2a15d888d9b6cf96e9e11f8663a2273c98a78f2d710a911d094663a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77574cf2a15d888d9b6cf96e9e11f8663a2273c98a78f2d710a911d094663a8d->leave($__internal_77574cf2a15d888d9b6cf96e9e11f8663a2273c98a78f2d710a911d094663a8d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b8a0a7ea915e3306b40d3cfcefec947c0211118d70f99904e0181288b9d923b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a0a7ea915e3306b40d3cfcefec947c0211118d70f99904e0181288b9d923b0->enter($__internal_b8a0a7ea915e3306b40d3cfcefec947c0211118d70f99904e0181288b9d923b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b8a0a7ea915e3306b40d3cfcefec947c0211118d70f99904e0181288b9d923b0->leave($__internal_b8a0a7ea915e3306b40d3cfcefec947c0211118d70f99904e0181288b9d923b0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac28c0f6d1f35ac33c73289876765cce1a0b06ad2d6ea821c6fe16da6b2b6958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac28c0f6d1f35ac33c73289876765cce1a0b06ad2d6ea821c6fe16da6b2b6958->enter($__internal_ac28c0f6d1f35ac33c73289876765cce1a0b06ad2d6ea821c6fe16da6b2b6958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac28c0f6d1f35ac33c73289876765cce1a0b06ad2d6ea821c6fe16da6b2b6958->leave($__internal_ac28c0f6d1f35ac33c73289876765cce1a0b06ad2d6ea821c6fe16da6b2b6958_prof);

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
