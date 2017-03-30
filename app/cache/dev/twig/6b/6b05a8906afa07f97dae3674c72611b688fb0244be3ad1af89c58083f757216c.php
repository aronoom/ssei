<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9acde862814485e8ba636c5193378949f9ae1922476da67b8646286e8b641469 extends Twig_Template
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
        $__internal_7d41402f8255ea06ae0b7b9df336d89a4bb8f29a8d7733d8dccd2c0271bb84b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d41402f8255ea06ae0b7b9df336d89a4bb8f29a8d7733d8dccd2c0271bb84b0->enter($__internal_7d41402f8255ea06ae0b7b9df336d89a4bb8f29a8d7733d8dccd2c0271bb84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7d41402f8255ea06ae0b7b9df336d89a4bb8f29a8d7733d8dccd2c0271bb84b0->leave($__internal_7d41402f8255ea06ae0b7b9df336d89a4bb8f29a8d7733d8dccd2c0271bb84b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
