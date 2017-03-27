<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f85fe7dc471f5909c97240efd155f5fafc7510f334830c4cdc6b929ee26bd4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_99637c2dca73d64239bc6782d4de5311065c8bee50381839f4db62358af05917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99637c2dca73d64239bc6782d4de5311065c8bee50381839f4db62358af05917->enter($__internal_99637c2dca73d64239bc6782d4de5311065c8bee50381839f4db62358af05917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99637c2dca73d64239bc6782d4de5311065c8bee50381839f4db62358af05917->leave($__internal_99637c2dca73d64239bc6782d4de5311065c8bee50381839f4db62358af05917_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1598cfbcba9bfa488c3d124f0eeef88130379733157962237f0db178bd3d3e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1598cfbcba9bfa488c3d124f0eeef88130379733157962237f0db178bd3d3e3f->enter($__internal_1598cfbcba9bfa488c3d124f0eeef88130379733157962237f0db178bd3d3e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1598cfbcba9bfa488c3d124f0eeef88130379733157962237f0db178bd3d3e3f->leave($__internal_1598cfbcba9bfa488c3d124f0eeef88130379733157962237f0db178bd3d3e3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/ssei/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
