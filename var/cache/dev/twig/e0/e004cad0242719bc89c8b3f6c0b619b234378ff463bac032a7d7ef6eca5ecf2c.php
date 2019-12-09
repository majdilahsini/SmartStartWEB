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

/* formations/new.html.twig */
class __TwigTemplate_de28ea915a7626654caf8394ff45a246dd42682dbf4879f20a474001d3d53441 extends \Twig\Template
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
        return "@User/Default/entreprisehome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/new.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "formations/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleajout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"img/logo.png\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Offres</a>
                            <ul>
                                <li><a href=";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_offre");
        echo ">Ajouter une offre</a></li>
                                <li><a href=";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mes_offre");
        echo ">Consulter vos offres</a></li>
                                <li><a href=";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_offre");
        echo ">Consulter toutes les offres</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Formations</a>
                            <ul>
                                <li><a href=";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_new");
        echo ">Ajouter une formation</a></li>
                                <li><a href=";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo ">Consulter vos formations</a></li>
                                 <li><a href=\"#\">Consulter les inscriptions </a></li>
                           ";
        // line 44
        echo "                                <li><a href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index_all");
        echo ">Consulter toutes les formations</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Crowdfundings</a>
                            <ul>
                                <li><a href=\"elements.html\">Ajouter un projet</a></li>
                                <li><a href=\"search.html\">Consulter vos projets</a></li>
                                <li><a href=\"single.html\">Consulter toutes les projets</a></li>
                            </ul>
                        </li>

                        <li class=\"menu-has-children\"><a href=\"\">Mon Espace</a>
                            <ul>
                                <li><a href=\"\">Mon Profil</a></li>
                                <li><a href=\"\">Mes Offres</a></li>
                                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo "\">Mes Formations</a></li>
                                <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficherInterview");
        echo "\">Mes Entretiens</a></li>
                                <li><a href=\"\">Mes Crowdfundings</a></li>
                                <li><a href=\"";
        // line 62
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

    // line 72
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 73
        echo "
      <section class=\"banner-area relative\" id=\"home\">
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Nouvelle Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "<div style=\"background-color: #bababc\">
    <br>
    <br>
    <div class=\"container\">

        ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row align-items-center\">
            <div  class=\"col-4\" >


                <div class=\"contact-form \">
                    <div class=\"input-fields\" >
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", []), 'row', ["attr" => ["type" => "text", "class" => "input"]]);
        echo "  </br> </br>
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domaine", []), 'row', ["attr" => ["type" => "text", "placeholder" => "Domaine...", "class" => "input"]]);
        echo " </br> </br>
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", []), 'row', ["attr" => ["type" => "text", "class" => "input"]]);
        echo " </br> </br>
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", []), 'row', ["attr" => ["type" => "text", "class" => "input"]]);
        echo " </br> </br>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", []), 'row', ["attr" => ["type" => "text", "placeholder" => "Datedebut...", "class" => "input"]]);
        echo " </br></br>
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", []), 'row', ["attr" => ["type" => "text", "placeholder" => "Domaine...", "class" => "input"]]);
        echo " </br> </br>
   ";
        // line 123
        echo "


                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                    </div>

                    <div class=\"col-4\">
                        <div class=\"contact-form\">
                            <div class=\"input-fields\" >
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", []), 'row', ["attr" => ["type" => "text", "placeholder" => "00.0DT...", "class" => "input"]]);
        echo " </br> </br>
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", []), 'row', ["attr" => ["type" => "text", "class" => "input"]]);
        echo " </br> </br>
                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'row', ["attr" => ["type" => "text", "placeholder" => "example@gmail.com", "class" => "input"]]);
        echo " </br> </br>
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", []), 'row', ["attr" => ["type" => "text", "placeholder" => "", "class" => "input"]]);
        echo " </br> </br>
                                ";
        // line 140
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", []), 'row', ["attr" => ["type" => "text", "placeholder" => "", "class" => "input"]]);
        echo " </br> </br>

                                ";
        // line 143
        echo "

                                ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", []), 'row');
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"), "html", null, true);
        echo "\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\" />
                                ";
        // line 239
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>  <input type=\"submit\" value=\"Ajouter Formation\" class=\"btn btn-outline\"  onclick=\"this.disabled=true;this.value='Sending, please wait...';this.form.submit();\"> </center>
            ";
        // line 246
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <br>
        </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 254
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 255
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 267,  431 => 266,  427 => 265,  423 => 264,  419 => 263,  415 => 262,  411 => 261,  407 => 260,  403 => 259,  399 => 258,  395 => 257,  391 => 256,  386 => 255,  377 => 254,  358 => 246,  350 => 239,  344 => 145,  340 => 143,  334 => 140,  330 => 138,  326 => 137,  322 => 136,  318 => 135,  304 => 123,  300 => 105,  296 => 104,  292 => 103,  288 => 102,  284 => 101,  280 => 100,  270 => 93,  263 => 88,  254 => 87,  231 => 73,  222 => 72,  203 => 62,  198 => 60,  194 => 59,  175 => 44,  170 => 41,  166 => 40,  158 => 35,  154 => 34,  150 => 33,  144 => 30,  137 => 26,  131 => 22,  122 => 21,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  73 => 6,  69 => 5,  64 => 4,  55 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@User/Default/entreprisehome.html.twig' %}

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
    <link rel=\"stylesheet\" href=\"{{ asset('css/styleajout.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">





