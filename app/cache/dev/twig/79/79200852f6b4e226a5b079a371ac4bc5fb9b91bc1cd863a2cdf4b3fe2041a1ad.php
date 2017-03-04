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
        $__internal_93c5553475a82e861d929325e71c3d388bba9e001a148a473f234f832d5239c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c5553475a82e861d929325e71c3d388bba9e001a148a473f234f832d5239c4->enter($__internal_93c5553475a82e861d929325e71c3d388bba9e001a148a473f234f832d5239c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_93c5553475a82e861d929325e71c3d388bba9e001a148a473f234f832d5239c4->leave($__internal_93c5553475a82e861d929325e71c3d388bba9e001a148a473f234f832d5239c4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b700b0b8703a5cefe3e9eb59b63a8b514dbc66eaab94ab8a67c629e2200997a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b700b0b8703a5cefe3e9eb59b63a8b514dbc66eaab94ab8a67c629e2200997a1->enter($__internal_b700b0b8703a5cefe3e9eb59b63a8b514dbc66eaab94ab8a67c629e2200997a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b700b0b8703a5cefe3e9eb59b63a8b514dbc66eaab94ab8a67c629e2200997a1->leave($__internal_b700b0b8703a5cefe3e9eb59b63a8b514dbc66eaab94ab8a67c629e2200997a1_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d9ff5f14ec3ccd993f9dd35f9ee8a3a22b880e82f3907c765b59df97095bab38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ff5f14ec3ccd993f9dd35f9ee8a3a22b880e82f3907c765b59df97095bab38->enter($__internal_d9ff5f14ec3ccd993f9dd35f9ee8a3a22b880e82f3907c765b59df97095bab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d9ff5f14ec3ccd993f9dd35f9ee8a3a22b880e82f3907c765b59df97095bab38->leave($__internal_d9ff5f14ec3ccd993f9dd35f9ee8a3a22b880e82f3907c765b59df97095bab38_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_306187404e1be22090f14cebe65e214cf9f8b462c9b50d3df62f8d5c9e4badaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306187404e1be22090f14cebe65e214cf9f8b462c9b50d3df62f8d5c9e4badaf->enter($__internal_306187404e1be22090f14cebe65e214cf9f8b462c9b50d3df62f8d5c9e4badaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_306187404e1be22090f14cebe65e214cf9f8b462c9b50d3df62f8d5c9e4badaf->leave($__internal_306187404e1be22090f14cebe65e214cf9f8b462c9b50d3df62f8d5c9e4badaf_prof);

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
