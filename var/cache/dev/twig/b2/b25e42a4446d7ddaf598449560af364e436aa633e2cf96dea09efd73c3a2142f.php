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

/* base_admin.html.twig */
class __TwigTemplate_d2be9b0ddb0097b5fcb399a5ee06786f5745c54f190d67716ecdbc6d6534673f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor2/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Page level plugin CSS-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor2/datatables/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">
";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 60
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 178
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 27
        echo "<nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

    <a class=\"navbar-brand mr-1\" href=\"index.html\">SmartStart ADMIN</a>

    <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->


</nav>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"sidebar navbar-nav\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span>
            </a>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>
    </ul>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "    <div id=\"content-wrapper\">

        <div class=\"container-fluid\">

            <!-- Breadcrumbs-->
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">Dashboard</a>
                </li>
                <li class=\"breadcrumb-item active\">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class=\"row\">
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-primary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-user\"></i>
                            </div>
                            <div class=\"mr-5\">26 New Messages!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-warning o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                            </div>
                            <div class=\"mr-5\">11 New Tasks!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-success o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-pencil-square-o\"></i>
                            </div>
                            <div class=\"mr-5\">123 New Orders!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-danger o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-star-half-o\"></i>
                            </div>
                            <div class=\"mr-5\">13 New Tickets!</div>
                        </div>

                    </div>
                </div>
            </div>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">Offres</a>
                </li>
                <li class=\"breadcrumb-item active\">Statistiques</li>
            </ol>

            <!-- Icon Cards-->
            <div class=\"row\">

                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-dark o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-user\"></i>
                            </div>
                            <div class=\"mr-5\">26 New Messages!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-secondary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                            </div>
                            <div class=\"mr-5\">11 New Tasks!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-primary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-pencil-square-o\"></i>
                            </div>
                            <div class=\"mr-5\">123 New Orders!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-info o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-star-half-o\"></i>
                            </div>
                            <div class=\"mr-5\">13 New Tickets!</div>
                        </div>

                    </div>
                </div>
            </div>

</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  141 => 60,  99 => 27,  90 => 26,  79 => 178,  76 => 60,  74 => 26,  66 => 21,  60 => 18,  54 => 15,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href=\"{{asset('vendor2/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Page level plugin CSS-->
    <link href=\"{{asset('vendor2/datatables/dataTables.bootstrap4.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{asset('css/sb-admin.css')}}\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">
{% block nav %}
<nav class=\"navbar navbar-expand navbar-dark bg-dark static-top\">

    <a class=\"navbar-brand mr-1\" href=\"index.html\">SmartStart ADMIN</a>

    <button class=\"btn btn-link btn-sm text-white order-1 order-sm-0\" id=\"sidebarToggle\" href=\"#\">
        <i class=\"fas fa-bars\"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->


</nav>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"sidebar navbar-nav\">
        <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"index.html\">
                <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                <span>Dashboard</span>
            </a>

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"tables.html\">
                <i class=\"fas fa-fw fa-table\"></i>
                <span>Tables</span></a>
        </li>
    </ul>
    {% endblock %}
    {% block content %}
    <div id=\"content-wrapper\">

        <div class=\"container-fluid\">

            <!-- Breadcrumbs-->
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">Dashboard</a>
                </li>
                <li class=\"breadcrumb-item active\">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class=\"row\">
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-primary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-user\"></i>
                            </div>
                            <div class=\"mr-5\">26 New Messages!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-warning o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                            </div>
                            <div class=\"mr-5\">11 New Tasks!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-success o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-pencil-square-o\"></i>
                            </div>
                            <div class=\"mr-5\">123 New Orders!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-danger o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-star-half-o\"></i>
                            </div>
                            <div class=\"mr-5\">13 New Tickets!</div>
                        </div>

                    </div>
                </div>
            </div>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\">
                    <a href=\"#\">Offres</a>
                </li>
                <li class=\"breadcrumb-item active\">Statistiques</li>
            </ol>

            <!-- Icon Cards-->
            <div class=\"row\">

                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-dark o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-user\"></i>
                            </div>
                            <div class=\"mr-5\">26 New Messages!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-secondary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-briefcase\"></i>
                            </div>
                            <div class=\"mr-5\">11 New Tasks!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-primary o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-pencil-square-o\"></i>
                            </div>
                            <div class=\"mr-5\">123 New Orders!</div>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-3 col-sm-6 mb-3\">
                    <div class=\"card text-white bg-info o-hidden h-100\">
                        <div class=\"card-body\">
                            <div class=\"card-body-icon\">
                                <i class=\"fas fa-fw fa-star-half-o\"></i>
                            </div>
                            <div class=\"mr-5\">13 New Tickets!</div>
                        </div>

                    </div>
                </div>
            </div>

</body>
{% endblock %}
</html>
", "base_admin.html.twig", "C:\\wamp64\\www\\pidev\\app\\Resources\\views\\base_admin.html.twig");
    }
}
