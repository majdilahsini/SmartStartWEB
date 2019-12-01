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
class __TwigTemplate_ddce69044e9dbc0301b55842f7af4de9486d38ec15e2e46b316825591ec9209d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/userhome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Default/userhome.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@User/Default/userhome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo "           <header id=\"header\" id=\"home\">
               <div class=\"container\">
                   <div class=\"row align-items-center justify-content-between d-flex\">
                       <div id=\"logo\">
                           <a href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"img/logo.png\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                       </div>
                       <nav id=\"nav-menu-container\">
                           <ul class=\"nav-menu\">
                               <li class=\"menu-active\"><a href=";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_offre_user");
        echo ">Les Offres</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Les Formations</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Crowdfundings</a></li>
                               <li class=\"menu-active\"><a href=";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Forum</a></li>
                               <li class=\"menu-has-children\"><a href=\"\">Mon Espace</a>
                                   <ul>
                                       <li><a href=\"\">Mon Profil</a></li>
                                       <li><a href=\"\"Mes Candidatures</a></li>
                                       <li><a href=\"\">Mes Formations</a></li>
                                       <li><a href=\"\">Mes Entretiens</a></li>
                                       <li><a href=\"\">Mes Crowdfundings</a></li>
                                       <li><a href=\"";
        // line 24
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

    // line 34
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 35
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

    // line 122
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 123
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

    <section class=\"counter a\" margin-top=\"24px;\">
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

    <!-- Start feature-cat Area -->
    <section class=\"feature-cat-area pt-100\" id=\"category\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-10\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Featured Job Categories</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o1.png\" alt=\"\">
                        </a>
                        <p>Accounting</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o2.png\" alt=\"\">
                        </a>
                        <p>Development</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o3.png\" alt=\"\">
                        </a>
                        <p>Technology</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o4.png\" alt=\"\">
                        </a>
                        <p>Media & News</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o5.png\" alt=\"\">
                        </a>
                        <p>Medical</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o6.png\" alt=\"\">
                        </a>
                        <p>Goverment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature-cat Area -->

    <!-- Start post Area -->
    <section class=\"post-area section-gap\">
        <div class=\"container\">
            <div class=\"row justify-content-center d-flex\">
                <div class=\"col-lg-8 post-list\">
                    <ul class=\"cat-list\">
                        <li><a href=\"#\">Recent</a></li>
                        <li><a href=\"#\">Full Time</a></li>
                        <li><a href=\"#\">Intern</a></li>
                        <li><a href=\"#\">part Time</a></li>
                    </ul>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>

                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>New York</p><span>37</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Park Montana</p><span>57</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Atlanta</p><span>33</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Arizona</p><span>36</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Florida</p><span>47</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Rocky Beach</p><span>27</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Chicago</p><span>17</span></a></li>
                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Top rated job posts</h4>
                        <div class=\"active-relatedjob-carusel\">
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Jobs by Category</h4>
                        <ul class=\"cat-list\">
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Technology</p><span>37</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Media & News</p><span>57</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Goverment</p><span>33</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Medical</p><span>36</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Restaurants</p><span>47</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Developer</p><span>27</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Accounting</p><span>17</span></a></li>
                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Carrer Advice Blog</h4>
                        <div class=\"blog-list\">
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog1.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog2.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog1.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class=\"callto-action-area section-gap\" id=\"join\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10 text-white\">Join us today without any hesitation</h1>
                        <p class=\"text-white\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a class=\"primary-btn\" href=\"#\">I am a Candidate</a>
                        <a class=\"primary-btn\" href=\"#\">Request Free Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End calto-action Area -->

    <!-- Start download Area -->
    <section class=\"download-area section-gap\" id=\"app\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 download-left\">
                    <img class=\"img-fluid\" src=\"img/d1.png\" alt=\"\">
                </div>
                <div class=\"col-lg-6 download-right\">
                    <h1>Download the <br>
                        Job Listing App Today!</h1>
                    <p class=\"subs\">
                        It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
                    </p>
                    <div class=\"d-flex flex-row\">
                        <div class=\"buttons\">
                            <i class=\"fa fa-apple\" aria-hidden=\"true\"></i>
                            <div class=\"desc\">
                                <a href=\"#\">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class=\"buttons\">
                            <i class=\"fa fa-android\" aria-hidden=\"true\"></i>
                            <div class=\"desc\">
                                <a href=\"#\">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return array (  234 => 123,  225 => 122,  130 => 35,  121 => 34,  102 => 24,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  68 => 8,  62 => 4,  53 => 3,  31 => 1,);
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

       {% block nav %}
           <header id=\"header\" id=\"home\">
               <div class=\"container\">
                   <div class=\"row align-items-center justify-content-between d-flex\">
                       <div id=\"logo\">
                           <a href={{ path('index') }}><img src=\"img/logo.png\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                       </div>
                       <nav id=\"nav-menu-container\">
                           <ul class=\"nav-menu\">
                               <li class=\"menu-active\"><a href={{ path('index') }}>Home</a></li>
                               <li class=\"menu-active\"><a href={{ path('read_offre_user') }}>Les Offres</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Les Formations</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Crowdfundings</a></li>
                               <li class=\"menu-active\"><a href={{ path('index') }}>Forum</a></li>
                               <li class=\"menu-has-children\"><a href=\"\">Mon Espace</a>
                                   <ul>
                                       <li><a href=\"\">Mon Profil</a></li>
                                       <li><a href=\"\"Mes Candidatures</a></li>
                                       <li><a href=\"\">Mes Formations</a></li>
                                       <li><a href=\"\">Mes Entretiens</a></li>
                                       <li><a href=\"\">Mes Crowdfundings</a></li>
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

    <section class=\"counter a\" margin-top=\"24px;\">
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

    <!-- Start feature-cat Area -->
    <section class=\"feature-cat-area pt-100\" id=\"category\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content pb-60 col-lg-10\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10\">Featured Job Categories</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o1.png\" alt=\"\">
                        </a>
                        <p>Accounting</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o2.png\" alt=\"\">
                        </a>
                        <p>Development</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o3.png\" alt=\"\">
                        </a>
                        <p>Technology</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o4.png\" alt=\"\">
                        </a>
                        <p>Media & News</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o5.png\" alt=\"\">
                        </a>
                        <p>Medical</p>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-4 col-sm-6\">
                    <div class=\"single-fcat\">
                        <a href=\"category.html\">
                            <img src=\"img/o6.png\" alt=\"\">
                        </a>
                        <p>Goverment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature-cat Area -->

    <!-- Start post Area -->
    <section class=\"post-area section-gap\">
        <div class=\"container\">
            <div class=\"row justify-content-center d-flex\">
                <div class=\"col-lg-8 post-list\">
                    <ul class=\"cat-list\">
                        <li><a href=\"#\">Recent</a></li>
                        <li><a href=\"#\">Full Time</a></li>
                        <li><a href=\"#\">Intern</a></li>
                        <li><a href=\"#\">part Time</a></li>
                    </ul>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>
                    <div class=\"single-post d-flex flex-row\">
                        <div class=\"thumb\">
                            <img src=\"img/post.png\" alt=\"\">
                            <ul class=\"tags\">
                                <li>
                                    <a href=\"#\">Art</a>
                                </li>
                                <li>
                                    <a href=\"#\">Media</a>
                                </li>
                                <li>
                                    <a href=\"#\">Design</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"details\">
                            <div class=\"title d-flex flex-row justify-content-between\">
                                <div class=\"titles\">
                                    <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                    <h6>Premium Labels Limited</h6>
                                </div>
                                <ul class=\"btns\">
                                    <li><a href=\"#\"><span class=\"lnr lnr-heart\"></span></a></li>
                                    <li><a href=\"#\">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                        </div>
                    </div>

                    <a class=\"text-uppercase loadmore-btn mx-auto d-block\" href=\"category.html\">Load More job Posts</a>

                </div>
                <div class=\"col-lg-4 sidebar\">
                    <div class=\"single-slidebar\">
                        <h4>Jobs by Location</h4>
                        <ul class=\"cat-list\">
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>New York</p><span>37</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Park Montana</p><span>57</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Atlanta</p><span>33</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Arizona</p><span>36</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Florida</p><span>47</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Rocky Beach</p><span>27</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Chicago</p><span>17</span></a></li>
                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Top rated job posts</h4>
                        <div class=\"active-relatedjob-carusel\">
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                            <div class=\"single-rated\">
                                <img class=\"img-fluid\" src=\"img/r1.jpg\" alt=\"\">
                                <a href=\"single.html\"><h4>Creative Art Designer</h4></a>
                                <h6>Premium Labels Limited</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class=\"address\"><span class=\"lnr lnr-map\"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class=\"address\"><span class=\"lnr lnr-database\"></span> 15k - 25k</p>
                                <a href=\"#\" class=\"btns text-uppercase\">Apply job</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Jobs by Category</h4>
                        <ul class=\"cat-list\">
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Technology</p><span>37</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Media & News</p><span>57</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Goverment</p><span>33</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Medical</p><span>36</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Restaurants</p><span>47</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Developer</p><span>27</span></a></li>
                            <li><a class=\"justify-content-between d-flex\" href=\"category.html\"><p>Accounting</p><span>17</span></a></li>
                        </ul>
                    </div>

                    <div class=\"single-slidebar\">
                        <h4>Carrer Advice Blog</h4>
                        <div class=\"blog-list\">
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog1.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog2.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                            <div class=\"single-blog \" style=\"background:#000 url(img/blog1.jpg);\">
                                <a href=\"single.html\"><h4>Home Audio Recording <br>
                                        For Everyone</h4></a>
                                <div class=\"meta justify-content-between d-flex\">
                                    <p>
                                        02 Hours ago
                                    </p>
                                    <p>
                                        <span class=\"lnr lnr-heart\"></span>
                                        06
                                        <span class=\"lnr lnr-bubble\"></span>
                                        02
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class=\"callto-action-area section-gap\" id=\"join\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"menu-content col-lg-9\">
                    <div class=\"title text-center\">
                        <h1 class=\"mb-10 text-white\">Join us today without any hesitation</h1>
                        <p class=\"text-white\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a class=\"primary-btn\" href=\"#\">I am a Candidate</a>
                        <a class=\"primary-btn\" href=\"#\">Request Free Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End calto-action Area -->

    <!-- Start download Area -->
    <section class=\"download-area section-gap\" id=\"app\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 download-left\">
                    <img class=\"img-fluid\" src=\"img/d1.png\" alt=\"\">
                </div>
                <div class=\"col-lg-6 download-right\">
                    <h1>Download the <br>
                        Job Listing App Today!</h1>
                    <p class=\"subs\">
                        It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
                    </p>
                    <div class=\"d-flex flex-row\">
                        <div class=\"buttons\">
                            <i class=\"fa fa-apple\" aria-hidden=\"true\"></i>
                            <div class=\"desc\">
                                <a href=\"#\">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class=\"buttons\">
                            <i class=\"fa fa-android\" aria-hidden=\"true\"></i>
                            <div class=\"desc\">
                                <a href=\"#\">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "@User/Default/userhome.html.twig", "C:\\wamp64\\www\\pidev\\src\\UserBundle\\Resources\\views\\Default\\userhome.html.twig");
    }
}