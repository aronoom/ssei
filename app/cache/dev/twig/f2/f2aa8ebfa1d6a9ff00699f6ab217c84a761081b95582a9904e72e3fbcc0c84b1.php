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
        $__internal_a60ad74b9924115b633d93cd90be7af770e5c66d67c0fd76b6a46fdf6a6fbc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60ad74b9924115b633d93cd90be7af770e5c66d67c0fd76b6a46fdf6a6fbc18->enter($__internal_a60ad74b9924115b633d93cd90be7af770e5c66d67c0fd76b6a46fdf6a6fbc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a60ad74b9924115b633d93cd90be7af770e5c66d67c0fd76b6a46fdf6a6fbc18->leave($__internal_a60ad74b9924115b633d93cd90be7af770e5c66d67c0fd76b6a46fdf6a6fbc18_prof);

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
