<?php

/* @FOSComment/Thread/comments.html.twig */
class __TwigTemplate_14ba82cd934363e1bbee9ed4fced98ad12b9d083d3f4cd5a37a8a3422d349353 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comments.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["depth"] = (((isset($context["depth"]) || array_key_exists("depth", $context))) ? (_twig_default_filter((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 12, $this->source); })()), 0)) : (0));
        // line 13
        $context["view"] = (((isset($context["view"]) || array_key_exists("view", $context))) ? (_twig_default_filter((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 13, $this->source); })()), "tree")) : ("tree"));
        // line 14
        echo "<div id=\"comments\" class=\"clearfix\">
";
        // line 15
        if (((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 15, $this->source); })()) == 0)) {
            // line 16
            echo "    ";
            if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canCommentThread((isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 16, $this->source); })()))) {
                // line 17
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_new_thread_comments", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 17, $this->source); })()), "id", array()))));
                echo "
    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canEditThread((isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 20, $this->source); })()))) {
                // line 21
                echo "    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_edit_thread_commentable", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 22, $this->source); })()), "id", array()), "value" =>  !twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 22, $this->source); })()), "commentable", array()))), "html", null, true);
                echo "\" class=\"fos_comment_thread_commentable_action\">
            ";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 23, $this->source); })()), "commentable", array())) ? ("fos_comment_thread_close") : ("fos_comment_thread_open")), array(), "FOSCommentBundle"), "html", null, true);
                echo "
        </button>
    </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context["count"] = twig_get_attribute($this->env, $this->source, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new Twig_Error_Runtime('Variable "thread" does not exist.', 28, $this->source); })()), "numComments", array());
            // line 29
            echo "    <h3 id=\"comments-title\"><span>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("fos_comment_thread_comment_count", (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 29, $this->source); })()), array("%count%" => (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 29, $this->source); })())), "FOSCommentBundle");
            echo "</span></h3>
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 32, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 33
            echo "    ";
            $this->loadTemplate("@FOSComment/Thread/comment.html.twig", "@FOSComment/Thread/comments.html.twig", 33)->display(array_merge($context, array("children" => twig_get_attribute($this->env, $this->source, $context["commentinfo"], "children", array()), "comment" => twig_get_attribute($this->env, $this->source, $context["commentinfo"], "comment", array()), "depth" => (isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 33, $this->source); })()), "view" => (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 33, $this->source); })()))));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSComment/Thread/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  100 => 33,  83 => 32,  80 => 31,  74 => 29,  72 => 28,  69 => 27,  62 => 23,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  44 => 17,  41 => 16,  39 => 15,  36 => 14,  34 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% set depth = depth|default(0) %}
{% set view = view|default('tree') %}
<div id=\"comments\" class=\"clearfix\">
{% if depth == 0 %}
    {% if fos_comment_can_comment_thread(thread) %}
        {{ render(url('fos_comment_new_thread_comments', {\"id\": thread.id})) }}
    {% endif %}

    {% if fos_comment_can_edit_thread(thread) %}
    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"{{ url('fos_comment_edit_thread_commentable', {'id': thread.id, 'value': not thread.commentable}) }}\" class=\"fos_comment_thread_commentable_action\">
            {{ (thread.commentable ? 'fos_comment_thread_close' : 'fos_comment_thread_open') | trans({}, 'FOSCommentBundle') }}
        </button>
    </div>
    {% endif %}

    {% set count = thread.numComments %}
    <h3 id=\"comments-title\"><span>{% transchoice count with {'%count%': count} from 'FOSCommentBundle' %}fos_comment_thread_comment_count{% endtranschoice %}</span></h3>
{% endif %}

{% for commentinfo in comments %}
    {% include '@FOSComment/Thread/comment.html.twig' with { 'children': commentinfo.children, 'comment': commentinfo.comment, 'depth': depth, 'view': view } %}
{% endfor %}
</div>", "@FOSComment/Thread/comments.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/friendsofsymfony/comment-bundle/Resources/views/Thread/comments.html.twig");
    }
}
