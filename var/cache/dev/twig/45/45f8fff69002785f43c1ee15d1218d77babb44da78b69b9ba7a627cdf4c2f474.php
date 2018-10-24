<?php

/* NSWebBundle:Homepage:index.html.twig */
class __TwigTemplate_ffad8c400d0ae3317b81bc7770e9497466c3416a359c63d794f93967b467a029 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Homepage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slider' => array($this, 'block_slider'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Homepage:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Homepage:index.html.twig"));

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

        echo " Nextscenes.com";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 6
        echo "    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"col-md-12 \">
                <section id=\"slider\" class=\" boxed-slider\">

                    <div class=\"container clearfix\">

                        <div class=\"nivoSlider\">
                            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_how_it_works");
        echo "\">
                                <img src=\"assets/front/images/slider/boxed/ns_banner1.png\" alt=\"Slider 1\"  />

                            </a>
                            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">
                                <img src=\"assets/front/images/slider/boxed/ns_banner2.png\" alt=\"Slider 2\"/>
                            </a>

                        </div>

                    </div>

                </section>


            </div>

        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "    <div class=\"content-wrap\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
        <div class=\"container clearfix\">
            <div class=\"tabs clearfix\" id=\"tab-3\">

                <ul class=\"tab-nav tab-nav2 clearfix\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new Twig_Error_Runtime('Variable "forums" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 44
            echo "                        <li><a href=\"#tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>

                <div class=\"tab-container\">
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new Twig_Error_Runtime('Variable "forums" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 50
            echo "
                        <div class=\"tab-content clearfix\" id=\"tabs-";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "id", array()), "html", null, true);
            echo "\">
                            <div id=\"oc-posts\" class=\"owl-carousel posts-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"false\" data-items-xxs=\"1\" data-items-xs=\"2\" data-items-sm=\"3\" data-items-md=\"3\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forum"], "storylines", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
                // line 54
                echo "                                    <div class=\"oc-item\">
                                        <div class=\"ipost clearfix\">
                                            <div class=\"entry-image\">
                                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                echo "\" data-lightbox=\"image\"><img class=\"image_fade\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["story"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", array()), "html", null, true);
                echo "\"></a>
                                            </div>
                                            <div class=\"entry-title\">
                                                <h3><a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, $context["story"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "title", array()), "html", null, true);
                echo "</a></h3>
                                            </div>
                                            <ul class=\"entry-meta clearfix\">
                                                <li><i class=\"icon-calendar3\"></i> ";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "createdAt", array()), "d M Y"), "html", null, true);
                echo "</li>
                                                <li><a href=\"#\"><i class=\"icon-user\"></i> ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "publishedBy", array()), "lastname", array()), "html", null, true);
                echo "</a></li>
                                                <li><a href=\"#\"><i class=\"icon-folder\"></i> ";
                // line 65
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["story"], "scenes", array())), "html", null, true);
                echo " scenes</a></li>
                                            </ul>

                                        </div>
                                    </div>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "

                            </div>

                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "


                </div>

            </div>
        </div>




        <div class=\"row\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
            <div class=\"container clearfix\">

                <div class=\"col-md-4\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/author.png")), "html", null, true);
        echo "\" />

                </div>
                <div class=\"col-md-8\">
                    <h4>Facebook Feeds</h4>
                    <div id=\"dribbble-widge\" class=\"col_half\">
                        <div class=\"fb-page\" data-height=\"300\" data-href=\"https://www.facebook.com/nextscenes\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/nextscenes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/nextscenes\">Nextscenes</a></blockquote></div>
                    </div>
                    <div class=\"col_half col_last\">
                        <a class=\"twitter-timeline\" data-height=\"300\" href=\"https://twitter.com/nextscenes?ref_src=twsrc%5Etfw\">Tweets by nextscenes</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                    </div>



                </div>

            </div>
        </div>
        <div class=\"row\">&nbsp;</div>

        <div class=\"section notopmargin notopborder\" style=\"font-family: Courier;  word-spacing: 4px\">
            <div class=\"container clearfix\">
                <div class=\"heading-block center nomargin\">
                    <h3>Latest from the Blog</h3>
                </div>
            </div>
        </div>

        <div class=\"container clear-bottommargin clearfix\" style=\"font-family: Courier; text-align: left; word-spacing: 4px\">
            <div class=\"row\">

                <div id=\"oc-posts\" class=\"owl-carousel posts-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"false\" data-items-xxs=\"1\" data-items-xs=\"2\" data-items-sm=\"3\" data-items-md=\"3\">
                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 127
            echo "                        <div class=\"oc-item\">
                            <div class=\"ipost clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_blog_single", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\"><img class=\"image_fade\" style=\"height: 300px; width: 500px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "photoFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "\"></a>
                                </div>
                                <div class=\"entry-title\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                    <h3><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_blog_single", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
                                </div>
                                <ul class=\"entry-meta clearfix\">
                                    <li><i class=\"icon-calendar3\"></i> ";
            // line 136
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", array()), "d M Y"), "html", null, true);
            echo "</li>
                                </ul>
                                <div class=\"entry-content\">
                                    <p>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>

                        </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "

                </div>




            </div>
        </div>

        <div class=\"section dark parallax nobottommargin\" style=\"padding: 80px 0;background-image: url(";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/parallax/1.jpg")), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.3\">

            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NSWebBundle:Main:Counter"));
        echo "


        </div>

        <div class=\"section parallax dark nobottommargin\" style=\"background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;\" data-stellar-background-ratio=\"0.4\">
            <div class=\"heading-block center\">
                <h3>What they think about us?</h3>
            </div>
            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NSWebBundle:Main:Testimonial"));
        echo "

        </div>

        <div class=\"container clearfix\">

            <div id=\"oc-clients\" class=\"owl-carousel image-carousel carousel-widget\" data-margin=\"60\" data-loop=\"true\" data-nav=\"false\" data-autoplay=\"5000\" data-pagi=\"false\" data-items-xxs=\"2\" data-items-xs=\"3\" data-items-sm=\"4\" data-items-md=\"5\" data-items-lg=\"6\">
                ";
        // line 175
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NSWebBundle:Main:Partner"));
        echo "



            </div>


        </div>




    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 192
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 193
        echo "    <script type=\"text/javascript\">

        jQuery(document).ready(function(\$) {

            \$('.nivoSlider').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 12,
                boxRows: 6,
                animSpeed: 500,
                pauseTime: 8000,
                directionNav: true,
                controlNav: true,
                pauseOnHover: true,
                prevText: '<i class=\"icon-angle-left\"></i>',
                nextText: '<i class=\"icon-angle-right\"></i>',
                afterLoad: function(){
                    \$('#slider').find('.nivo-caption').addClass('slider-caption-bg');
                }
            });

        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 193,  392 => 192,  367 => 175,  357 => 168,  345 => 159,  340 => 157,  328 => 147,  314 => 139,  308 => 136,  300 => 133,  290 => 130,  285 => 127,  281 => 126,  246 => 94,  229 => 79,  217 => 72,  204 => 65,  198 => 64,  194 => 63,  186 => 60,  176 => 57,  171 => 54,  167 => 53,  162 => 51,  159 => 50,  155 => 49,  150 => 46,  139 => 44,  135 => 43,  128 => 38,  119 => 37,  91 => 18,  84 => 14,  74 => 6,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} Nextscenes.com{% endblock %}

