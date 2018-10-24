<?php

/* NSAdminBundle:Homepage:dasboard.html.twig */
class __TwigTemplate_79f36cfb49a885fe016e5608123904081796a0e956e5814ab49a0aff3e6235ff extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSAdminBundle::layout.html.twig", "NSAdminBundle:Homepage:dasboard.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Homepage:dasboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Homepage:dasboard.html.twig"));

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

        echo "Dashboard ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"col-sm-12 mb-4\">
        <div class=\"card-group\">
            <div class=\"card col-lg-3 col-md-6 no-padding bg-flat-color-1\">
                <div class=\"card-body\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-users text-light\"></i>
                    </div>

                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Users</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-2\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-book text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["storyline"]) || array_key_exists("storyline", $context) ? $context["storyline"] : (function () { throw new Twig_Error_Runtime('Variable "storyline" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Storylines</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-3\">
                    <div class=\"h1 text-right mb-4\">
                        <i class=\"fa fa-pencil text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["scenes"]) || array_key_exists("scenes", $context) ? $context["scenes"] : (function () { throw new Twig_Error_Runtime('Variable "scenes" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-5\">
                    <div class=\"h1 text-right text-light mb-4\">
                        <i class=\"fa fa-pencil-square\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new Twig_Error_Runtime('Variable "proposed" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Proposed Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-4\">
                    <div class=\"h1 text-light text-right mb-4\">
                        <i class=\"fa fa-clock-o\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Articles</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Storylines</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Scenes</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Proposed Scenes</a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"storyline-chart\" style=\"position: relative; height: 300px;\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane active\" id=\"scene-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 110
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Area({
                element   : 'storyline-chart',
                resize    : true,
                data      : [
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["storyChart"]) || array_key_exists("storyChart", $context) ? $context["storyChart"] : (function () { throw new Twig_Error_Runtime('Variable "storyChart" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 120
            echo "                        { y: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "date", array()), "html", null, true);
            echo "', storyline: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nbre", array()), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['storyline' ],
                labels    : ['Storyline'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Line({
                element   : 'scene-chart',
                resize    : true,
                data      : [
                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sceneChart"]) || array_key_exists("sceneChart", $context) ? $context["sceneChart"] : (function () { throw new Twig_Error_Runtime('Variable "sceneChart" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 137
            echo "                    { y: '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "date", array()), "html", null, true);
            echo "', scene: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "nbre", array()), "html", null, true);
            echo "  },

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
                ],
                xkey      : 'y',
                ykeys     : ['scene' ],
                labels    : ['Scenes'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSAdminBundle:Homepage:dasboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 140,  253 => 137,  249 => 136,  234 => 123,  222 => 120,  218 => 119,  207 => 110,  198 => 109,  144 => 64,  129 => 52,  114 => 40,  99 => 28,  84 => 16,  73 => 7,  64 => 6,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSAdminBundle::layout.html.twig\" %}

{% block title %}Dashboard {% endblock %}


{% block content %}
    <div class=\"col-sm-12 mb-4\">
        <div class=\"card-group\">
            <div class=\"card col-lg-3 col-md-6 no-padding bg-flat-color-1\">
                <div class=\"card-body\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-users text-light\"></i>
                    </div>

                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ users }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Users</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-2\">
                    <div class=\"h1 text-muted text-right mb-4\">
                        <i class=\"fa fa-book text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ storyline }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Storylines</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-3\">
                    <div class=\"h1 text-right mb-4\">
                        <i class=\"fa fa-pencil text-light\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ scenes }}</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-5\">
                    <div class=\"h1 text-right text-light mb-4\">
                        <i class=\"fa fa-pencil-square\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ proposed }}</span>
                    </div>
                    <small class=\"text-uppercase font-weight-bold text-light\">Proposed Scenes</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
            <div class=\"card col-lg-3 col-md-6 no-padding no-shadow\">
                <div class=\"card-body bg-flat-color-4\">
                    <div class=\"h1 text-light text-right mb-4\">
                        <i class=\"fa fa-clock-o\"></i>
                    </div>
                    <div class=\"h4 mb-0 text-light\">
                        <span class=\"count\">{{ articles }}</span>
                    </div>
                    <small class=\"text-light text-uppercase font-weight-bold\">Articles</small>
                    <div class=\"progress progress-xs mt-3 mb-0 bg-light\" style=\"width: 40%; height: 5px;\"></div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h4>STATS</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"custom-tab\">

                        <nav>
                            <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                                <a class=\"nav-item nav-link active \" id=\"custom-nav-home-tab\" data-toggle=\"tab\" href=\"#custom-nav-home\" role=\"tab\" aria-controls=\"custom-nav-home\" aria-selected=\"true\">Storylines</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-profile-tab\" data-toggle=\"tab\" href=\"#custom-nav-profile\" role=\"tab\" aria-controls=\"custom-nav-profile\" aria-selected=\"false\">Scenes</a>
                                <a class=\"nav-item nav-link\" id=\"custom-nav-contact-tab\" data-toggle=\"tab\" href=\"#custom-nav-contact\" role=\"tab\" aria-controls=\"custom-nav-contact\" aria-selected=\"false\">Proposed Scenes</a>
                            </div>
                        </nav>
                        <div class=\"tab-content pl-3 pt-2\" id=\"nav-tabContent\">
                            <div class=\"tab-pane fade active show\" id=\"custom-nav-home\" role=\"tabpanel\" aria-labelledby=\"custom-nav-home-tab\">
                                <div class=\"chart tab-pane active\" id=\"storyline-chart\" style=\"position: relative; height: 300px;\"></div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-profile\" role=\"tabpanel\" aria-labelledby=\"custom-nav-profile-tab\">
                                <div class=\"chart tab-pane active\" id=\"scene-chart\" style=\"position: relative; height: 300px;\"></div>

                            </div>
                            <div class=\"tab-pane fade\" id=\"custom-nav-contact\" role=\"tabpanel\" aria-labelledby=\"custom-nav-contact-tab\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(document).ready( function(\$){
            'use strict';
            /* Morris.js Charts */
            // Sales chart
            var area = new Morris.Area({
                element   : 'storyline-chart',
                resize    : true,
                data      : [
                    {% for key, val in storyChart %}
                        { y: '{{ val.date }}', storyline: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['storyline' ],
                labels    : ['Storyline'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

            var line = new Morris.Line({
                element   : 'scene-chart',
                resize    : true,
                data      : [
                    {% for key, val in sceneChart %}
                    { y: '{{ val.date }}', scene: {{ val.nbre }}  },

                    {% endfor %}

                ],
                xkey      : 'y',
                ykeys     : ['scene' ],
                labels    : ['Scenes'],
                lineColors: ['#a0d0e0'],
                hideHover : 'auto'
            });

        });
    </script>
{% endblock %}", "NSAdminBundle:Homepage:dasboard.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/AdminBundle/Resources/views/Homepage/dasboard.html.twig");
    }
}
