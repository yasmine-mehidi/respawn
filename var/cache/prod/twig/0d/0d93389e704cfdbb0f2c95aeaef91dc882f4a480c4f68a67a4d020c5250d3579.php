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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/boolean.html.twig */
class __TwigTemplate_5db6c3a3d03231148b7cf580ce6acaed8dc3d9574b7de6274ccae5c4d155ad21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array")) {
            // line 27
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "true_name", []), "html", null, true);
            echo "
";
        } else {
            // line 29
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "false_name", []), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 29,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/boolean.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\boolean.html.twig");
    }
}
