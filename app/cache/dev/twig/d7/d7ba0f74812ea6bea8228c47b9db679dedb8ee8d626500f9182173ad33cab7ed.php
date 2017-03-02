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
        $__internal_e59cd1a2f7637a3d3af8ce3c4528c614c567be25142375c2c3e894259c5cf625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59cd1a2f7637a3d3af8ce3c4528c614c567be25142375c2c3e894259c5cf625->enter($__internal_e59cd1a2f7637a3d3af8ce3c4528c614c567be25142375c2c3e894259c5cf625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e59cd1a2f7637a3d3af8ce3c4528c614c567be25142375c2c3e894259c5cf625->leave($__internal_e59cd1a2f7637a3d3af8ce3c4528c614c567be25142375c2c3e894259c5cf625_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f67647252f5b3938fb94c626fdb97c9f1fbde6c53410f6d9843b1679dbb1ff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67647252f5b3938fb94c626fdb97c9f1fbde6c53410f6d9843b1679dbb1ff6c->enter($__internal_f67647252f5b3938fb94c626fdb97c9f1fbde6c53410f6d9843b1679dbb1ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f67647252f5b3938fb94c626fdb97c9f1fbde6c53410f6d9843b1679dbb1ff6c->leave($__internal_f67647252f5b3938fb94c626fdb97c9f1fbde6c53410f6d9843b1679dbb1ff6c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f60bcde61137099b50c1506c16316d4fddd0246427ab011030c078511fa970c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60bcde61137099b50c1506c16316d4fddd0246427ab011030c078511fa970c0->enter($__internal_f60bcde61137099b50c1506c16316d4fddd0246427ab011030c078511fa970c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f60bcde61137099b50c1506c16316d4fddd0246427ab011030c078511fa970c0->leave($__internal_f60bcde61137099b50c1506c16316d4fddd0246427ab011030c078511fa970c0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ae8dd134c9b0407e85d160e10fa8629cdf7665b32610ba10308df4e2fd8e242d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8dd134c9b0407e85d160e10fa8629cdf7665b32610ba10308df4e2fd8e242d->enter($__internal_ae8dd134c9b0407e85d160e10fa8629cdf7665b32610ba10308df4e2fd8e242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ae8dd134c9b0407e85d160e10fa8629cdf7665b32610ba10308df4e2fd8e242d->leave($__internal_ae8dd134c9b0407e85d160e10fa8629cdf7665b32610ba10308df4e2fd8e242d_prof);

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
