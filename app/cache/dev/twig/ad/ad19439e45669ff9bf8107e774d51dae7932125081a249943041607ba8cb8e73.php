<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f05cec656550f8ddbe9678cfe3561e167d63920990a4796ea7818b58b1ce550b extends Twig_Template
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
        $__internal_793c4e3799711977f46fde226430339ac77c96b176ce7ce4e2ed70567970bbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793c4e3799711977f46fde226430339ac77c96b176ce7ce4e2ed70567970bbda->enter($__internal_793c4e3799711977f46fde226430339ac77c96b176ce7ce4e2ed70567970bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_793c4e3799711977f46fde226430339ac77c96b176ce7ce4e2ed70567970bbda->leave($__internal_793c4e3799711977f46fde226430339ac77c96b176ce7ce4e2ed70567970bbda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
