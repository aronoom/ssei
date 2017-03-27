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
        $__internal_468ceffa6b706bada87366e3a03fb3929823f3f9a6518c950469b6d0b1a30e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468ceffa6b706bada87366e3a03fb3929823f3f9a6518c950469b6d0b1a30e48->enter($__internal_468ceffa6b706bada87366e3a03fb3929823f3f9a6518c950469b6d0b1a30e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_468ceffa6b706bada87366e3a03fb3929823f3f9a6518c950469b6d0b1a30e48->leave($__internal_468ceffa6b706bada87366e3a03fb3929823f3f9a6518c950469b6d0b1a30e48_prof);

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
