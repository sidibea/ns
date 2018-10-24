<?php

/* NSWebBundle:Scenes:ProposedScene.html.twig */
class __TwigTemplate_ad0897625c37c004438cbf9058408bb2dac9a924d79e6632a4206cb738f0e686 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Scenes:ProposedScene.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle:Scenes:ProposedScene.html.twig"));

        // line 1
        $context["t"] = 0;
        // line 2
        echo "

";
        // line 4
        if (twig_test_empty((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <h4 style=\"color: red\">NO PROPOSED SCENES</h4>
";
        } else {
            // line 7
            echo "    <div class=\"row\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 8, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["proposed"]) {
                // line 9
                echo "

        ";
                // line 11
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 3)) {
                    // line 12
                    echo "        <div class=\"col-md-4 feeds\">
            <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <div class=\"entry-c\">
                    <div class=\"entry-title\" style=\"font-family: Courier; word-spacing: 4px\">
                        <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "scene", array()), "title", array()), "html", null, true);
                    echo " [Proposed] / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "count", array()), "html", null, true);
                    echo "</a></h4>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-user\"></i>Created by ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", array()), "lastname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "createdAt", array()), "d M Y  h:i:s"), "html", null, true);
                    echo "</li>
                    </ul>
                    <div class=\"entry-content\">
                        ";
                    // line 23
                    echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["proposed"], "content", array())), 0, 100), "html", null, true);
                    echo "
                        <br> <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_proposed_scenes_view", array("id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", array()))), "html", null, true);
                    echo "\" class=\"more-link\">Read scene</a>
                    </div>
                </div>
            </div>

        </div>
            <div class=\"line\"></div>
            </div>
         <div class=\"row\">

    ";
                } else {
                    // line 35
                    echo "<div class=\"col-md-4 feeds\">
    <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

        <div class=\"entry-c\">
            <div class=\"entry-title\">
                <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "scene", array()), "title", array()), "html", null, true);
                    echo " [Proposed] / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "count", array()), "html", null, true);
                    echo "</a></h4>
            </div>
            <ul class=\"entry-meta clearfix\">
                <li><i class=\"icon-user\"></i>Created by ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", array()), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposed"], "publishedBy", array()), "lastname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposed"], "createdAt", array()), "d M Y  h:i:s"), "html", null, true);
                    echo "</li>
            </ul>
            <div class=\"entry-content\">
                ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["proposed"], "content", array())), 0, 100), "html", null, true);
                    echo "
                <br> <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_proposed_scenes_view", array("id" => twig_get_attribute($this->env, $this->source, $context["proposed"], "id", array()))), "html", null, true);
                    echo "\" class=\"more-link\">Read scene</a>
            </div>
        </div>
    </div>
</div>


    ";
                }
                // line 55
                echo "

    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposed'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    </div>

";
        }
        // line 62
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle:Scenes:ProposedScene.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 62,  166 => 58,  150 => 55,  139 => 47,  135 => 46,  125 => 43,  117 => 40,  110 => 35,  96 => 24,  92 => 23,  82 => 20,  74 => 17,  67 => 12,  65 => 11,  61 => 9,  44 => 8,  41 => 7,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set t = 0 %}


{% if pagination is empty %}
    <h4 style=\"color: red\">NO PROPOSED SCENES</h4>
{% else %}
    <div class=\"row\">
    {% for proposed in pagination %}


        {% if loop.index is divisible by(3) %}
        <div class=\"col-md-4 feeds\">
            <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

                <div class=\"entry-c\">
                    <div class=\"entry-title\" style=\"font-family: Courier; word-spacing: 4px\">
                        <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> {{ proposed.scene.title }} [Proposed] / {{ proposed.count }}</a></h4>
                    </div>
                    <ul class=\"entry-meta clearfix\">
                        <li><i class=\"icon-user\"></i>Created by {{ proposed.publishedBy.firstname }} {{ proposed.publishedBy.lastname }} {{ proposed.createdAt | date('d M Y  h:i:s') }}</li>
                    </ul>
                    <div class=\"entry-content\">
                        {{ proposed.content  | striptags | raw | slice(0, 100)}}
                        <br> <a href=\"{{ path('ns_web_proposed_scenes_view', { 'id': proposed.id }) }}\" class=\"more-link\">Read scene</a>
                    </div>
                </div>
            </div>

        </div>
            <div class=\"line\"></div>
            </div>
         <div class=\"row\">

    {% else  %}
<div class=\"col-md-4 feeds\">
    <div class=\"mpost clearfix\" style=\"font-family: Courier; text-align: justify; word-spacing: 4px\">

        <div class=\"entry-c\">
            <div class=\"entry-title\">
                <h4 style=\"font-family: Courier; text-align: left; word-spacing: 4px\"><a href=\"\"> {{ proposed.scene.title }} [Proposed] / {{ proposed.count }}</a></h4>
            </div>
            <ul class=\"entry-meta clearfix\">
                <li><i class=\"icon-user\"></i>Created by {{ proposed.publishedBy.firstname }} {{ proposed.publishedBy.lastname }} {{ proposed.createdAt | date('d M Y  h:i:s') }}</li>
            </ul>
            <div class=\"entry-content\">
                {{ proposed.content  | striptags | raw | slice(0, 100) }}
                <br> <a href=\"{{ path('ns_web_proposed_scenes_view', { 'id': proposed.id }) }}\" class=\"more-link\">Read scene</a>
            </div>
        </div>
    </div>
</div>


    {% endif %}


    {% endfor %}

    </div>

{% endif %}

", "NSWebBundle:Scenes:ProposedScene.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/Scenes/ProposedScene.html.twig");
    }
}
