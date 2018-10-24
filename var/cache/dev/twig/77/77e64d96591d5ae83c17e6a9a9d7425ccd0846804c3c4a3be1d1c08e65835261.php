<?php

/* NSAdminBundle:Articles:list.html.twig */
class __TwigTemplate_28fd88f530f946ba2d6482f0cd89882542e2c7dab98d7dee49892fb8aad35910 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSAdminBundle::layout.html.twig", "NSAdminBundle:Articles:list.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Articles:list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle:Articles:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Articles</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Articles</li>
                </ol>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_articles_new");
        echo "\" class=\"btn btn-secondary\">Create new</a><br>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong class=\"card-title\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 34, $this->source); })()), "getTotalItemCount", array()), "html", null, true);
        echo " Articles </strong>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 41, $this->source); })()), "isSorted", array(0 => "a.title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo " scope=\"col\">";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 41, $this->source); })()), "title", "a.title");
        echo "</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "                                <tr>
                                    <th scope=\"row\"><img class=\"image_fade\" style=\"width: 50px; height: 50px \" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "photoFile"), "html", null, true);
            echo "\"/></th>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 52
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", array()), 3, 200);
            echo "</td>
                                    <td>
                                        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "Enabled", array()) == true)) {
                // line 55
                echo "                                            <span class=\"badge badge-success\">Active</span>
                                        ";
            } else {
                // line 57
                echo "                                            <span class=\"badge badge-danger\">Desactive</span>
                                        ";
            }
            // line 59
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_forun_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "

                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"navigation center\">
                            ";
        // line 74
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 74, $this->source); })()));
        echo "
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

    public function getTemplateName()
    {
        return "NSAdminBundle:Articles:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  178 => 67,  167 => 62,  163 => 61,  159 => 59,  155 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  133 => 49,  129 => 48,  115 => 41,  105 => 34,  95 => 27,  90 => 24,  81 => 23,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSAdminBundle::layout.html.twig\" %}

{% block breadcrumbs %}
    <div class=\"col-sm-4\">
        <div class=\"page-header float-left\">
            <div class=\"page-title\">
                <h1>Articles</h1>
            </div>
        </div>
    </div>
    <div class=\"col-sm-8\">
        <div class=\"page-header float-right\">
            <div class=\"page-title\">
                <ol class=\"breadcrumb text-right\">
                    <li class=\"\">Dashboard</li>
                    <li class=\"active\">Articles</li>
                </ol>
            </div>
        </div>
    </div>
{% endblock %}

{% block content %}
    <div class=\"animated fadeIn\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"{{ path('ns_admin_articles_new') }}\" class=\"btn btn-secondary\">Create new</a><br>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <strong class=\"card-title\">{{ pagination.getTotalItemCount }} Articles </strong>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th {% if pagination.isSorted('a.title') %} class=\"sorted\"{% endif %} scope=\"col\">{{ knp_pagination_sortable(pagination, 'title', 'a.title') }}</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for article in pagination %}
                                <tr>
                                    <th scope=\"row\"><img class=\"image_fade\" style=\"width: 50px; height: 50px \" src=\"{{ vich_uploader_asset(article, 'photoFile') }}\"/></th>
                                    <td>{{ article.title }}</td>
                                    <td>{{ article.description | slice(3, 200)| raw }}</td>
                                    <td>
                                        {% if article.Enabled == true %}
                                            <span class=\"badge badge-success\">Active</span>
                                        {% else %}
                                            <span class=\"badge badge-danger\">Desactive</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('ns_admin_articles_edit', { 'id': article.id }) }}\"  class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"{{ path('ns_admin_forun_edit', { 'id': article.id }) }}\"  class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>

                                </tr>
                            {% endfor %}


                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"navigation center\">
                            {{ knp_pagination_render(pagination) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "NSAdminBundle:Articles:list.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/AdminBundle/Resources/views/Articles/list.html.twig");
    }
}
