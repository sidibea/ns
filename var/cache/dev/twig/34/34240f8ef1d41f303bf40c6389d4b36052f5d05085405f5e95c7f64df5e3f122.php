<?php

/* NSWebBundle:Homepage:Category/category.html.twig */
class __TwigTemplate_dec64b68519fa4a4f4d28a5c21e1ea002a702c974edb2fa0a42a3bf0160da95a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Homepage:Category/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Homepage:Category/category.html.twig"));

        // line 1
        echo "
<!-- Header
============================================= -->
<header id=\"header\" class=\"no-sticky\">

    <div id=\"header-wrap\">

        <div class=\"container clearfix\">

            <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

            <!-- Logo
            ============================================= -->
            <div id=\"logo\" class=\"nobottomborder visible-md visible-lg\">
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_homepage");
        echo "\" class=\"standard-logo\" data-dark-logo=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/logo.png")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/logo.png")), "html", null, true);
        echo "\" alt=\"nextscenes Logo\"></a>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_homepage");
        echo "\" class=\"retina-logo\" data-dark-logo=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/logo.png")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/logo.png")), "html", null, true);
        echo "\" alt=\"nextscenes Logo\"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id=\"primary-menu\">

                <ul>
                    <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_homepage");
        echo "\"><div>Home</div></a></li>
                    <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums_display");
        echo "\"><div>Forums</div></a>
                        <ul>

                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new Twig_Error_Runtime('Variable "forums" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 29
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums", array("id" => twig_get_attribute($this->env, $this->source, $context["forum"], "id", array()))), "html", null, true);
            echo "\"><div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "name", array()), "html", null, true);
            echo "</div></a> </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_how_it_works");
        echo "\"><div>How nextscenes works</div></a></li>
                    <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_new");
        echo "\"><div>Create new story</div></a></li>
                    <li><a href=\"\"><div>NS - Shop</div></a></li>
                    <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums_contact");
        echo "\"><div>Contact</div></a></li>
                </ul>

            </nav><!-- #primary-menu end -->
            ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 42
            echo "                <div class=\"clearfix\">
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">
                        <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/icons/avatar.jpg")), "html", null, true);
            echo "\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                        <div class=\"heading-block noborder\">
                            <h5>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", array()), "lastname", array()), "html", null, true);
            echo "</h5>
                            <span><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
            echo "\">Edit profile</a> </span>
                            <span><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Logout </a> </span>
                        </div>
                    </a>
                </div>

            ";
        }
        // line 54
        echo "
            <div class=\"clearfix visible-md visible-lg\">
                <a href=\"https://www.facebook.com/nextscenes/?ref=br_rs\" class=\"social-icon si-small si-borderless si-facebook\">
                    <i class=\"icon-facebook\"></i>
                    <i class=\"icon-facebook\"></i>
                </a>

                <a href=\"https://twitter.com/nextscenes\" class=\"social-icon si-small si-borderless si-twitter\">
                    <i class=\"icon-twitter\"></i>
                    <i class=\"icon-twitter\"></i>
                </a>

                <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                    <i class=\"icon-gplus\"></i>
                    <i class=\"icon-gplus\"></i>
                </a>


            </div>

        </div>

    </div>

</header><!-- #header end -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Homepage:Category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  138 => 48,  134 => 47,  128 => 46,  123 => 44,  119 => 43,  116 => 42,  114 => 41,  107 => 37,  102 => 35,  98 => 34,  93 => 31,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  53 => 16,  45 => 15,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- Header
============================================= -->
<header id=\"header\" class=\"no-sticky\">

    <div id=\"header-wrap\">

        <div class=\"container clearfix\">

            <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

            <!-- Logo
            ============================================= -->
            <div id=\"logo\" class=\"nobottomborder visible-md visible-lg\">
                <a href=\"{{ path('ns_web_homepage') }}\" class=\"standard-logo\" data-dark-logo=\"{{ absolute_url(asset('assets/front/images/logo.png')) }}\"><img src=\"{{ absolute_url(asset('assets/front/images/logo.png')) }}\" alt=\"nextscenes Logo\"></a>
                <a href=\"{{ path('ns_web_homepage') }}\" class=\"retina-logo\" data-dark-logo=\"{{ absolute_url(asset('assets/front/images/logo.png')) }}\"><img src=\"{{ absolute_url(asset('assets/front/images/logo.png')) }}\" alt=\"nextscenes Logo\"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id=\"primary-menu\">

                <ul>
                    <li><a href=\"{{ path('ns_web_homepage') }}\"><div>Home</div></a></li>
                    <li><a href=\"{{ path('ns_web_forums_display') }}\"><div>Forums</div></a>
                        <ul>

                            {% for forum in forums %}
                                <li><a href=\"{{ path('ns_web_forums', { 'id': forum.id }) }}\"><div>{{ forum.name }}</div></a> </li>
                            {% endfor %}

                        </ul>
                    </li>
                    <li><a href=\"{{ path('ns_web_how_it_works') }}\"><div>How nextscenes works</div></a></li>
                    <li><a href=\"{{ path('ns_web_story_new') }}\"><div>Create new story</div></a></li>
                    <li><a href=\"\"><div>NS - Shop</div></a></li>
                    <li><a href=\"{{ path('ns_web_forums_contact') }}\"><div>Contact</div></a></li>
                </ul>

            </nav><!-- #primary-menu end -->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class=\"clearfix\">
                    <a href=\"{{ path('fos_user_profile_show') }}\">
                        <img src=\"{{ absolute_url(asset('assets/front/images/icons/avatar.jpg')) }}\" class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                        <div class=\"heading-block noborder\">
                            <h5>{{ app.user.firstname }} {{ app.user.lastname }}</h5>
                            <span><a href=\"{{ path('fos_user_profile_edit') }}\">Edit profile</a> </span>
                            <span><a href=\"{{ path('fos_user_security_logout') }}\">Logout </a> </span>
                        </div>
                    </a>
                </div>

            {% endif %}

            <div class=\"clearfix visible-md visible-lg\">
                <a href=\"https://www.facebook.com/nextscenes/?ref=br_rs\" class=\"social-icon si-small si-borderless si-facebook\">
                    <i class=\"icon-facebook\"></i>
                    <i class=\"icon-facebook\"></i>
                </a>

                <a href=\"https://twitter.com/nextscenes\" class=\"social-icon si-small si-borderless si-twitter\">
                    <i class=\"icon-twitter\"></i>
                    <i class=\"icon-twitter\"></i>
                </a>

                <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                    <i class=\"icon-gplus\"></i>
                    <i class=\"icon-gplus\"></i>
                </a>


            </div>

        </div>

    </div>

</header><!-- #header end -->", "NSWebBundle:Homepage:Category/category.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Homepage/Category/category.html.twig");
    }
}
