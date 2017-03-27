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
        $__internal_b6260509d1e3db1e9c03d8b566d940c541b4f6148504fb03a84c26f2c5c472ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6260509d1e3db1e9c03d8b566d940c541b4f6148504fb03a84c26f2c5c472ff->enter($__internal_b6260509d1e3db1e9c03d8b566d940c541b4f6148504fb03a84c26f2c5c472ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6260509d1e3db1e9c03d8b566d940c541b4f6148504fb03a84c26f2c5c472ff->leave($__internal_b6260509d1e3db1e9c03d8b566d940c541b4f6148504fb03a84c26f2c5c472ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93795c05080f2b4b0d3a42c92c5025ed5e146c6ad7aee98b7587edeb47ca37d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93795c05080f2b4b0d3a42c92c5025ed5e146c6ad7aee98b7587edeb47ca37d5->enter($__internal_93795c05080f2b4b0d3a42c92c5025ed5e146c6ad7aee98b7587edeb47ca37d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_93795c05080f2b4b0d3a42c92c5025ed5e146c6ad7aee98b7587edeb47ca37d5->leave($__internal_93795c05080f2b4b0d3a42c92c5025ed5e146c6ad7aee98b7587edeb47ca37d5_prof);

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
