<?php

/* reservation/reservation.html.twig */
class __TwigTemplate_e0b1543ad16df889c7ed8da6faa4ccd6d64f22c5d547102c79359f5b1dfbdfe3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

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

        echo " - Réservation";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tempusDominus/tempusDominus.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reservation.css"), "html", null, true);
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
        echo "
    <h1 class=\"text-center\">Demande de réservation d'une salle</h1>

    <hr>

    ";
        // line 16
        if (((isset($context["canRes"]) || array_key_exists("canRes", $context) ? $context["canRes"] : (function () { throw new Twig_Error_Runtime('Variable "canRes" does not exist.', 16, $this->source); })()) == 0)) {
            // line 17
            echo "        <div class=\"alert alert-danger\">
            La plage horaire demandée n'est pas disponible. <br>
            Veuillez en choisir une autre ou visualiser le planning pour prendre connaissance des horaires disponibles.
        </div>

        <hr>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new Twig_Error_Runtime('Variable "date" does not exist.', 25, $this->source); })()) == 0)) {
            // line 26
            echo "        <div class=\"alert alert-danger\">
            Attention ! <br>
            Les réservation s'effectue sur un créneaux minimum de 30 minutes et les minutes doivent donc être soit '00' soit '30'.
        </div>

        <hr>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (((isset($context["sameDate"]) || array_key_exists("sameDate", $context) ? $context["sameDate"] : (function () { throw new Twig_Error_Runtime('Variable "sameDate" does not exist.', 34, $this->source); })()) == 1)) {
            // line 35
            echo "        <div class=\"alert alert-danger\">
            La date et l'horaire de début de réservation ne peuvent être la même que celle de fin !
        </div>

        <hr>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "

    <span>Identification</span>
    <div class=\"identification\">
        ";
        // line 47
        echo "        <div class=\"col-11\">
            <div class=\"form-group\">
                <label for=\"reservation_libres\">Descriptif :</label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "libres", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 55
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_typeven\">Type :</label>
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "typeven", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 63
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_client\">Client :</label>
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 71
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_beneficiaire\">Bénéficiaire :</label>
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "beneficiaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 79
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_salle\">Salle :</label>
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "salle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>

    <span>Période</span>
    <div class=\"periode\">
        <div class=\"row\">
            ";
        // line 91
        echo "            <div class=\"offset-md-1 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerDebut\" data-target-input=\"nearest\">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "planning", array()), "datetimeDebut", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin")));
        echo "
                        <div class=\"input-group-append\" data-target=\"#datetimepickerDebut\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 103
        echo "            <div class=\"offset-md-2 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerFin\" data-target-input=\"nearest\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->source); })()), "planning", array()), "datetimeFin", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin")));
        echo "
                        <div class=\"input-group-append\" data-target=\"#datetimepickerFin\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    ";
        // line 118
        echo "    <div class=\"form-group\">
        <label for=\"reservation_comment\">Commentaire :</label>
        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 120, $this->source); })()), "comment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    ";
        // line 124
        echo "    <div class=\"row\">
        <div class=\"col-md-3 col-12\">
            <button class=\"btn btn-light\" id=\"submit\" type=\"submit\">Effectuer la demande</button>
        </div>
    </div>

    ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 130, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tempusDominus/tempusDominus.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#datetimepickerDebut, #datetimepickerFin').datetimepicker({
                locale: 'fr',
                format: 'YYYY-MM-DD HH:mm',
                defaultDate: new Date(),
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                },
            });
        });

        \$(function () {
            \$('#datetimepickerDebut').datetimepicker();
            \$('#datetimepickerFin').datetimepicker({
                useCurrent: false
            });
            \$(\"#datetimepickerDebut\").on(\"change.datetimepicker\", function (e) {
                \$('#datetimepickerFin').datetimepicker('minDate', e.date);
            });
            \$(\"#datetimepickerFin\").on(\"change.datetimepicker\", function (e) {
                \$('#datetimepickerDebut').datetimepicker('maxDate', e.date);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 136,  294 => 135,  285 => 134,  272 => 130,  264 => 124,  258 => 120,  254 => 118,  240 => 106,  235 => 103,  224 => 94,  219 => 91,  208 => 82,  203 => 79,  196 => 74,  191 => 71,  184 => 66,  179 => 63,  172 => 58,  167 => 55,  160 => 50,  155 => 47,  148 => 42,  145 => 41,  137 => 35,  135 => 34,  132 => 33,  123 => 26,  121 => 25,  118 => 24,  109 => 17,  107 => 16,  100 => 11,  91 => 10,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} - Réservation{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('tempusDominus/tempusDominus.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/reservation.css') }}\">
{% endblock %}

