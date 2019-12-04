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

/* @User/Default/userhome.html.twig */
class __TwigTemplate_f66bdc035ac47d9eec96ef273292e1de6c233d99177419ee492ea1632ec6a7b2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/userhome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/userhome.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@User/Default/userhome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 20
        echo "           <header id=\"header\" id=\"home\">
               <div class=\"container\">
                   <div class=\"row align-items-center justify-content-between d-flex\">
                       <div id=\"logo\">
                           <a href=";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                       </div>
                       <nav id=\"nav-menu-container\">
                           <ul class=\"nav-menu\">
                               <li class=\"menu-active\"><a href=";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_offre_user");
        echo ">Les Offres</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Les Formations</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Crowdfundings</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Forum</a></li>
                               <li class=\"menu-has-children\"><a href=\"\"><p>connected as : ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</p></a>
                                   <ul>
                                       <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mon_profil");
        echo "\">Mon Profil</a></li>
                                       <li><a href=";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mes_condidatures");
        echo ">Mes Candidatures</a></li>
                                       <li><a href=\"\">Mes Formations</a></li>
                                       <li><a href=\"\">Mes Entretiens</a></li>
                                       <li><a href=\"\">Mes Crowdfundings</a></li>
                                       <li><a href=";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_index");
        echo ">ajouter reclamation</a></li>
                                       <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </nav><!-- #nav-menu-container -->
                   </div>
               </div>
           </header><!-- #header -->
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 52
        echo "    <section class=\"banner-area relative\" id=\"home\">
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

    // line 129
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 130
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
            <table class=\"t\" >
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

    // line 270
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 271
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/userhome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 282,  505 => 281,  501 => 280,  497 => 279,  493 => 278,  489 => 277,  485 => 276,  481 => 275,  477 => 274,  473 => 273,  469 => 272,  464 => 271,  455 => 270,  307 => 130,  298 => 129,  213 => 52,  204 => 51,  185 => 41,  181 => 40,  174 => 36,  170 => 35,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  136 => 24,  130 => 20,  121 => 19,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 7,  69 => 6,  64 => 5,  55 => 4,  33 => 1,);
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


        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/linearicons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap2.css.map') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/animate.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main2.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/common.css') }}\">
        {% endblock %}

       {% block nav %}
           <header id=\"header\" id=\"home\">
               <div class=\"container\">
                   <div class=\"row align-items-center justify-content-between d-flex\">
                       <div id=\"logo\">
                           <a href={{ path('index') }}><img src=\"{{asset('img/logo.png')}}\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                       </div>
                       <nav id=\"nav-menu-container\">
                           <ul class=\"nav-menu\">
                               <li class=\"menu-active\"><a href={{ path('index') }}>Home</a></li>
                               <li class=\"menu-active\"><a href={{ path('read_offre_user') }}>Les Offres</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Les Formations</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Crowdfundings</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Forum</a></li>
                               <li class=\"menu-has-children\"><a href=\"\"><p>connected as : {{ app.user.username }}</p></a>
                                   <ul>
                                       <li><a href=\"{{ path('mon_profil') }}\">Mon Profil</a></li>
                                       <li><a href={{ path('mes_condidatures') }}>Mes Candidatures</a></li>
                                       <li><a href=\"\">Mes Formations</a></li>
                                       <li><a href=\"\">Mes Entretiens</a></li>
                                       <li><a href=\"\">Mes Crowdfundings</a></li>
                                       <li><a href={{ path('reclamation_index') }}>ajouter reclamation</a></li>
                                       <li><a href=\"{{ path('fos_user_security_logout') }}\">Logout</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </nav><!-- #nav-menu-container -->
                   </div>
               </div>
           </header><!-- #header -->
       {% endblock %}

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
            <table class=\"t\" >
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




{% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/vendor/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/vendor/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/easing.min.js') }}\"></script>
            <script src=\"{{ asset('js/hoverIntent.js') }}\"></script>
            <script src=\"{{ asset('js/superfish.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.ajaxchimp.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
            <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
            <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
            <script src=\"{{ asset('js/mail-script.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
        {% endblock %}

", "@User/Default/userhome.html.twig", "C:\\wamp64\\www\\pidev\\src\\UserBundle\\Resources\\views\\Default\\userhome.html.twig");
    }
}
