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
class __TwigTemplate_d7f81bc9af7b32bfd6bc475fb3e172d9fc4b1ffa6f08d4107f8e8ac0a88d5d16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/new.html.twig", 1);
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    <header id=\"header\" id=\"home\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-between d-flex\">
                <div id=\"logo\">
                    <a href=";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "><img src=\"img/logo.png\" alt=\"\" title=\"\" style=\"width:158px;height:30px;\"/></a>
                </div>
                <nav id=\"nav-menu-container\">
                    <ul class=\"nav-menu\">
                        <li class=\"menu-active\"><a href=";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Home</a></li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Offres</a>
                            <ul>
                                <li><a href=";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_offre");
        echo ">Ajouter une offre</a></li>
                                <li><a href=";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mes_offre");
        echo ">Consulter vos offres</a></li>
                                <li><a href=";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("read_offre");
        echo ">Consulter toutes les offres</a></li>
                            </ul>
                        </li>
                        <li class=\"menu-has-children\"><a href=\"\">Les Formations</a>
                            <ul>
                                <li><a href=\"elements.html\">Ajouter une formation</a></li>
                                <li><a href=\"search.html\">Consulter vos formations</a></li>
                                <li><a href=\"single.html\">Consulter toutes les formations</a></li>
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
                                <li><a href=\"\">Mes Formations</a></li>
                                <li><a href=\"\">Mes Entretiens</a></li>
                                <li><a href=\"\">Mes Crowdfundings</a></li>
                                <li><a href=\"";
        // line 55
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

    // line 65
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 66
        echo "      <section class=\"banner-area relative\" id=\"home\">
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Nouvelle Formation
                      </h1>
                      <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des formations</a></p>
                  </div>
              </div>
          </div>
      </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "    <br></br>
<div class=\"container\">
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row align-items-center\">
        <div class=\"col-4\">
            <div class=\"contact-form\">
                <div class=\"input-fields\" >
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Nom...", "class" => "input"]]);
        echo " </br> </br>
                    <strong>Domaine : *</strong>              ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "domaine", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Domaine...", "class" => "input"]]);
        echo " </br> </br>
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Description...", "class" => "input"]]);
        echo " </br> </br>
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Duree...", "class" => "input"]]);
        echo " </br> </br>
                    <strong>dateDebut : * </strong> ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Datedebut...", "class" => "input"]]);
        echo " </br></br>
                    <strong>dateFin : * </strong> ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "Domaine...", "class" => "input"]]);
        echo " </br> </br>

                </div>
            </div>
        </div>
        <div class=\"col-4\">
        </div>

        <div class=\"col-4\">
            <div class=\"contact-form\">
                <div class=\"input-fields\" >
                    <strong>prix : * </strong> ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "00.0DT...", "class" => "input"]]);
        echo " </br> </br>
                    <strong>adresse : * </strong> ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["type" => "text", "class" => "input"]]);
        echo " </br> </br>
                    <strong>email : * </strong> ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "example@gmail.com", "class" => "input"]]);
        echo " </br> </br>
                    <strong>contact : * </strong> ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "", "class" => "input"]]);
        echo " </br> </br>         *
                    ";
        // line 109
        echo "                    <strong>nombres : * </strong> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", []), 'widget', ["attr" => ["type" => "text", "placeholder" => "", "class" => "input"]]);
        echo " </br> </br>

                    ";
        // line 112
        echo "

                    Upload image ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", []), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>

</div>
<center>  <input type=\"submit\" value=\"Ajouter Formation\" class=\"btn\"/></center>

";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 139
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
        return array (  393 => 139,  389 => 138,  385 => 137,  381 => 136,  377 => 135,  373 => 134,  369 => 133,  365 => 132,  361 => 131,  357 => 130,  353 => 129,  349 => 128,  344 => 127,  335 => 126,  322 => 123,  310 => 114,  306 => 112,  300 => 109,  296 => 107,  292 => 106,  288 => 105,  284 => 104,  270 => 93,  266 => 92,  262 => 91,  258 => 90,  254 => 89,  250 => 88,  242 => 83,  238 => 81,  229 => 80,  206 => 66,  197 => 65,  178 => 55,  150 => 30,  146 => 29,  142 => 28,  136 => 25,  129 => 21,  123 => 17,  114 => 16,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  73 => 6,  69 => 5,  64 => 4,  55 => 3,  33 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/styleajout.css') }}\">

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
                                <li><a href=\"elements.html\">Ajouter une formation</a></li>
                                <li><a href=\"search.html\">Consulter vos formations</a></li>
                                <li><a href=\"single.html\">Consulter toutes les formations</a></li>
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
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Nouvelle Formation
                      </h1>
                      <p class=\"text-white link-nav\"><a href=\"index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des formations</a></p>
                  </div>
              </div>
          </div>
      </section>
  {% endblock %}
{% block content %}
    <br></br>
<div class=\"container\">
    {{ form_start(form) }}
    <div class=\"row align-items-center\">
        <div class=\"col-4\">
            <div class=\"contact-form\">
                <div class=\"input-fields\" >
                    {{ form_widget(form.nom,{'attr':{'type':'text','placeholder':'Nom...','class':'input'}}) }} </br> </br>
                    <strong>Domaine : *</strong>              {{ form_widget(form.domaine,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}}) }} </br> </br>
                    {{ form_widget(form.description,{'attr':{'type':'text','placeholder':'Description...','class':'input'}}) }} </br> </br>
                    {{ form_widget(form.duree,{'attr':{'type':'text','placeholder':'Duree...','class':'input'}}) }} </br> </br>
                    <strong>dateDebut : * </strong> {{ form_widget(form.dateDebut,{'attr':{'type':'text','placeholder':'Datedebut...','class':'input'}})}} </br></br>
                    <strong>dateFin : * </strong> {{ form_widget(form.dateFin,{'attr':{'type':'text','placeholder':'Domaine...','class':'input'}} )}} </br> </br>

                </div>
            </div>
        </div>
        <div class=\"col-4\">
        </div>

        <div class=\"col-4\">
            <div class=\"contact-form\">
                <div class=\"input-fields\" >
                    <strong>prix : * </strong> {{ form_widget(form.prix,{'attr':{'type':'text','placeholder':'00.0DT...','class':'input'}}) }} </br> </br>
                    <strong>adresse : * </strong> {{ form_widget(form.adresse,{'attr':{'type':'text','class':'input'}}) }} </br> </br>
                    <strong>email : * </strong> {{ form_widget(form.email,{'attr':{'type':'text','placeholder':'example@gmail.com','class':'input'}}) }} </br> </br>
                    <strong>contact : * </strong> {{ form_widget(form.contact,{'attr':{'type':'text','placeholder':'','class':'input'}}) }} </br> </br>         *
                    {#  <strong>image : * </strong> {{ form_widget(form.image) }} </br> </br>#}
                    <strong>nombres : * </strong> {{ form_widget(form.nombres,{'attr':{'type':'text','placeholder':'','class':'input'}}) }} </br> </br>

                    {#   <strong>entreprise : * </strong> {{ form_widget(form.entreprise) }} </br> </br> #}


                    Upload image {{ form_widget(form.file) }}
                </div>
            </div>
        </div>
    </div>

</div>
<center>  <input type=\"submit\" value=\"Ajouter Formation\" class=\"btn\"/></center>

{{ form_end(form) }}
    <br><br>
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
", "formations/new.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\formations\\new.html.twig");
    }
}
