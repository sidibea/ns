<?php

/* NSWebBundle:Story:view.html.twig */
class __TwigTemplate_6ba7e1aab5c267f9934c8be1ea459c9207e6ec909504beb82c4e6c0e0d8bb65c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Story:view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Story:view.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 2, $this->source); })()), "title", array()), "html", null, true);
        echo " ";
        
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
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"single-post nobottommargin\">

                    <!-- Single Post
                    ============================================= -->
                    <div class=\"entry clearfix\">

                        <!-- Entry Title
                        ============================================= -->
                        <div class=\"entry-title\">
                            <h2 >";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 17, $this->source); })()), "title", array()), "html", null, true);
        echo " <sup>";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 17, $this->source); })()), "publishedBy", array()), "id", array()))) {
            echo "<a style=\"font-size: 12px; color: #9f191f; \" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 17, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i>Edit</a> ";
        }
        echo "</sup> </h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class=\"entry-meta clearfix\">
                            <li><i class=\"icon-calendar3\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 23, $this->source); })()), "createdAt", array()), "d, M, Y"), "html", null, true);
        echo " </li>
                            <li><a href=\"#\"><i class=\"icon-user\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 24, $this->source); })()), "publishedBy", array()), "username", array()), "html", null, true);
        echo "</a></li>
                            <li><i class=\"icon-folder-open\"></i> <a href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 25, $this->source); })()), "scenes", array())), "html", null, true);
        echo " scene(s)</a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class=\"entry-content notopmargin\">

                            <!-- Entry Image
                            ============================================= -->
                            <div class=\"entry-image alignleft\">
                                <a href=\"\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 35, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 35, $this->source); })()), "title", array()), "html", null, true);
        echo "\"></a>
                            </div><!-- .entry-image end -->

                            ";
        // line 38
        echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 38, $this->source); })()), "description", array())), 0, 500), "html", null, true);
        echo "
                            <br>


                            <div class=\"clear\"></div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_read_story", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 46, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>Read story</a>

                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_view", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 50, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"button button-3d fright  button-rounded button-red\"><i class=\"icon-door\"></i>View scenes</a>

                                </div>
                            </div>
                            <div class=\"line\"></div>




                            <!-- Post Single - Share
                            ============================================= -->
                            <div class=\"si-share noborder clearfix\">
                                <span>Share this Storyline:</span>
                                <div>
                                    <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                        <i class=\"icon-facebook\"></i>
                                        <i class=\"icon-facebook\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                        <i class=\"icon-twitter\"></i>
                                        <i class=\"icon-twitter\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                        <i class=\"icon-pinterest\"></i>
                                        <i class=\"icon-pinterest\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                        <i class=\"icon-gplus\"></i>
                                        <i class=\"icon-gplus\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                        <i class=\"icon-rss\"></i>
                                        <i class=\"icon-rss\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                        <i class=\"icon-email3\"></i>
                                        <i class=\"icon-email3\"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->



                    <!-- Post Author Info
                    ============================================= -->
                    <div class=\"panel panel-default\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Author:  <span><a href=\"#\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 100, $this->source); })()), "publishedBy", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 100, $this->source); })()), "publishedBy", array()), "lastname", array()), "html", null, true);
        echo "</a></span></h3>
                        </div>
                        <div class=\"panel-body\" >
                            <div class=\"author-image\">
                                ";
        // line 104
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 104, $this->source); })()), "publishedBy", array()), "profile", array()))) {
            // line 105
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 105, $this->source); })()), "publishedBy", array()), "profileFile"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle\">
                                ";
        } else {
            // line 107
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/icons/avatar.jpg")), "html", null, true);
            echo "\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">

                                ";
        }
        // line 110
        echo "                            </div>
                            ";
        // line 111
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 111, $this->source); })()), "publishedBy", array()), "biographie", array()))) {
            // line 112
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 112, $this->source); })()), "publishedBy", array()), "biographie", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 114
            echo "                                No Biography of the author
                            ";
        }
        // line 116
        echo "                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class=\"line\"></div>

                    <div class=\"row\">


                        <div class=\"col-md-12\">
                            ";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 125, $this->source); })()), "user", array()), "id", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 125, $this->source); })()), "publishedBy", array()), "id", array()))) {
            // line 126
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_scenes_add", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 126, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>

                            ";
        }
        // line 129
        echo "                        </div>

                    </div>

                </div>


            </div>
            ";
        // line 137
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Story:view.html.twig", 137)->display($context);
        // line 138
        echo "        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 143
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Story:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 143,  287 => 142,  275 => 138,  273 => 137,  263 => 129,  256 => 126,  254 => 125,  243 => 116,  239 => 114,  233 => 112,  231 => 111,  228 => 110,  221 => 107,  215 => 105,  213 => 104,  204 => 100,  151 => 50,  144 => 46,  133 => 38,  125 => 35,  112 => 25,  108 => 24,  104 => 23,  89 => 17,  75 => 5,  66 => 4,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}
{% block title %} {{ story.title }} {% endblock %}

