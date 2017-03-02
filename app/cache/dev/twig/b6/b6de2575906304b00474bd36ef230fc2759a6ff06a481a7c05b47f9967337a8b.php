<?php

/* ZoneBundle:Commune:lister.html.twig */
class __TwigTemplate_3d0eca7b9be657259b31f46fe005840c1ad1268b692baa4c574f3b0ace5e4895 extends Twig_Template
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
        $__internal_2294d4630d78c79665d7b4a9f5b75294c0c507917fa6585a5e64b67b51009b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2294d4630d78c79665d7b4a9f5b75294c0c507917fa6585a5e64b67b51009b26->enter($__internal_2294d4630d78c79665d7b4a9f5b75294c0c507917fa6585a5e64b67b51009b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Commune:lister.html.twig"));

        // line 1
        echo "<data id=\"districtId\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["district_id"]) ? $context["district_id"] : $this->getContext($context, "district_id")), "html", null, true);
        echo "\"/>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["communes"]) ? $context["communes"] : $this->getContext($context, "communes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
            // line 3
            echo "    <li value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "id", array()), "html", null, true);
            echo "\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["commune"], "communeLibelle", array()), "html", null, true);
            echo "
        ";
            // line 6
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<script>
        var currentCommuneId;

        \$('#selectionCommuneObligatoire').hide();

        \$('#liste_commune li').click(function(){
            \$('#liste_commune li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')
            currentCommuneId = \$(this).val();
            \$('#selectionCommuneObligatoire').show();
        });

        \$('#supprimerCommune').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_commune', {'id': currentCommuneId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer une commune\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierCommune').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_commune', {'id': currentCommuneId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier une commune\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>";
        
        $__internal_2294d4630d78c79665d7b4a9f5b75294c0c507917fa6585a5e64b67b51009b26->leave($__internal_2294d4630d78c79665d7b4a9f5b75294c0c507917fa6585a5e64b67b51009b26_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Commune:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 6,  36 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<data id=\"districtId\" value=\"{{ district_id }}\"/>
{% for commune in communes %}
    <li value=\"{{ commune.id }}\">
        {{ commune.communeLibelle }}
        {#<i style=\"padding-top: 5px\" class=\"fa fa-chevron-right pull-right\"></i>#}
    </li>
    {#  #}
{% endfor %}

<script>
        var currentCommuneId;

        \$('#selectionCommuneObligatoire').hide();

        \$('#liste_commune li').click(function(){
            \$('#liste_commune li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')
            currentCommuneId = \$(this).val();
            \$('#selectionCommuneObligatoire').show();
        });

        \$('#supprimerCommune').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_commune', {'id': currentCommuneId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer une commune\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierCommune').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_commune', {'id': currentCommuneId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier une commune\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>", "ZoneBundle:Commune:lister.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Commune/lister.html.twig");
    }
}
