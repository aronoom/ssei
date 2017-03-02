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
        $__internal_c079ce0250983cb1db2a50dd817222e4cf503e0b60c3577bfd10d79ad54728d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c079ce0250983cb1db2a50dd817222e4cf503e0b60c3577bfd10d79ad54728d5->enter($__internal_c079ce0250983cb1db2a50dd817222e4cf503e0b60c3577bfd10d79ad54728d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c079ce0250983cb1db2a50dd817222e4cf503e0b60c3577bfd10d79ad54728d5->leave($__internal_c079ce0250983cb1db2a50dd817222e4cf503e0b60c3577bfd10d79ad54728d5_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a95f1ed69c24c9fd87ffcbd35551a1b380c7690dc2f46b30cc7309ec7e286547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95f1ed69c24c9fd87ffcbd35551a1b380c7690dc2f46b30cc7309ec7e286547->enter($__internal_a95f1ed69c24c9fd87ffcbd35551a1b380c7690dc2f46b30cc7309ec7e286547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a95f1ed69c24c9fd87ffcbd35551a1b380c7690dc2f46b30cc7309ec7e286547->leave($__internal_a95f1ed69c24c9fd87ffcbd35551a1b380c7690dc2f46b30cc7309ec7e286547_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0240ee4f5eeedbf74dc7d6762fa2da605347e13e7b0d104e3e701250060ac784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0240ee4f5eeedbf74dc7d6762fa2da605347e13e7b0d104e3e701250060ac784->enter($__internal_0240ee4f5eeedbf74dc7d6762fa2da605347e13e7b0d104e3e701250060ac784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0240ee4f5eeedbf74dc7d6762fa2da605347e13e7b0d104e3e701250060ac784->leave($__internal_0240ee4f5eeedbf74dc7d6762fa2da605347e13e7b0d104e3e701250060ac784_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_749e622f0f9ea49b3dc5bad02ab6f820c9593138cfcd04bc1d398d5d5f569713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749e622f0f9ea49b3dc5bad02ab6f820c9593138cfcd04bc1d398d5d5f569713->enter($__internal_749e622f0f9ea49b3dc5bad02ab6f820c9593138cfcd04bc1d398d5d5f569713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_749e622f0f9ea49b3dc5bad02ab6f820c9593138cfcd04bc1d398d5d5f569713->leave($__internal_749e622f0f9ea49b3dc5bad02ab6f820c9593138cfcd04bc1d398d5d5f569713_prof);

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
