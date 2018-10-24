<?php

/* NSAdminBundle::terms.html.twig */
class __TwigTemplate_eba70f532d16e11395700d64e9d28e61e528558d7a34168b4c764f2f51462eaf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSAdminBundle::layout.html.twig", "NSAdminBundle::terms.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle::terms.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle::terms.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Partners";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Create new partner</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_homepage");
        echo "\">Dashboar</a> </li>
                    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_articles");
        echo "\">Terms of use</a> </li>
                    <li class=\"active\">Create new</li>
                </ol>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <div class=\"animated fadeIn\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "

                ";
        // line 32
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'errors');
        echo "
                <div class=\"card\">

                    <div class=\"card-body\">
                        ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "vars", array()), "valid", array())) {
            // line 37
            echo "
                            ";
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 40
                echo "                                ";
                // line 41
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 42
                    echo "                                    <div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\">
                                        <span class=\"badge badge-pill badge-danger\">Error</span>
                                        ";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
                        ";
        }
        // line 50
        echo "

                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Terms of use</label>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " ")));
        echo "

                        </div>


                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Save
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Cancel
                        </button>
                    </div>
                </div>
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), 'rest');
        echo "

                ";
        // line 72
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>
    <div class=\"row\">&nbsp;</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSAdminBundle::terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  201 => 69,  183 => 54,  177 => 50,  173 => 48,  167 => 47,  158 => 44,  154 => 42,  149 => 41,  147 => 40,  142 => 39,  139 => 37,  137 => 36,  129 => 32,  124 => 29,  118 => 25,  109 => 24,  92 => 16,  88 => 15,  75 => 4,  66 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSAdminBundle::layout.html.twig\" %}
{% block title %} {{ parent() }} Partners{% endblock %}
{% block breadcrumbs %}
    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Create new partner</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li><a href=\"{{ path('ns_admin_homepage') }}\">Dashboar</a> </li>
                    <li><a href=\"{{ path('ns_admin_articles') }}\">Terms of use</a> </li>
                    <li class=\"active\">Create new</li>
                </ol>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"animated fadeIn\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                {{ form_start(form) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"card\">

                    <div class=\"card-body\">
                        {% if not form.vars.valid %}

                            {# Loop through every form item #}
                            {% for child in form.children %}
                                {# Display the errors of the form item #}
                                {%for error in child.vars.errors%}
                                    <div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\">
                                        <span class=\"badge badge-pill badge-danger\">Error</span>
                                        {{error.message}}
                                    </div>
                                {%endfor%}
                            {%endfor%}

                        {%endif%}


                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Terms of use</label>
                            {{ form_widget(form.content, {'attr': {'class': 'form-control', 'placeholder': ' ' }}) }}

                        </div>


                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Save
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Cancel
                        </button>
                    </div>
                </div>
                {{ form_rest(form) }}

                {# Fermeture de la balise <form> du formulaire HTML #}
                {{ form_end(form) }}

            </div>
        </div>
    </div>
    <div class=\"row\">&nbsp;</div>

{% endblock %}", "NSAdminBundle::terms.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/AdminBundle/Resources/views/terms.html.twig");
    }
}
