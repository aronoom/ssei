<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_381e6ae9e70d9001a5bd7fa6e71252474a25b28624650fb08fe1f9cea79b01df extends Twig_Template
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
        $__internal_0d8a407e1372f743c0284f6f220e6cb7ade6f76f0583c66f24a3b86debbd21dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8a407e1372f743c0284f6f220e6cb7ade6f76f0583c66f24a3b86debbd21dc->enter($__internal_0d8a407e1372f743c0284f6f220e6cb7ade6f76f0583c66f24a3b86debbd21dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0d8a407e1372f743c0284f6f220e6cb7ade6f76f0583c66f24a3b86debbd21dc->leave($__internal_0d8a407e1372f743c0284f6f220e6cb7ade6f76f0583c66f24a3b86debbd21dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
