<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_394580140a8c87822a73eb1d42191e9b265ce2ed1952a20684d947e447cff35b extends Twig_Template
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
        $__internal_3d8d082fcd1070fa08eb3dc55a98f4ce15132b7259da7054a8a6028f5ea9a2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8d082fcd1070fa08eb3dc55a98f4ce15132b7259da7054a8a6028f5ea9a2d4->enter($__internal_3d8d082fcd1070fa08eb3dc55a98f4ce15132b7259da7054a8a6028f5ea9a2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3d8d082fcd1070fa08eb3dc55a98f4ce15132b7259da7054a8a6028f5ea9a2d4->leave($__internal_3d8d082fcd1070fa08eb3dc55a98f4ce15132b7259da7054a8a6028f5ea9a2d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
