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
        $__internal_d2f24fe1414f81e4268a224a45f16909054934f213b443ecbee77423b88060e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f24fe1414f81e4268a224a45f16909054934f213b443ecbee77423b88060e5->enter($__internal_d2f24fe1414f81e4268a224a45f16909054934f213b443ecbee77423b88060e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d2f24fe1414f81e4268a224a45f16909054934f213b443ecbee77423b88060e5->leave($__internal_d2f24fe1414f81e4268a224a45f16909054934f213b443ecbee77423b88060e5_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_94c3583e944e9bdb547e576862f0b9d7f002ff6438590015af12965ab9fafc9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c3583e944e9bdb547e576862f0b9d7f002ff6438590015af12965ab9fafc9e->enter($__internal_94c3583e944e9bdb547e576862f0b9d7f002ff6438590015af12965ab9fafc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_94c3583e944e9bdb547e576862f0b9d7f002ff6438590015af12965ab9fafc9e->leave($__internal_94c3583e944e9bdb547e576862f0b9d7f002ff6438590015af12965ab9fafc9e_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_49b0608b13e956439617bc02896fd6c53067e9c39d2443d771a13e37d92eb0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b0608b13e956439617bc02896fd6c53067e9c39d2443d771a13e37d92eb0ba->enter($__internal_49b0608b13e956439617bc02896fd6c53067e9c39d2443d771a13e37d92eb0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49b0608b13e956439617bc02896fd6c53067e9c39d2443d771a13e37d92eb0ba->leave($__internal_49b0608b13e956439617bc02896fd6c53067e9c39d2443d771a13e37d92eb0ba_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c412d414114c55df0de6199d3cdcc55fa698029eee2ee8921b1251a14af6ed18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c412d414114c55df0de6199d3cdcc55fa698029eee2ee8921b1251a14af6ed18->enter($__internal_c412d414114c55df0de6199d3cdcc55fa698029eee2ee8921b1251a14af6ed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c412d414114c55df0de6199d3cdcc55fa698029eee2ee8921b1251a14af6ed18->leave($__internal_c412d414114c55df0de6199d3cdcc55fa698029eee2ee8921b1251a14af6ed18_prof);

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
