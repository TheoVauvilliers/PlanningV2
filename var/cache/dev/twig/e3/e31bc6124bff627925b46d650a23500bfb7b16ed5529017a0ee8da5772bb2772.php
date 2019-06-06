<?php

/* planningParPrestataire/planningParPrestataire.html.twig */
class __TwigTemplate_52c34d087e612ebf7c72798e87f358821c81cccebd8d1902d439467a726d01cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planningParPrestataire/planningParPrestataire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planningParPrestataire/planningParPrestataire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planningParPrestataire/planningParPrestataire.html.twig"));

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

        echo " - Planning par prestataire";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/planningParPrestataire.css"), "html", null, true);
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
        <h1 class=\"text-center\">Planning par prestataire</h1>
    </div>

    <form action=\"\" method=\"post\">
        <div class=\"row\">
            <label for=\"prestataireSelection\"></label>
            <select class=\"form-control offset-md-1 col-md-7\" name=\"prestataireSelection\" id=\"prestataireSelection\">
                <option value=\"\">-- Choisissez un prestataire --</option>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new Twig_Error_Runtime('Variable "prestataires" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "libelle", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestataire'], $context['_parent'], $context['loop']);
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

        <div id=\"calendar\" class=\"calendar\"></div>

        <hr>

        <div class=\"row\">
            <button class=\"btn btn-light offset-1 col-2\" id=\"buttonPrev\">Précédent</button>
            <button class=\"btn btn-light offset-6 col-2\" id=\"buttonNext\">Suivant</button>
        </div>

        <hr>

        <div>
            <table>
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

            <hr>

            <table>
                <tbody>
                    <tr>
                        <td class=\"room\"></td>
                        <td class=\"hour\">1</td>
                        <td class=\"hour\">2</td>
                        <td class=\"hour\">3</td>
                        <td class=\"hour\">4</td>
                        <td class=\"hour\">5</td>
                        <td class=\"hour\">6</td>
                        <td class=\"hour\">7</td>
                        <td class=\"hour\">8</td>
                        <td class=\"hour\">9</td>
                        <td class=\"hour\">10</td>
                        <td class=\"hour\">11</td>
                        <td class=\"hour\">12</td>
                        <td class=\"hour\">13</td>
                        <td class=\"hour\">14</td>
                        <td class=\"hour\">15</td>
                        <td class=\"hour\">16</td>
                        <td class=\"hour\">17</td>
                        <td class=\"hour\">18</td>
                        <td class=\"hour\">19</td>
                        <td class=\"hour\">20</td>
                        <td class=\"hour\">21</td>
                        <td class=\"hour\">22</td>
                        <td class=\"hour\">23</td>
                        <td class=\"hour\">24</td>
                        <td class=\"hour\">25</td>
                        <td class=\"hour\">26</td>
                    </tr>
                    <tr>
                        <td class=\"room\"></td>
                        <td class=\"hour\">1</td>
                        <td class=\"hour\">2</td>
                        <td class=\"hour\">3</td>
                        <td class=\"hour\">4</td>
                        <td class=\"hour\">5</td>
                        <td class=\"hour\">6</td>
                        <td class=\"hour\">7</td>
                        <td class=\"hour\">8</td>
                        <td class=\"hour\">9</td>
                        <td class=\"hour\">10</td>
                        <td class=\"hour\">11</td>
                        <td class=\"hour\">12</td>
                        <td class=\"hour\">13</td>
                        <td class=\"hour\">14</td>
                        <td class=\"hour\">15</td>
                        <td class=\"hour\">16</td>
                        <td class=\"hour\">17</td>
                        <td class=\"hour\">18</td>
                        <td class=\"hour\">19</td>
                        <td class=\"hour\">20</td>
                        <td class=\"hour\">21</td>
                        <td class=\"hour\">22</td>
                        <td class=\"hour\">23</td>
                        <td class=\"hour\">24</td>
                        <td class=\"hour\">25</td>
                        <td class=\"hour\">26</td>
                    </tr>
                </tbody>
            </table>
        </div>

    ";
        }
        // line 141
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/planning.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" >

        \$(\"#buttonNext, #buttonPrev\").click(function () {
            if (1) {
                let dateForPHP = moment(datePlanning).toDate();

                \$.ajax({
                    url: \"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planningParPrestataire");
        echo "\",
                    type: \"post\",
                    dataType: \"json\",
                    data: {\"planningDate\": dateForPHP},
                    async: true,
                    success: function (data) {
                        updatePlanning(data);
                    }
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "planningParPrestataire/planningParPrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 159,  281 => 150,  277 => 149,  272 => 148,  263 => 147,  249 => 141,  136 => 30,  134 => 29,  126 => 23,  115 => 21,  111 => 20,  100 => 11,  91 => 10,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} - Planning par prestataire{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/planningParPrestataire.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/calendar.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"title\">
        <h1 class=\"text-center\">Planning par prestataire</h1>
    </div>

    <form action=\"\" method=\"post\">
        <div class=\"row\">
            <label for=\"prestataireSelection\"></label>
            <select class=\"form-control offset-md-1 col-md-7\" name=\"prestataireSelection\" id=\"prestataireSelection\">
                <option value=\"\">-- Choisissez un prestataire --</option>
                {% for prestataire in prestataires %}
                    <option value=\"{{ prestataire.id }}\">{{ prestataire.libelle }}</option>
                {% endfor %}
            </select>

            <input class=\"btn btn-light offset-1 col-2\" type=\"submit\" value=\"Rechercher\">
        </div>
    </form>

    {% if planning %}

        <hr>

        <div id=\"calendar\" class=\"calendar\"></div>

        <hr>

        <div class=\"row\">
            <button class=\"btn btn-light offset-1 col-2\" id=\"buttonPrev\">Précédent</button>
            <button class=\"btn btn-light offset-6 col-2\" id=\"buttonNext\">Suivant</button>
        </div>

        <hr>

        <div>
            <table>
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

            <hr>

            <table>
                <tbody>
                    <tr>
                        <td class=\"room\"></td>
                        <td class=\"hour\">1</td>
                        <td class=\"hour\">2</td>
                        <td class=\"hour\">3</td>
                        <td class=\"hour\">4</td>
                        <td class=\"hour\">5</td>
                        <td class=\"hour\">6</td>
                        <td class=\"hour\">7</td>
                        <td class=\"hour\">8</td>
                        <td class=\"hour\">9</td>
                        <td class=\"hour\">10</td>
                        <td class=\"hour\">11</td>
                        <td class=\"hour\">12</td>
                        <td class=\"hour\">13</td>
                        <td class=\"hour\">14</td>
                        <td class=\"hour\">15</td>
                        <td class=\"hour\">16</td>
                        <td class=\"hour\">17</td>
                        <td class=\"hour\">18</td>
                        <td class=\"hour\">19</td>
                        <td class=\"hour\">20</td>
                        <td class=\"hour\">21</td>
                        <td class=\"hour\">22</td>
                        <td class=\"hour\">23</td>
                        <td class=\"hour\">24</td>
                        <td class=\"hour\">25</td>
                        <td class=\"hour\">26</td>
                    </tr>
                    <tr>
                        <td class=\"room\"></td>
                        <td class=\"hour\">1</td>
                        <td class=\"hour\">2</td>
                        <td class=\"hour\">3</td>
                        <td class=\"hour\">4</td>
                        <td class=\"hour\">5</td>
                        <td class=\"hour\">6</td>
                        <td class=\"hour\">7</td>
                        <td class=\"hour\">8</td>
                        <td class=\"hour\">9</td>
                        <td class=\"hour\">10</td>
                        <td class=\"hour\">11</td>
                        <td class=\"hour\">12</td>
                        <td class=\"hour\">13</td>
                        <td class=\"hour\">14</td>
                        <td class=\"hour\">15</td>
                        <td class=\"hour\">16</td>
                        <td class=\"hour\">17</td>
                        <td class=\"hour\">18</td>
                        <td class=\"hour\">19</td>
                        <td class=\"hour\">20</td>
                        <td class=\"hour\">21</td>
                        <td class=\"hour\">22</td>
                        <td class=\"hour\">23</td>
                        <td class=\"hour\">24</td>
                        <td class=\"hour\">25</td>
                        <td class=\"hour\">26</td>
                    </tr>
                </tbody>
            </table>
        </div>

    {% endif %}




{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/moment-with-locales.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/planning.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\"></script>

    <script type=\"text/javascript\" >

        \$(\"#buttonNext, #buttonPrev\").click(function () {
            if (1) {
                let dateForPHP = moment(datePlanning).toDate();

                \$.ajax({
                    url: \"{{ path('planningParPrestataire') }}\",
                    type: \"post\",
                    dataType: \"json\",
                    data: {\"planningDate\": dateForPHP},
                    async: true,
                    success: function (data) {
                        updatePlanning(data);
                    }
                });
            }
        });
    </script>
{% endblock %}", "planningParPrestataire/planningParPrestataire.html.twig", "C:\\Site\\planning\\templates\\planningParPrestataire\\planningParPrestataire.html.twig");
    }
}
