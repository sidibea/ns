<?php

/* @FOSComment/Thread/comment_new_content.html.twig */
class __TwigTemplate_02823cabc24bca895de970b54265e4c560354296aed0ddbb1f421cbe142fcad5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment_new_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment_new_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["first"] = (((isset($context["first"]) || array_key_exists("first", $context))) ? (_twig_default_filter((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 12, $this->source); })()), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 14, $this->source); })()));
        // line 15
        if ( !(null === (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge((isset($context["url_parameters"]) || array_key_exists("url_parameters", $context) ? $context["url_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "url_parameters" does not exist.', 16, $this->source); })()), array("parentId" => twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 16, $this->source); })()), "id", array())));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_form_holder"));

        // line 20
        echo "<div id=\"respond\" class=\"clearfix\">
    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 22
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 60
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_title"));

        // line 23
        echo "            ";
        if ((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ( !(null ===         // line 25
(isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 26, $this->source); })()), "authorName", array())), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 28
            echo "                <h3>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 30
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_new_form"));

        // line 33
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_post_thread_comments", (isset($context["url_parameters"]) || array_key_exists("url_parameters", $context) ? $context["url_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "url_parameters" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "id", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "id", array()))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 35
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 44
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 46
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 56
        echo "                </div>

            </form>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_fields"));

        // line 36
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "body", array()), 'errors');
        echo "
                    </div>
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "body", array()), 'widget', array("attr" => array("class" => "sm-form-control ")));
        echo "

                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'rest');
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_form_submit"));

        // line 47
        echo "                        ";
        if ( !(null === (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 47, $this->source); })()))) {
            // line 48
            echo "                    <div class=\"col_full nobottommargin\">
                            <input type=\"button\" value=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel \" />
                    </div>
                        ";
        }
        // line 52
        echo "                    <div class=\"col_full nobottommargin\">
                       <br> <input class=\"button button-3d nomargin\" type=\"submit\" value=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSComment/Thread/comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 53,  233 => 52,  227 => 49,  224 => 48,  221 => 47,  212 => 46,  200 => 42,  195 => 40,  190 => 38,  186 => 37,  183 => 36,  174 => 35,  161 => 56,  159 => 46,  155 => 44,  153 => 35,  145 => 33,  136 => 32,  126 => 30,  120 => 28,  114 => 26,  112 => 25,  107 => 24,  104 => 23,  95 => 22,  82 => 60,  80 => 32,  77 => 31,  75 => 22,  71 => 20,  53 => 19,  50 => 18,  46 => 16,  44 => 15,  42 => 14,  39 => 13,  37 => 12,  34 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% set first = first|default(false) %}

{% set url_parameters = {'id': id } %}
{% if parent is not null %}
    {% set url_parameters = url_parameters|merge({'parentId': parent.id}) %}
{% endif %}

{% block fos_comment_comment_form_holder %}
<div id=\"respond\" class=\"clearfix\">
    <div class=\"fos_comment_comment_form_holder\">
        {% block fos_comment_form_title %}
            {% if first %}
                <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline_first{% endtrans %}</h3>
            {% elseif parent is not null %}
                <h3>{% trans with {\"%name%\": parent.authorName } from 'FOSCommentBundle' %}fos_comment_comment_reply_reply_to{% endtrans %}</h3>
            {% else %}
                <h3>{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_headline{% endtrans %}</h3>
            {% endif %}
        {% endblock %}

        {% block fos_comment_comment_new_form %}
            <form class=\"fos_comment_comment_new_form\" action=\"{{ url('fos_comment_post_thread_comments', url_parameters) }}\" data-parent=\"{{ parent.id|default() }}\" method=\"POST\">

                {% block fos_comment_form_fields %}
                    <div class=\"fos_comment_form_errors\">
                    {{ form_errors(form) }}
                    {{ form_errors(form.body) }}
                    </div>
                    {{ form_widget(form.body,{'attr': {'class': 'sm-form-control ' }}) }}

                    {{ form_rest(form) }}
                {% endblock %}

                <div class=\"fos_comment_submit\">
                    {% block fos_comment_form_submit %}
                        {% if parent is not null %}
                    <div class=\"col_full nobottommargin\">
                            <input type=\"button\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_reply_cancel{% endtrans %}\" class=\"fos_comment_comment_reply_cancel \" />
                    </div>
                        {% endif %}
                    <div class=\"col_full nobottommargin\">
                       <br> <input class=\"button button-3d nomargin\" type=\"submit\" value=\"{% trans from 'FOSCommentBundle' %}fos_comment_comment_new_submit{% endtrans %}\" />
                    </div>
                        {% endblock %}
                </div>

            </form>
        {% endblock fos_comment_comment_new_form %}

    </div>
</div>
{% endblock fos_comment_comment_form_holder %}
", "@FOSComment/Thread/comment_new_content.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/friendsofsymfony/comment-bundle/Resources/views/Thread/comment_new_content.html.twig");
    }
}
