<?php

/* NSWebBundle:Story:firstscene.html.twig */
class __TwigTemplate_dbf7a73004e3e6f61bf9c9cced9afdeb8baf7c9cdba4c9aa1098d5531bc3fd40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Story:firstscene.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:firstscene.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:firstscene.html.twig"));

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

        echo " Create your  first scene ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <h3 class=\"title\">Add your first scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Step 2: Create your first scene here.</h3>
                        <p>Start writing your book here</p>
                    </div>

                </div>
                <div class=\"line \"></div>

                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "

                ";
        // line 27
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "Write the title of the first scene ")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "Write your first scene here")));
        echo "
                    </div>

                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'rest');
        echo "

                ";
        // line 50
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "

            </div>
            ";
        // line 53
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Story:firstscene.html.twig", 53)->display($context);
        // line 54
        echo "        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Story:firstscene.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  139 => 53,  132 => 50,  127 => 47,  112 => 35,  105 => 31,  97 => 27,  92 => 24,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} Create your  first scene {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <h3 class=\"title\">Add your first scene </h3>
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">2.</i></a>
                        </div>
                        <h3>Step 2: Create your first scene here.</h3>
                        <p>Start writing your book here</p>
                    </div>

                </div>
                <div class=\"line \"></div>

                {{ form_start(form) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"row\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        {{ form_widget(form.title, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': 'Write the title of the first scene ' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Scene</label>
                        {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': 'Write your first scene here' }}) }}
                    </div>

                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                {{ form_rest(form) }}

                {# Fermeture de la balise <form> du formulaire HTML #}
                {{ form_end(form) }}

            </div>
            {% include \"NSWebBundle::_sidebar.html.twig\" %}
        </div>
    </section>

{% endblock %}

", "NSWebBundle:Story:firstscene.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Story/firstscene.html.twig");
    }
}
