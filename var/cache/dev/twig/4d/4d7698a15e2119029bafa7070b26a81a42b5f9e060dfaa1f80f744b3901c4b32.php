<?php

/* NSWebBundle::testimonials.html.twig */
class __TwigTemplate_50185d5471e19aea4ae555af66f0a6fc1887dbb1d7814af09393a04f9d0ed045 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::testimonials.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NSWebBundle::testimonials.html.twig"));

        // line 1
        echo "<div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
    <div class=\"flexslider\">
        <div class=\"slider-wrap\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new Twig_Error_Runtime('Variable "testimonials" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 5
            echo "                <div class=\"slide\">
                    <div class=\"testi-image\">
                        <a href=\"#\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["testimonial"], "imageFile"), "html", null, true);
            echo "\" alt=\"Customer Testimonails\"></a>
                    </div>
                    <div class=\"testi-content\">
                        <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", array()), "html", null, true);
            echo "</p>
                        <div class=\"testi-meta\">
                            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "name", array()), "html", null, true);
            echo "
                            <span>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testimonial"], "company", array()), "html", null, true);
            echo ".</span>
                        </div>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "NSWebBundle::testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  57 => 13,  53 => 12,  48 => 10,  42 => 7,  38 => 5,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
    <div class=\"flexslider\">
        <div class=\"slider-wrap\">
            {% for testimonial in testimonials %}
                <div class=\"slide\">
                    <div class=\"testi-image\">
                        <a href=\"#\"><img src=\"{{ vich_uploader_asset(testimonial, 'imageFile') }}\" alt=\"Customer Testimonails\"></a>
                    </div>
                    <div class=\"testi-content\">
                        <p>{{ testimonial.content }}</p>
                        <div class=\"testi-meta\">
                            {{ testimonial.name }}
                            <span>{{ testimonial.company }}.</span>
                        </div>
                    </div>
                </div>

            {% endfor %}

        </div>
    </div>
</div>
", "NSWebBundle::testimonials.html.twig", "/Applications/MAMP/htdocs/nextscences/src/NS/WebBundle/Resources/views/testimonials.html.twig");
    }
}
