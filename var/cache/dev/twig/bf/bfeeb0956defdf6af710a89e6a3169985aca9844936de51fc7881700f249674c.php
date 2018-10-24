<?php

/* NSWebBundle:Scenes:view.html.twig */
class __TwigTemplate_920a40c1355a0ce97cb1291ee6d59a80321b7d4b7790ad552bf02500845a6a6b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSWebBundle:Scenes:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Scenes:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Scenes:view.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 3, $this->source); })()), "title", array()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 6
        echo "    <section id=\"page-title\" class=\"page-title-nobg\">

        <div class=\"container clearfix\" >
            <h1 style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 9, $this->source); })()), "title", array()), "html", null, true);
        echo "</h1>
            <span style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">You are reading the last 5 (five)  validated scenes of this storyline</span>

        </div>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    <div class=\"content-wrap\">
        <div class=\"container clearfix notopmargin \" style=\"top: -2em; font-size: 1.2em; text-transform: uppercase; font-family: Courier\" >

            <span><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_homepage");
        echo "\">Home /</a></span>
            <span><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_forums", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 23, $this->source); })()), "forum", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 23, $this->source); })()), "forum", array()), "name", array()), "html", null, true);
        echo "  /  </a></span>

            <span><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 25, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 25, $this->source); })()), "title", array()), "html", null, true);
        echo " /</a></span>
            <span class=\"active\">view scenes</span>
        </div>
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                ";
        // line 31
        if (((isset($context["scene"]) || array_key_exists("scene", $context) ? $context["scene"] : (function () { throw new Twig_Error_Runtime('Variable "scene" does not exist.', 31, $this->source); })()) != null)) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["scene"]) {
                // line 33
                echo "                        <div class=\" panel panel-default\">
                            <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["scene"], "title", array()), "html", null, true);
                echo "</b></div>
                            <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["scene"], "content", array());
                echo "
                            </div>
                        </div>

                        <div class=\"clear\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scene'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    <div class=\"line\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h3 class=\"title-bottom-border uppercase\">Proposed Scenes</h3>
                            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NS\\WebBundle\\Controller\\SceneController::proposedScene", array("story" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->source); })()), "request", array()), "get", array(0 => "id"), "method"))));
            // line 50
            echo "
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12 \" >
                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>
                            <div class=\"row\">
                                ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->source); })()), "user", array()), "id", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 59, $this->source); })()), "publishedBy", array()), "id", array()))) {
                // line 60
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 60, $this->source); })()), "type", array()) == "Solo writing")) {
                    // line 61
                    echo "                                        <a href=\"\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 62
(isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 62, $this->source); })()), "type", array()) == "Collaborative writing")) {
                    // line 63
                    echo "                                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                        <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 64, $this->source); })()), "id", array()))), "html", null, true);
                    echo "\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 65, $this->source); })()), "type", array()) == "Group writing")) {
                    // line 66
                    echo "                                        ";
                    $context["contributors"] = array();
                    // line 67
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 67, $this->source); })()), "contributors", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contributor"]) {
                        // line 68
                        echo "                                            ";
                        $context["contributors"] = twig_array_merge((isset($context["contributors"]) || array_key_exists("contributors", $context) ? $context["contributors"] : (function () { throw new Twig_Error_Runtime('Variable "contributors" does not exist.', 68, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, $context["contributor"], "id", array())));
                        // line 69
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "
                                        ";
                    // line 71
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "user", array()), "id", array()), (isset($context["contributors"]) || array_key_exists("contributors", $context) ? $context["contributors"] : (function () { throw new Twig_Error_Runtime('Variable "contributors" does not exist.', 71, $this->source); })()))) {
                        // line 72
                        echo "                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                            <a href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_story_view", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["story"]) || array_key_exists("story", $context) ? $context["story"] : (function () { throw new Twig_Error_Runtime('Variable "story" does not exist.', 73, $this->source); })()), "id", array()))), "html", null, true);
                        echo "\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>

                                        ";
                    }
                    // line 76
                    echo "
                                    ";
                }
                // line 78
                echo "
                                ";
            }
            // line 80
            echo "                            </div>
                            <div class=\"panel-group\" id=\"accordion\">
                                <div id=\"proposenewscene\" class=\"panel-collapse collapse\">
                                    ";
            // line 83
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), 'form_start');
            echo "

                                    ";
            // line 86
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), 'errors');
            echo "
                                    <div class=\"row\">

                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Content</label>
                                            ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control select-1 ", "id" => "nom_carte", "placeholder" => "")));
            echo "
                                        </div>

                                        <div class=\" line\"></div>

                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

                                        </div>

                                    </div>


                                    ";
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), 'rest');
            echo "

                                    ";
            // line 107
            echo "                                    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
            echo "
                                </div>
                            </div>



                        </div>
                    </div>
                ";
        } else {
            // line 116
            echo "                    <h3 class=\"red center\" style=\"color: red\">No scene in this storyline !</h3>
                ";
        }
        // line 118
        echo "

            </div>
            ";
        // line 121
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSWebBundle:Scenes:view.html.twig", 121)->display($context);
        // line 122
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 128
        echo "    <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.feed').infiniteScroll({
            path: '.pagination__next',
            append: '.article',
            status: '.scroller-status',
            hideNav: '.pagination',
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Scenes:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 128,  317 => 127,  304 => 122,  302 => 121,  297 => 118,  293 => 116,  280 => 107,  275 => 104,  259 => 91,  250 => 86,  245 => 83,  240 => 80,  236 => 78,  232 => 76,  226 => 73,  223 => 72,  221 => 71,  218 => 70,  212 => 69,  209 => 68,  204 => 67,  201 => 66,  199 => 65,  195 => 64,  192 => 63,  190 => 62,  187 => 61,  184 => 60,  182 => 59,  171 => 50,  169 => 49,  168 => 47,  161 => 42,  149 => 36,  144 => 34,  141 => 33,  136 => 32,  134 => 31,  123 => 25,  116 => 23,  112 => 22,  107 => 19,  98 => 18,  81 => 9,  76 => 6,  67 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} {{ story.title }} {% endblock %}

