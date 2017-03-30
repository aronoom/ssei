<?php

/* ProjetBundle::layout.html.twig */
class __TwigTemplate_fbaabada14839e66f6867d7080b998511f1aa7a6b0fed43338752ac56c7ae641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjetBundle::layout.html.twig", 1);
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
        $__internal_e6411b2ffdf0295552ebebac764b2615017d11b9b786fff01b9eb3fb46396082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6411b2ffdf0295552ebebac764b2615017d11b9b786fff01b9eb3fb46396082->enter($__internal_e6411b2ffdf0295552ebebac764b2615017d11b9b786fff01b9eb3fb46396082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6411b2ffdf0295552ebebac764b2615017d11b9b786fff01b9eb3fb46396082->leave($__internal_e6411b2ffdf0295552ebebac764b2615017d11b9b786fff01b9eb3fb46396082_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8c19cd809d9233f0c843a9329edb8c69dd22d96bcfc463cffa9f1c97dcbf11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c19cd809d9233f0c843a9329edb8c69dd22d96bcfc463cffa9f1c97dcbf11c->enter($__internal_b8c19cd809d9233f0c843a9329edb8c69dd22d96bcfc463cffa9f1c97dcbf11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet |";
        
        $__internal_b8c19cd809d9233f0c843a9329edb8c69dd22d96bcfc463cffa9f1c97dcbf11c->leave($__internal_b8c19cd809d9233f0c843a9329edb8c69dd22d96bcfc463cffa9f1c97dcbf11c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6fa9fe4d109da4cd286efb93c4be575d9917e71b229b0a94ebed99f4793b863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fa9fe4d109da4cd286efb93c4be575d9917e71b229b0a94ebed99f4793b863->enter($__internal_a6fa9fe4d109da4cd286efb93c4be575d9917e71b229b0a94ebed99f4793b863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_a6fa9fe4d109da4cd286efb93c4be575d9917e71b229b0a94ebed99f4793b863->leave($__internal_a6fa9fe4d109da4cd286efb93c4be575d9917e71b229b0a94ebed99f4793b863_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d6af284b4dbfbf073fa1cedd11ed915ce97d68be5ea6f6da0cc91a7bd7072ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6af284b4dbfbf073fa1cedd11ed915ce97d68be5ea6f6da0cc91a7bd7072ef->enter($__internal_7d6af284b4dbfbf073fa1cedd11ed915ce97d68be5ea6f6da0cc91a7bd7072ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_7d6af284b4dbfbf073fa1cedd11ed915ce97d68be5ea6f6da0cc91a7bd7072ef->leave($__internal_7d6af284b4dbfbf073fa1cedd11ed915ce97d68be5ea6f6da0cc91a7bd7072ef_prof);

    }

    public function getTemplateName()
    {
        return "ProjetBundle::layout.html.twig";
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
{% block title %}Projet |{% endblock %}
{% block content %}

{% endblock %}
{% block javascripts %}
    {{ parent() }}
{% endblock %}", "ProjetBundle::layout.html.twig", "/opt/lampp/htdocs/ssei/src/ProjetBundle/Resources/views/layout.html.twig");
    }
}
