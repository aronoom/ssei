<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c77ada196d9cd3984c1cc93924907ceb953aac3bc9548008847186c1c048e798 extends Twig_Template
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
        $__internal_1fd8298d4f22292ded5777a64051ebfa7c028f0281e9fca8ddfeedd3f75a9139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd8298d4f22292ded5777a64051ebfa7c028f0281e9fca8ddfeedd3f75a9139->enter($__internal_1fd8298d4f22292ded5777a64051ebfa7c028f0281e9fca8ddfeedd3f75a9139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1fd8298d4f22292ded5777a64051ebfa7c028f0281e9fca8ddfeedd3f75a9139->leave($__internal_1fd8298d4f22292ded5777a64051ebfa7c028f0281e9fca8ddfeedd3f75a9139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/opt/lampp/htdocs/ssei/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
