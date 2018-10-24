<?php

/* NSWebBundle::_sidebar.html.twig */
class __TwigTemplate_a9d29740543d45dea36f3beba760c47b419a4bef7e8c79630281501ff0ab6cce extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::_sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar nobottommargin col_last clearfix\">

    <div class=\"forum\">

        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget widget_links clearfix\">

                <div class=\"fancy-title title-bottom-border\">
                    <h3>FORUMS</h3>
                </div>

                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NSForumBundle:Forum:vertical"));
        echo "


            </div>

            <div class=\"widget clearfix\">

                <h4>Facebook Feeds</h4>
                <div id=\"dribbble-widge\">
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/nextscenes\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/nextscenes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/nextscenes\">Nextscenes</a></blockquote></div>
                </div>

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <h4>Update !!</h4>
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/open.png")), "html", null, true);
        echo "\" />

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/google-play.png")), "html", null, true);
        echo "\" />

            </div>

        </div>
    </div>


</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle::_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  63 => 30,  43 => 13,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar nobottommargin col_last clearfix\">

    <div class=\"forum\">

        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget widget_links clearfix\">

                <div class=\"fancy-title title-bottom-border\">
                    <h3>FORUMS</h3>
                </div>

                {{ render(controller('NSForumBundle:Forum:vertical')) }}


            </div>

            <div class=\"widget clearfix\">

                <h4>Facebook Feeds</h4>
                <div id=\"dribbble-widge\">
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/nextscenes\" data-tabs=\"timeline\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/nextscenes\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/nextscenes\">Nextscenes</a></blockquote></div>
                </div>

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <h4>Update !!</h4>
                <img src=\"{{ absolute_url(asset('assets/front/images/open.png')) }}\" />

            </div>

            <div class=\"widget widget-twitter-feed clearfix\">

                <img src=\"{{ absolute_url(asset('assets/front/images/google-play.png')) }}\" />

            </div>

        </div>
    </div>


</div>
", "NSWebBundle::_sidebar.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/_sidebar.html.twig");
    }
}