{% endblock %}
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
                        <li class=\"menu-has-children\"><a href=\"\">Les Offres</a>
                            <ul>
                                <li><a href={{ path('ajouter_offre') }}>Ajouter une offre</a></li>
                                <li><a href={{ path('mes_offre') }}>Consulter vos offres</a></li>
                                <li><a href={{ path('read_offre') }}>Consulter toutes les offres</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Formations</a>
                            <ul>
                                <li><a href={{ path('formations_new') }}>Ajouter une formation</a></li>
                                <li><a href={{ path('formations_index') }}>Consulter vos formations</a></li>
                                 <li><a href=\"#\">Consulter les inscriptions </a></li>
                           {#     <li><a href={{ path('inscrip_affich_all') }}>Consulter les inscriptions</a></li>#}
                                <li><a href={{ path('formations_index_all') }}>Consulter toutes les formations</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Crowdfundings</a>
                            <ul>
                                <li><a href=\"elements.html\">Ajouter un projet</a></li>
                                <li><a href=\"search.html\">Consulter vos projets</a></li>
                                <li><a href=\"single.html\">Consulter toutes les projets</a></li>
                            </ul>
                        </li>

                        <li class=\"menu-has-children\"><a href=\"\">Mon Espace</a>
                            <ul>
                                <li><a href=\"\">Mon Profil</a></li>
                                <li><a href=\"\">Mes Offres</a></li>
                                <li><a href=\"{{ path('formations_index') }}\">Mes Formations</a></li>
                                <li><a href=\"{{ path ('afficherInterview')}}\">Mes Entretiens</a></li>
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
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Nouvelle Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  {% endblock %}
{% block content %}
<div style=\"background-color: #bababc\">
    <br>
    <br>
    <div class=\"container\">

        {{ form_start(form) }}
        <div class=\"row align-items-center\">
            <div  class=\"col-4\" >


                <div class=\"contact-form \">
                    <div class=\"input-fields\" >
                        {{ form_row(form.nom,{'attr':{'type':'text','class':'input'}}) }}  </br> </br>
                        {{ form_row(form.domaine,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}}) }} </br> </br>
                        {{ form_row(form.description,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                        {{ form_row(form.duree,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                        {{ form_row(form.dateDebut,{'attr':{'type':'text','placeholder':'Datedebut...','class':'input'}})}} </br></br>
                        {{ form_row(form.dateFin,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}} )}} </br> </br>
   {# <br><br>
    <div class=\"container\" >
        <div class=\"card\" >
            <div class=\"card-body\">

                {{ form_start(form, {'attr':{'novalidate': 'novalidate'} })}}

                <div class=\"row align-items-center\">
                    <div class=\"col-4\">
                        <div class=\"contact-form\">
                            <div class=\"input-fields\" >
                                {{ form_row(form.nom) }} </br> </br>
                                {{ form_row(form.domaine,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}}) }} </br> </br>
                                {{ form_row(form.description,{'attr':{'type':'text','placeholder':'Description...','class':'input'}}) }} </br> </br>
                                {{ form_row(form.duree,{'attr':{'type':'text','placeholder':'Duree...','class':'input'}}) }} </br> </br>
                                {{ form_row(form.dateDebut,{'attr':{'type':'text','placeholder':'Datedebut...','class':'input'}})}} </br></br>
                                {{ form_row(form.dateFin,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}} )}} </br> </br>#}



                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                    </div>

                    <div class=\"col-4\">
                        <div class=\"contact-form\">
                            <div class=\"input-fields\" >
                                {{ form_row(form.prix,{'attr':{'type':'text','placeholder':'00.0DT...','class':'input'}}) }} </br> </br>
                                {{ form_row(form.adresse,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                                {{ form_row(form.email,{'attr':{'type':'text','placeholder':'example@gmail.com','class':'input'}}) }} </br> </br>
                                {{ form_row(form.contact,{'attr':{'type':'text','placeholder':'','class':'input'}}) }} </br> </br>
                                {#  <strong>image : * </strong> {{ form_widget(form.image) }} </br> </br>#}
                                {{ form_row(form.nombres,{'attr':{'type':'text','placeholder':'','class':'input'}}) }} </br> </br>

                                {#   <strong>entreprise : * </strong> {{ form_widget(form.entreprise) }} </br> </br> #}


                                {{ form_row(form.file) }}<link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/leaflet@1.3.1/dist/leaflet.css')}}\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\" />
                                {#   <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css\" />
                                   <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css\" />
                                   <script src=\"{{ asset ('https://unpkg.com/leaflet@1.3.1/dist/leaflet.js')}}\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"crossorigin=\"\"></script>
                                   <script type='text/javascript' src=\"{{ asset('https://code.jquery.com/jquery-3.3.1.min.js')}}\"></script>
                                   <script type='text/javascript' src=\"{{ asset('https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js')}}\"></script>
                                   <style type=\"text/css\">
                                       #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
                                           height:200px;
                                           width: 200px;
                                       }
                                   </style>






                                   <script type=\"text/javascript\">
                                       var theme = 'https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png';
                                       var lat = 8.619543;
                                       var lon = 0.82;
                                       var alt =481;
                                       var macarte = null;
                                       //var trace = new Array();
                                       var i = 0;
                                       //var marker1;
                                       var markerClusters; // Servira à stocker les groupes de marqueurs
                                       var popup = L.popup();
                                       var mark =L.marker();
                                       function initMap(){

                                           // Nous définissons le dossier qui contiendra les marqueurs
                                           //var iconBase = 'img';
                                           // Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
                                           macarte = L.map('map').setView([lat, lon], 5);
                                           // markerClusters = L.markerClusterGroup; // Nous initialisons les groupes de marqueurs
                                           // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                                           L.tileLayer(theme, {
                                               // Il est toujours bien de laisser le lien vers la source des données
                                               //attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
                                               minZoom: 1,
                                               maxZoom: 20
                                           }).addTo(macarte);
                                           macarte.on('click', onMapClick);
                                       }


                                       function onMapClick(e) {
                                           popup
                                               .setLatLng(e.latlng)
                                               .setContent(\"You clicked the map at \" + e.latlng.toString())
                                               .openOn(macarte);

                                           mark.setLatLng(e.latlng).addTo(macarte);

                                           var str = e.latlng.toString();
                                           var l =str.indexOf(\"(\")+1;
                                           var r = str.indexOf(\")\")-l;
                                           var res = str.substr(l, r).trim();

                                           document.getElementById(\"lat\").value = res;


                                       }


                                       \$(document).ready(function(){
                                           initMap();

                                       });
                                   </script>

                                   <br>
                                   <br>
                                   <br>

                                   <table>
                                       <tr>

                                           <td>
                                               <div  id=\"map\"  >

                                                   <!-- Ici s'affichera la carte -->
                                               </div >
                                           </td>

                                       </tr>

                                   </table>

                                   Emplacement: *  {{ form_widget(form.adresse, {'id':\"lat\"})}}

                                   #}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>  <input type=\"submit\" value=\"Ajouter Formation\" class=\"btn btn-outline\"  onclick=\"this.disabled=true;this.value='Sending, please wait...';this.form.submit();\"> </center>
            {# onclick=\"this.disabled=true;this.value='Sending, please wait...';this.form.submit();#}
            {{ form_end(form) }}
            <br>
        </div>




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
     <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }} \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 {% endblock %}
", "formations/new.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\formations\\new.html.twig");
    }
}
