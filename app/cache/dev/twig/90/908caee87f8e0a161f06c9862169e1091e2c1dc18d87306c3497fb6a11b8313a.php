<?php

/* ZoneBundle:Commune:ajouter.html.twig */
class __TwigTemplate_58ee0011d86860dc89c7696f5488580867d41ff359916ac980c39ee31519520e extends Twig_Template
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
        $__internal_63da67d1018f93f71cc809c7be0ab7b855f6823a031c96cd925f87a9419001af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63da67d1018f93f71cc809c7be0ab7b855f6823a031c96cd925f87a9419001af->enter($__internal_63da67d1018f93f71cc809c7be0ab7b855f6823a031c96cd925f87a9419001af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:ajouter.html.twig"));

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
        echo "<form class=\"formulaire\" novalidate method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"well\">
        <div class=\"item form-group\">
            <div class=\"control-label col-md-3\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'label', array("label" => "Nom du commune"));
        echo "
            </div>
                        <div class=\"col-sm-6\">
                            <li >
                                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "communeLibelle", array()), 'widget', array("attr" => array("required" => "true", "class" => "form-control", "autocomplete" => "off")));
        echo "
                            </li>
                                        </div>
                                        <ul class=\"parsley-errors-list filled\">
                                            <li class=\"parsley-required red\">
                                                ";
        // line 22
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
        <div class=\"col-md-9 col-sm-6 col-xs-12\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary\" enabled=false id=\"sub\" type=\"submit\">Ajouter</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$('.formulaire').submit( function(event) {
        event.preventDefault();
        var \$this = \$(this);
        var submit = true;
        var \$districtId = \$('#districtId').val();

        if (!validator.checkAll(\$(this))) {
            submit = false;
        }

        if (submit)
        {
            \$.ajax({
                url: Routing.generate('zone_ajouter_commune', {'district_id': \$districtId}),
                type: \$this.attr('method'),
                data: new FormData( \$this[0] ),
                processData: false,
                contentType: false,
                statusCode: {
                    200: function(response) {
                        \$(\"#globModal\").modal('hide');

                        \$.ajax({
                            type: 'GET',
                            url: Routing.generate('zone_lister_commune', {'district_id': \$districtId}),
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
        
        $__internal_63da67d1018f93f71cc809c7be0ab7b855f6823a031c96cd925f87a9419001af->leave($__internal_63da67d1018f93f71cc809c7be0ab7b855f6823a031c96cd925f87a9419001af_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  66 => 22,  58 => 17,  51 => 13,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
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
<form class=\"formulaire\" novalidate method=\"post\" {{ form_enctype(form) }}>
    <div class=\"well\">
        <div class=\"item form-group\">
            <div class=\"control-label col-md-3\">
                {{ form_label(form.communeLibelle,\"Nom du commune\")}}
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
        <div class=\"col-md-9 col-sm-6 col-xs-12\">
            <div class=\"pull-right\">
                <button class=\"btn btn-primary\" enabled=false id=\"sub\" type=\"submit\">Ajouter</button>
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</form>
<script type=\"text/javascript\">
    \$('.formulaire').submit( function(event) {
        event.preventDefault();
        var \$this = \$(this);
        var submit = true;
        var \$districtId = \$('#districtId').val();

        if (!validator.checkAll(\$(this))) {
            submit = false;
        }

        if (submit)
        {
            \$.ajax({
                url: Routing.generate('zone_ajouter_commune', {'district_id': \$districtId}),
                type: \$this.attr('method'),
                data: new FormData( \$this[0] ),
                processData: false,
                contentType: false,
                statusCode: {
                    200: function(response) {
                        \$(\"#globModal\").modal('hide');

                        \$.ajax({
                            type: 'GET',
                            url: Routing.generate('zone_lister_commune', {'district_id': \$districtId}),
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
", "ZoneBundle:Commune:ajouter.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/ajouter.html.twig");
    }
}