{% block slider %}
    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"col-md-12 \">
                <section id=\"slider\" class=\" boxed-slider\">

                    <div class=\"container clearfix\">

                        <div class=\"nivoSlider\">
                            <a href=\"{{ path('ns_web_how_it_works') }}\">
                                <img src=\"assets/front/images/slider/boxed/ns_banner1.png\" alt=\"Slider 1\"  />

                            </a>
                            <a href=\"{{ path('fos_user_registration_register') }}\">
                                <img src=\"assets/front/images/slider/boxed/ns_banner2.png\" alt=\"Slider 2\"/>
                            </a>

                        </div>

                    </div>

                </section>


            </div>

        </div>
    </div>


{% endblock %}

{% block content %}
    <div class=\"content-wrap\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
        <div class=\"container clearfix\">
            <div class=\"tabs clearfix\" id=\"tab-3\">

                <ul class=\"tab-nav tab-nav2 clearfix\">
                    {% for forum in forums %}
                        <li><a href=\"#tabs-{{ forum.id }}\">{{ forum.name }}</a></li>
                    {% endfor %}
                </ul>

                <div class=\"tab-container\">
                    {% for forum in forums %}

                        <div class=\"tab-content clearfix\" id=\"tabs-{{ forum.id }}\">
                            <div id=\"oc-posts\" class=\"owl-carousel posts-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"false\" data-items-xxs=\"1\" data-items-xs=\"2\" data-items-sm=\"3\" data-items-md=\"3\">
                                {% for story in forum.storylines %}
                                    <div class=\"oc-item\">
                                        <div class=\"ipost clearfix\">
                                            <div class=\"entry-image\">
                                                <a href=\"{{ vich_uploader_asset(story, 'imageFile') }}\" data-lightbox=\"image\"><img class=\"image_fade\" src=\"{{ vich_uploader_asset(story, 'imageFile') }}\" alt=\"{{ story.title }}\"></a>
                                            </div>
                                            <div class=\"entry-title\">
                                                <h3><a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\">{{ story.title }}</a></h3>
                                            </div>
                                            <ul class=\"entry-meta clearfix\">
                                                <li><i class=\"icon-calendar3\"></i> {{  story.createdAt | date('d M Y') }}</li>
                                                <li><a href=\"#\"><i class=\"icon-user\"></i> {{ story.publishedBy.firstname }} {{ story.publishedBy.lastname }}</a></li>
                                                <li><a href=\"#\"><i class=\"icon-folder\"></i> {{ story.scenes |length }} scenes</a></li>
                                            </ul>

                                        </div>
                                    </div>

                                {% endfor %}


                            </div>

                        </div>

                    {% endfor %}



                </div>

            </div>
        </div>




        <div class=\"row\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
            <div class=\"container clearfix\">

                <div class=\"col-md-4\">
                    <img src=\"{{ absolute_url(asset('assets/front/images/author.png')) }}\" />

                </div>
                <div class=\"col-md-8\">
                    <h4>Facebook Feeds</h4>
                    <div id=\"dribbble-widge\" class=\"col_half\">
                        <div class=\"fb-page\" data-height=\"300\" data-href=\"https://www.facebook.com/nextscenes\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/nextscenes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/nextscenes\">Nextscenes</a></blockquote></div>
                    </div>
                    <div class=\"col_half col_last\">
                        <a class=\"twitter-timeline\" data-height=\"300\" href=\"https://twitter.com/nextscenes?ref_src=twsrc%5Etfw\">Tweets by nextscenes</a> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                    </div>



                </div>

            </div>
        </div>
        <div class=\"row\">&nbsp;</div>

        <div class=\"section notopmargin notopborder\" style=\"font-family: Courier;  word-spacing: 4px\">
            <div class=\"container clearfix\">
                <div class=\"heading-block center nomargin\">
                    <h3>Latest from the Blog</h3>
                </div>
            </div>
        </div>

        <div class=\"container clear-bottommargin clearfix\" style=\"font-family: Courier; text-align: left; word-spacing: 4px\">
            <div class=\"row\">

                <div id=\"oc-posts\" class=\"owl-carousel posts-carousel carousel-widget\" data-margin=\"20\" data-nav=\"true\" data-pagi=\"false\" data-items-xxs=\"1\" data-items-xs=\"2\" data-items-sm=\"3\" data-items-md=\"3\">
                    {% for article in articles %}
                        <div class=\"oc-item\">
                            <div class=\"ipost clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"{{ path('ns_web_blog_single', { 'id': article.id }) }}\"><img class=\"image_fade\" style=\"height: 300px; width: 500px\" src=\"{{ vich_uploader_asset(article, 'photoFile') }}\" alt=\"{{ article.title }}\"></a>
                                </div>
                                <div class=\"entry-title\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                    <h3><a href=\"{{ path('ns_web_blog_single', { 'id': article.id }) }}\">{{ article.title }}</a></h3>
                                </div>
                                <ul class=\"entry-meta clearfix\">
                                    <li><i class=\"icon-calendar3\"></i> {{ article.createdAt | date('d M Y') }}</li>
                                </ul>
                                <div class=\"entry-content\">
                                    <p>{{ article.description }}</p>
                                </div>
                            </div>

                        </div>


                    {% endfor %}


                </div>




            </div>
        </div>

        <div class=\"section dark parallax nobottommargin\" style=\"padding: 80px 0;background-image: url({{ absolute_url(asset('assets/front/images/parallax/1.jpg')) }});\" data-stellar-background-ratio=\"0.3\">

            {{ render(controller('NSWebBundle:Main:Counter')) }}


        </div>

        <div class=\"section parallax dark nobottommargin\" style=\"background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;\" data-stellar-background-ratio=\"0.4\">
            <div class=\"heading-block center\">
                <h3>What they think about us?</h3>
            </div>
            {{ render(controller('NSWebBundle:Main:Testimonial')) }}

        </div>

        <div class=\"container clearfix\">

            <div id=\"oc-clients\" class=\"owl-carousel image-carousel carousel-widget\" data-margin=\"60\" data-loop=\"true\" data-nav=\"false\" data-autoplay=\"5000\" data-pagi=\"false\" data-items-xxs=\"2\" data-items-xs=\"3\" data-items-sm=\"4\" data-items-md=\"5\" data-items-lg=\"6\">
                {{ render(controller('NSWebBundle:Main:Partner')) }}



            </div>


        </div>




    </div>

{% endblock %}


{% block scripts %}
    <script type=\"text/javascript\">

        jQuery(document).ready(function(\$) {

            \$('.nivoSlider').nivoSlider({
                effect: 'random',
                slices: 15,
                boxCols: 12,
                boxRows: 6,
                animSpeed: 500,
                pauseTime: 8000,
                directionNav: true,
                controlNav: true,
                pauseOnHover: true,
                prevText: '<i class=\"icon-angle-left\"></i>',
                nextText: '<i class=\"icon-angle-right\"></i>',
                afterLoad: function(){
                    \$('#slider').find('.nivo-caption').addClass('slider-caption-bg');
                }
            });

        });

    </script>

{% endblock %}
", "NSWebBundle:Homepage:index.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Homepage/index.html.twig");
    }
}
