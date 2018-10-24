<?php

/* NSWebBundle:Blog:single.html.twig */
class __TwigTemplate_389b3e915c4fa4af3cde3c5784a3853975c2962ced04f548972e181a1ace1275 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Blog:single.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Blog:single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Blog:single.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->source); })()), "title", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ca9f5db_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_ca9f5db_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/ca9f5db_comments_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "ca9f5db"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_ca9f5db") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/ca9f5db.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"single-post nobottommargin\">

                <!-- Single Post
                ============================================= -->
                <div class=\"entry clearfix\">

                    <!-- Entry Title
                    ============================================= -->
                    <div class=\"entry-title\">
                        <h2>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 25, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 31, $this->source); })()), "createdAt", array()), "d M Y"), "html", null, true);
        echo "</li>
                        <li><a href=\"#\"><i class=\"icon-user\"></i> admin</a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class=\"entry-image bottommargin\">
                        <a href=\"#\"><img style=\"width: 100%; height: 500px;\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 38, $this->source); })()), "photoFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 38, $this->source); })()), "title", array()), "html", null, true);
        echo "\"></a>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class=\"entry-content notopmargin\" style=\"font-family: 'Helvetica Neue'; font-size: 24px; text-align: justify;\">

                        ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 45, $this->source); })()), "content", array());
        echo "



                        <div class=\"clear\"></div>

                        <!-- Post Single - Share
                        ============================================= -->
                        <div class=\"si-share noborder clearfix\">
                            <span>Share this Post:</span>
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



                <!-- Comments
                ============================================= -->
                <div id=\"\" class=\"clearfix\">
                    ";
        // line 91
        $this->loadTemplate("@FOSComment/Thread/async.html.twig", "NSWebBundle:Blog:single.html.twig", 91)->display(array_merge($context, array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 91, $this->source); })()), "id", array()))));
        // line 92
        echo "
                </div><!-- #comments end -->



            </div>

        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Blog:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 92,  205 => 91,  156 => 45,  144 => 38,  134 => 31,  125 => 25,  110 => 12,  101 => 11,  79 => 7,  74 => 6,  65 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} {{ article.title }}{% endblock %}

{% block stylesheet %}
    {% stylesheets '@FOSCommentBundle/Resources/public/css/comments.css' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}
{% endblock %}

{% block content %}
    <div class=\"content-wrap\">

        <div class=\"container clearfix\">

            <div class=\"single-post nobottommargin\">

                <!-- Single Post
                ============================================= -->
                <div class=\"entry clearfix\">

                    <!-- Entry Title
                    ============================================= -->
                    <div class=\"entry-title\">
                        <h2>{{ article.title }}</h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-calendar3\"></i> {{ article.createdAt | date('d M Y') }}</li>
                        <li><a href=\"#\"><i class=\"icon-user\"></i> admin</a></li>
                    </ul><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class=\"entry-image bottommargin\">
                        <a href=\"#\"><img style=\"width: 100%; height: 500px;\" src=\"{{ vich_uploader_asset(article, 'photoFile') }}\" alt=\"{{ article.title }}\"></a>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class=\"entry-content notopmargin\" style=\"font-family: 'Helvetica Neue'; font-size: 24px; text-align: justify;\">

                        {{ article.content | raw }}



                        <div class=\"clear\"></div>

                        <!-- Post Single - Share
                        ============================================= -->
                        <div class=\"si-share noborder clearfix\">
                            <span>Share this Post:</span>
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



                <!-- Comments
                ============================================= -->
                <div id=\"\" class=\"clearfix\">
                    {% include '@FOSComment/Thread/async.html.twig' with {'id': article.id } %}

                </div><!-- #comments end -->



            </div>

        </div>

    </div>
{% endblock %}", "NSWebBundle:Blog:single.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Blog/single.html.twig");
    }
}
