<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_22580dd2ebf888bfbbadb5fd7de207123020f215fa1d1fe7af52f276b371b6d7 extends Twig_Template
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
        $__internal_04a6617f86476497922b37170929c7bcbf0b3cb7ce46e0f1f6fac3a9b9b7e840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a6617f86476497922b37170929c7bcbf0b3cb7ce46e0f1f6fac3a9b9b7e840->enter($__internal_04a6617f86476497922b37170929c7bcbf0b3cb7ce46e0f1f6fac3a9b9b7e840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_04a6617f86476497922b37170929c7bcbf0b3cb7ce46e0f1f6fac3a9b9b7e840->leave($__internal_04a6617f86476497922b37170929c7bcbf0b3cb7ce46e0f1f6fac3a9b9b7e840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
