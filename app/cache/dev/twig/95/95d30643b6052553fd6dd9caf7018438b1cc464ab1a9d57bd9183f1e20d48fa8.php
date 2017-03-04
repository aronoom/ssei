<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_06ef76c28bbfc640519c3cbc716ce638348c884c67edd8f49c64556a1ec364b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01e317d82b071c7ad44962ede3cff9d32de98f86cc2cbea4e59c3b8ded05dfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e317d82b071c7ad44962ede3cff9d32de98f86cc2cbea4e59c3b8ded05dfe1->enter($__internal_01e317d82b071c7ad44962ede3cff9d32de98f86cc2cbea4e59c3b8ded05dfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e317d82b071c7ad44962ede3cff9d32de98f86cc2cbea4e59c3b8ded05dfe1->leave($__internal_01e317d82b071c7ad44962ede3cff9d32de98f86cc2cbea4e59c3b8ded05dfe1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_198ef86ef588b56a08a84bc59c23351c2704638cc3fbc51b23dedeb99e095249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198ef86ef588b56a08a84bc59c23351c2704638cc3fbc51b23dedeb99e095249->enter($__internal_198ef86ef588b56a08a84bc59c23351c2704638cc3fbc51b23dedeb99e095249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration|";
        
        $__internal_198ef86ef588b56a08a84bc59c23351c2704638cc3fbc51b23dedeb99e095249->leave($__internal_198ef86ef588b56a08a84bc59c23351c2704638cc3fbc51b23dedeb99e095249_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3f9e4b683923674872e99006a20ec26088bab813c5b489958997f00f7eff6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f9e4b683923674872e99006a20ec26088bab813c5b489958997f00f7eff6d3->enter($__internal_e3f9e4b683923674872e99006a20ec26088bab813c5b489958997f00f7eff6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_e3f9e4b683923674872e99006a20ec26088bab813c5b489958997f00f7eff6d3->leave($__internal_e3f9e4b683923674872e99006a20ec26088bab813c5b489958997f00f7eff6d3_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e43561b7aa48e168e85ef4ab3181a29ed1b41c710bcd58e1162af98463af08bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43561b7aa48e168e85ef4ab3181a29ed1b41c710bcd58e1162af98463af08bd->enter($__internal_e43561b7aa48e168e85ef4ab3181a29ed1b41c710bcd58e1162af98463af08bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_e43561b7aa48e168e85ef4ab3181a29ed1b41c710bcd58e1162af98463af08bd->leave($__internal_e43561b7aa48e168e85ef4ab3181a29ed1b41c710bcd58e1162af98463af08bd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  62 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}Administration|{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/Proc/UserBundle/Resources/views/layout.html.twig");
    }
}
