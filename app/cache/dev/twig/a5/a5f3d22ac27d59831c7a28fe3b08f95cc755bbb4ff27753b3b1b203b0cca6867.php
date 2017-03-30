<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f8e8e4e3910e2eb09755f4fb77304295bcd88be065d1806d36bc3497afab4a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103c22a5727ef1ee006ebc22deb41b9a9f68d4a2b712a21e80aa56bb08933c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103c22a5727ef1ee006ebc22deb41b9a9f68d4a2b712a21e80aa56bb08933c54->enter($__internal_103c22a5727ef1ee006ebc22deb41b9a9f68d4a2b712a21e80aa56bb08933c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103c22a5727ef1ee006ebc22deb41b9a9f68d4a2b712a21e80aa56bb08933c54->leave($__internal_103c22a5727ef1ee006ebc22deb41b9a9f68d4a2b712a21e80aa56bb08933c54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6d76f2855851cc43d328ff37815507f13651dcdcdc84d6d47b7b47bcc5b79b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d76f2855851cc43d328ff37815507f13651dcdcdc84d6d47b7b47bcc5b79b3->enter($__internal_b6d76f2855851cc43d328ff37815507f13651dcdcdc84d6d47b7b47bcc5b79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Profile ";
        
        $__internal_b6d76f2855851cc43d328ff37815507f13651dcdcdc84d6d47b7b47bcc5b79b3->leave($__internal_b6d76f2855851cc43d328ff37815507f13651dcdcdc84d6d47b7b47bcc5b79b3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d810a51b068812ad9f3558169ed921170030bd62d7079199ccbb7e8545dfd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d810a51b068812ad9f3558169ed921170030bd62d7079199ccbb7e8545dfd75->enter($__internal_5d810a51b068812ad9f3558169ed921170030bd62d7079199ccbb7e8545dfd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profile</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"x_content\">
                    ";
        // line 19
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 19)->display($context);
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
          
";
        
        $__internal_5d810a51b068812ad9f3558169ed921170030bd62d7079199ccbb7e8545dfd75->leave($__internal_5d810a51b068812ad9f3558169ed921170030bd62d7079199ccbb7e8545dfd75_prof);

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
        return array (  72 => 20,  70 => 19,  54 => 5,  48 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"UserBundle::layout.html.twig\" %}

{% block title %}{{parent()}} Profile {% endblock %}
{% block content %}
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Bienvenue dans l'espace profile</h3>
            </div>
        </div>
    <div class=\"clearfix\"></div>
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel\">
                <div class=\"x_title\">
                    <h2>Profil d'utilisateur</h2>
                    <div class=\"clearfix\"></div>
                </div>
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
