<?php

/* NSWebBundle:Forum:list.html.twig */
class __TwigTemplate_b76d324865cf7372df70e71f764217b14799c4cc92b503ba47f6be00e5b938b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Forum:list.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Forum:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Forum:list.html.twig"));

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

        echo " Forums ";
        
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
            <div class=\"postcontent nobottommargin clearfix\">
                <div id=\"posts\" class=\"small-thumbs\">
                    <div class=\"fancy-title title-double-border\">
                        <h1>Displaying <span>forums</span></h1>
                    </div>
                    ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new Twig_Error_Runtime('Variable "forums" does not exist.', 13, $this->source); })())) > 0)) {
            // line 14
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new Twig_Error_Runtime('Variable "forums" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 15
                echo "                            <div class=\"entry clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"\" data-lightbox=\"image\">
                                        <img class=\"image_fade\" style=\"width: 100% !important; height: 200px;\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["forum"], "photoFile"), "html", null, true);
                echo "\"/>
                                    </a>
                                </div>
                                <div class=\"entry-c\">
                                    <div class=\"entry-title\">
                                        <h2><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums", array("id" => twig_get_attribute($this->env, $this->source, $context["forum"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "storylines", array())), "html", null, true);
                echo " storylines)</a></h2>
                                    </div>
                                    <div class=\"entry-content\">
                                        <p style=\"text-align: justify   \">";
                // line 26
                echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["forum"], "description", array())), "html", null, true);
                echo "</p>
                                        <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums", array("id" => twig_get_attribute($this->env, $this->source, $context["forum"], "id", array()))), "html", null, true);
                echo "\" class=\"button button-3d fright button-rounded button-green\"><i class=\"icon-door\"></i>Enter forum</a>
                                    </div>
                                </div>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
                    ";
        } else {
            // line 35
            echo "                        <h4>OOOPPS.! THERE IS NO FORUM.</h4>



                    ";
        }
        // line 40
        echo "





                </div><!-- #posts end -->



            </div>
            ";
        // line 51
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Forum:list.html.twig", 51)->display($context);
        // line 52
        echo "        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Forum:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 52,  151 => 51,  138 => 40,  131 => 35,  127 => 33,  115 => 27,  111 => 26,  101 => 23,  93 => 18,  88 => 15,  83 => 14,  81 => 13,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} Forums {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\">
                <div id=\"posts\" class=\"small-thumbs\">
                    <div class=\"fancy-title title-double-border\">
                        <h1>Displaying <span>forums</span></h1>
                    </div>
                    {% if forums |length > 0 %}
                        {% for forum in forums %}
                            <div class=\"entry clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"\" data-lightbox=\"image\">
                                        <img class=\"image_fade\" style=\"width: 100% !important; height: 200px;\" src=\"{{ vich_uploader_asset(forum, 'photoFile') }}\"/>
                                    </a>
                                </div>
                                <div class=\"entry-c\">
                                    <div class=\"entry-title\">
                                        <h2><a href=\"{{ path('ns_web_forums', { 'id' : forum.id }) }}\">{{ forum.name }} ({{ forum.storylines |length }} storylines)</a></h2>
                                    </div>
                                    <div class=\"entry-content\">
                                        <p style=\"text-align: justify   \">{{ forum.description | striptags }}</p>
                                        <a href=\"{{ path('ns_web_forums', { 'id' : forum.id }) }}\" class=\"button button-3d fright button-rounded button-green\"><i class=\"icon-door\"></i>Enter forum</a>
                                    </div>
                                </div>
                            </div>

                        {% endfor %}

                    {% else %}
                        <h4>OOOPPS.! THERE IS NO FORUM.</h4>



                    {% endif %}






                </div><!-- #posts end -->



            </div>
            {% include \"NSWebBundle::_sidebar.html.twig\" %}
        </div>
    </section>

{% endblock %}

", "NSWebBundle:Forum:list.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Forum/list.html.twig");
    }
}