{% block page_title %}
    <section id=\"page-title\" class=\"page-title-nobg\">

        <div class=\"container clearfix\" >
            <h1 style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">{{  story.title }}</h1>
            <span style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">You are reading the last 5 (five)  validated scenes of this storyline</span>

        </div>

    </section>
{% endblock %}


{% block content %}
    <div class=\"content-wrap\">
        <div class=\"container clearfix notopmargin \" style=\"top: -2em; font-size: 1.2em; text-transform: uppercase; font-family: Courier\" >

            <span><a href=\"{{ path('ns_web_homepage') }}\">Home /</a></span>
            <span><a href=\"{{ path('ns_web_forums', { 'id' : story.forum.id }) }}\">{{ story.forum.name }}  /  </a></span>

            <span><a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\">{{ story.title }} /</a></span>
            <span class=\"active\">view scenes</span>
        </div>
        <div class=\"container\">
            <div class=\"postcontent nobootommargin clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                <div class=\"clear\"></div>
                {% if scene != null %}
                    {% for scene in pagination %}
                        <div class=\" panel panel-default\">
                            <div class=\"panel-heading\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\"><b>{{ scene.title }}</b></div>
                            <div class=\"panel-body\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">
                                {{ scene.content  | raw }}
                            </div>
                        </div>

                        <div class=\"clear\"></div>
                    {% endfor %}
                    <div class=\"line\"></div>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h3 class=\"title-bottom-border uppercase\">Proposed Scenes</h3>
                            {{ render(controller(
                                'NS\\\\WebBundle\\\\Controller\\\\SceneController::proposedScene',
                                { 'story': app.request.get('id') }
                            )) }}
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-12 \" >
                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>
                            <div class=\"row\">
                                {% if app.user.id != story.publishedBy.id %}
                                    {% if story.type == \"Solo writing\" %}
                                        <a href=\"\" class=\"button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Add new scene</a>
                                    {% elseif story.type == \"Collaborative writing\" %}
                                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                        <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>
                                    {% elseif story.type == \"Group writing\" %}
                                        {% set contributors = [] %}
                                        {% for contributor in story.contributors %}
                                            {% set contributors = contributors |merge([contributor.id]) %}
                                        {% endfor %}

                                        {% if app.user.id in contributors %}
                                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#proposenewscene\" aria-expanded=\"false\" aria-controls=\"proposenewscene\"  class=\"collapsed button button-3d button-rounded button-green fright\"><i class=\"icon-plus\"></i>Propose next scene</a>
                                            <a href=\"{{ path('ns_web_story_view', { 'id': story.id }) }}\" class=\"collapsed button button-3d button-rounded button-red fleft\"><i class=\"icon-book-open\"></i>View details</a>

                                        {% endif %}

                                    {% endif %}

                                {% endif %}
                            </div>
                            <div class=\"panel-group\" id=\"accordion\">
                                <div id=\"proposenewscene\" class=\"panel-collapse collapse\">
                                    {{ form_start(form) }}

                                    {# Les erreurs générales du formulaire. #}
                                    {{ form_errors(form) }}
                                    <div class=\"row\">

                                        <div class=\"form-group\">
                                            <label for=\"nom_carte\">Content</label>
                                            {{ form_widget(form.content, {'attr': {'class': 'form-control select-1 ', 'id': 'nom_carte', 'placeholder': '' }}) }}
                                        </div>

                                        <div class=\" line\"></div>

                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"button button-3d button-large button-rounded button-green\">Submit</button>

                                        </div>

                                    </div>


                                    {{ form_rest(form) }}

                                    {# Fermeture de la balise <form> du formulaire HTML #}
                                    {{ form_end(form) }}
                                </div>
                            </div>



                        </div>
                    </div>
                {% else %}
                    <h3 class=\"red center\" style=\"color: red\">No scene in this storyline !</h3>
                {% endif %}


            </div>
            {% include \"NSWebBundle::_sidebar.html.twig\" %}
        </div>
    </div>

{% endblock %}

{% block scripts %}
    <script src=\"https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js\"></script>
    <script type=\"text/javascript\">
        \$('.feed').infiniteScroll({
            path: '.pagination__next',
            append: '.article',
            status: '.scroller-status',
            hideNav: '.pagination',
        });
    </script>
{% endblock %}
", "NSWebBundle:Scenes:view.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Scenes/view.html.twig");
    }
}
