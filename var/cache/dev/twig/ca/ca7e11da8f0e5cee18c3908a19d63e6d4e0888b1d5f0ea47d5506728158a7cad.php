<?php

/* reservation/visualiser.html.twig */
class __TwigTemplate_0fb85e86015244fc115aa09881a8b6424cc6626d45127126ab55e150ea6dd6a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/visualiser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/visualiser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/visualiser.html.twig"));

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
    <h1 class=\"text-center\">Visualiser la réservation d'une salle</h1>

    <hr>

    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

    <span>Identification</span>
    <div class=\"identification\">
        ";
        // line 21
        echo "        <div class=\"col-11\">
            <div class=\"form-group\">
                <label for=\"reservation_libres\">Descriptif :</label>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "libres", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "true")));
        echo "
            </div>
        </div>

        ";
        // line 29
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_typeven\">Type :</label>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "typeven", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "true")));
        echo "
            </div>
        </div>

        ";
        // line 37
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_client\">Client :</label>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "client", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "true")));
        echo "
            </div>
        </div>

        ";
        // line 45
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_beneficiaire\">Bénéficiaire :</label>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "beneficiaire", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "true")));
        echo "
            </div>
        </div>

        ";
        // line 53
        echo "        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_salle\">Salle :</label>
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "salle", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "true")));
        echo "
            </div>
        </div>
    </div>

    <span>Période</span>
    <div class=\"periode\">
        <div class=\"row\">
            ";
        // line 65
        echo "            <div class=\"offset-md-1 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerDebut\" data-target-input=\"nearest\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "planning", array()), "datetimeDebut", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin", "readonly" => "true")));
        echo "
                        <div class=\"input-group-append\" data-target=\"#datetimepickerDebut\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 77
        echo "            <div class=\"offset-md-2 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerFin\" data-target-input=\"nearest\">
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "planning", array()), "datetimeFin", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin", "readonly" => "true")));
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
        // line 92
        echo "    <div class=\"form-group\">
        <label for=\"reservation_comment\">Commentaire :</label>
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), "comment", array()), 'widget', array("attr" => array("class" => "form-control", "readonly" => "true")));
        echo "
    </div>

    <div class=\"row\">
        <div class=\"col-md-3 col-12\">
            <a class=\"btn btn-light\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planning");
        echo "\">Retour au planning</a>
        </div>
    </div>

    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 108
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
        return "reservation/visualiser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 108,  253 => 107,  244 => 106,  232 => 103,  225 => 99,  217 => 94,  213 => 92,  199 => 80,  194 => 77,  183 => 68,  178 => 65,  167 => 56,  162 => 53,  155 => 48,  150 => 45,  143 => 40,  138 => 37,  131 => 32,  126 => 29,  119 => 24,  114 => 21,  107 => 16,  100 => 11,  91 => 10,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
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

    <h1 class=\"text-center\">Visualiser la réservation d'une salle</h1>

    <hr>

    {{ form_start(form) }}

    <span>Identification</span>
    <div class=\"identification\">
        {#libres#}
        <div class=\"col-11\">
            <div class=\"form-group\">
                <label for=\"reservation_libres\">Descriptif :</label>
                {{ form_widget(form.libres, {'attr': {'class': \"form-control\", 'readonly': 'true'}}) }}
            </div>
        </div>

        {#typeven#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_typeven\">Type :</label>
                {{ form_widget(form.typeven, {'attr': {'class': \"form-control\", 'disabled': 'true'}}) }}
            </div>
        </div>

        {#client#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_client\">Client :</label>
                {{ form_widget(form.client, {'attr': {'class': \"form-control\", 'disabled': 'true'}}) }}
            </div>
        </div>

        {#beneficiaire#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_beneficiaire\">Bénéficiaire :</label>
                {{ form_widget(form.beneficiaire, {'attr': {'class': \"form-control\", 'readonly': 'true'}}) }}
            </div>
        </div>

        {#salle#}
        <div class=\"col-10\">
            <div class=\"form-group\">
                <label for=\"reservation_salle\">Salle :</label>
                {{ form_widget(form.salle, {'attr': {'class': \"form-control\", 'disabled': 'true'}}) }}
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
                        {{ form_widget(form.planning.datetimeDebut, {'attr': {'class': \"form-control datetimepicker-input\", 'data-target': \"#datetimepickerFin\", 'readonly': 'true'}}) }}
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
                        {{ form_widget(form.planning.datetimeFin, {'attr': {'class': \"form-control datetimepicker-input\", 'data-target': \"#datetimepickerFin\", 'readonly': 'true'}}) }}
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
        {{ form_widget(form.comment, {'attr': {'class': \"form-control\", 'readonly': 'true'}}) }}
    </div>

    <div class=\"row\">
        <div class=\"col-md-3 col-12\">
            <a class=\"btn btn-light\" href=\"{{ path('planning') }}\">Retour au planning</a>
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
{% endblock %}", "reservation/visualiser.html.twig", "C:\\Site\\planningV2\\templates\\reservation\\visualiser.html.twig");
    }
}
