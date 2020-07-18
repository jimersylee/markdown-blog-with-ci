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

/* widget/search.twig */
class __TwigTemplate_b0729404cb17b39e66fa6e8d43107207d81b7fa3bbcf37f6183e84785eb793cd extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<aside class=\"widget widget_search sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">搜索</h3>
\t<form class=\"search\" action=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 3);
        echo "search\" method=\"get\">
\t\t<fieldset>
\t\t\t<div class=\"text\">
\t\t\t\t<input name=\"keyword\" id=\"keyword\" type=\"text\" placeholder=\"Search ...\"/>
\t\t\t\t<button class=\"fa fa-search\">Search</button>
\t\t\t</div>
\t\t</fieldset>
\t</form>
</aside>
";
    }

    public function getTemplateName()
    {
        return "widget/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"widget widget_search sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">搜索</h3>
\t<form class=\"search\" action=\"{{ site.url }}search\" method=\"get\">
\t\t<fieldset>
\t\t\t<div class=\"text\">
\t\t\t\t<input name=\"keyword\" id=\"keyword\" type=\"text\" placeholder=\"Search ...\"/>
\t\t\t\t<button class=\"fa fa-search\">Search</button>
\t\t\t</div>
\t\t</fieldset>
\t</form>
</aside>
", "widget/search.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/search.twig");
    }
}
