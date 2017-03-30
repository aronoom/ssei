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
        $__internal_938959f45085bd30803ff1ac07ff35a716bbd131d6650c3afeced02b4863331c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938959f45085bd30803ff1ac07ff35a716bbd131d6650c3afeced02b4863331c->enter($__internal_938959f45085bd30803ff1ac07ff35a716bbd131d6650c3afeced02b4863331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_938959f45085bd30803ff1ac07ff35a716bbd131d6650c3afeced02b4863331c->leave($__internal_938959f45085bd30803ff1ac07ff35a716bbd131d6650c3afeced02b4863331c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0d56f411b6c6c665652385750d54ad77d4f461314265a067eb260b3fab75c1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d56f411b6c6c665652385750d54ad77d4f461314265a067eb260b3fab75c1b2->enter($__internal_0d56f411b6c6c665652385750d54ad77d4f461314265a067eb260b3fab75c1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d56f411b6c6c665652385750d54ad77d4f461314265a067eb260b3fab75c1b2->leave($__internal_0d56f411b6c6c665652385750d54ad77d4f461314265a067eb260b3fab75c1b2_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5f995ea9e14ba40ba93269433c8270a26fcaea3453ddb22bcf7ab7fbdd57c725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f995ea9e14ba40ba93269433c8270a26fcaea3453ddb22bcf7ab7fbdd57c725->enter($__internal_5f995ea9e14ba40ba93269433c8270a26fcaea3453ddb22bcf7ab7fbdd57c725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5f995ea9e14ba40ba93269433c8270a26fcaea3453ddb22bcf7ab7fbdd57c725->leave($__internal_5f995ea9e14ba40ba93269433c8270a26fcaea3453ddb22bcf7ab7fbdd57c725_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d6c7608ef7d13e077a22665e67970dda7061672e9dfeb65b3f4a5e4c9462f9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c7608ef7d13e077a22665e67970dda7061672e9dfeb65b3f4a5e4c9462f9cf->enter($__internal_d6c7608ef7d13e077a22665e67970dda7061672e9dfeb65b3f4a5e4c9462f9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d6c7608ef7d13e077a22665e67970dda7061672e9dfeb65b3f4a5e4c9462f9cf->leave($__internal_d6c7608ef7d13e077a22665e67970dda7061672e9dfeb65b3f4a5e4c9462f9cf_prof);

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
