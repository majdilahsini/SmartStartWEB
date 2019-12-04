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

/* formations/filtre.html.twig */
class __TwigTemplate_0525ffe1e89cec6865c72bd7295c5fb3c23302af8eb244f18040805a21f5a063 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/filtre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/filtre.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "formations/filtre.html.twig", 1);
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
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 17
        echo "    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"about-content col-lg-12\">
                    <h1 class=\"text-white\">
                        Inscriptions A mes formations
                    </h1>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "    <br>
    <div class=\"post-container\" >
        <div class=\"row\">

<br>
            <section class=\"featured section-padding\"  >
                <div class=\"container\">
                    <div class=\"row\">


                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 42
            echo "                            ";
            if (($this->getAttribute($context["formation"], "etat_id", []) == 1)) {
                // line 43
                echo "                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4 \">
                            <div class=\"card\">
                                <div class=\"featured-box container \">
                                    <figure>
                                        <br>
                                        <div class=\"homes-tag featured container\"><h6>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "Nom", []), "html", null, true);
                echo "</h6></div>
                                        <div class=\"homes-tag rent container\"><i class=\"lni-heart\"></i> ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "nom_domaine", []), "html", null, true);
                echo "</div>


                                        <a><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["formation"], "image", []))), "html", null, true);
                echo "\" height=\"150px\"  class=\"container\" alt=\"\"></a>
                                    </figure>
                                    <div class=\"content-wrapper container\">
                                        <div class=\"feature-content\">
                                            <h4>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "fullname", []), "html", null, true);
                echo "</h4>

                                            <div class=\"meta-tag\">
                                                <div class=\"listing-review\">
                                                    <span class=\"review-avg\"><label><h6>tel :</h6></label>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "tel", []), "html", null, true);
                echo "</span><br>
                                                    <span class=\"review-avg\"><label><h6>specialite/service :</h6></label>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "specialite", []), "html", null, true);
                echo "</span><br>

                                                </div>
                                                <div class=\"user-name\">
                                                    <a ><i class=\"lni-user\"></i><label><h6>ecole/Entreprise :</h6></label>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "ecole", []), "html", null, true);
                echo "</a>
                                                </div>
                                                <div class=\"listing-category\">
                                                    <a ><i class=\"lni-alarm-clock\"></i><label><h6>lettre de motivation :</h6></label><br>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "lettre_motivation", []), "html", null, true);
                echo " </a><br>
                                                    <a ><i class=\"lni-alarm-clock\"></i><label><h6>Date inscrit :</h6></label>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "Datecreation", []), "html", null, true);
                echo " </a><br>
                                                    <i class=\"lni-alarm-clock\"></i><label><h6>Etat :</h6></label>";
                // line 70
                if (($this->getAttribute($context["formation"], "etat_id", []) == 1)) {
                    // line 71
                    echo "                                                    en attente
                                                ";
                } elseif (($this->getAttribute(                // line 72
$context["formation"], "etat_id", []) == 2)) {
                    // line 73
                    echo "                                                    accepte
                                                ";
                } else {
                    // line 75
                    echo "                                                    refuse
                                                    ";
                }
                // line 77
                echo "

                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                         ";
                // line 83
                if (($this->getAttribute($context["formation"], "etat_id", []) == 1)) {
                    // line 84
                    echo "                                        <center>   <div class=\"listing-bottom clearfix\">
                                            <div class=\"btn-group\">

                                                <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat_accepte", ["id" => $this->getAttribute($context["formation"], "id", [])]), "html", null, true);
                    echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">Accepter</button></a>
                                                <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formation_smsfromadmin", ["id" => $this->getAttribute($context["formation"], "id", [])]), "html", null, true);
                    echo "\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">SMS</button></a>

                                                <a href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("etat_refuse", ["id" => $this->getAttribute($context["formation"], "id", [])]), "html", null, true);
                    echo "\" ><button type=\"button\" class=\"btn btn-sm btn-outline-danger\">Refuser</button></a>
    <br>
                                            </div>
                                        </div>
                                            <br>
                                        </center>
                                             ";
                }
                // line 97
                echo "                                    </div>
                                </div>
                            </div>
                            </div>
                            ";
            }
            // line 102
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                    </div>
                </div>

            </section>



        </div>

    </div>
    <br><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
     <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 129,  365 => 128,  361 => 127,  357 => 126,  353 => 125,  349 => 124,  345 => 123,  341 => 122,  337 => 121,  333 => 120,  329 => 119,  325 => 118,  320 => 117,  311 => 116,  289 => 103,  283 => 102,  276 => 97,  266 => 90,  261 => 88,  257 => 87,  252 => 84,  250 => 83,  242 => 77,  238 => 75,  234 => 73,  232 => 72,  229 => 71,  227 => 70,  223 => 69,  219 => 68,  213 => 65,  206 => 61,  202 => 60,  195 => 56,  188 => 52,  182 => 49,  178 => 48,  171 => 43,  168 => 42,  164 => 41,  152 => 31,  143 => 30,  121 => 17,  112 => 16,  100 => 13,  96 => 12,  92 => 11,  88 => 10,  84 => 9,  80 => 8,  76 => 7,  72 => 6,  68 => 5,  63 => 4,  54 => 3,  32 => 1,);
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
{% endblock %}

