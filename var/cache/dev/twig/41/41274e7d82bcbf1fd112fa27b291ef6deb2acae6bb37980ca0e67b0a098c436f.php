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

/* formations/show.html.twig */
class __TwigTemplate_d0134a1bb6d5b02c9fa67056150a82631f3f4c8b63d466248cb7e6bec3137619 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/show.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "formations/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styleajout.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 18
        echo "      <section class=\"banner-area relative\" id=\"home\" >
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Affiche Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "<div >
    <br>
    <div class=\"card mb-3 container\" style=\"border-style:dotted\" >
        <h3 class=\"card-header\"><label style=\"color: #0c83e2\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom", []), "html", null, true);
        echo "</label></h3>
        <div class=\"card-body\">
            <h6 class=\"card-subtitle text-muted\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "domaine", []), "nomDomaine", []), "html", null, true);
        echo "</h6>
        </div>
        <center> <img style=\"height: 200px; width: 50%; display: block;\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "image", []), "html", null, true);
        echo "\" alt=\"Card image\"></center>

        <div class=\"card-body\">
            <p class=\"card-text\"> <label><h5>Description : </h5></label>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", []), "html", null, true);
        echo "</p>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\"><label><h5>Duree : </h5></label> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duree", []), "html", null, true);
        echo " heures</li>
            <li class=\"list-group-item\"><label><h5>Date debut : </h5></label> ";
        // line 47
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateDebut", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateDebut", []), "Y-m-d"), "html", null, true);
        }
        echo "</li>
            <li class=\"list-group-item\"><label><h5>Date fin : </h5></label> ";
        // line 48
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateFin", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateFin", []), "Y-m-d"), "html", null, true);
        }
        echo "</li>
            <li class=\"list-group-item\"><label><h5>Prix : </h5></label> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "prix", []), "html", null, true);
        echo " DT</li>
            <li class=\"list-group-item\"><label><h5>Adresse : </h5></label> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "adresse", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><label><h5>Email : </h5></label> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "email", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><label><h5>Contact : </h5></label> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "contact", []), "html", null, true);
        echo "</li>
            <li class=\"list-group-item\"><label><h5> Nombres : </h5></label> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nombres", []), "html", null, true);
        echo "</li>

        </ul>
        <div class=\"card-body\">
            <center>
                <div class=\"row align-items-center\">
                    <div class=\"col-4\">
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_index");
        echo "\" class=\"card-link\">
                            <button class=\"btn btn-outline-primary\">accueil</button></a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_edit", ["ref" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "ref", [])]), "html", null, true);
        echo "\"  class=\"card-link\"><button class=\"btn btn-outline-success\">Modifier</button></a>
                    </div>

                    <div class=\"col-4\">


                        <a  class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#conn\" href=\"\"> Supprimer</a>
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formations_show", ["ref" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "ref", [])]), "html", null, true);
        echo "\" class=\"card-link\">
                                                <button class=\"btn btn-danger \">Annuler</button></a>
                                        </div>
                                        <div class=\"col-4\">
                                        </div>
                                        <div class=\"col-4\">
                                            ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                            <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                            ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>
            </center>



        </div>



    </div>
    ";
        // line 182
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo " \" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 197,  356 => 196,  352 => 195,  348 => 194,  344 => 193,  340 => 192,  336 => 191,  332 => 190,  328 => 189,  324 => 188,  320 => 187,  316 => 186,  311 => 185,  302 => 184,  291 => 182,  271 => 96,  266 => 94,  257 => 88,  230 => 64,  223 => 60,  213 => 53,  209 => 52,  205 => 51,  201 => 50,  197 => 49,  191 => 48,  185 => 47,  181 => 46,  175 => 43,  168 => 40,  163 => 38,  158 => 36,  153 => 33,  144 => 32,  122 => 18,  113 => 17,  100 => 12,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  63 => 3,  54 => 2,  32 => 1,);
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
      <section class=\"banner-area relative\" id=\"home\" >
          <div class=\"overlay overlay-bg\"></div>
          <div class=\"container\">
              <div class=\"row d-flex align-items-center justify-content-center\">
                  <div class=\"about-content col-lg-12\">
                      <h1 class=\"text-white\">
                          Affiche Formation
                      </h1>
                  </div>
              </div>
          </div>
      </section>
  {% endblock %}

