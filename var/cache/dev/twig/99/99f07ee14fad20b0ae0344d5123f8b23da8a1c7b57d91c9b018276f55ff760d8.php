<?php

/* @FOSComment/Thread/comment_content.html.twig */
class __TwigTemplate_a0a557ba12666046939ed0dccc313151dde5a0a4007d2e7f9e6ffeae2e8ed5cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/comment_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment"));

        // line 13
        echo "<div id=\"fos_comment_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 13, $this->source); })()), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, (isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" ";
        if (((isset($context["parent"]) || array_key_exists("parent", $context)) &&  !(null === (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 13, $this->source); })())))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parent"]) || array_key_exists("parent", $context) ? $context["parent"] : (function () { throw new Twig_Error_Runtime('Variable "parent" does not exist.', 13, $this->source); })()), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"fos_comment_comment_metas\">
        ";
        // line 16
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 56
        echo "    </div>

    <div id=\"fos_comment_comment_body_";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 58, $this->source); })()), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
        ";
        // line 59
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 70
        echo "    </div>

    ";
        // line 72
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 93
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas"));

        // line 17
        echo "            ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 55
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_authorline"));

        // line 18
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 19
        echo "                <span class=\"fos_comment_comment_authorname\">
                    ";
        // line 20
        if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->isCommentInState((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 20, $this->source); })()), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 22
            echo "                    ";
        } else {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 23, $this->source); })()), "authorName", array()), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 25, $this->source); })()), "createdAt", array())), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_edit"));

        // line 29
        echo "                ";
        if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canEditComment((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "                <button data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 30, $this->source); })()), "id", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_edit_thread_comment", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 30, $this->source); })()), "thread", array()), "id", array()), "commentId" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 30, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                ";
        }
        // line 32
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_delete"));

        // line 35
        echo "                ";
        if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canDeleteComment((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "                    ";
            if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->isCommentInState((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 36, $this->source); })()), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_remove_thread_comment", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 38, $this->source); })()), "thread", array()), "id", array()), "commentId" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 38, $this->source); })()), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            } else {
                // line 40
                echo "                        ";
                // line 41
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_remove_thread_comment", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 41, $this->source); })()), "thread", array()), "id", array()), "commentId" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 41, $this->source); })()), "id", array()), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_metas_voting"));

        // line 47
        echo "                ";
        if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canVote((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 47, $this->source); })()))) {
            // line 48
            echo "                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_new_thread_comment_votes", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 49, $this->source); })()), "thread", array()), "id", array()), "commentId" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 49, $this->source); })()), "id", array()), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                        <button data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_new_thread_comment_votes", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 50, $this->source); })()), "thread", array()), "id", array()), "commentId" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 50, $this->source); })()), "id", array()), "value" =>  -1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 51, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
            $this->loadTemplate("@FOSComment/Thread/comment_votes.html.twig", "@FOSComment/Thread/comment_content.html.twig", 51)->display(array_merge($context, array("commentScore" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 51, $this->source); })()), "score", array()))));
            echo "</div>
                    </div>
                ";
        }
        // line 54
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_body"));

        // line 60
        echo "            ";
        if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->isCommentInState((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 60, $this->source); })()), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                ";
            if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->isRawComment((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 63, $this->source); })()))) {
                // line 64
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 64, $this->source); })()), "rawBody", array());
                echo "
                ";
            } else {
                // line 66
                echo "                    ";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 66, $this->source); })()), "body", array()), "html", null, true));
                echo "
                ";
            }
            // line 68
            echo "            ";
        }
        // line 69
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_children"));

        // line 73
        echo "        ";
        if ( !((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 73, $this->source); })()) === "flat")) {
            // line 74
            echo "            ";
            if ($this->extensions['FOS\CommentBundle\Twig\CommentExtension']->canComment((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 74, $this->source); })()))) {
                // line 75
                echo "                <div class=\"fos_comment_comment_reply\">
                    ";
                // line 76
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 79
                echo "                </div>
            ";
            }
            // line 81
            echo "
            <div class=\"fos_comment_comment_replies\">

                ";
            // line 84
            if ((isset($context["children"]) || array_key_exists("children", $context))) {
                // line 85
                echo "                    ";
                $this->loadTemplate("@FOSComment/Thread/comments.html.twig", "@FOSComment/Thread/comment_content.html.twig", 85)->display(array_merge($context, array("comments" => (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new Twig_Error_Runtime('Variable "children" does not exist.', 85, $this->source); })()), "depth" => ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 85, $this->source); })()) + 1), "parent" => (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 85, $this->source); })()), "view" => (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 85, $this->source); })()))));
                // line 86
                echo "                ";
            }
            // line 87
            echo "
            </div>
        ";
        } elseif (((        // line 89
(isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 89, $this->source); })()) === "flat") && (isset($context["children"]) || array_key_exists("children", $context)))) {
            // line 90
            echo "            ";
            $this->loadTemplate("@FOSComment/Thread/comments.html.twig", "@FOSComment/Thread/comment_content.html.twig", 90)->display(array_merge($context, array("comments" => (isset($context["children"]) || array_key_exists("children", $context) ? $context["children"] : (function () { throw new Twig_Error_Runtime('Variable "children" does not exist.', 90, $this->source); })()), "depth" => ((isset($context["depth"]) || array_key_exists("depth", $context) ? $context["depth"] : (function () { throw new Twig_Error_Runtime('Variable "depth" does not exist.', 90, $this->source); })()) + 1), "parent" => (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 90, $this->source); })()), "view" => (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 90, $this->source); })()))));
            // line 91
            echo "        ";
        }
        // line 92
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_comment_comment_reply"));

        // line 77
        echo "                        <button data-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fos_comment_new_thread_comments", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 77, $this->source); })()), "thread", array()), "id", array()))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 77, $this->source); })()), "authorName", array()), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 77, $this->source); })()), "id", array()), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSComment/Thread/comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  422 => 77,  413 => 76,  403 => 92,  400 => 91,  397 => 90,  395 => 89,  391 => 87,  388 => 86,  385 => 85,  383 => 84,  378 => 81,  374 => 79,  372 => 76,  369 => 75,  366 => 74,  363 => 73,  354 => 72,  344 => 69,  341 => 68,  335 => 66,  329 => 64,  326 => 63,  323 => 62,  320 => 61,  317 => 60,  308 => 59,  298 => 54,  290 => 51,  284 => 50,  278 => 49,  275 => 48,  272 => 47,  263 => 46,  253 => 44,  250 => 43,  242 => 41,  240 => 40,  232 => 38,  230 => 37,  227 => 36,  224 => 35,  215 => 34,  205 => 32,  195 => 30,  192 => 29,  183 => 28,  170 => 25,  164 => 23,  161 => 22,  158 => 21,  156 => 20,  153 => 19,  150 => 18,  141 => 17,  131 => 55,  129 => 46,  126 => 45,  124 => 34,  121 => 33,  119 => 28,  116 => 27,  113 => 17,  104 => 16,  92 => 93,  90 => 72,  86 => 70,  84 => 59,  80 => 58,  76 => 56,  74 => 16,  59 => 13,  41 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

