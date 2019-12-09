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

/* @Offre/Client/consulteroffre.html.twig */
class __TwigTemplate_38437c710d1c8eea9c00db0db66e47897e390baef718bbd09c6a7f29a2a37086 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((        // line 2
(isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) ? ("@User/Default/userhome.html.twig") : ("@User/Default/entreprisehome.html.twig")), "@Offre/Client/consulteroffre.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Client/consulteroffre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Client/consulteroffre.html.twig"));

        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/linearicons.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap2.css.map"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main2.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
                    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\">
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 22
        echo "            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Liste des Offres
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "            <section class=\"profile-detail\">
                <div class=\"container\">

                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"basic-information\">

                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"profile-content\">
                                        <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titre", []), "html", null, true);
        echo "<span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "entreprise", []), "fullname", []), "html", null, true);
        echo "</span></h2>
                                        <p>Publié le :";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "datePublication", []), "m/d/Y"), "html", null, true);
        echo "</p>
                                        <ul class=\"information\">
                                            <li><span>Type de Poste:</span>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "typePost", []), "name", []), "html", null, true);
        echo "</li>
                                            <li><span>Domaine:</span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "domaine", []), "nom", []), "html", null, true);
        echo "</li>
                                            <li><span>Niveau d'étude:</span>";
        // line 52
        echo twig_escape_filter($this->env, ("BAC +" . $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "niveauEtude", [])), "html", null, true);
        echo "</li>
                                            <li><span>Salaire:</span>";
        // line 53
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "salaire", []) . " tnd"), "html", null, true);
        echo "</li>
                                            <li><span>Compétences:</span>";
        // line 54
        echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Skill1", []), "name", []) . ", ") . $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Skill2", []), "name", [])) . ", ") . $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "Skill3", []), "name", [])), "html", null, true);
        echo "</li>
                                            <li><span>Langue:</span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "langueRef", []), "nom", []), "html", null, true);
        echo "</li>
                                            <li><span>Candidatures:</span>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo "</li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class=\"social\">
                                    <li><a href=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                    <li><a href=\"\" class=\"google\"><i class=\"fa fa-google-plus\"></i>Google Plus</a></li>
                                    <li><a href=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                    <li><a href=\"\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i>Linked In</a></li>
                                    <li><a href=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                </ul>

                                ";
        // line 68
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) {
            // line 69
            echo "                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Compabilité de votre profil avec cette offre:
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class=\"panel-body\">
                                        <br>
                                        ";
            // line 76
            if (( !twig_test_empty((isset($context["Skills"]) ? $context["Skills"] : $this->getContext($context, "Skills"))) ||  !twig_test_empty((isset($context["langues"]) ? $context["langues"] : $this->getContext($context, "langues"))))) {
                // line 77
                echo "                                        <p> Vos compétences aquises</p>

                                        <ul class=\"information\">

                                            ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Skills"]) ? $context["Skills"] : $this->getContext($context, "Skills")));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 82
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["skill"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 83
                        echo "                                                    <li style=\"color:#007A03\" > ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", []), "html", null, true);
                        echo "</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
                                            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["langues"]) ? $context["langues"] : $this->getContext($context, "langues")));
                foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
                    // line 88
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["langue"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                        // line 89
                        echo "                                            <li> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", []), "html", null, true);
                        echo "</li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                                        </ul>
                                        ";
            } else {
                // line 94
                echo "                                        <div class=\"panel-body2\">
                                            <ul>
                                                <li style=\"color: #da0833\"> Vous n'avez pas encore mis à jour vos compétences. Il est récommander d'ajouter des compétences avant de postuler à une offre!</li>
                                            </ul>
                                        </div>
                                        ";
            }
            // line 100
            echo "
                                         ";
            // line 101
            if (((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) < 92)) {
                // line 102
                echo "
                                    </div>
                                        <div class=\"panel-body2\">
                                         <p> Ce que tu ne posséde pas</p>
                                            <ul>
                                            ";
                // line 107
                $context["count1"] = 0;
                // line 108
                echo "                                            ";
                $context["count2"] = 0;
                // line 109
                echo "                                            ";
                $context["count3"] = 0;
                // line 110
                echo "
                                            ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Skills"]) ? $context["Skills"] : $this->getContext($context, "Skills")));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 112
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["skill"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        // line 113
                        echo "                                                    ";
                        if (($this->getAttribute($context["s"], "name", []) == $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill1", []), "name", []))) {
                            // line 114
                            echo "                                                        ";
                            $context["count1"] = ((isset($context["count1"]) ? $context["count1"] : $this->getContext($context, "count1")) + 1);
                            // line 115
                            echo "                                                    ";
                        }
                        // line 116
                        echo "                                                    ";
                        if (($this->getAttribute($context["s"], "name", []) == $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill2", []), "name", []))) {
                            // line 117
                            echo "                                                        ";
                            $context["count2"] = ((isset($context["count2"]) ? $context["count2"] : $this->getContext($context, "count2")) + 1);
                            // line 118
                            echo "                                                    ";
                        }
                        // line 119
                        echo "                                                    ";
                        if (($this->getAttribute($context["s"], "name", []) == $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill3", []), "name", []))) {
                            // line 120
                            echo "                                                        ";
                            $context["count3"] = ((isset($context["count3"]) ? $context["count3"] : $this->getContext($context, "count3")) + 1);
                            // line 121
                            echo "                                                    ";
                        }
                        // line 122
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "
                                                <ul class=\"information\">
                                            ";
                // line 126
                if (((isset($context["count1"]) ? $context["count1"] : $this->getContext($context, "count1")) == 0)) {
                    // line 127
                    echo "                                                <li style=\"color: #da0833\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill1", []), "name", []), "html", null, true);
                    echo " </li>
                                            ";
                }
                // line 129
                echo "
                                            ";
                // line 130
                if (((isset($context["count2"]) ? $context["count2"] : $this->getContext($context, "count2")) == 0)) {
                    // line 131
                    echo "                                                <li style=\"color: #da0833\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill2", []), "name", []), "html", null, true);
                    echo "</li>
                                            ";
                }
                // line 133
                echo "
                                            ";
                // line 134
                if (((isset($context["count3"]) ? $context["count3"] : $this->getContext($context, "count3")) == 0)) {
                    // line 135
                    echo "                                                <li style=\"color: #da0833\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "skill3", []), "name", []), "html", null, true);
                    echo "</li>
                                            ";
                }
                // line 137
                echo "
                                             ";
                // line 138
                $context["count4"] = 0;
                // line 139
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["langues"]) ? $context["langues"] : $this->getContext($context, "langues")));
                foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
                    // line 140
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["langue"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                        // line 141
                        echo "                                                            ";
                        if (($this->getAttribute($context["l"], "nom", []) == $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "langueRef", []), "nom", []))) {
                            // line 142
                            echo "                                                            ";
                            $context["count4"] = ((isset($context["count4"]) ? $context["count4"] : $this->getContext($context, "count4")) + 1);
                            // line 143
                            echo "                                                            ";
                        }
                        // line 144
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "
                                             ";
                // line 147
                if (((isset($context["count4"]) ? $context["count4"] : $this->getContext($context, "count4")) == 0)) {
                    // line 148
                    echo "                                                 <li style=\"color: #da0833\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "langueRef", []), "nom", []), "html", null, true);
                    echo "</li>
                                             ";
                }
                // line 150
                echo "                                                </ul>
                                            </ul>
                                        </div>
                                </div>
                                ";
            }
            // line 155
            echo "                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Calcule de votre Score:
                                    </div>
                                </div>

                                <div class=\"panel-body2 ali\" align=\"center\">
                                    <div id=\"div_chart\"></div>

                                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                                    <script type=\"text/javascript\">
                                        ";
            // line 166
            echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->gcDraw((isset($context["piechart"]) ? $context["piechart"] : $this->getContext($context, "piechart")), "div_chart");
            echo "
                                    </script>
                                </div>
                                ";
            // line 169
            if (((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) > 80)) {
                // line 170
                echo "                                <p style=\"color: #007A03\">Félicitations ! Votre profil est très proche de celui que nous recherchons. Dépêchez-vous et postulez.</p>
                                   ";
            }
            // line 172
            echo "

                                ";
        }
        // line 175
        echo "                                <div class=\"panel panel-default\" >
                                    <div class=\"panel-heading \" style=\"margin-bottom: 15px\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Actions
                                    </div>
                                    <form>
                                        <div class=\"form-submit\">

                                            ";
        // line 182
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == 0)) {
            // line 183
            echo "

                                                ";
            // line 185
            if ((((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) < 90) && ((isset($context["sicondidater"]) ? $context["sicondidater"] : $this->getContext($context, "sicondidater")) == 0))) {
                // line 186
                echo "
                                            <input style=\"text-align: center\" value=\"Voir les Formations\" class=\"submit\" id=\"reset\" name=\"reset\" />
                                            <a href=\"";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postuler_offre", ["id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", []), "match" => (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score"))]), "html", null, true);
                echo "\"> <input style=\"text-align: center\" value=\"Postuler!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                ";
            } elseif (((            // line 189
(isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) > 90) && ((isset($context["sicondidater"]) ? $context["sicondidater"] : $this->getContext($context, "sicondidater")) == 0))) {
                // line 190
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postuler_offre", ["id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", []), "match" => (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score"))]), "html", null, true);
                echo "\"> <input style=\"text-align: center\" value=\"Postuler!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                ";
            } elseif ((            // line 191
(isset($context["sicondidater"]) ? $context["sicondidater"] : $this->getContext($context, "sicondidater")) != 0)) {
                // line 192
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 193
                    echo "                                                    ";
                    if (($this->getAttribute($context["a"], "etat", []) == 0)) {
                        // line 194
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_application", ["id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", [])]), "html", null, true);
                        echo "\"> <input style=\"text-align: center; background-color: #da0833\" value=\"Annuler la Condidature\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                    ";
                    } elseif (($this->getAttribute(                    // line 195
$context["a"], "etat", []) == 1)) {
                        // line 196
                        echo "                                                        <p align=\"left\"> Vous êtres accepté !</p>
                                                     ";
                    } else {
                        // line 198
                        echo "                                                        <p align=\"left\"> Vous étes réfuser !</p>
                                                     ";
                    }
                    // line 200
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "                                                ";
            }
            // line 202
            echo "
                                            ";
        } else {
            // line 204
            echo "                                            <p align=\"left\"> Cette offre a ";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " candidature(s)</p>
                                                ";
            // line 205
            if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) != 0)) {
                // line 206
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("candidatures_offre", ["id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", []), "match" => (isset($context["score"]) ? $context["score"] : $this->getContext($context, "score"))]), "html", null, true);
                echo "\"> <input style=\"text-align: center\" value=\"Consulter les Candidatures!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                ";
            }
            // line 208
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_offre", ["id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", [])]), "html", null, true);
            echo "\"> <input style=\"text-align: center\" value=\"Modifier\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                ";
        }
        // line 210
        echo "                                        </div>
                                    </form>
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
        return "@Offre/Client/consulteroffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 210,  576 => 208,  570 => 206,  568 => 205,  563 => 204,  559 => 202,  556 => 201,  550 => 200,  546 => 198,  542 => 196,  540 => 195,  535 => 194,  532 => 193,  527 => 192,  525 => 191,  520 => 190,  518 => 189,  514 => 188,  510 => 186,  508 => 185,  504 => 183,  502 => 182,  493 => 175,  488 => 172,  484 => 170,  482 => 169,  476 => 166,  463 => 155,  456 => 150,  450 => 148,  448 => 147,  445 => 146,  439 => 145,  433 => 144,  430 => 143,  427 => 142,  424 => 141,  419 => 140,  414 => 139,  412 => 138,  409 => 137,  403 => 135,  401 => 134,  398 => 133,  392 => 131,  390 => 130,  387 => 129,  381 => 127,  379 => 126,  375 => 124,  369 => 123,  363 => 122,  360 => 121,  357 => 120,  354 => 119,  351 => 118,  348 => 117,  345 => 116,  342 => 115,  339 => 114,  336 => 113,  331 => 112,  327 => 111,  324 => 110,  321 => 109,  318 => 108,  316 => 107,  309 => 102,  307 => 101,  304 => 100,  296 => 94,  292 => 92,  286 => 91,  277 => 89,  272 => 88,  268 => 87,  265 => 86,  259 => 85,  250 => 83,  245 => 82,  241 => 81,  235 => 77,  233 => 76,  224 => 69,  222 => 68,  207 => 56,  203 => 55,  199 => 54,  195 => 53,  191 => 52,  187 => 51,  183 => 50,  178 => 48,  172 => 47,  161 => 38,  152 => 37,  129 => 22,  120 => 21,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  63 => 7,  54 => 6,  44 => 4,  32 => 2,  31 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends role == 0
    ? '@User/Default/userhome.html.twig'
    : '@User/Default/entreprisehome.html.twig' %}

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

        {% block banner %}
            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Liste des Offres
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

        {% block content %}
            <section class=\"profile-detail\">
                <div class=\"container\">

                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"basic-information\">

                                <div class=\"col-md-9 col-sm-9\">
                                    <div class=\"profile-content\">
                                        <h2>{{ offre.titre }}<span>{{ offre.entreprise.fullname }}</span></h2>
                                        <p>Publié le :{{ offre.datePublication | date (\"m/d/Y\") }}</p>
                                        <ul class=\"information\">
                                            <li><span>Type de Poste:</span>{{ offre.typePost.name }}</li>
                                            <li><span>Domaine:</span>{{ offre.domaine.nom }}</li>
                                            <li><span>Niveau d'étude:</span>{{ \"BAC +\" ~offre.niveauEtude}}</li>
                                            <li><span>Salaire:</span>{{ offre.salaire ~ \" tnd\"}}</li>
                                            <li><span>Compétences:</span>{{ offre.Skill1.name ~ \", \" ~  offre.Skill2.name ~ \", \" ~offre.Skill3.name}}</li>
                                            <li><span>Langue:</span>{{ offre.langueRef.nom}}</li>
                                            <li><span>Candidatures:</span>{{ count }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class=\"social\">
                                    <li><a href=\"\" class=\"facebook\"><i class=\"fa fa-facebook\"></i>Facebook</a></li>
                                    <li><a href=\"\" class=\"google\"><i class=\"fa fa-google-plus\"></i>Google Plus</a></li>
                                    <li><a href=\"\" class=\"twitter\"><i class=\"fa fa-twitter\"></i>Twitter</a></li>
                                    <li><a href=\"\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i>Linked In</a></li>
                                    <li><a href=\"\" class=\"instagram\"><i class=\"fa fa-instagram\"></i>Instagram</a></li>
                                </ul>

                                {% if role == 0 %}
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Compabilité de votre profil avec cette offre:
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class=\"panel-body\">
                                        <br>
                                        {% if Skills is not empty or langues is not empty %}
                                        <p> Vos compétences aquises</p>

                                        <ul class=\"information\">

                                            {% for skill in Skills %}
                                                {% for s in skill %}
                                                    <li style=\"color:#007A03\" > {{ s.name }}</li>
                                                {% endfor %}
                                            {% endfor %}

                                            {% for langue in langues %}
                                                    {% for l in langue %}
                                            <li> {{ l.nom }}</li>
                                                    {% endfor %}
                                                {% endfor %}
                                        </ul>
                                        {% else %}
                                        <div class=\"panel-body2\">
                                            <ul>
                                                <li style=\"color: #da0833\"> Vous n'avez pas encore mis à jour vos compétences. Il est récommander d'ajouter des compétences avant de postuler à une offre!</li>
                                            </ul>
                                        </div>
                                        {% endif %}

                                         {% if  score < 92 %}

                                    </div>
                                        <div class=\"panel-body2\">
                                         <p> Ce que tu ne posséde pas</p>
                                            <ul>
                                            {% set count1 = 0 %}
                                            {% set count2 = 0 %}
                                            {% set count3 = 0 %}

                                            {% for skill in Skills %}
                                                {% for s in skill %}
                                                    {% if s.name ==  offre.skill1.name %}
                                                        {% set count1 = count1 + 1 %}
                                                    {% endif %}
                                                    {% if s.name ==  offre.skill2.name %}
                                                        {% set count2 = count2 + 1 %}
                                                    {% endif %}
                                                    {% if s.name ==  offre.skill3.name %}
                                                        {% set count3 = count3 + 1 %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endfor %}

                                                <ul class=\"information\">
                                            {% if count1 == 0 %}
                                                <li style=\"color: #da0833\"> {{ offre.skill1.name }} </li>
                                            {% endif %}

                                            {% if count2 == 0 %}
                                                <li style=\"color: #da0833\"> {{ offre.skill2.name }}</li>
                                            {% endif %}

                                            {% if count3 == 0 %}
                                                <li style=\"color: #da0833\">{{ offre.skill3.name }}</li>
                                            {% endif %}

                                             {% set count4 = 0 %}
                                                {% for langue in langues %}
                                                    {% for l in langue %}
                                                            {% if l.nom == offre.langueRef.nom %}
                                                            {% set count4 = count4 + 1 %}
                                                            {% endif %}
                                                    {% endfor %}
                                                {% endfor %}

                                             {% if count4 == 0 %}
                                                 <li style=\"color: #da0833\">{{ offre.langueRef.nom }}</li>
                                             {% endif %}
                                                </ul>
                                            </ul>
                                        </div>
                                </div>
                                {% endif %}
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Calcule de votre Score:
                                    </div>
                                </div>

                                <div class=\"panel-body2 ali\" align=\"center\">
                                    <div id=\"div_chart\"></div>

                                    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                                    <script type=\"text/javascript\">
                                        {{ gc_draw(piechart, 'div_chart') }}
                                    </script>
                                </div>
                                {% if score > 80 %}
                                <p style=\"color: #007A03\">Félicitations ! Votre profil est très proche de celui que nous recherchons. Dépêchez-vous et postulez.</p>
                                   {% endif %}


                                {% endif %}
                                <div class=\"panel panel-default\" >
                                    <div class=\"panel-heading \" style=\"margin-bottom: 15px\">
                                        <i class=\"fa fa-leaf fa-fw\"></i> Actions
                                    </div>
                                    <form>
                                        <div class=\"form-submit\">

                                            {% if role == 0 %}


                                                {% if score < 90 and sicondidater == 0 %}

                                            <input style=\"text-align: center\" value=\"Voir les Formations\" class=\"submit\" id=\"reset\" name=\"reset\" />
                                            <a href=\"{{ path('postuler_offre', {'id':offre.id , 'match':score}) }}\"> <input style=\"text-align: center\" value=\"Postuler!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                {% elseif score > 90 and sicondidater == 0 %}
                                            <a href=\"{{ path('postuler_offre', {'id':offre.id , 'match':score}) }}\"> <input style=\"text-align: center\" value=\"Postuler!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                {% elseif sicondidater != 0 %}
                                                    {% for a in application %}
                                                    {% if a.etat == 0 %}
                                            <a href=\"{{ path('supprimer_application', {'id':offre.id}) }}\"> <input style=\"text-align: center; background-color: #da0833\" value=\"Annuler la Condidature\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                    {% elseif a.etat ==1 %}
                                                        <p align=\"left\"> Vous êtres accepté !</p>
                                                     {% else %}
                                                        <p align=\"left\"> Vous étes réfuser !</p>
                                                     {% endif %}
                                                    {% endfor %}
                                                {% endif %}

                                            {% else %}
                                            <p align=\"left\"> Cette offre a {{ count }} candidature(s)</p>
                                                {% if count != 0 %}
                                            <a href=\"{{ path('candidatures_offre', {'id':offre.id , 'match':score}) }}\"> <input style=\"text-align: center\" value=\"Consulter les Candidatures!\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                {% endif %}
                                                <a href=\"{{ path('modifier_offre', {'id':offre.id }) }}\"> <input style=\"text-align: center\" value=\"Modifier\" class=\"submit\" id=\"submit\" name=\"submit\" /></a>
                                                {% endif %}
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

", "@Offre/Client/consulteroffre.html.twig", "C:\\wamp64\\www\\pidev2\\src\\OffreBundle\\Resources\\views\\Client\\consulteroffre.html.twig");
    }
}
