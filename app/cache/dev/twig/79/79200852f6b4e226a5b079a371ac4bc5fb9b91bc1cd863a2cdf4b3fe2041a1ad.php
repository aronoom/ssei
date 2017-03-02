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
        $__internal_097e15b7f1fba36d4d507b948df7c447cdb8e8ffe6632f03d1838bd2379e323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097e15b7f1fba36d4d507b948df7c447cdb8e8ffe6632f03d1838bd2379e323c->enter($__internal_097e15b7f1fba36d4d507b948df7c447cdb8e8ffe6632f03d1838bd2379e323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_097e15b7f1fba36d4d507b948df7c447cdb8e8ffe6632f03d1838bd2379e323c->leave($__internal_097e15b7f1fba36d4d507b948df7c447cdb8e8ffe6632f03d1838bd2379e323c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7addd581863459b14105d1d215df5fcda8962987c4c72d872d32c6cfc61a5833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7addd581863459b14105d1d215df5fcda8962987c4c72d872d32c6cfc61a5833->enter($__internal_7addd581863459b14105d1d215df5fcda8962987c4c72d872d32c6cfc61a5833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7addd581863459b14105d1d215df5fcda8962987c4c72d872d32c6cfc61a5833->leave($__internal_7addd581863459b14105d1d215df5fcda8962987c4c72d872d32c6cfc61a5833_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_458205ec661d858060c2587f550b14c76f11c74206b8ad6d91596683ce62ea04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458205ec661d858060c2587f550b14c76f11c74206b8ad6d91596683ce62ea04->enter($__internal_458205ec661d858060c2587f550b14c76f11c74206b8ad6d91596683ce62ea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_458205ec661d858060c2587f550b14c76f11c74206b8ad6d91596683ce62ea04->leave($__internal_458205ec661d858060c2587f550b14c76f11c74206b8ad6d91596683ce62ea04_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9444e458436f68abf09d8deabe47e90a0547befb27258e6ddec2206230ded2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9444e458436f68abf09d8deabe47e90a0547befb27258e6ddec2206230ded2e2->enter($__internal_9444e458436f68abf09d8deabe47e90a0547befb27258e6ddec2206230ded2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9444e458436f68abf09d8deabe47e90a0547befb27258e6ddec2206230ded2e2->leave($__internal_9444e458436f68abf09d8deabe47e90a0547befb27258e6ddec2206230ded2e2_prof);

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
