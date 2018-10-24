<?php

/* NSWebBundle::counter.html.twig */
class __TwigTemplate_68042864a4d57538fef23008dd4fcf364fe7dcc87ef29e7123e8c29ee69711d3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::counter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::counter.html.twig"));

        // line 1
        echo "<div class=\"container clearfix\">

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-users\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new Twig_Error_Runtime('Variable "authors" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" data-refresh-interval=\"50\" data-speed=\"2000\"></span>K+</div>
        <h5>Authors </h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\" data-delay=\"200\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-book\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["storyline"]) || array_key_exists("storyline", $context) ? $context["storyline"] : (function () { throw new Twig_Error_Runtime('Variable "storyline" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\" data-refresh-interval=\"100\" data-speed=\"2500\"></span>+</div>
        <h5>No. of Storylines</h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\" data-delay=\"400\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-file-text\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["scenes"]) || array_key_exists("scenes", $context) ? $context["scenes"] : (function () { throw new Twig_Error_Runtime('Variable "scenes" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\" data-refresh-interval=\"25\" data-speed=\"3500\"></span>*</div>
        <h5>No. of Scenes</h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center col_last\" data-animate=\"bounceIn\" data-delay=\"600\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-retweet \"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["proposed"]) || array_key_exists("proposed", $context) ? $context["proposed"] : (function () { throw new Twig_Error_Runtime('Variable "proposed" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" data-refresh-interval=\"30\" data-speed=\"2700\"></span>+</div>
        <h5>No. of Proposed scenes</h5>
    </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle::counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  53 => 17,  44 => 11,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container clearfix\">

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-users\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"{{ authors }}\" data-refresh-interval=\"50\" data-speed=\"2000\"></span>K+</div>
        <h5>Authors </h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\" data-delay=\"200\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-book\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"{{ storyline }}\" data-refresh-interval=\"100\" data-speed=\"2500\"></span>+</div>
        <h5>No. of Storylines</h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center\" data-animate=\"bounceIn\" data-delay=\"400\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-file-text\"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"{{ scenes }}\" data-refresh-interval=\"25\" data-speed=\"3500\"></span>*</div>
        <h5>No. of Scenes</h5>
    </div>

    <div class=\"col_one_fourth nobottommargin center col_last\" data-animate=\"bounceIn\" data-delay=\"600\">
        <i class=\"i-plain i-xlarge divcenter nobottommargin icon-retweet \"></i>
        <div class=\"counter counter-lined\"><span data-from=\"0\" data-to=\"{{ proposed }}\" data-refresh-interval=\"30\" data-speed=\"2700\"></span>+</div>
        <h5>No. of Proposed scenes</h5>
    </div>

</div>
", "NSWebBundle::counter.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/counter.html.twig");
    }
}
