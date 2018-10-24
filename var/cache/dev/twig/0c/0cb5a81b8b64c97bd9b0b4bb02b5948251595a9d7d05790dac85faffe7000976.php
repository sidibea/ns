<?php

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_d0d219c0785606296eee25156ed7bcaa02d0524ac36845af10816d53bc9fd592 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding.html.twig"));

        // line 2
        echo "



";
        // line 6
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 6, $this->source); })()) > 1)) {
            // line 7
            echo "    <ul class=\"pager nomargin\">
        ";
            // line 8
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 9
                echo "            <li class=\"previous\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 9, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 9, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 9, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 9, $this->source); })())))), "html", null, true);
                echo "\">Previous scene <i class=\"fa fa-arrow-left\"></i> </a></li>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 13
                echo "            <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 13, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 13, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 13, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 13, $this->source); })())))), "html", null, true);
                echo "\">Next scene <i class=\"fa fa-arrow-right \"></i></a></li>

        ";
            }
            // line 16
            echo "    </ul><!-- .pager end -->
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  53 => 13,  51 => 12,  48 => 11,  42 => 9,  40 => 8,  37 => 7,  35 => 6,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}




{% if pageCount > 1 %}
    <ul class=\"pager nomargin\">
        {% if previous is defined %}
            <li class=\"previous\"><a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">Previous scene <i class=\"fa fa-arrow-left\"></i> </a></li>
        {% endif %}

        {% if next is defined %}
            <li class=\"next\"><a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">Next scene <i class=\"fa fa-arrow-right \"></i></a></li>

        {% endif %}
    </ul><!-- .pager end -->
{% endif %}
", "@KnpPaginator/Pagination/sliding.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
