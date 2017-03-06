<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d3a081a0b355597835b5013b511e3056a733c86fe77d640a193133c3f95d2b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CemScoBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CemScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92e7040a4deff5fef0e249a81cb9bab075780e58348d240684fdda9111bd67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92e7040a4deff5fef0e249a81cb9bab075780e58348d240684fdda9111bd67f->enter($__internal_c92e7040a4deff5fef0e249a81cb9bab075780e58348d240684fdda9111bd67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92e7040a4deff5fef0e249a81cb9bab075780e58348d240684fdda9111bd67f->leave($__internal_c92e7040a4deff5fef0e249a81cb9bab075780e58348d240684fdda9111bd67f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_289acb31debf856d0403e1e5c12084738a1d5c4890c5124d1ff0a5d46d598640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289acb31debf856d0403e1e5c12084738a1d5c4890c5124d1ff0a5d46d598640->enter($__internal_289acb31debf856d0403e1e5c12084738a1d5c4890c5124d1ff0a5d46d598640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_289acb31debf856d0403e1e5c12084738a1d5c4890c5124d1ff0a5d46d598640->leave($__internal_289acb31debf856d0403e1e5c12084738a1d5c4890c5124d1ff0a5d46d598640_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_102883053a467c3cfa74b5596dae2ed9741cd8137dc23b76eedd222e76ea1468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102883053a467c3cfa74b5596dae2ed9741cd8137dc23b76eedd222e76ea1468->enter($__internal_102883053a467c3cfa74b5596dae2ed9741cd8137dc23b76eedd222e76ea1468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sco_homepage");
        echo "\">Acceuil</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" >Profile</a></li>
                    <li class=\"active\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cem_anomalie_homepage");
        echo "\">Afficher</a></li>
                </ol>
            </div>
        </div>   
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_content\">
                    ";
        // line 20
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 20)->display($context);
        // line 21
        echo "                </div>
            </div>
        </div>
    </div>
          
";
        
        $__internal_102883053a467c3cfa74b5596dae2ed9741cd8137dc23b76eedd222e76ea1468->leave($__internal_102883053a467c3cfa74b5596dae2ed9741cd8137dc23b76eedd222e76ea1468_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  83 => 20,  71 => 11,  67 => 10,  63 => 9,  58 => 7,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CemScoBundle::layout.html.twig\" %}

{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>{{app.user}}</h3>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{path('sco_homepage')}}\">Acceuil</a></li>
                    <li><a href=\"{{path('fos_user_profile_show')}}\" >Profile</a></li>
                    <li class=\"active\"><a href=\"{{ path('cem_anomalie_homepage') }}\">Afficher</a></li>
                </ol>
            </div>
        </div>   
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_content\">
                    {% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
                </div>
            </div>
        </div>
    </div>
          
{% endblock %}

", "FOSUserBundle:Profile:show.html.twig", "/opt/lampp/htdocs/ssei/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
