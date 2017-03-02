<?php

/* ZoneBundle:Commune:supprimer.html.twig */
class __TwigTemplate_0900ccb9079529d918a74f91e08007f796dba8308d937f1fa63d6eac2a00b4c0 extends Twig_Template
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
        $__internal_d20a2f0310220d0f5a1e076c079c2b932ce188b751124a1bb8d2bcc13cfb7bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20a2f0310220d0f5a1e076c079c2b932ce188b751124a1bb8d2bcc13cfb7bbc->enter($__internal_d20a2f0310220d0f5a1e076c079c2b932ce188b751124a1bb8d2bcc13cfb7bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:supprimer.html.twig"));

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
        echo "<form class=\"formulaire\" novalidate  method=\"post\" >
    <div class=\"well\">
        <h3>Confirmation</h3>
        <data id=\"idSupCommune\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commune"]) ? $context["commune"] : $this->getContext($context, "commune")), "id", array()), "html", null, true);
        echo "\"/>
        <p>Vouler vous supprimer la commune ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commune"]) ? $context["commune"] : $this->getContext($context, "commune")), "communeLibelle", array()), "html", null, true);
        echo "</p>

    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-danger\" enabled=false id=\"sub\" type=\"submit\">Supprimer</button>
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
                    url: Routing.generate('zone_supprimer_commune', {'id': \$('#idSupCommune').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$('#selectionCommuneObligatoire').hide();
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
        
        $__internal_d20a2f0310220d0f5a1e076c079c2b932ce188b751124a1bb8d2bcc13cfb7bbc->leave($__internal_d20a2f0310220d0f5a1e076c079c2b932ce188b751124a1bb8d2bcc13cfb7bbc_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  43 => 9,  33 => 5,  29 => 3,  24 => 2,  22 => 1,);
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
<form class=\"formulaire\" novalidate  method=\"post\" >
    <div class=\"well\">
        <h3>Confirmation</h3>
        <data id=\"idSupCommune\" value=\"{{ commune.id }}\"/>
        <p>Vouler vous supprimer la commune {{ commune.communeLibelle }}</p>

    </div>
    <div class=\"item form-group modal-footer\">
        <div class=\"pull-right\">
            <button class=\"btn btn-danger\" enabled=false id=\"sub\" type=\"submit\">Supprimer</button>
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
                    url: Routing.generate('zone_supprimer_commune', {'id': \$('#idSupCommune').val()}),
                    type: \$this.attr('method'),
                    data: new FormData( \$this[0] ),
                    processData: false,
                    contentType: false,
                    statusCode: {
                        200: function(response) {
                            \$(\"#globModal\").modal('hide');
                            \$('#selectionCommuneObligatoire').hide();
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
", "ZoneBundle:Commune:supprimer.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/supprimer.html.twig");
    }
}
