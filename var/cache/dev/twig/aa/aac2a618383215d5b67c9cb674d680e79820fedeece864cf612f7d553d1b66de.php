<?php

/* NSWebBundle:Forum:index.html.twig */
class __TwigTemplate_40cc581e6455b9c098d023c75f39144e8ba4f1b5e6ffbd460a7e267bc131bbf5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Forum:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Forum:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Forum:index.html.twig"));

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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new Twig_Error_Runtime('Variable "forum" does not exist.', 3, $this->source); })()), "name", array()), "html", null, true);
        echo " ";
        
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
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <!-- Posts
                ============================================= -->
                <div id=\"posts\" class=\"small-thumbs alt\">
                    <div class=\"fancy-title title-double-border\">
                        <h1>All <span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new Twig_Error_Runtime('Variable "forum" does not exist.', 14, $this->source); })()), "name", array()), "html", null, true);
        echo "</span> Storylines</h1>
                    </div>
                    ";
        // line 16
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new Twig_Error_Runtime('Variable "forum" does not exist.', 16, $this->source); })()), "storylines", array())) > 0)) {
            // line 17
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new Twig_Error_Runtime('Variable "forum" does not exist.', 17, $this->source); })()), "storylines", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
                // line 18
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new Twig_Error_Runtime('Variable "forum" does not exist.', 18, $this->source); })()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "forum", array()), "id", array()))) {
                    // line 19
                    echo "                                <div class=\"entry clearfix\">
                                    <div class=\"entry-image\">
                                        <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                    echo "\" data-lightbox=\"image\">
                                            <img class=\"image_fade\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", array()), "html", null, true);
                    echo "\">
                                        </a>
                                    </div>
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h2><a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", array()), "html", null, true);
                    echo "</a></h2>
                                        </div>
                                        <ul class=\"entry-meta clearfix\">
                                            <li><i class=\"icon-calendar3\"></i> ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "createdAt", array()), "d M Y"), "html", null, true);
                    echo "</li>
                                            <li><a href=\"#\"><i class=\"icon-user\"></i> ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", array()), "lastname", array()), "html", null, true);
                    echo "</a></li>
                                            <li><i class=\"icon-folder-open\"></i> <a href=\"#\">";
                    // line 32
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "scenes", array())), "html", null, true);
                    echo " scenes</a>, <a href=\"#\">Media</a></li>
                                        </ul>
                                        <div class=\"entry-content\">
                                            ";
                    // line 36
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["story"], "description", array())), 0, 200), "html", null, true);
                    echo "... ";
                    // line 37
                    echo "                                            ";
                    // line 38
                    echo "                                            <br> <br>
                                            <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", array()))), "html", null, true);
                    echo "\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>View details</a>
                                        </div>
                                    </div>
                                </div>

                            ";
                }
                // line 45
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
                    ";
        } else {
            // line 48
            echo "                        <h4>OOOPPS.! THERE IS NO STORYLINE UNDER THIS FORUM.</h4>



                    ";
        }
        // line 53
        echo "





                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <ul class=\"pager nomargin\">
                    <li class=\"previous\"><a href=\"#\">&larr; Older</a></li>
                    <li class=\"next\"><a href=\"#\">Newer &rarr;</a></li>
                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->

            ";
        // line 70
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Forum:index.html.twig", 70)->display($context);
        // line 71
        echo "

        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Forum:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 71,  195 => 70,  176 => 53,  169 => 48,  165 => 46,  159 => 45,  150 => 39,  147 => 38,  145 => 37,  141 => 36,  135 => 32,  129 => 31,  125 => 30,  117 => 27,  107 => 22,  103 => 21,  99 => 19,  96 => 18,  91 => 17,  89 => 16,  84 => 14,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} {{ forum.name }} {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <!-- Posts
                ============================================= -->
                <div id=\"posts\" class=\"small-thumbs alt\">
                    <div class=\"fancy-title title-double-border\">
                        <h1>All <span>{{ forum.name }}</span> Storylines</h1>
                    </div>
                    {% if forum.storylines|length > 0 %}
                        {% for story in forum.storylines %}
                            {% if forum.id == story.forum.id %}
                                <div class=\"entry clearfix\">
                                    <div class=\"entry-image\">
                                        <a href=\"{{ vich_uploader_asset(story, 'imageFile') }}\" data-lightbox=\"image\">
                                            <img class=\"image_fade\" src=\"{{ vich_uploader_asset(story, 'imageFile') }}\" alt=\"{{ story.title }}\">
                                        </a>
                                    </div>
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h2><a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\">{{ story.title }}</a></h2>
                                        </div>
                                        <ul class=\"entry-meta clearfix\">
                                            <li><i class=\"icon-calendar3\"></i> {{  story.createdAt | date('d M Y') }}</li>
                                            <li><a href=\"#\"><i class=\"icon-user\"></i> {{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }}</a></li>
                                            <li><i class=\"icon-folder-open\"></i> <a href=\"#\">{{ story.scenes | length }} scenes</a>, <a href=\"#\">Media</a></li>
                                        </ul>
                                        <div class=\"entry-content\">
                                            {% autoescape %}
                                            {{ story.description   | striptags | raw |slice(0, 200) }}... {# var won't be escaped #}
                                            {% endautoescape %}
                                            <br> <br>
                                            <a href=\"{{ path('ns_web_story_view', {  'id' : story.id}) }}\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>View details</a>
                                        </div>
                                    </div>
                                </div>

                            {% endif %}
                        {% endfor %}

                    {% else %}
                        <h4>OOOPPS.! THERE IS NO STORYLINE UNDER THIS FORUM.</h4>



                    {% endif %}






                </div><!-- #posts end -->

                <!-- Pagination
                ============================================= -->
                <ul class=\"pager nomargin\">
                    <li class=\"previous\"><a href=\"#\">&larr; Older</a></li>
                    <li class=\"next\"><a href=\"#\">Newer &rarr;</a></li>
                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->

            {% include \"NSWebBundle::_sidebar.html.twig\" %}


        </div>
    </section>

{% endblock %}", "NSWebBundle:Forum:index.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Forum/index.html.twig");
    }
}
