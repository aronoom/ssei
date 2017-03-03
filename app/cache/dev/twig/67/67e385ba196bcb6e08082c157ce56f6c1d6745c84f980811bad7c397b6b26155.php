<?php

/* ZoneBundle:Region:lister.html.twig */
class __TwigTemplate_bb0788387ef4480c2359a8d4828744ab10152217bb939bb7915cf225b62f4367 extends Twig_Template
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
        $__internal_7651b3b49d82b30f776b6e92e99ed3d52a39f4d774d7a5a34b39944629a27d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7651b3b49d82b30f776b6e92e99ed3d52a39f4d774d7a5a34b39944629a27d68->enter($__internal_7651b3b49d82b30f776b6e92e99ed3d52a39f4d774d7a5a34b39944629a27d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZoneBundle:Region:lister.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 2
            echo "    <li value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionLibelle", array()), "html", null, true);
            echo "
        ";
            // line 5
            echo "    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<script>
        var currentRegionId;

        // Cacher les boutons qui depend de la selection d'une region
        \$('#selectionRegionObligatoire').hide();
        \$('#ajouterDistrict').hide();
        \$('#selectionDistrictObligatoire').hide();
        \$('#ajouterCommune').hide();
        \$('#selectionCommuneObligatoire').hide();
        \$('#liste_commune').hide();

        \$('#liste_region li').click(function(){
            \$('#liste_region li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')

            currentRegionId = \$(this).val();

            \$('#selectionRegionObligatoire').show();
            \$('#ajouterDistrict').show();
            \$('#liste_commune').hide();

            // Lister les districts de ce region
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_lister_district', {'region_id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('#liste_district').children().remove();
                    \$('#liste_district').append(data);
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });

        });

        \$('#supprimerRegion').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_region', {'id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer une région\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierRegion').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_region', {'id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier une région\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>";
        
        $__internal_7651b3b49d82b30f776b6e92e99ed3d52a39f4d774d7a5a34b39944629a27d68->leave($__internal_7651b3b49d82b30f776b6e92e99ed3d52a39f4d774d7a5a34b39944629a27d68_prof);

    }

    public function getTemplateName()
    {
        return "ZoneBundle:Region:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  35 => 5,  31 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for region in regions %}
    <li value=\"{{ region.id }}\">
        {{ region.regionLibelle }}
        {#<i style=\"padding-top: 5px\" class=\"fa fa-chevron-right pull-right\"></i>#}
    </li>
    {#  #}
{% endfor %}

<script>
        var currentRegionId;

        // Cacher les boutons qui depend de la selection d'une region
        \$('#selectionRegionObligatoire').hide();
        \$('#ajouterDistrict').hide();
        \$('#selectionDistrictObligatoire').hide();
        \$('#ajouterCommune').hide();
        \$('#selectionCommuneObligatoire').hide();
        \$('#liste_commune').hide();

        \$('#liste_region li').click(function(){
            \$('#liste_region li').css('background-color', 'transparent').css('color', '#73879C');
            \$(this).css('background-color', '#0D3349').css('color', 'white')

            currentRegionId = \$(this).val();

            \$('#selectionRegionObligatoire').show();
            \$('#ajouterDistrict').show();
            \$('#liste_commune').hide();

            // Lister les districts de ce region
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_lister_district', {'region_id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('#liste_district').children().remove();
                    \$('#liste_district').append(data);
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });

        });

        \$('#supprimerRegion').click(function(){
            \$('.modal-dialog').removeClass('modal-lg');
            \$('.modal-dialog').addClass('modal-md');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_supprimer_region', {'id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Supprimer une région\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });

        \$('#modifierRegion').click(function(){
            \$('.modal-dialog').removeClass('modal-md');
            \$('.modal-dialog').addClass('modal-lg');
            \$.ajax({
                type: 'GET',
                url: Routing.generate('zone_modifier_region', {'id': currentRegionId}),
                timeout: 3000,
                success: function(data) {
                    \$('.modal-body').children().remove();
                    \$('.modal-body').append(data);
                    \$('.modal-header h4').text(\"Modifier une région\");
                    \$('#globModal').modal('show');
                },
                error: function() {
                    console.log('La requête n\\'a pas abouti');
                }
            });
        });
</script>", "ZoneBundle:Region:lister.html.twig", "/opt/lampp/htdocs/ssei/src/ZoneBundle/Resources/views/Region/lister.html.twig");
    }
}
