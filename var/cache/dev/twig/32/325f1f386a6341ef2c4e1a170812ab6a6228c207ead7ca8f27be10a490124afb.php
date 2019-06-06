<?php

/* planningParTypeDeSalle/index.html.twig */
class __TwigTemplate_322a802313e4c889162c1e30c0909946ab127463afef06f2990fd0efb18f5af1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planningParTypeDeSalle/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planningParTypeDeSalle/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planningParTypeDeSalle/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " - Planning par type de salle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/planningPar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"title\">
        <h1 class=\"text-center\">Planning par type de salle</h1>
    </div>

    <form action=\"\" method=\"post\">
        <div class=\"row\">
            <label for=\"typeSelection\"></label>
            <select class=\"form-control offset-md-1 col-md-7\" name=\"typeSelection\" id=\"typeSelection\">
                <option value=\"\">-- Choisissez un type de salle --</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["type"], "id", array()) == (isset($context["currentType"]) || array_key_exists("currentType", $context) ? $context["currentType"] : (function () { throw new Twig_Error_Runtime('Variable "currentType" does not exist.', 21, $this->source); })()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "libelle", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </select>

            <input class=\"btn btn-light offset-1 col-2\" type=\"submit\" value=\"Rechercher\">
        </div>
    </form>

    ";
        // line 29
        if ((isset($context["planning"]) || array_key_exists("planning", $context) ? $context["planning"] : (function () { throw new Twig_Error_Runtime('Variable "planning" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "
        <hr>

        <div class=\"offset-4 col-4\">
            <div id=\"calendar\" class=\"calendar\"></div>
        </div>

        <hr>

        <div class=\"row\">
            <button class=\"btn btn-light offset-1 col-2\" id=\"buttonPrev\">Précédent</button>
            <button class=\"btn btn-light offset-6 col-2\" id=\"buttonNext\">Suivant</button>
        </div>

        <hr>

        <div>
            <table class=\"tabInfo\">
                <thead>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"26\" id=\"week\"></th>
                </tr>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"26\" id=\"day\"></th>
                </tr>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"2\" class=\"infoHour\">8H</th>
                    <th colspan=\"2\" class=\"infoHour\">9H</th>
                    <th colspan=\"2\" class=\"infoHour\">10H</th>
                    <th colspan=\"2\" class=\"infoHour\">11H</th>
                    <th colspan=\"2\" class=\"infoHour\">12H</th>
                    <th colspan=\"2\" class=\"infoHour\">13H</th>
                    <th colspan=\"2\" class=\"infoHour\">14H</th>
                    <th colspan=\"2\" class=\"infoHour\">15H</th>
                    <th colspan=\"2\" class=\"infoHour\">16H</th>
                    <th colspan=\"2\" class=\"infoHour\">17H</th>
                    <th colspan=\"2\" class=\"infoHour\">18H</th>
                    <th colspan=\"2\" class=\"infoHour\">19H</th>
                    <th colspan=\"2\" class=\"infoHour\">20H</th>
                </tr>
                </thead>
            </table>

            <table class=\"tabReservation\">
                <tbody id=\"tabBody\">
                </tbody>
            </table>
        </div>

    ";
        }
        // line 83
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/planning.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ajax/planningPar.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" >

        \$(\"#buttonNext, #buttonPrev\").click(function () {

            let dateForPHP = moment(datePlanning).toDate();

            \$.ajax({
                url: \"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PlanningParTypeDeSalleAjax");
        echo "\",
                type: \"post\",
                dataType: \"json\",
                data: {\"planningDate\": dateForPHP, \"typeDeSalle\": \$(\"#typeSelection\").val()},
                async: true,
                success: function (data) {
                    updatePlanning(data);
                }
            });
        });

        \$(document).ready(function() {
            // Appelle la fonction load au premier chargement de la page (planning.js)
            \$(load());

            let role = ";
        // line 114
        echo (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new Twig_Error_Runtime('Variable "role" does not exist.', 114, $this->source); })());
        echo ";

            // Si la personne possède les droits
            if (role === \"ROLE_GESTIONNAIRE\") {
                // Ajoute evenement au click de la réservation
                \$(\"body\").on('click', 'td.cliquable', function(e) {
                    let td = \$(e.currentTarget);
                    let id = td.attr(\"data-id\");

                    let url = \"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification");
        echo "/\"+id;

                    window.location.href = url;
                });
            }

            let data = ";
        // line 129
        echo (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 129, $this->source); })());
        echo ";
            updatePlanning(data);

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "planningParTypeDeSalle/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 129,  270 => 123,  258 => 114,  240 => 99,  228 => 90,  224 => 89,  220 => 88,  215 => 87,  206 => 86,  195 => 83,  140 => 30,  138 => 29,  130 => 23,  115 => 21,  111 => 20,  100 => 11,  91 => 10,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} - Planning par type de salle{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/planningPar.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/calendar.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"title\">
        <h1 class=\"text-center\">Planning par type de salle</h1>
    </div>

    <form action=\"\" method=\"post\">
        <div class=\"row\">
            <label for=\"typeSelection\"></label>
            <select class=\"form-control offset-md-1 col-md-7\" name=\"typeSelection\" id=\"typeSelection\">
                <option value=\"\">-- Choisissez un type de salle --</option>
                {% for type in types %}
                    <option value=\"{{ type.id }}\" {% if type.id == currentType %}selected=\"selected\"{% endif %}>{{ type.libelle }}</option>
                {% endfor %}
            </select>

            <input class=\"btn btn-light offset-1 col-2\" type=\"submit\" value=\"Rechercher\">
        </div>
    </form>

    {% if planning %}

        <hr>

        <div class=\"offset-4 col-4\">
            <div id=\"calendar\" class=\"calendar\"></div>
        </div>

        <hr>

        <div class=\"row\">
            <button class=\"btn btn-light offset-1 col-2\" id=\"buttonPrev\">Précédent</button>
            <button class=\"btn btn-light offset-6 col-2\" id=\"buttonNext\">Suivant</button>
        </div>

        <hr>

        <div>
            <table class=\"tabInfo\">
                <thead>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"26\" id=\"week\"></th>
                </tr>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"26\" id=\"day\"></th>
                </tr>
                <tr>
                    <th class=\"void\"></th>
                    <th colspan=\"2\" class=\"infoHour\">8H</th>
                    <th colspan=\"2\" class=\"infoHour\">9H</th>
                    <th colspan=\"2\" class=\"infoHour\">10H</th>
                    <th colspan=\"2\" class=\"infoHour\">11H</th>
                    <th colspan=\"2\" class=\"infoHour\">12H</th>
                    <th colspan=\"2\" class=\"infoHour\">13H</th>
                    <th colspan=\"2\" class=\"infoHour\">14H</th>
                    <th colspan=\"2\" class=\"infoHour\">15H</th>
                    <th colspan=\"2\" class=\"infoHour\">16H</th>
                    <th colspan=\"2\" class=\"infoHour\">17H</th>
                    <th colspan=\"2\" class=\"infoHour\">18H</th>
                    <th colspan=\"2\" class=\"infoHour\">19H</th>
                    <th colspan=\"2\" class=\"infoHour\">20H</th>
                </tr>
                </thead>
            </table>

            <table class=\"tabReservation\">
                <tbody id=\"tabBody\">
                </tbody>
            </table>
        </div>

    {% endif %}

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/moment-with-locales.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/planning.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('ajax/planningPar.js') }}\"></script>

    <script type=\"text/javascript\" >

        \$(\"#buttonNext, #buttonPrev\").click(function () {

            let dateForPHP = moment(datePlanning).toDate();

            \$.ajax({
                url: \"{{ path('PlanningParTypeDeSalleAjax') }}\",
                type: \"post\",
                dataType: \"json\",
                data: {\"planningDate\": dateForPHP, \"typeDeSalle\": \$(\"#typeSelection\").val()},
                async: true,
                success: function (data) {
                    updatePlanning(data);
                }
            });
        });

        \$(document).ready(function() {
            // Appelle la fonction load au premier chargement de la page (planning.js)
            \$(load());

            let role = {{ role|raw }};

            // Si la personne possède les droits
            if (role === \"ROLE_GESTIONNAIRE\") {
                // Ajoute evenement au click de la réservation
                \$(\"body\").on('click', 'td.cliquable', function(e) {
                    let td = \$(e.currentTarget);
                    let id = td.attr(\"data-id\");

                    let url = \"{{ path('modification') }}/\"+id;

                    window.location.href = url;
                });
            }

            let data = {{ reservation|raw }};
            updatePlanning(data);

        });
    </script>
{% endblock %}", "planningParTypeDeSalle/index.html.twig", "C:\\Site\\planningV2\\templates\\planningParTypeDeSalle\\index.html.twig");
    }
}
