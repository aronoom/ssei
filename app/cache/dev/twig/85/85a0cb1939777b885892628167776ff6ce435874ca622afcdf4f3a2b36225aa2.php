<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ad935e2fe0716c2527979a8f2f65e88525ef837b9426ec7af8f8feb5b9a21ea1 extends Twig_Template
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
        $__internal_8be587ba261a5ce99b6dd4b31b8bd9dcc37d33c3a618d947ed5821a3b68ff84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be587ba261a5ce99b6dd4b31b8bd9dcc37d33c3a618d947ed5821a3b68ff84b->enter($__internal_8be587ba261a5ce99b6dd4b31b8bd9dcc37d33c3a618d947ed5821a3b68ff84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8be587ba261a5ce99b6dd4b31b8bd9dcc37d33c3a618d947ed5821a3b68ff84b->leave($__internal_8be587ba261a5ce99b6dd4b31b8bd9dcc37d33c3a618d947ed5821a3b68ff84b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
