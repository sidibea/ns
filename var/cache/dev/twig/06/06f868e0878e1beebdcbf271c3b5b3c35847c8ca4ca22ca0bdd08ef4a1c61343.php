<?php

/* NSWebBundle:Story:add.html.twig */
class __TwigTemplate_c75354a2585082725a6b1809daec4273c0ddee23cb08a4b6c89b15ef049b1863 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Story:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:add.html.twig"));

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

        echo " Add new Story ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Step 1: Enter the information about your storyline.</h3>
                    </div>

                </div>
                <div class=\"line \"></div>
                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

                ";
        // line 23
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
        echo "
                <div class=\"row notopmargin\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Forum - <span style=\"font-size: 12px; text-transform: lowercase\">The genre of your storyline</span></label>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "forum", array()), 'widget', array("attr" => array("class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Mode of writing - <span style=\"font-size: 12px; text-transform: lowercase\">Audience or non audience participation</span></label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control select-1 storyType", "id" => "nom_carte", "placeholder" => "")));
        echo "
                    </div>
                        <div class=\"form-group form-group1 contributors\">
                        <label for=\"nom_carte\">Contributors</label>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "contributors", array()), 'widget', array("attr" => array("class" => "form-control  select-1 ", "id" => "nom_carte", "placeholder" => "")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "placeholder" => "")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Description - <span style=\"font-size: 12px; text-transform: lowercase\">Synopsis of your storyline</span></label>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "rows" => "10")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Cover</label>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "imageFile", array()), 'widget', array("attr" => array("class" => "form-control ", "id" => "nom_carte", "rows" => "10")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Active</label>
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "isEnabled", array()), 'widget', array("attr" => array("checked" => "checked", "data-on-text" => "YES", "data-off-text" => "NO", "class" => "form-control bt-switch", "id" => "nom_carte", "rows" => "10")));
        echo "
                    </div>
                    <div class=\" line\"></div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Create</button>
                    </div>

                </div>


                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), 'rest');
        echo "

                ";
        // line 66
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "

            </div>
            ";
        // line 69
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Story:add.html.twig", 69)->display($context);
        // line 70
        echo "        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 75
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){

            \$('.form-group1').hide();
            \$('#ns_scenesbundle_storyline_type').change(function(){
                if(\$('#ns_scenesbundle_storyline_type').val() == 'Group writing') {
                    \$('.form-group1').show();

                } else {
                    \$('.form-group1').hide();
                }
            });

            // Multiple Select
            \$(\".select-1\").select2({
                placeholder: \"Select Contributors\"
            });
            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Story:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 75,  186 => 74,  174 => 70,  172 => 69,  165 => 66,  160 => 63,  146 => 52,  138 => 47,  131 => 43,  124 => 39,  117 => 35,  110 => 31,  103 => 27,  95 => 23,  90 => 20,  73 => 5,  64 => 4,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}
{% block title %} Add new Story {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\">

                <div class=\"col_full nobottommargin\">

                    <div class=\"feature-box fbox-plain\">
                        <div class=\"fbox-icon\">
                            <a href=\"#\"><i class=\"i-alt\">1.</i></a>
                        </div>
                        <h3>Step 1: Enter the information about your storyline.</h3>
                    </div>

                </div>
                <div class=\"line \"></div>
                {{ form_start(form) }}

                {# Les erreurs générales du formulaire. #}
                {{ form_errors(form) }}
                <div class=\"row notopmargin\">
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Forum - <span style=\"font-size: 12px; text-transform: lowercase\">The genre of your storyline</span></label>
                        {{ form_widget(form.forum, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Mode of writing - <span style=\"font-size: 12px; text-transform: lowercase\">Audience or non audience participation</span></label>
                        {{ form_widget(form.type, {'attr': {'class': 'form-control select-1 storyType', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>
                        <div class=\"form-group form-group1 contributors\">
                        <label for=\"nom_carte\">Contributors</label>
                            {{ form_widget(form.contributors, {'attr': {'class': 'form-control  select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Title</label>
                        {{ form_widget(form.title, {'attr': {'class': 'form-control ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Description - <span style=\"font-size: 12px; text-transform: lowercase\">Synopsis of your storyline</span></label>
                        {{ form_widget(form.description, {'attr': {  'class': 'form-control ', 'id': 'nom_carte', 'rows': '10' }}) }}
                    </div>
                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Cover</label>
                        {{ form_widget(form.imageFile, {'attr': { 'class': 'form-control ', 'id': 'nom_carte', 'rows': '10' }}) }}
                    </div>

                    <div class=\"form-group\">
                        <label for=\"nom_carte\">Active</label>
                        {{ form_widget(form.isEnabled, {'attr': { 'checked':'checked', 'data-on-text': 'YES', 'data-off-text': 'NO','class': 'form-control bt-switch', 'id': 'nom_carte', 'rows': '10' }}) }}
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

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){

            \$('.form-group1').hide();
            \$('#ns_scenesbundle_storyline_type').change(function(){
                if(\$('#ns_scenesbundle_storyline_type').val() == 'Group writing') {
                    \$('.form-group1').show();

                } else {
                    \$('.form-group1').hide();
                }
            });

            // Multiple Select
            \$(\".select-1\").select2({
                placeholder: \"Select Contributors\"
            });
            jQuery(\".bt-switch\").bootstrapSwitch();






        });
    </script>

{% endblock %}
", "NSWebBundle:Story:add.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Story/add.html.twig");
    }
}
