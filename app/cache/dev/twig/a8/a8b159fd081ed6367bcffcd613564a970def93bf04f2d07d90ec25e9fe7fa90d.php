<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_738cafba3668fa6be1d6591b2f881266790e75ef3f135ad666da9e5dfbde5423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5978cb66439be49d939dd4f7a0afa5c75394542cfd20c1537baf334c9bd2f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5978cb66439be49d939dd4f7a0afa5c75394542cfd20c1537baf334c9bd2f4e->enter($__internal_c5978cb66439be49d939dd4f7a0afa5c75394542cfd20c1537baf334c9bd2f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c5978cb66439be49d939dd4f7a0afa5c75394542cfd20c1537baf334c9bd2f4e->leave($__internal_c5978cb66439be49d939dd4f7a0afa5c75394542cfd20c1537baf334c9bd2f4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
