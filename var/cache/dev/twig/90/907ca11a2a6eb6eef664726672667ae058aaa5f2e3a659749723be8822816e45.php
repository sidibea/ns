<?php

/* NSWebBundle::layout.html.twig */
class __TwigTemplate_764f5fb0c0eac48dcf3995afd033f938ac33418b1553dadaa93379e027b668a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'def' => array($this, 'block_def'),
            'message' => array($this, 'block_message'),
            'slider' => array($this, 'block_slider'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "577f0a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_bootstrap_1.css");
            // line 19
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_style_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_nivo-slider_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_dark_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_4") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_font-icons_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_5") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_animate_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_6") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_magnific-popup_7.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // asset "577f0a2_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2_7") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app_select-boxes_8.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "577f0a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_577f0a2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/css/compiled/app.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "


    ";
        // line 24
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 25
        echo "

    <!-- Bootstrap Switch CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/components/bs-switches.css")), "html", null, true);
        echo "\" type=\"text/css\" />

    <!-- Radio Checkbox Plugin -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/components/radio-checkbox.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/responsive.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>";
        // line 40
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>

<body class=\"stretched side-header side-header-right open-header push-wrapper close-header-on-scroll\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">
    <!-- Top Bar
\t\t============================================= -->
    <div id=\"top-bar\">

        <div class=\"container clearfix\">

            <div class=\"col_half nobottommargin\">

                <!-- Top Links
                ============================================= -->
                <div class=\"top-links\">
                    <ul>

                        <li >
                            <a style=\"color: #0b2e13;\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">CHOOSE YOUR COUNTRY <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Mali - French</a></li>
                                <li><a href=\"#\">Nigeria - English</a></li>
                                <li><a href=\"#\">Angola - Portuguese</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- .top-links end -->
            </div>

            <div class=\"col_half fright col_last nobottommargin\">

                <!-- Top Social
                ============================================= -->
                <div id=\"top-social\">
                    <ul>
                        <li><a target=\"_blank\" href=\"https://fr-fr.facebook.com/nextscenes/\" class=\"si-facebook\"><span class=\"ts-icon\"><i class=\"icon-facebook\"></i></span><span class=\"ts-text\">Facebook</span></a></li>
                        <li><a href=\"https://twitter.com/nextscenes\" class=\"si-twitter\"><span class=\"ts-icon\"><i class=\"icon-twitter\"></i></span><span class=\"ts-text\">Twitter</span></a></li>
                        <li><a href=\"#\" class=\"si-instagram\"><span class=\"ts-icon\"><i class=\"icon-instagram2\"></i></span><span class=\"ts-text\">Instagram</span></a></li>
                        <li><a href=\"tel:+223 74 14 15 14\" class=\"si-call\"><span class=\"ts-icon\"><i class=\"icon-call\"></i></span><span class=\"ts-text\">+223 74 14 15 14</span></a></li>
                        <li><a href=\"mailto:info@nextscenes.com\" class=\"si-email3\"><span class=\"ts-icon\"><i class=\"icon-email3\"></i></span><span class=\"ts-text\">info@nextscenes.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->
    <div class=\"clearfix\"></div><br>
    <div id=\"section header-stick bottommargin-lg clearfix\">
        <div class=\"container \">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-sm-12\" style=\"font-size: 18px; font-family: Courier !important; font-weight: bold; color: red\"><br><br>
                    ";
        // line 99
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 100
            echo "                        <div class=\"navbar-top-links\">
                            <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">LOGIN</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">REGISTER</a>
                        </div>
                    ";
        }
        // line 106
        echo "
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/images/logo.png")), "html", null, true);
        echo "\" alt=\"\" /></a>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <div id=\"header-trigger\" class=\"side-panel-trigger\">
                        <a href=\"#\"><i class=\"icon-reorder\"></i> </a>
                    </div>

                    ";
        // line 116
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "
                </div>
            </div>

        </div>


        ";
        // line 126
        $this->displayBlock('def', $context, $blocks);
        // line 142
        echo "
        <br> <div class=\"line nomargin\"></div>

    </div>
    <div class=\"row\">&nbsp;</div>
    ";
        // line 147
        $this->displayBlock('message', $context, $blocks);
        // line 165
        echo "
    ";
        // line 166
        $this->displayBlock('slider', $context, $blocks);
        // line 167
        echo "    ";
        $this->displayBlock('page_title', $context, $blocks);
        // line 168
        echo "
    <section id=\"content\">
        ";
        // line 170
        $this->displayBlock('content', $context, $blocks);
        // line 171
        echo "    </section>

    <footer>
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights © 2018 All Rights Reserved by nextscenes.com<br>
                    <div class=\"copyright-links\"><a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ns_web_terms_of_use");
        echo "\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@nextscenes.com <span class=\"middot\">·</span> <i class=\"icon-headphones\"></i> +223 73 03 39 39 <span class=\"middot\">·</span>
                </div>

            </div>

        </div>

    </footer>