{% block content %}
    <section class=\"content-wrap\">
        <div class=\"container clearfix\">
            <div class=\"postcontent nobottommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"single-post nobottommargin\">

                    <!-- Single Post
                    ============================================= -->
                    <div class=\"entry clearfix\">

                        <!-- Entry Title
                        ============================================= -->
                        <div class=\"entry-title\">
                            <h2 >{{ story.title }} <sup>{% if app.user.id == story.publishedBy.id %}<a style=\"font-size: 12px; color: #9f191f; \" href=\"{{ path('ns_web_story_edit', { 'id': story.id }) }}\"><i class=\"icon-pencil\"></i>Edit</a> {% endif %}</sup> </h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class=\"entry-meta clearfix\">
                            <li><i class=\"icon-calendar3\"></i> {{ story.createdAt | date('d, M, Y') }} </li>
                            <li><a href=\"#\"><i class=\"icon-user\"></i> {{ story.publishedBy.username }}</a></li>
                            <li><i class=\"icon-folder-open\"></i> <a href=\"#\">{{ story.scenes | length }} scene(s)</a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class=\"entry-content notopmargin\">

                            <!-- Entry Image
                            ============================================= -->
                            <div class=\"entry-image alignleft\">
                                <a href=\"\"><img src=\"{{ vich_uploader_asset(story, 'imageFile') }}\" alt=\"{{ story.title }}\"></a>
                            </div><!-- .entry-image end -->

                            {{ story.description  | striptags| raw |slice(0, 500)  }}
                            <br>


                            <div class=\"clear\"></div>

                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a href=\"{{ path('ns_web_read_story', { 'id': story.id }) }}\" class=\"button button-3d   button-rounded button-green\"><i class=\"icon-door\"></i>Read story</a>

                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"{{ path('ns_web_scenes_view', { 'id': story.id }) }}\" class=\"button button-3d fright  button-rounded button-red\"><i class=\"icon-door\"></i>View scenes</a>

                                </div>
                            </div>
                            <div class=\"line\"></div>




                            <!-- Post Single - Share
                            ============================================= -->
                            <div class=\"si-share noborder clearfix\">
                                <span>Share this Storyline:</span>
                                <div>
                                    <a href=\"#\" class=\"social-icon si-borderless si-facebook\">
                                        <i class=\"icon-facebook\"></i>
                                        <i class=\"icon-facebook\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-twitter\">
                                        <i class=\"icon-twitter\"></i>
                                        <i class=\"icon-twitter\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-pinterest\">
                                        <i class=\"icon-pinterest\"></i>
                                        <i class=\"icon-pinterest\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-gplus\">
                                        <i class=\"icon-gplus\"></i>
                                        <i class=\"icon-gplus\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-rss\">
                                        <i class=\"icon-rss\"></i>
                                        <i class=\"icon-rss\"></i>
                                    </a>
                                    <a href=\"#\" class=\"social-icon si-borderless si-email3\">
                                        <i class=\"icon-email3\"></i>
                                        <i class=\"icon-email3\"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->



                    <!-- Post Author Info
                    ============================================= -->
                    <div class=\"panel panel-default\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Author:  <span><a href=\"#\">{{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }}</a></span></h3>
                        </div>
                        <div class=\"panel-body\" >
                            <div class=\"author-image\">
                                {% if story.publishedBy.profile is not empty %}
                                    <img src=\"{{ vich_uploader_asset(story.publishedBy, 'profileFile') }}\" alt=\"\" class=\"img-circle\">
                                {% else %}
                                    <img src=\"{{ absolute_url(asset('assets/front/images/icons/avatar.jpg')) }}\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">

                                {% endif %}
                            </div>
                            {% if story.publishedBy.biographie is not null %}
                                {{ story.publishedBy.biographie }}
                            {% else %}
                                No Biography of the author
                            {% endif %}
                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class=\"line\"></div>

                    <div class=\"row\">


                        <div class=\"col-md-12\">
                            {% if app.user.id == story.publishedBy.id %}
                                <a href=\"{{ path('ns_web_scenes_add', { 'id': story.id }) }}\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>

                            {% endif %}
                        </div>

                    </div>

                </div>


            </div>
            {% include \"NSWebBundle::_sidebar.html.twig\" %}
        </div>
    </section>
{% endblock %}

{% block scripts %}

{% endblock %}
", "NSWebBundle:Story:view.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Story/view.html.twig");
    }
}
