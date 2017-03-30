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
        $__internal_86115e4e9b5e8b40250cd8b56c3d349bbb131f5941a04db2e1eb321465baea0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86115e4e9b5e8b40250cd8b56c3d349bbb131f5941a04db2e1eb321465baea0a->enter($__internal_86115e4e9b5e8b40250cd8b56c3d349bbb131f5941a04db2e1eb321465baea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_86115e4e9b5e8b40250cd8b56c3d349bbb131f5941a04db2e1eb321465baea0a->leave($__internal_86115e4e9b5e8b40250cd8b56c3d349bbb131f5941a04db2e1eb321465baea0a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_364ef8e459f5adbeb94921034ab072139234d87f3cd782c09992dab662e89c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364ef8e459f5adbeb94921034ab072139234d87f3cd782c09992dab662e89c65->enter($__internal_364ef8e459f5adbeb94921034ab072139234d87f3cd782c09992dab662e89c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_364ef8e459f5adbeb94921034ab072139234d87f3cd782c09992dab662e89c65->leave($__internal_364ef8e459f5adbeb94921034ab072139234d87f3cd782c09992dab662e89c65_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2c6229ae4bf22870521c8c51c6f5a1d0b2b7a3bda4035879bfaf2cd255345d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c6229ae4bf22870521c8c51c6f5a1d0b2b7a3bda4035879bfaf2cd255345d2->enter($__internal_e2c6229ae4bf22870521c8c51c6f5a1d0b2b7a3bda4035879bfaf2cd255345d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2c6229ae4bf22870521c8c51c6f5a1d0b2b7a3bda4035879bfaf2cd255345d2->leave($__internal_e2c6229ae4bf22870521c8c51c6f5a1d0b2b7a3bda4035879bfaf2cd255345d2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a258f012a8a9b11770d36655a1b07bf7085618b1aa19dc846f530607e40b4c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a258f012a8a9b11770d36655a1b07bf7085618b1aa19dc846f530607e40b4c4d->enter($__internal_a258f012a8a9b11770d36655a1b07bf7085618b1aa19dc846f530607e40b4c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a258f012a8a9b11770d36655a1b07bf7085618b1aa19dc846f530607e40b4c4d->leave($__internal_a258f012a8a9b11770d36655a1b07bf7085618b1aa19dc846f530607e40b4c4d_prof);

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
