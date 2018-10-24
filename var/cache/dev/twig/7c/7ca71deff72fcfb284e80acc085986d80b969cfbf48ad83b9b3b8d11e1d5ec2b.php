<?php

/* NSAdminBundle::layout.html.twig */
class __TwigTemplate_fc1e20a3d065236b9ef34e765a1e8674f165b257f7ba42ab777c464a5940f077 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'message' => array($this, 'block_message'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSAdminBundle::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/favicon/favicon.ico"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/cs-skin-elastic.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less') }}\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/scss/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/lib/chosen/chosen.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/morris.js/morris.css"), "html", null, true);
        echo "\">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/images/logo2.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_homepage");
        echo "\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <li >
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_forun");
        echo "\"> <i class=\"menu-icon fa fa-archive \"></i>Forums </a>
                </li>
                <li >
                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_storyline");
        echo "\"> <i class=\"menu-icon fa fa-book \"></i>Storylines </a>
                </li>
                <li >
                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_scenes");
        echo "\"> <i class=\"menu-icon fa fa-pencil\"></i>Scenes </a>
                </li>
                <li >
                    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_articles");
        echo "\"> <i class=\"menu-icon fa fa-bookmark\"></i>Articles </a>
                </li>
                <li >
                    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_testimonials");
        echo "\"> <i class=\"menu-icon fa fa-comment\"></i>Testimonials </a>
                </li>
                <li >
                    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_partners");
        echo "\"> <i class=\"menu-icon fa fa-institution\"></i>Partners </a>
                </li>
                <li >
                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_admin_users");
        echo "\"> <i class=\"menu-icon fa fa-users\"></i>Users </a>
                </li>

                <li >
                    <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_terms_of_use");
        echo "\"> <i class=\"menu-icon fa fa-users\"></i>Terms of use </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>


                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class=\"breadcrumbs\">
        ";
        // line 145
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 146
        echo "    </div>

    <div class=\"content mt-3\">
        ";
        // line 149
        $this->displayBlock('message', $context, $blocks);
        // line 161
        echo "

        ";
        // line 163
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "

    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/vendor/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/main.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/dashboard.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/widgets.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/nsadmin/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 187
        $this->displayBlock('scripts', $context, $blocks);
        // line 188
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nextscenes | ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 150
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 150, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 151
            echo "                <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                    <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                    ";
            // line 153
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo ".
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 187,  417 => 163,  407 => 160,  394 => 153,  390 => 151,  385 => 150,  376 => 149,  358 => 145,  340 => 9,  327 => 188,  325 => 187,  321 => 186,  317 => 185,  312 => 183,  308 => 182,  304 => 181,  300 => 180,  296 => 179,  292 => 178,  288 => 177,  282 => 174,  278 => 173,  273 => 171,  264 => 164,  262 => 163,  258 => 161,  256 => 149,  251 => 146,  249 => 145,  180 => 79,  173 => 75,  167 => 72,  161 => 69,  155 => 66,  149 => 63,  143 => 60,  137 => 57,  131 => 54,  122 => 48,  118 => 47,  95 => 27,  90 => 25,  86 => 24,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  52 => 14,  44 => 9,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %} Nextscenes | {% endblock %}</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/nsadmin/favicon/favicon.ico') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/flag-icon.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/cs-skin-elastic.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less') }}\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/scss/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/css/lib/chosen/chosen.min.css') }}\">
    <link href=\"{{ asset('bundles/nsadmin/css/lib/vector-map/jqvmap.min.css') }}\" rel=\"stylesheet\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/nsadmin/morris.js/morris.css') }}\">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ asset('bundles/nsadmin/images/logo.png') }}\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{ asset('bundles/nsadmin/images/logo2.png') }}\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"{{ path('ns_admin_homepage') }}\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_forun') }}\"> <i class=\"menu-icon fa fa-archive \"></i>Forums </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_storyline') }}\"> <i class=\"menu-icon fa fa-book \"></i>Storylines </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_scenes') }}\"> <i class=\"menu-icon fa fa-pencil\"></i>Scenes </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_articles') }}\"> <i class=\"menu-icon fa fa-bookmark\"></i>Articles </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_testimonials') }}\"> <i class=\"menu-icon fa fa-comment\"></i>Testimonials </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_partners') }}\"> <i class=\"menu-icon fa fa-institution\"></i>Partners </a>
                </li>
                <li >
                    <a href=\"{{ path('ns_admin_users') }}\"> <i class=\"menu-icon fa fa-users\"></i>Users </a>
                </li>

                <li >
                    <a href=\"{{ path('ns_terms_of_use') }}\"> <i class=\"menu-icon fa fa-users\"></i>Terms of use </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id=\"right-panel\" class=\"right-panel\">

    <!-- Header-->
    <header id=\"header\" class=\"header\">

        <div class=\"header-menu\">

            <div class=\"col-sm-7\">
                <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
            </div>

            <div class=\"col-sm-5\">
                <div class=\"user-area dropdown float-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                    </a>

                    <div class=\"user-menu dropdown-menu\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>


                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                    </div>
                </div>

                <div class=\"language-select dropdown\" id=\"language-select\">
                    <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        <i class=\"flag-icon flag-icon-us\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                        <div class=\"dropdown-item\">
                            <span class=\"flag-icon flag-icon-fr\"></span>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-es\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </div>
                        <div class=\"dropdown-item\">
                            <i class=\"flag-icon flag-icon-it\"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class=\"breadcrumbs\">
        {% block breadcrumbs %} {% endblock %}
    </div>

    <div class=\"content mt-3\">
        {% block message %}
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"sufee-alert alert with-close alert-success alert-dismissible fade show\">
                    <span class=\"badge badge-pill badge-warning\">Felicitation</span>
                    {{ flashMessage }}.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>

            {% endfor %}
        {% endblock %}


        {% block content %} {% endblock %}


    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src=\"{{ asset('bundles/nsadmin/js/vendor/jquery-2.1.4.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/plugins.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/main.js') }}\"></script>


<script src=\"{{ asset('bundles/nsadmin/js/lib/chart-js/Chart.bundle.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/dashboard.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/widgets.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/lib/vector-map/jquery.vmap.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/lib/vector-map/jquery.vmap.min.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/lib/vector-map/jquery.vmap.sampledata.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/js/lib/vector-map/country/jquery.vmap.world.js') }}\"></script>
<!-- Morris.js charts -->
<script src=\"{{ asset('bundles/nsadmin/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('bundles/nsadmin/morris.js/morris.min.js') }}\"></script>
{% block scripts %} {% endblock %}

</body>
</html>
", "NSAdminBundle::layout.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/AdminBundle/Resources/views/layout.html.twig");
    }
}
