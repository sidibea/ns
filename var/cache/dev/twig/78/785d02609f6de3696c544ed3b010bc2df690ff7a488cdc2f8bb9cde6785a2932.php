<?php

/* @FOSComment/Thread/async.html.twig */
class __TwigTemplate_e1342a19387617c950156593a926127c83f10866ad210d5ce4ab8f348dc2d2a3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/async.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSComment/Thread/async.html.twig"));

        // line 11
        echo "
<div id=\"fos_comment_thread\"></div>

<script>
    // thread id
    var fos_comment_thread_id = '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "';
    var fos_comment_thread_view = '";
        // line 17
        echo twig_escape_filter($this->env, (((isset($context["view"]) || array_key_exists("view", $context))) ? (_twig_default_filter((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 17, $this->source); })()), "tree")) : ("tree")), "html", null, true);
        echo "';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_comment_get_threads");
        echo "';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/foscomment/js/comments.js"), "html", null, true);
        echo "';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSComment/Thread/async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  46 => 20,  40 => 17,  36 => 16,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

 This file is part of the FOSCommentBundle package.

 (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>

 This source file is subject to the MIT license that is bundled
 with this source code in the file LICENSE.

#}

<div id=\"fos_comment_thread\"></div>

<script>
    // thread id
    var fos_comment_thread_id = '{{ id }}';
    var fos_comment_thread_view = '{{ view|default('tree') }}';

    // api base url to use for initial requests
    var fos_comment_thread_api_base_url = '{{ path('fos_comment_get_threads') }}';

    // Snippet for asynchronously loading the comments
    (function() {
        var fos_comment_script = document.createElement('script');
        fos_comment_script.async = true;
        fos_comment_script.src = '{{ asset('bundles/foscomment/js/comments.js') }}';

        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
    })();
</script>
", "@FOSComment/Thread/async.html.twig", "/Applications/MAMP/htdocs/nextscences/vendor/friendsofsymfony/comment-bundle/Resources/views/Thread/async.html.twig");
    }
}
