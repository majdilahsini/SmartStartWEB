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

/* @Offre/Client/read.html.twig */
class __TwigTemplate_a7f0ef31a417994b0f64aa02538ec7b3e52ace8855d9affb79344f6bc928b26d extends \Twig\Template
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
        return "@User/Default/userhome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Client/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Client/read.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/userhome.html.twig", "@Offre/Client/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 4
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

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
<section class=\"jobs\">
    <div class=\"container\">

        <div class=\"companies\">

            ";
        // line 26
        if (twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 27
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/offre/listoffre")) {
                // line 28
                echo "                    <p> Il n'y a aucune offre pour le moment.</p>
                ";
            } else {
                // line 30
                echo "                    <p> Vous n'avez pas de candidatures</p>
                ";
            }
            // line 32
            echo "            ";
        }
        // line 33
        echo "

            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 36
            echo "


                ";
            // line 39
            $context["test"] =  -1;
            // line 40
            echo "
                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 42
                echo "                    ";
                if (($this->getAttribute($context["offre"], "id", []) == $this->getAttribute($this->getAttribute($context["application"], "offre", []), "id", []))) {
                    // line 43
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/offre/listoffre")) {
                        // line 44
                        echo "                            ";
                        $context["test"] = 4;
                        // line 45
                        echo "                        ";
                    } elseif (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/offre/mescandidatures")) {
                        // line 46
                        echo "                            ";
                        $context["test"] = $this->getAttribute($context["application"], "etat", []);
                        // line 47
                        echo "                        ";
                    }
                    // line 48
                    echo "                    ";
                }
                // line 49
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
            ";
            // line 51
            if ((($context["test"] ?? $this->getContext($context, "test")) == 4)) {
                // line 52
                echo "            <div class=\"company-list\" style=\"background-color: #F3FFFA\">
             ";
            } elseif ((            // line 53
($context["test"] ?? $this->getContext($context, "test")) == 0)) {
                // line 54
                echo "                <div class=\"company-list\" style=\"background-color: #FFFECA\">
                    ";
            } elseif ((            // line 55
($context["test"] ?? $this->getContext($context, "test")) == 1)) {
                // line 56
                echo "                    <div class=\"company-list\" style=\"background-color: #CAFFDC\">
                        ";
            } elseif ((            // line 57
($context["test"] ?? $this->getContext($context, "test")) == 2)) {
                // line 58
                echo "                        <div class=\"company-list\" style=\"background-color: #FFCACA\">
              ";
            } else {
                // line 60
                echo "                  <div class=\"company-list\">
                ";
            }
            // line 62
            echo "
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                            <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/megaphone_rose_250_2.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", []), "html", null, true);
            echo "</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "datePublication", []), "d/m/Y"), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "entreprise", []), "fullname", []), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "typePost", []), "name", []), "html", null, true);
            echo "</span>

                      <span class=\"package\"><i class=\"fa fa-money\">
                      </i>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "salaire", []), "html", null, true);
            echo " TND</span>

                      <span class=\"package\"><i class=\"fa fa-trophy\">
                      </i>BAC +";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "niveauEtude", []), "html", null, true);
            echo " </span>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-2\">
                        ";
            // line 91
            if ((($context["test"] ?? $this->getContext($context, "test")) == 1)) {
                // line 92
                echo "                        <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_offre", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "><button style=\"background-color: #267747;\" type=\"submit\" class=\"btn view-job\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                        ";
            } else {
                // line 94
                echo "                            <a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_offre", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "><button type=\"submit\" class=\"btn view-job\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                        ";
            }
            // line 96
            echo "                    </div>
                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "        </div>
    </div>
</section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Client/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 101,  260 => 96,  254 => 94,  248 => 92,  246 => 91,  238 => 86,  232 => 83,  226 => 80,  220 => 77,  214 => 74,  208 => 71,  200 => 66,  194 => 62,  190 => 60,  186 => 58,  184 => 57,  181 => 56,  179 => 55,  176 => 54,  174 => 53,  171 => 52,  169 => 51,  166 => 50,  160 => 49,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  139 => 42,  135 => 41,  132 => 40,  130 => 39,  125 => 36,  121 => 35,  117 => 33,  114 => 32,  110 => 30,  106 => 28,  103 => 27,  101 => 26,  93 => 20,  84 => 19,  61 => 4,  52 => 3,  30 => 1,);
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

<section class=\"jobs\">
    <div class=\"container\">

        <div class=\"companies\">

            {% if offres is empty %}
                {% if app.request.pathinfo == \"/offre/listoffre\" %}
                    <p> Il n'y a aucune offre pour le moment.</p>
                {% else %}
                    <p> Vous n'avez pas de candidatures</p>
                {% endif %}
            {% endif %}


            {% for offre in offres %}



                {% set test = -1 %}

                {% for application in applications %}
                    {% if offre.id == application.offre.id %}
                        {% if app.request.pathinfo == \"/offre/listoffre\" %}
                            {% set test = 4 %}
                        {% elseif app.request.pathinfo == \"/offre/mescandidatures\" %}
                            {% set test = application.etat %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

            {% if test == 4 %}
            <div class=\"company-list\" style=\"background-color: #F3FFFA\">
             {% elseif test == 0 %}
                <div class=\"company-list\" style=\"background-color: #FFFECA\">
                    {% elseif test == 1 %}
                    <div class=\"company-list\" style=\"background-color: #CAFFDC\">
                        {% elseif test == 2 %}
                        <div class=\"company-list\" style=\"background-color: #FFCACA\">
              {% else %}
                  <div class=\"company-list\">
                {% endif %}

                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                            <img src=\"{{asset('img/megaphone_rose_250_2.jpg')}}\" class=\"img-responsive\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>{{ offre.titre }}</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>{{ offre.datePublication | date(\"d/m/Y\") }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>{{ offre.entreprise.fullname }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>{{ offre.typePost.name }}</span>

                      <span class=\"package\"><i class=\"fa fa-money\">
                      </i>{{ offre.salaire }} TND</span>

                      <span class=\"package\"><i class=\"fa fa-trophy\">
                      </i>BAC +{{ offre.niveauEtude }} </span>
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-2 col-sm-2\">
                        {% if test == 1 %}
                        <a href={{ path('consulter_offre', {'id':offre.id}) }}><button style=\"background-color: #267747;\" type=\"submit\" class=\"btn view-job\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                        {% else %}
                            <a href={{ path('consulter_offre', {'id':offre.id}) }}><button type=\"submit\" class=\"btn view-job\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                        {% endif %}
                    </div>
                </div>

            </div>
            {% endfor %}
        </div>
    </div>
</section>


        {% endblock %}

", "@Offre/Client/read.html.twig", "C:\\wamp64\\www\\pidev\\src\\OffreBundle\\Resources\\views\\Client\\read.html.twig");
    }
}
