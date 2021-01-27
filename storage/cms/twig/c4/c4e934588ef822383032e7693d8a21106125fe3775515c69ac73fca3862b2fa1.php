<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/ovid/Code/octomob/themes/mob/layouts/default.htm */
class __TwigTemplate_0f78bb0e88a9f27f11ec1b2faf2e93437f8a963e51bc26376b50f231abaf3380 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 13, "page" => 76, "partial" => 81, "framework" => 88, "scripts" => 89);
        $filters = array("escape" => 6, "theme" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'page', 'partial', 'framework', 'scripts'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 14
        echo "</head>

<body class=\"bg-light\">

    <div class=\"container\">
        <div class=\"py-5 text-center\">
            <img class=\"d-block mx-auto mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
            <h2>Checkout form</h2>
            <p class=\"lead\">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 order-md-2 mb-4\">
                <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                    <span class=\"text-muted\">Your cart</span>
                    <span class=\"badge badge-secondary badge-pill\">3</span>
                </h4>
                <ul class=\"list-group mb-3\">
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Product name</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$12</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Second product</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$8</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Third item</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$5</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between bg-light\">
                        <div class=\"text-success\">
                            <h6 class=\"my-0\">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class=\"text-success\">-\$5</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between\">
                        <span>Total (USD)</span>
                        <strong>\$20</strong>
                    </li>
                </ul>

                <form class=\"card p-2\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Promo code\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-secondary\">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-md-8 order-md-1\">
                ";
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 77
        echo "            </div>
        </div>

        <footer class=\"my-5 pt-5 text-muted text-center text-small\">
            ";
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "        </footer>
    </div>

<!-- Scripts & Styles-->
<script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/theme.js");
        echo "\"></script>
<link rel=\"stylesheet\" property=\"stylesheet\" href=\"";
        // line 87
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
";
        // line 88
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 89
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 90
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/ovid/Code/octomob/themes/mob/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 90,  192 => 89,  181 => 88,  177 => 87,  173 => 86,  167 => 82,  163 => 81,  157 => 77,  155 => 76,  91 => 14,  88 => 13,  84 => 12,  77 => 8,  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
    {% styles %}
</head>

<body class=\"bg-light\">

    <div class=\"container\">
        <div class=\"py-5 text-center\">
            <img class=\"d-block mx-auto mb-4\" src=\"https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
            <h2>Checkout form</h2>
            <p class=\"lead\">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 order-md-2 mb-4\">
                <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
                    <span class=\"text-muted\">Your cart</span>
                    <span class=\"badge badge-secondary badge-pill\">3</span>
                </h4>
                <ul class=\"list-group mb-3\">
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Product name</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$12</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Second product</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$8</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                        <div>
                            <h6 class=\"my-0\">Third item</h6>
                            <small class=\"text-muted\">Brief description</small>
                        </div>
                        <span class=\"text-muted\">\$5</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between bg-light\">
                        <div class=\"text-success\">
                            <h6 class=\"my-0\">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class=\"text-success\">-\$5</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between\">
                        <span>Total (USD)</span>
                        <strong>\$20</strong>
                    </li>
                </ul>

                <form class=\"card p-2\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Promo code\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-secondary\">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-md-8 order-md-1\">
                {% page %}
            </div>
        </div>

        <footer class=\"my-5 pt-5 text-muted text-center text-small\">
            {% partial 'site/footer' %}
        </footer>
    </div>

<!-- Scripts & Styles-->
<script src=\"{{ 'assets/javascript/theme.js'|theme }}\"></script>
<link rel=\"stylesheet\" property=\"stylesheet\" href=\"{{ 'assets/css/theme.css'|theme }}\">
{% framework extras %}
{% scripts %}

</body>

</html>", "/home/ovid/Code/octomob/themes/mob/layouts/default.htm", "");
    }
}
