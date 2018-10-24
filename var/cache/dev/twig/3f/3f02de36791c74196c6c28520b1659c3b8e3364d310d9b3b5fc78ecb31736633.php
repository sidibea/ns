<?php

/* NSUserBundle:Security:login.html.twig */
class __TwigTemplate_b8a5d764b035aa664cd73dc7bcf8d21f4205d9c471e5094dc983ec89f9c090a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("NSWebBundle::layout.html.twig", "NSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NSWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Login ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<section class=\"content-wrap\">
    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\">
            ";
        // line 9
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "                <div class=\"style-msg errormsg\">
                    <div class=\"sb-msg\"><i class=\"icon-remove\"></i><strong>Oh snap!</strong> ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                </div>
                <div></div>
            ";
        }
        // line 16
        echo "

            <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px; background-color: rgba(255,255,255,0.93);\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    <form id=\"login-form\" name=\"login-form\" class=\"nobottommargin\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\" method=\"post\">
                        <h3>Login to your Account</h3>

                        <div class=\"col_full\">
                            <label for=\"login-form-username\">Username:</label>
                            <input type=\"text\" id=\"login-form-username\" name=\"_username\" value=\"\" class=\"form-control not-dark\" />
                        </div>

                        <div class=\"col_full\">
                            <label for=\"login-form-password\">Password:</label>
                            <input type=\"password\" id=\"login-form-password\" name=\"_password\" value=\"\" class=\"form-control not-dark\" />
                        </div>

                        <div class=\"col_full nobottommargin\">
                            <button type=\"submit\" class=\"button button-3d button-black nomargin\" name=\"login-form-submit\" value=\"login\">Login</button>
                            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" class=\"fright\">Forgot Password?</a>
                        </div>
                    </form>
                    <div class=\"line line-sm\">
                        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"\">Don't have account yet ? Register now</a>
                    </div>

                    <div class=\"line line-sm\"></div>


                </div>
            </div>


        </div><!-- .postcontent end -->

        ";
        // line 51
        $this->loadTemplate("NSWebBundle::_sidebar.html.twig", "NSUserBundle:Security:login.html.twig", 51)->display($context);
        // line 52
        echo "

    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  136 => 51,  121 => 39,  114 => 35,  96 => 20,  90 => 16,  82 => 11,  79 => 10,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NSWebBundle::layout.html.twig\" %}

{% block title %} Login {% endblock %}

{% block content %}
<section class=\"content-wrap\">
    <div class=\"container clearfix\">
        <div class=\"postcontent nobottommargin clearfix\">
            {% if error %}
                <div class=\"style-msg errormsg\">
                    <div class=\"sb-msg\"><i class=\"icon-remove\"></i><strong>Oh snap!</strong> {{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                </div>
                <div></div>
            {% endif %}


            <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px; background-color: rgba(255,255,255,0.93);\">
                <div class=\"panel-body\" style=\"padding: 40px;\">
                    <form id=\"login-form\" name=\"login-form\" class=\"nobottommargin\" action=\"{{ path('login_check') }}\" method=\"post\">
                        <h3>Login to your Account</h3>

                        <div class=\"col_full\">
                            <label for=\"login-form-username\">Username:</label>
                            <input type=\"text\" id=\"login-form-username\" name=\"_username\" value=\"\" class=\"form-control not-dark\" />
                        </div>

                        <div class=\"col_full\">
                            <label for=\"login-form-password\">Password:</label>
                            <input type=\"password\" id=\"login-form-password\" name=\"_password\" value=\"\" class=\"form-control not-dark\" />
                        </div>

                        <div class=\"col_full nobottommargin\">
                            <button type=\"submit\" class=\"button button-3d button-black nomargin\" name=\"login-form-submit\" value=\"login\">Login</button>
                            <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"fright\">Forgot Password?</a>
                        </div>
                    </form>
                    <div class=\"line line-sm\">
                        <a href=\"{{ path('fos_user_registration_register') }}\" class=\"\">Don't have account yet ? Register now</a>
                    </div>

                    <div class=\"line line-sm\"></div>


                </div>
            </div>


        </div><!-- .postcontent end -->

        {% include \"NSWebBundle::_sidebar.html.twig\" %}


    </div>
</section>
{% endblock %}", "NSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/UserBundle/Resources/views/Security/login.html.twig");
    }
}