{% block fos_comment_comment %}
<div id=\"fos_comment_{{ comment.id }}\" class=\"fos_comment_comment_show fos_comment_comment_depth_{{ depth }}\" {% if parent is defined and parent is not null %}data-parent=\"{{ parent.id }}\"{% endif %}>

    <div class=\"fos_comment_comment_metas\">
        {% block fos_comment_comment_metas %}
            {% block fos_comment_comment_metas_authorline %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_show_by{% endtrans %}
                <span class=\"fos_comment_comment_authorname\">
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
                    {% else %}
                        {{ comment.authorName }}
                    {% endif %}
                </span> - {{ comment.createdAt|date }}
            {% endblock fos_comment_comment_metas_authorline %}

            {% block fos_comment_comment_metas_edit %}
                {% if fos_comment_can_edit_comment(comment) %}
                <button data-container=\"#fos_comment_comment_body_{{ comment.id }}\" data-url=\"{{ url(\"fos_comment_edit_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id}) }}\" class=\"fos_comment_comment_edit_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_edit{% endtrans %}</button>
                {% endif %}
            {% endblock fos_comment_comment_metas_edit %}

            {% block fos_comment_comment_metas_delete %}
                {% if fos_comment_can_delete_comment(comment) %}
                    {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                        {# undelete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_VISIBLE') }) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_undelete{% endtrans %}</button>
                    {% else %}
                        {# delete #}
                        <button data-url=\"{{ url(\"fos_comment_remove_thread_comment\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\":  constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')}) }}\" class=\"fos_comment_comment_remove\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_delete{% endtrans %}</button>
                    {% endif %}
                {% endif %}
            {% endblock fos_comment_comment_metas_delete %}

            {% block fos_comment_comment_metas_voting %}
                {% if fos_comment_can_vote(comment) %}
                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": 1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_voteup{% endtrans %}</button>
                        <button data-url=\"{{ url(\"fos_comment_new_thread_comment_votes\", {\"id\": comment.thread.id, \"commentId\": comment.id, \"value\": -1}) }}\" class=\"fos_comment_comment_vote\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_votedown{% endtrans %}</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_{{ comment.id }}\">{% include '@FOSComment/Thread/comment_votes.html.twig' with { 'commentScore': comment.score } %}</div>
                    </div>
                {% endif %}
            {% endblock fos_comment_comment_metas_voting %}
        {% endblock fos_comment_comment_metas %}
    </div>

    <div id=\"fos_comment_comment_body_{{ comment.id }}\" class=\"fos_comment_comment_body\">
        {% block fos_comment_comment_body %}
            {% if comment is fos_comment_in_state(constant('FOS\\\\CommentBundle\\\\Model\\\\CommentInterface::STATE_DELETED')) %}
                {% trans from 'FOSCommentBundle' %}fos_comment_comment_deleted{% endtrans %}
            {% else %}
                {% if comment is fos_comment_raw %}
                    {{ comment.rawBody | raw }}
                {% else %}
                    {{ comment.body | nl2br }}
                {% endif %}
            {% endif %}
        {% endblock fos_comment_comment_body %}
    </div>

    {% block fos_comment_comment_children %}
        {% if view is not same as('flat') %}
            {% if fos_comment_can_comment(comment) %}
                <div class=\"fos_comment_comment_reply\">
                    {% block fos_comment_comment_reply %}
                        <button data-url=\"{{ url('fos_comment_new_thread_comments', {\"id\": comment.thread.id}) }}\" data-name=\"{{ comment.authorName }}\" data-parent-id=\"{{ comment.id }}\" class=\"fos_comment_comment_reply_show_form\">{% trans from 'FOSCommentBundle' %}fos_comment_comment_show_reply{% endtrans %}</button>
                    {% endblock fos_comment_comment_reply %}
                </div>
            {% endif %}

            <div class=\"fos_comment_comment_replies\">

                {% if children is defined %}
                    {% include '@FOSComment/Thread/comments.html.twig' with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
                {% endif %}

            </div>
        {% elseif view is same as('flat') and children is defined %}
            {% include '@FOSComment/Thread/comments.html.twig' with { \"comments\": children, \"depth\": depth + 1, \"parent\": comment, \"view\": view } %}
        {% endif %}
    {% endblock fos_comment_comment_children %}

</div>
{% endblock fos_comment_comment %}
", "@FOSComment/Thread/comment_content.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/friendsofsymfony/comment-bundle/Resources/views/Thread/comment_content.html.twig");
    }
}