{% block content %}
<div >
    <br>
    <div class=\"card mb-3 container\" style=\"border-style:dotted\" >
        <h3 class=\"card-header\"><label style=\"color: #0c83e2\">{{ formation.nom }}</label></h3>
        <div class=\"card-body\">
            <h6 class=\"card-subtitle text-muted\" >{{ formation.domaine.nomDomaine }}</h6>
        </div>
        <center> <img style=\"height: 200px; width: 50%; display: block;\" src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"Card image\"></center>

        <div class=\"card-body\">
            <p class=\"card-text\"> <label><h5>Description : </h5></label>{{ formation.description }}</p>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\"><label><h5>Duree : </h5></label> {{ formation.duree }} heures</li>
            <li class=\"list-group-item\"><label><h5>Date debut : </h5></label> {% if formation.dateDebut %}{{ formation.dateDebut|date('Y-m-d') }}{% endif %}</li>
            <li class=\"list-group-item\"><label><h5>Date fin : </h5></label> {% if formation.dateFin %}{{ formation.dateFin|date('Y-m-d') }}{% endif %}</li>
            <li class=\"list-group-item\"><label><h5>Prix : </h5></label> {{ formation.prix }} DT</li>
            <li class=\"list-group-item\"><label><h5>Adresse : </h5></label> {{ formation.adresse }}</li>
            <li class=\"list-group-item\"><label><h5>Email : </h5></label> {{ formation.email }}</li>
            <li class=\"list-group-item\"><label><h5>Contact : </h5></label> {{ formation.contact }}</li>
            <li class=\"list-group-item\"><label><h5> Nombres : </h5></label> {{ formation.nombres }}</li>

        </ul>
        <div class=\"card-body\">
            <center>
                <div class=\"row align-items-center\">
                    <div class=\"col-4\">
                        <a href=\"{{ path('formations_index') }}\" class=\"card-link\">
                            <button class=\"btn btn-outline-primary\">accueil</button></a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('formations_edit', { 'ref': formation.ref }) }}\"  class=\"card-link\"><button class=\"btn btn-outline-success\">Modifier</button></a>
                    </div>

                    <div class=\"col-4\">


                        <a  class=\"btn btn-outline-danger\" data-toggle=\"modal\" data-target=\"#conn\" href=\"\"> Supprimer</a>
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
                                            <a href=\"{{ path('formations_show', { 'ref': formation.ref }) }}\" class=\"card-link\">
                                                <button class=\"btn btn-danger \">Annuler</button></a>
                                        </div>
                                        <div class=\"col-4\">
                                        </div>
                                        <div class=\"col-4\">
                                            {{ form_start(delete_form) }}
                                            <input type=\"submit\" value=\"Confirmer\" class=\"btn btn-success\" >
                                            {{ form_end(delete_form) }}
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                </div>
            </center>



        </div>



    </div>
    {# <h1>Formation</h1>

      <table>
          <tbody>

              <tr>
                  <th>Nom</th>
                  <td>{{ formation.nom }}</td>
              </tr>
              <tr>
                  <th>Description</th>
                  <td>{{ formation.description }}</td>
              </tr>
              <tr>
                  <th>Duree</th>
                  <td>{{ formation.duree }}</td>
              </tr>
              <tr>
                  <th>Datedebut</th>
                  <td>{% if formation.dateDebut %}{{ formation.dateDebut|date('Y-m-d') }}{% endif %}</td>
              </tr>
              <tr>
                  <th>Datefin</th>
                  <td>{% if formation.dateFin %}{{ formation.dateFin|date('Y-m-d') }}{% endif %}</td>
              </tr>
              <tr>
                  <th>Prix</th>
                  <td>{{ formation.prix }}</td>
              </tr>
              <tr>
                  <th>Adresse</th>
                  <td>{{ formation.adresse }}</td>
              </tr>
              <tr>
                  <th>Email</th>
                  <td>{{ formation.email }}</td>
              </tr>
              <tr>
                  <th>Contact</th>
                  <td>{{ formation.contact }}</td>
              </tr>
              <tr>
                  <th>Image</th>
                  <td> <img style=\"height: 200px; width: 50%; display: block;\" src=\"{{ asset('images/') }}{{ formation.image }}\" alt=\"Card image\"></td>
              </tr>
              <tr>
                  <th>Nombres</th>
                  <td>{{ formation.nombres }}</td>
              </tr>
              <tr>
                  <th>Etatformation</th>
                  <td>{{ formation.etatFormation }}</td>
              </tr>
          </tbody>
      </table>

      <ul>
          <li>
              <a href=\"{{ path('formations_index') }}\">Back to the list</a>
          </li>
          <li>
              <a href=\"{{ path('formations_edit', { 'ref': formation.ref }) }}\">Edit</a>
          </li>
          <li>
              {{ form_start(delete_form) }}
                  <input type=\"submit\" value=\"Delete\">
              {{ form_end(delete_form) }}
          </li>
      </ul> #}

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
", "formations/show.html.twig", "C:\\wamp64\\www\\pidev2\\app\\Resources\\views\\formations\\show.html.twig");
    }
}
