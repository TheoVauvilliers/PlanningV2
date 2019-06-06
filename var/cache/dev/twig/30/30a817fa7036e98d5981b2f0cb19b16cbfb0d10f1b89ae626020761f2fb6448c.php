<?php

/* reservation/reservation.html.twig */
class __TwigTemplate_c6c4cd0442c944d9ab644103812238578fdab125e94f9342d63b1f6e0683cb4e extends Twig_Template
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
    <h1 class=\"text-center\">Réservation d'une salle</h1>

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "libres", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "typeven", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "beneficiaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>

    <span>Période</span>
    <div class=\"periode\">
        <div class=\"row\">
            ";
        // line 57
        echo "            <div class=\"offset-md-1 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerDebut\" data-target-input=\"nearest\">
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "planning", array()), "datetimeDebut", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin")));
        echo "
                        <div class=\"input-group-append\" data-target=\"#datetimepickerDebut\" data-toggle=\"datetimepicker\">
                            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 69
        echo "            <div class=\"offset-md-2 col-md-4\">
                <div class=\"form-group\">
                    <div class=\"input-group date\" id=\"datetimepickerFin\" data-target-input=\"nearest\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "planning", array()), "datetimeFin", array()), 'widget', array("attr" => array("class" => "form-control datetimepicker-input", "data-target" => "#datetimepickerFin")));
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
        // line 84
        echo "    <div class=\"form-group\">
        <label for=\"reservation_comment\">Commentaire :</label>
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "comment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>

    ";
        // line 90
        echo "    <div class=\"form-group\">
        <button class=\"btn btn-light\" id=\"submit\" type=\"submit\">Valider</button>
    </div>

    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/moment-with-locales.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tempusDominus/tempusDominus.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#datetimepickerDebut, #datetimepickerFin').datetimepicker({
                locale: 'fr',
                format: 'YYYY-MM-DD HH:mm',
                defaultDate: new Date()
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
        return array (  244 => 100,  239 => 99,  230 => 98,  217 => 94,  211 => 90,  205 => 86,  201 => 84,  187 => 72,  182 => 69,  171 => 60,  166 => 57,  155 => 48,  150 => 45,  143 => 40,  138 => 37,  131 => 32,  126 => 29,  119 => 24,  114 => 21,  107 => 16,  100 => 11,  91 => 10,  79 => 7,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
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

    <h1 class=\"text-center\">Réservation d'une salle</h1>

    <hr>

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
    <div class=\"form-group\">
        <button class=\"btn btn-light\" id=\"submit\" type=\"submit\">Valider</button>
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
                defaultDate: new Date()
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
{% endblock %}", "reservation/reservation.html.twig", "D:\\Programmation\\Site\\Symfony\\planningV2\\templates\\reservation\\reservation.html.twig");
    }
}
