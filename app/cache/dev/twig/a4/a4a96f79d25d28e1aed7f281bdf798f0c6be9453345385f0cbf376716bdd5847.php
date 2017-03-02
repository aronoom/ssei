<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_e99dfc62e3b46d6f4db6fd822fd102ee5983a01674487665cc02401bdc18d39b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e225e3aed258326d7cc9ef8972f54c9e57b5659f7ce9db9d2fbe0a62cf685cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e225e3aed258326d7cc9ef8972f54c9e57b5659f7ce9db9d2fbe0a62cf685cef->enter($__internal_e225e3aed258326d7cc9ef8972f54c9e57b5659f7ce9db9d2fbe0a62cf685cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e225e3aed258326d7cc9ef8972f54c9e57b5659f7ce9db9d2fbe0a62cf685cef->leave($__internal_e225e3aed258326d7cc9ef8972f54c9e57b5659f7ce9db9d2fbe0a62cf685cef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_829dae00572849dc04fe601fc2161b9ae75cdf89919965b81869ff97f779fbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829dae00572849dc04fe601fc2161b9ae75cdf89919965b81869ff97f779fbac->enter($__internal_829dae00572849dc04fe601fc2161b9ae75cdf89919965b81869ff97f779fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_829dae00572849dc04fe601fc2161b9ae75cdf89919965b81869ff97f779fbac->leave($__internal_829dae00572849dc04fe601fc2161b9ae75cdf89919965b81869ff97f779fbac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