{% block banner %}
    <section class=\"banner-area relative\" id=\"home\">
        <div class=\"overlay overlay-bg\"></div>
        <div class=\"container\">
            <div class=\"row d-flex align-items-center justify-content-center\">
                <div class=\"about-content col-lg-12\">
                    <h1 class=\"text-white\">
                        Inscriptions A mes formations
                    </h1>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block content %}
    <br>
    <div class=\"post-container\" >
        <div class=\"row\">

<br>
            <section class=\"featured section-padding\"  >
                <div class=\"container\">
                    <div class=\"row\">


                        {% for formation in list %}
                            {% if formation.etat_id  == 1 %}
                            <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4 \">
                            <div class=\"card\">
                                <div class=\"featured-box container \">
                                    <figure>
                                        <br>
                                        <div class=\"homes-tag featured container\"><h6>{{ formation.Nom }}</h6></div>
                                        <div class=\"homes-tag rent container\"><i class=\"lni-heart\"></i> {{ formation.nom_domaine }}</div>


                                        <a><img src=\"{{ asset('images/' ~ formation.image) }}\" height=\"150px\"  class=\"container\" alt=\"\"></a>
                                    </figure>
                                    <div class=\"content-wrapper container\">
                                        <div class=\"feature-content\">
                                            <h4>{{ formation.fullname }}</h4>

                                            <div class=\"meta-tag\">
                                                <div class=\"listing-review\">
                                                    <span class=\"review-avg\"><label><h6>tel :</h6></label>{{ formation.tel }}</span><br>
                                                    <span class=\"review-avg\"><label><h6>specialite/service :</h6></label>{{ formation.specialite }}</span><br>

                                                </div>
                                                <div class=\"user-name\">
                                                    <a ><i class=\"lni-user\"></i><label><h6>ecole/Entreprise :</h6></label>{{ formation.ecole }}</a>
                                                </div>
                                                <div class=\"listing-category\">
                                                    <a ><i class=\"lni-alarm-clock\"></i><label><h6>lettre de motivation :</h6></label><br>{{ formation.lettre_motivation }} </a><br>
                                                    <a ><i class=\"lni-alarm-clock\"></i><label><h6>Date inscrit :</h6></label>{{ formation.Datecreation }} </a><br>
                                                    <i class=\"lni-alarm-clock\"></i><label><h6>Etat :</h6></label>{% if formation.etat_id == 1 %}
                                                    en attente
                                                {% elseif formation.etat_id  == 2 %}
                                                    accepte
                                                {% else %}
                                                    refuse
                                                    {% endif %}


                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                         {% if formation.etat_id ==1 %}
                                        <center>   <div class=\"listing-bottom clearfix\">
                                            <div class=\"btn-group\">

                                                <a href=\"{{ path('etat_accepte', { 'id': formation.id }) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">Accepter</button></a>
                                                <a href=\"{{ path('formation_smsfromadmin', { 'id': formation.id }) }}\"><button type=\"button\" class=\"btn btn-sm btn-outline-info\">SMS</button></a>

                                                <a href=\"{{ path('etat_refuse', { 'id': formation.id }) }}\" ><button type=\"button\" class=\"btn btn-sm btn-outline-danger\">Refuser</button></a>
    <br>
                                            </div>
                                        </div>
                                            <br>
                                        </center>
                                             {% endif %}
                                    </div>
                                </div>
                            </div>
                            </div>
                            {% endif %}
                        {% endfor %}

                    </div>
                </div>

            </section>



        </div>

    </div>
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
 {% endblock %}", "formations/filtre.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\formations\\filtre.html.twig");
    }
}
