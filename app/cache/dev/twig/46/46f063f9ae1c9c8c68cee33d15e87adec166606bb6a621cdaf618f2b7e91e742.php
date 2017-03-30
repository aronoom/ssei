<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6c7c875b7e191eedf85be46dd1750d02c60d09b08c510cb16abb09c0c295958e extends Twig_Template
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
        $__internal_0e3c1613bbbdf9b6d533b63f823e61ba3ed5989c8b90cbcf2ce7a308171b5c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3c1613bbbdf9b6d533b63f823e61ba3ed5989c8b90cbcf2ce7a308171b5c22->enter($__internal_0e3c1613bbbdf9b6d533b63f823e61ba3ed5989c8b90cbcf2ce7a308171b5c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0e3c1613bbbdf9b6d533b63f823e61ba3ed5989c8b90cbcf2ce7a308171b5c22->leave($__internal_0e3c1613bbbdf9b6d533b63f823e61ba3ed5989c8b90cbcf2ce7a308171b5c22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