</div>

<!-- Go To Top
\t=============================================
<div id=\"gotoTop\" class=\"icon-angle-up\"></div> -->

<!-- External JavaScripts
============================================= -->
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

";
        // line 254
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c469cd9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_c469cd9_0") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/compiled/main_jquery_1.js");
            // line 263
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 263, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "c469cd9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_c469cd9_1") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/compiled/main_plugins_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 263, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "c469cd9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_c469cd9_2") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/compiled/main_jquery.nivo_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 263, $this->source); })()), "html", null, true);
            echo "\"></script>
";
            // asset "c469cd9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_c469cd9_3") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/compiled/main_jquery.gmap_4.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 263, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c469cd9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_assetic_c469cd9") : $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("_controller/js/compiled/main.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 263, $this->source); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 265
        echo "<!-- Select-Boxes Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/components/select-boxes.js")), "html", null, true);
        echo "\"></script>

<!-- Select-Splitter Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/components/selectsplitter.js")), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/components/bs-switches.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/jquery.nivo.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/functions.js")), "html", null, true);
        echo "\"></script>
";
        // line 274
        $this->displayBlock('scripts', $context, $blocks);
        // line 275
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 117
        echo "                       ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("NSForumBundle:Forum:Menu"));
        echo "
                   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_def($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "def"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "def"));

        // line 127
        echo "            <br> <div class=\"line nomargin\"></div>

            <div class=\"container clearfix\">
                <br>
                <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: justify;\">
                        <font face=\"courier new\" size=\"3\">
                            <span style=\"font-size: 19px; display: block; font-weight: bold\">What is nextscenes?</span>
                            Nextscenes® is an online multilingual platform for creative writing, where writers allow readers to help them propose the next scene of a story or write their own stories
                        </font>
                    </div>

                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_message($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message"));

        // line 148
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 148, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 149
            echo "            <div class=\"container\">
                <div class=\"alert alert-danger\">
                    ";
            // line 151
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 156, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 157
            echo "            <div class=\"container\">
                <div class=\"alert alert-success\">
                    ";
            // line 159
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
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

    // line 274
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
        return "NSWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 274,  621 => 170,  603 => 167,  585 => 166,  574 => 163,  564 => 159,  560 => 157,  556 => 156,  553 => 155,  543 => 151,  539 => 149,  534 => 148,  525 => 147,  501 => 127,  492 => 126,  479 => 117,  470 => 116,  452 => 40,  434 => 24,  423 => 275,  421 => 274,  417 => 273,  413 => 272,  409 => 271,  404 => 269,  398 => 266,  395 => 265,  363 => 263,  359 => 254,  282 => 180,  271 => 171,  269 => 170,  265 => 168,  262 => 167,  260 => 166,  257 => 165,  255 => 147,  248 => 142,  246 => 126,  237 => 119,  235 => 116,  223 => 109,  218 => 106,  212 => 103,  207 => 101,  204 => 100,  202 => 99,  140 => 40,  129 => 32,  125 => 31,  119 => 28,  114 => 25,  112 => 24,  107 => 21,  51 => 19,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    {% stylesheets filter=\"scssphp, cssrewrite\" output=\"css/compiled/app.css\"
    'assets/front/css/bootstrap.css'
    'assets/front/css/style.css'
    'assets/front/css/nivo-slider.css'
    'assets/front/css/dark.css'
    'assets/front/css/font-icons.css'
    'assets/front/css/animate.css'
    'assets/front/css/magnific-popup.css'
    'assets/front/css/components/select-boxes.css'

    %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}



    {% block stylesheet %} {% endblock %}


    <!-- Bootstrap Switch CSS -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/front/css/components/bs-switches.css')) }}\" type=\"text/css\" />

    <!-- Radio Checkbox Plugin -->
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/front/css/components/radio-checkbox.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/front/css/responsive.css')) }}\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>{% block title %} {% endblock %}</title>

</head>

<body class=\"stretched side-header side-header-right open-header push-wrapper close-header-on-scroll\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">
    <!-- Top Bar
