<?php

/* NSAdminBundle:Articles:add.html.twig */
class __TwigTemplate_3999ab16ca24aa84f0031c809de6d1775f36992024b662351f30e5435a26e17f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSAdminBundle::layout.html.twig", "NSAdminBundle:Articles:add.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Articles:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Articles:add.html.twig"));

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
        echo " Articles";
        
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
                <h1>Create new article</h1>
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
        echo "\">Articles</a> </li>
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
                    <div class=\"card-header\">
                        <strong class=\"card-title\">New Article </strong>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "vars", array()), "valid", array())) {
            // line 39
            echo "
                            ";
            // line 41
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 42
                echo "                                ";
                // line 43
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 44
                    echo "                                    <div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\">
                                        <span class=\"badge badge-pill badge-danger\">Erreur</span>
                                        ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
                        ";
        }
        // line 52
        echo "


                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Title</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></div>
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " ")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Description</label>
                            <div class=\"input-group\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " ")));
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label class=\" form-control-label\">Content</label>
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "", "placeholder" => " ")));
        echo "

                                </div>
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Photo</label>
                            <div class=\"input-group\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "photoFile", array()), 'widget', array("attr" => array("class" => "file", "placeholder" => "")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-check-inline form-check\">
                            <label class=\"inline-checkbox1\">Active
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "enabled", array()), 'widget', array("attr" => array("class" => "form-check-input", "placeholder" => "")));
        echo "

                            </label>

                        </div>



                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Annuller
                        </button>
                    </div>
                </div>
                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->source); })()), 'rest');
        echo "

                ";
        // line 108
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
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
        return "NSAdminBundle:Articles:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 108,  249 => 105,  228 => 87,  220 => 82,  207 => 72,  197 => 65,  188 => 59,  179 => 52,  175 => 50,  169 => 49,  160 => 46,  156 => 44,  151 => 43,  149 => 42,  144 => 41,  141 => 39,  139 => 38,  129 => 32,  124 => 29,  118 => 25,  109 => 24,  92 => 16,  88 => 15,  75 => 4,  66 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSAdminBundle::layout.html.twig\" %}
{% block title %} {{ parent() }} Articles{% endblock %}
{% block breadcrumbs %}
    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Create new article</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li><a href=\"{{ path('ns_admin_homepage') }}\">Dashboar</a> </li>
                    <li><a href=\"{{ path('ns_admin_articles') }}\">Articles</a> </li>
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
                    <div class=\"card-header\">
                        <strong class=\"card-title\">New Article </strong>
                    </div>
                    <div class=\"card-body\">
                        {% if not form.vars.valid %}

                            {# Loop through every form item #}
                            {% for child in form.children %}
                                {# Display the errors of the form item #}
                                {%for error in child.vars.errors%}
                                    <div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\">
                                        <span class=\"badge badge-pill badge-danger\">Erreur</span>
                                        {{error.message}}
                                    </div>
                                {%endfor%}
                            {%endfor%}

                        {%endif%}



                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Title</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\"><i class=\"fa fa-institution\"></i></div>
                                {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': ' ' }}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Description</label>
                            <div class=\"input-group\">
                                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': ' ' }}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label class=\" form-control-label\">Content</label>
                                    {{ form_widget(form.content, {'attr': {'class': '', 'placeholder': ' '}}) }}

                                </div>
                            </div>
                        </div>


                        <div class=\"form-group\">
                            <label class=\" form-control-label\">Photo</label>
                            <div class=\"input-group\">
                                {{ form_widget(form.photoFile, {'attr': {'class': 'file', 'placeholder': '' }}) }}
                            </div>
                        </div>
                        <div class=\"form-check-inline form-check\">
                            <label class=\"inline-checkbox1\">Active
                                {{ form_widget(form.enabled, {'attr': {'class': 'form-check-input', 'placeholder': '' }}) }}

                            </label>

                        </div>



                    </div>
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Enregistrer
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                            <i class=\"fa fa-dot-circle-o\"></i> Annuller
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

{% endblock %}", "NSAdminBundle:Articles:add.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/AdminBundle/Resources/views/Articles/add.html.twig");
    }
}