{% block body %}

    <h1 class=\"text-center\">Demande de réservation d'une salle</h1>

    <hr>

    {% if canRes == 0 %}
        <div class=\"alert alert-danger\">
            La plage horaire demandée n'est pas disponible. <br>
            Veuillez en choisir une autre ou visualiser le planning pour prendre connaissance des horaires disponibles.
        </div>

        <hr>
    {% endif %}

    {% if date == 0 %}
        <div class=\"alert alert-danger\">
            Attention ! <br>
            Les réservation s'effectue sur un créneaux minimum de 30 minutes et les minutes doivent donc être soit '00' soit '30'.
        </div>

        <hr>
    {% endif %}

    {% if sameDate == 1 %}
        <div class=\"alert alert-danger\">
            La date et l'horaire de début de réservation ne peuvent être la même que celle de fin !
        </div>

        <hr>
    {% endif %}

    {{ form_start(form) }}

    <span>Identification</span>
    <div class=\"identification\">
        {#libres#}
        <div class=\"col-11\">
            <div class=\"form-group\">
                <label for=\"reservation_libres\">Descriptif :</label>
                {{ form_widget(form.libres, {'attr': {'class': \"form-control\"}}) }}
            </div>
        </div>

        {#typeven#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_typeven\">Type :</label>
                {{ form_widget(form.typeven, {'attr': {'class': \"form-control\"}}) }}
            </div>
        </div>

        {#client#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_client\">Client :</label>
                {{ form_widget(form.client, {'attr': {'class': \"form-control\"}}) }}
            </div>
        </div>

        {#beneficiaire#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_beneficiaire\">Bénéficiaire :</label>
                {{ form_widget(form.beneficiaire, {'attr': {'class': \"form-control\"}}) }}
            </div>
        </div>

        {#salle#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_salle\">Salle :</label>
                {{ form_widget(form.salle, {'attr': {'class': \"form-control\"}}) }}
            </div>
        </div>
    </div>

    <span>Période</span>
    <div class=\"periode\">
        <div class=\"row\">
            {#datetimeDebut#}
            <div class=\"offset-md-1 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerDebut\" data-target-input=\"nearest\">
                        {{ form_widget(form.planning.datetimeDebut, {'attr': {'class': \"form-control datetimepicker-input\", 'data-target': \"#datetimepickerFin\"}}) }}
                        <div class=\"input-group-append\" data-target=\"#datetimepickerDebut\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            {#datetimeFin#}
            <div class=\"offset-md-2 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerFin\" data-target-input=\"nearest\">
                        {{ form_widget(form.planning.datetimeFin, {'attr': {'class': \"form-control datetimepicker-input\", 'data-target': \"#datetimepickerFin\"}}) }}
                        <div class=\"input-group-append\" data-target=\"#datetimepickerFin\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {#comment#}
    <div class=\"form-group\">
        <label for=\"reservation_comment\">Commentaire :</label>
        {{ form_widget(form.comment, {'attr': {'class': \"form-control\"}}) }}
    </div>

    {#submit#}
    <div class=\"row\">
        <div class=\"col-md-3 col-12\">
            <button class=\"btn btn-light\" id=\"submit\" type=\"submit\">Effectuer la demande</button>
        </div>
    </div>

    {{ form_end(form) }}

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/moment-with-locales.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('tempusDominus/tempusDominus.js') }}\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#datetimepickerDebut, #datetimepickerFin').datetimepicker({
                locale: 'fr',
                format: 'YYYY-MM-DD HH:mm',
                defaultDate: new Date(),
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                },
            });
        });

        \$(function () {
            \$('#datetimepickerDebut').datetimepicker();
            \$('#datetimepickerFin').datetimepicker({
                useCurrent: false
            });
            \$(\"#datetimepickerDebut\").on(\"change.datetimepicker\", function (e) {
                \$('#datetimepickerFin').datetimepicker('minDate', e.date);
            });
            \$(\"#datetimepickerFin\").on(\"change.datetimepicker\", function (e) {
                \$('#datetimepickerDebut').datetimepicker('maxDate', e.date);
            });
        });
    </script>
{% endblock %}", "reservation/reservation.html.twig", "C:\\Site\\planningV2\\templates\\reservation\\reservation.html.twig");
    }
}