\t\t============================================= -->
    <div id=\"top-bar\">

        <div class=\"container clearfix\">

            <div class=\"col_half nobottommargin\">

                <!-- Top Links
                ============================================= -->
                <div class=\"top-links\">
                    <ul>

                        <li >
                            <a style=\"color: #0b2e13;\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">CHOOSE YOUR COUNTRY <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Mali - French</a></li>
                                <li><a href=\"#\">Nigeria - English</a></li>
                                <li><a href=\"#\">Angola - Portuguese</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- .top-links end -->
            </div>

            <div class=\"col_half fright col_last nobottommargin\">

                <!-- Top Social
                ============================================= -->
                <div id=\"top-social\">
                    <ul>
                        <li><a target=\"_blank\" href=\"https://fr-fr.facebook.com/nextscenes/\" class=\"si-facebook\"><span class=\"ts-icon\"><i class=\"icon-facebook\"></i></span><span class=\"ts-text\">Facebook</span></a></li>
                        <li><a href=\"https://twitter.com/nextscenes\" class=\"si-twitter\"><span class=\"ts-icon\"><i class=\"icon-twitter\"></i></span><span class=\"ts-text\">Twitter</span></a></li>
                        <li><a href=\"#\" class=\"si-instagram\"><span class=\"ts-icon\"><i class=\"icon-instagram2\"></i></span><span class=\"ts-text\">Instagram</span></a></li>
                        <li><a href=\"tel:+223 74 14 15 14\" class=\"si-call\"><span class=\"ts-icon\"><i class=\"icon-call\"></i></span><span class=\"ts-text\">+223 74 14 15 14</span></a></li>
                        <li><a href=\"mailto:info@nextscenes.com\" class=\"si-email3\"><span class=\"ts-icon\"><i class=\"icon-email3\"></i></span><span class=\"ts-text\">info@nextscenes.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->
    <div class=\"clearfix\"></div><br>
    <div id=\"section header-stick bottommargin-lg clearfix\">
        <div class=\"container \">
            <div class=\"col-md-12\">
                <div class=\"col-md-4 col-sm-12\" style=\"font-size: 18px; font-family: Courier !important; font-weight: bold; color: red\"><br><br>
                    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                        <div class=\"navbar-top-links\">
                            <a href=\"{{ path('fos_user_security_login') }}\">LOGIN</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href=\"{{ path('fos_user_registration_register') }}\">REGISTER</a>
                        </div>
                    {% endif %}

                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <a href=\"{{ path('ns_web_homepage') }}\"><img src=\"{{ absolute_url(asset('assets/front/images/logo.png')) }}\" alt=\"\" /></a>
                </div>
                <div class=\"col-md-4 col-sm-6\">
                    <div id=\"header-trigger\" class=\"side-panel-trigger\">
                        <a href=\"#\"><i class=\"icon-reorder\"></i> </a>
                    </div>

                    {% block header %}
                       {{ render(controller('NSForumBundle:Forum:Menu')) }}
                   {% endblock %}

                </div>
            </div>

        </div>


        {% block def %}
            <br> <div class=\"line nomargin\"></div>

            <div class=\"container clearfix\">
                <br>
                <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align: justify;\">
                        <font face=\"courier new\" size=\"3\">
                            <span style=\"font-size: 19px; display: block; font-weight: bold\">What is nextscenes?</span>
                            Nextscenes® is an online multilingual platform for creative writing, where writers allow readers to help them propose the next scene of a story or write their own stories
                        </font>
                    </div>

                </div>
            </div>
        {% endblock %}

        <br> <div class=\"line nomargin\"></div>

    </div>
    <div class=\"row\">&nbsp;</div>
    {% block message %}
        {% for flashMessage in app.session.flashbag.get('error') %}
            <div class=\"container\">
                <div class=\"alert alert-danger\">
                    {{ flashMessage }}
                </div>
            </div>
        {% endfor %}

        {% for flashMessage in app.session.flashbag.get('notice') %}
            <div class=\"container\">
                <div class=\"alert alert-success\">
                    {{ flashMessage }}
                </div>
            </div>
        {% endfor %}

    {% endblock %}

    {% block slider %} {% endblock %}
    {% block page_title %} {% endblock %}

    <section id=\"content\">
        {% block content %} {% endblock %}
    </section>

    <footer>
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights © 2018 All Rights Reserved by nextscenes.com<br>
                    <div class=\"copyright-links\"><a href=\"{{ path('ns_web_terms_of_use') }}\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@nextscenes.com <span class=\"middot\">·</span> <i class=\"icon-headphones\"></i> +223 73 03 39 39 <span class=\"middot\">·</span>
                </div>

            </div>

        </div>

    </footer>

</div>

<!-- Go To Top
\t=============================================
<div id=\"gotoTop\" class=\"icon-angle-up\"></div> -->

<!-- External JavaScripts
============================================= -->
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

{% javascripts filter='jsqueeze' output='js/compiled/main.js'
'assets/front/js/jquery.js'
'assets/front/js/plugins.js'
'assets/front/js/jquery.nivo.js'
'assets/front/js/jquery.gmap.js'



%}
<script src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
<!-- Select-Boxes Plugin -->
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/front/js/components/select-boxes.js')) }}\"></script>

<!-- Select-Splitter Plugin -->
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/front/js/components/selectsplitter.js')) }}\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/front/js/components/bs-switches.js')) }}\"></script>
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/front/js/jquery.nivo.js')) }}\"></script>
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/front/js/functions.js')) }}\"></script>
{% block scripts %} {% endblock %}
</body>
</html>", "NSWebBundle::layout.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/layout.html.twig");
    }
}
