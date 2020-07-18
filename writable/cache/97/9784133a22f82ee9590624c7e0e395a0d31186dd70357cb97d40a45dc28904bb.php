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

/* block/secondary.twig */
class __TwigTemplate_70b90e1ce8617bade939e9f748ac043c5e402fbf71f10fd4e3c7a63de2b8659a extends Template
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
        echo "<div id=\"secondary\" class=\"widget-area main-sidebar col-md-3\" role=\"complementary\">
\t";
        // line 2
        $this->loadTemplate("widget/search.twig", "block/secondary.twig", 2)->display($context);
        // line 3
        echo "\t";
        $this->loadTemplate("widget/categories.twig", "block/secondary.twig", 3)->display($context);
        // line 4
        echo "\t";
        $this->loadTemplate("widget/archive.twig", "block/secondary.twig", 4)->display($context);
        // line 5
        echo "\t";
        $this->loadTemplate("widget/recent.twig", "block/secondary.twig", 5)->display($context);
        // line 6
        echo "\t";
        $this->loadTemplate("widget/tagcloud.twig", "block/secondary.twig", 6)->display($context);
        // line 7
        echo "\t";
        $this->loadTemplate("widget/text.twig", "block/secondary.twig", 7)->display($context);
        // line 8
        echo "</div><!-- #secondary -->
";
    }

    public function getTemplateName()
    {
        return "block/secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"secondary\" class=\"widget-area main-sidebar col-md-3\" role=\"complementary\">
\t{% include \"widget/search.twig\" %}
\t{% include \"widget/categories.twig\" %}
\t{% include \"widget/archive.twig\" %}
\t{% include \"widget/recent.twig\" %}
\t{% include \"widget/tagcloud.twig\" %}
\t{% include \"widget/text.twig\" %}
</div><!-- #secondary -->
", "block/secondary.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/secondary.twig");
    }
}
