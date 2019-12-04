<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Default/index.html.twig */
class __TwigTemplate_bcb4e34ccf9f7341737d46e93da48da0afe2d271724a4d8a0dae495b9dd8756c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 5
        echo "<section class=\"banner-area relative\" id=\"home\">
    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">
        <div class=\"row fullscreen d-flex align-items-center justify-content-center\">
            <div class=\"banner-content col-lg-12\">
                <h1 class=\"text-white\">
                    <!--<span>1500+</span> Jobs posted last week -->
                </h1>
                <form action=\"search.html\" class=\"serach-form-area\">
                    <div class=\"row justify-content-center form-wrap\">
                        <div class=\"col-lg-4 form-cols\">
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"what are you looging for?\">
                        </div>
                        <div class=\"col-lg-3 form-cols\">
                            <div class=\"default-select\" id=\"default-selects\">
                                <select>
                                    <option value=\"1\">Select area</option>
                                    <option value=\"2\">Dhaka</option>
                                    <option value=\"3\">Rajshahi</option>
                                    <option value=\"4\">Barishal</option>
                                    <option value=\"5\">Noakhali</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-3 form-cols\">
                            <div class=\"default-select\" id=\"default-selects2\">
                                <select>
                                    <option value=\"1\">All Category</option>
                                    <option value=\"2\">Medical</option>
                                    <option value=\"3\">Technology</option>
                                    <option value=\"4\">Goverment</option>
                                    <option value=\"5\">Development</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-2 form-cols\">
                            <button type=\"button\" class=\"btn btn-info\">
                                <span class=\"lnr lnr-magnifier\"></span> Search
                            </button>
                        </div>
                    </div>
                </form>
                <!--<p class=\"text-white\"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>-->
            </div>
        </div>
    </div>
</section>
<section class=\"features-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Searching</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Applying</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Security</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Notifications</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 93
        echo "    <section class=\"popular-post-area pt-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"active-popular-post-carusel\">
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img class=\"img-fluid\" src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-post Area -->

    <section class=\"counter a\" style=\"margin-bottom: 100px; margin-top: 30px; background-color: #DA0833\">
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"container\">
                            <div>
                                <div class=\"counter-text\">

                                    <h3>1000</h3>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>207</h3>
                                <p>All Companies</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>700+</h3>
                                <p>Total Members</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>802+</h3>
                                <p>Happy Members</p>
                            </div>
                        </div>
        </div>
        </td>
        </tr>
        </table>
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 93,  156 => 92,  61 => 5,  52 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block banner %}
<section class=\"banner-area relative\" id=\"home\">
    <div class=\"overlay overlay-bg\"></div>
    <div class=\"container\">
        <div class=\"row fullscreen d-flex align-items-center justify-content-center\">
            <div class=\"banner-content col-lg-12\">
                <h1 class=\"text-white\">
                    <!--<span>1500+</span> Jobs posted last week -->
                </h1>
                <form action=\"search.html\" class=\"serach-form-area\">
                    <div class=\"row justify-content-center form-wrap\">
                        <div class=\"col-lg-4 form-cols\">
                            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"what are you looging for?\">
                        </div>
                        <div class=\"col-lg-3 form-cols\">
                            <div class=\"default-select\" id=\"default-selects\">
                                <select>
                                    <option value=\"1\">Select area</option>
                                    <option value=\"2\">Dhaka</option>
                                    <option value=\"3\">Rajshahi</option>
                                    <option value=\"4\">Barishal</option>
                                    <option value=\"5\">Noakhali</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-3 form-cols\">
                            <div class=\"default-select\" id=\"default-selects2\">
                                <select>
                                    <option value=\"1\">All Category</option>
                                    <option value=\"2\">Medical</option>
                                    <option value=\"3\">Technology</option>
                                    <option value=\"4\">Goverment</option>
                                    <option value=\"5\">Development</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-2 form-cols\">
                            <button type=\"button\" class=\"btn btn-info\">
                                <span class=\"lnr lnr-magnifier\"></span> Search
                            </button>
                        </div>
                    </div>
                </form>
                <!--<p class=\"text-white\"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>-->
            </div>
        </div>
    </div>
</section>
<section class=\"features-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Searching</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Applying</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Security</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-feature\">
                    <h4>Notifications</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}

{% block content %}
    <section class=\"popular-post-area pt-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"active-popular-post-carusel\">
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img class=\"img-fluid\" src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p1.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                    <div class=\"single-popular-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/p2.png\" alt=\"\">
                            <a class=\"btns text-uppercase\" href=\"#\">view job post</a>
                        </div>
                        <div class=\"details\">
                            <a href=\"#\"><h4>Creative Designer</h4></a>
                            <h6>Los Angeles</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-post Area -->

    <section class=\"counter a\" style=\"margin-bottom: 100px; margin-top: 30px; background-color: #DA0833\">
        <div align=\"center\">
            <table class=\"t\">
                <tr>
                    <td>
                        <div class=\"container\">
                            <div>
                                <div class=\"counter-text\">

                                    <h3>1000</h3>
                                    <p>Jobs Posted</p>
                                </div>
                            </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>207</h3>
                                <p>All Companies</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>700+</h3>
                                <p>Total Members</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class=\"counter-text\">

                                <h3>802+</h3>
                                <p>Happy Members</p>
                            </div>
                        </div>
        </div>
        </td>
        </tr>
        </table>
        </div>
    </section>


{% endblock %}", "Default/index.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\default\\index.html.twig");
    }
}
