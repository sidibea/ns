<?php

/* @FOSComment/Thread/comment.html.twig */
class __TwigTemplate_029cc728b336cebdd33f20be5c1d3d4b0e3b1ca3e0776548ec3b29fdd022cd9f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["view"] = (((isset($context["view"]) || array_key_exists("view", $context))) ? (_twig_default_filter((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 12, $this->source); })()), "tree")) : ("tree"));
        // line 13
        $context["depth"] = (((isset($context["depth"]) || array_key_exists("depth", $context))) ? (_twig_default_filter((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 13, $this->source); })()), 0)) : (0));
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("@FOSComment/Thread/comment_content.html.twig", "@FOSComment/Thread/comment.html.twig", 15)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSComment/Thread/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  36 => 14,  34 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% set view = view|default('tree') %}
{% set depth = depth|default(0) %}

{% include '@FOSComment/Thread/comment_content.html.twig' %}
", "@FOSComment/Thread/comment.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/friendsofsymfony/comment-bundle/Resources/views/Thread/comment.html.twig");
    }
}
