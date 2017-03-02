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
        $__internal_2e63247409f247da0ac7c02ef75d509a664c821d85190b1a9bc498510199b478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63247409f247da0ac7c02ef75d509a664c821d85190b1a9bc498510199b478->enter($__internal_2e63247409f247da0ac7c02ef75d509a664c821d85190b1a9bc498510199b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2e63247409f247da0ac7c02ef75d509a664c821d85190b1a9bc498510199b478->leave($__internal_2e63247409f247da0ac7c02ef75d509a664c821d85190b1a9bc498510199b478_prof);

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
