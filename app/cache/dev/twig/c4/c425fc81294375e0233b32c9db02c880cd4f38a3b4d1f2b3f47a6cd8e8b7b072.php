<?php

/* ZoneBundle:Commune:modifier.html.twig */
class __TwigTemplate_72273cc7ef9ae99e81d940fb75d75dac2d89fd49afc82ca9127c07376e8e5383 extends Twig_Template
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
        $__internal_bd761e03b89408cc1c70df26acd805b8df19fc32124deda54c897b5306e55136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd761e03b89408cc1c70df26acd805b8df19fc32124deda54c897b5306e55136->enter($__internal_bd761e03b89408cc1c70df26acd805b8df19fc32124deda54c897b5306e55136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:modifier.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 3
                echo "        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <strong>";
                // line 5
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</strong>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        echo "<form class=\"formulaire\" novalidate  method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"well\">
        <div class=\"item form-group\">
            <data id=\"idModCommune\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
            <div class=\"control-label col-md-3\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'label', array("label" => "Nom de la commune"));
        echo "
            </div>
            <div class=\"col-sm-6\">
                <li >
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                </li>
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li class=\"parsley-required red\">
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'errors');
        echo "
                </li>
            </ul>
        </div>
        <br><br>
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>

    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-warning\" enabled=false id=\"sub\" type=\"submit\">Effectuer</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(function(){
        \$('.formulaire').submit( function(event) {
            event.preventDefault();
            var \$this = \$(this);
            var submit = true;

            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
            {
                \$.ajax({
                    url: Routing.generate('zone_modifier_commune', {'id': \$('#idModCommune').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$.ajax({
                                type: 'GET',
                                url: Routing.generate('zone_lister_commune', {'district_id': \$('#districtId').val()}),
                                timeout: 3000,
                                success: function(data) {
                                    \$('#liste_commune').children().remove();
                                    \$('#liste_commune').append(data);
                                },
                                error: function() {
                                    console.log('La requête n\\'a pas abouti');
                                }
                            });
                        },
                        412: function(response) {
                            var errorsForm = response.responseJSON ;
                            console.log(errorsForm);
                            \$('#globModal .modal-body').children().remove();
                            \$('#globModal .modal-body').append(errorsForm.form);
                            \$('#globModal .modal-body').append(errorsForm.formErrors);
                        },
                        500: function(response) {
                            \$('.modal-body').children().remove();
                            \$('.modal-body').append(response.responseText.form);
                        }
                    }
                });
            };
        });

    });
</script>
<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    \$('.formulaire')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
    });

</script>
";
        
        $__internal_bd761e03b89408cc1c70df26acd805b8df19fc32124deda54c897b5306e55136->leave($__internal_bd761e03b89408cc1c70df26acd805b8df19fc32124deda54c897b5306e55136_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  70 => 23,  62 => 18,  55 => 14,  50 => 12,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.request.hasPreviousSession %}
    {% for flashMessage in app.session.flashBag.get('error') %}
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <strong>{{ flashMessage }}</strong>
        </div>
    {% endfor %}
{% endif %}
<form class=\"formulaire\" novalidate  method=\"post\" {{ form_enctype(form) }}>
    <div class=\"well\">
        <div class=\"item form-group\">
            <data id=\"idModCommune\" value=\"{{ id }}\"/>
            <div class=\"control-label col-md-3\">
                {{ form_label(form.communeLibelle,\"Nom de la commune\")}}
            </div>
            <div class=\"col-sm-6\">
                <li >
                    {{form_widget(form.communeLibelle,{'attr':{'required':'true','class':'form-control','autocomplete':'off'}})}}
                </li>
            </div>
            <ul class=\"parsley-errors-list filled\">
                <li class=\"parsley-required red\">
                    {{form_errors(form.communeLibelle)}}
                </li>
            </ul>
        </div>
        <br><br>
        {{form_rest(form)}}
    </div>

    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-warning\" enabled=false id=\"sub\" type=\"submit\">Effectuer</button>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$(function(){
        \$('.formulaire').submit( function(event) {
            event.preventDefault();
            var \$this = \$(this);
            var submit = true;

            if (!validator.checkAll(\$(this))) {
                submit = false;
            }

            if (submit)
            {
                \$.ajax({
                    url: Routing.generate('zone_modifier_commune', {'id': \$('#idModCommune').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$.ajax({
                                type: 'GET',
                                url: Routing.generate('zone_lister_commune', {'district_id': \$('#districtId').val()}),
                                timeout: 3000,
                                success: function(data) {
                                    \$('#liste_commune').children().remove();
                                    \$('#liste_commune').append(data);
                                },
                                error: function() {
                                    console.log('La requête n\\'a pas abouti');
                                }
                            });
                        },
                        412: function(response) {
                            var errorsForm = response.responseJSON ;
                            console.log(errorsForm);
                            \$('#globModal .modal-body').children().remove();
                            \$('#globModal .modal-body').append(errorsForm.form);
                            \$('#globModal .modal-body').append(errorsForm.formErrors);
                        },
                        500: function(response) {
                            \$('.modal-body').children().remove();
                            \$('.modal-body').append(response.responseText.form);
                        }
                    }
                });
            };
        });

    });
</script>
<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    \$('.formulaire')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
    });

</script>
", "ZoneBundle:Commune:modifier.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/modifier.html.twig");
    }
}
