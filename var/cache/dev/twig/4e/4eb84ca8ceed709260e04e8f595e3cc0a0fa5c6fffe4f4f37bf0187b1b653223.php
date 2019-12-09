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

/* reclamation/show.html.twig */
class __TwigTemplate_45d7254787ef8baa1978fc0b9af6bc844b258b6fbe06883faaf3c52563baabb3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Default/userhome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "reclamation/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/semantic.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/icon.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" />


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/bootstrap3-typeahead.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/reclamationall.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/subjectrechercheajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/semantic.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/autocompletsubject.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/deleterec.js"), "html", null, true);
        echo "\"></script>

    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 57
        echo "    <h1>Reclamation</h1>

    <section class=\"jobs\">
        <div class=\"container\">
            <div class=\"heading\">

            </div>

            <div class=\"companies\">
                    <div class=\"company-list\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-sm-2\">
                                <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                                    <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/o3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />
                                </div>
                            </div>
                            <div class=\"col-md-8 col-sm-8\">
                                <div class=\"company-content\">
                                    <h3>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "subject", []), "html", null, true);
        echo "</h3>
                                    <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-weixin\" ></i>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "subject", []), "html", null, true);
        echo "</span>

                                        <span class=\"company-name\">
                      <i class=\"fa fa-user-o\" ></i>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "iduser", []), "html", null, true);
        echo "</span>


                                    </p>
                                </div>
                            </div>

                                <div class=\"col-md-2 col-sm-2\">
                                   <button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\" data-toggle=\"modal\" data-target=\"#conn\">Supprimer</button>
                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"conn\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Supprimer la formation </h4>

                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"card-body\"  style=\"font-size: 17px\">
                                                        <label>Vous-êtes sûr de vouloir supprimer cette formation?</label>
                                                    </div>
                                                </div>

                                                <div class=\"modal-footer\">
                                                    <div class=\"col-4\">
                                                        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_show", ["id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", [])]), "html", null, true);
        echo "\" class=\"card-link\">
                                                            <button class=\"btn btn-danger \">Annuler</button></a>
                                                    </div>
                                                    <div class=\"col-4\">
                                                    </div>
                                                    <div class=\"col-4\">
                                                        <a href=";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_delete_id", ["id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", [])]), "html", null, true);
        echo " class=\"card-link\"> <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" ></a>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->













                                    <a href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_indexuser");
        echo "\"><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Back to the list</button></a>
                                    <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_edit", ["id" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", [])]), "html", null, true);
        echo "\"><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Edit</button></a>
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
        return "reclamation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 133,  354 => 132,  332 => 113,  323 => 107,  294 => 81,  288 => 78,  282 => 75,  274 => 70,  259 => 57,  250 => 56,  237 => 53,  233 => 52,  229 => 51,  225 => 50,  221 => 49,  217 => 48,  213 => 47,  209 => 46,  205 => 45,  201 => 44,  197 => 43,  193 => 42,  189 => 41,  178 => 33,  174 => 32,  170 => 31,  166 => 30,  162 => 29,  158 => 28,  154 => 27,  150 => 26,  147 => 25,  138 => 24,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  67 => 5,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@User/Default/userhome.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/semantic.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/icon.min.css')}}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/font-awesome.min.css')}}\"/>
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" />


{% endblock %}
{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@8\"></script>
    <script src=\"{{ asset('/js/bootstrap3-typeahead.min.js')}}\"></script>
    <script src=\"{{ asset('/js/jquery-2.2.3.min.js')}}\"></script>
    <script src=\"{{ asset('/js/reclamationall.js')}}\"></script>
    <script src=\"{{ asset('/js/subjectrechercheajax.js')}}\"></script>
    <script src=\"{{ asset('/js/jquery-3.1.1.min.js')}}\"></script>
    <script src=\"{{ asset('/js/semantic.min.js')}}\"></script>
    <script src=\"{{ asset('/js/autocompletsubject.js')}}\"></script>
    <script src=\"{{ asset('/js/deleterec.js')}}\"></script>

    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js\"></script>
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
{% block content %}
    <h1>Reclamation</h1>

    <section class=\"jobs\">
        <div class=\"container\">
            <div class=\"heading\">

            </div>

            <div class=\"companies\">
                    <div class=\"company-list\">
                        <div class=\"row\">
                            <div class=\"col-md-2 col-sm-2\">
                                <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                                    <img src=\"{{asset('img/o3.png')}}\" class=\"img-responsive\" alt=\"\" />
                                </div>
                            </div>
                            <div class=\"col-md-8 col-sm-8\">
                                <div class=\"company-content\">
                                    <h3>{{ reclamation.subject }}</h3>
                                    <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-weixin\" ></i>{{ reclamation.subject}}</span>

                                        <span class=\"company-name\">
                      <i class=\"fa fa-user-o\" ></i>{{reclamation.iduser}}</span>


                                    </p>
                                </div>
                            </div>

                                <div class=\"col-md-2 col-sm-2\">
                                   <button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\" data-toggle=\"modal\" data-target=\"#conn\">Supprimer</button>
                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"conn\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">

                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\">Supprimer la formation </h4>

                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"card-body\"  style=\"font-size: 17px\">
                                                        <label>Vous-êtes sûr de vouloir supprimer cette formation?</label>
                                                    </div>
                                                </div>

                                                <div class=\"modal-footer\">
                                                    <div class=\"col-4\">
                                                        <a href=\"{{ path('reclamation_show', { 'id': reclamation.id }) }}\" class=\"card-link\">
                                                            <button class=\"btn btn-danger \">Annuler</button></a>
                                                    </div>
                                                    <div class=\"col-4\">
                                                    </div>
                                                    <div class=\"col-4\">
                                                        <a href={{ path('reclamation_delete_id', {'id':reclamation.id}) }} class=\"card-link\"> <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" ></a>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->













                                    <a href=\"{{ path('reclamation_indexuser') }}\"><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Back to the list</button></a>
                                    <a href=\"{{ path('reclamation_edit', { 'id': reclamation.id }) }}\"><button type=\"submit\" value=\"Delete\" class=\"btn supprimer-offre\" name=\"View Job\">Edit</button></a>
                                </div>
                    </div>
            </div>
        </div>
    </section>

{% endblock %}
", "reclamation/show.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\reclamation\\show.html.twig");
    }
}
