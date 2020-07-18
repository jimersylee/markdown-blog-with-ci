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

/* block/content.twig */
class __TwigTemplate_09fefbd8a50d48615600072b4d949d7b8577d394bf92e978a82c6226e3bd7fa7 extends Template
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
        echo "<div id=\"content\">
\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area single col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t";
        // line 7
        $this->loadTemplate("blog/blog.twig", "block/content.twig", 7)->display($context);
        // line 8
        echo "            \t\t\t";
        $this->loadTemplate("block/comments.twig", "block/content.twig", 8)->display($context);
        // line 9
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t<!-- #primary -->
\t\t\t\t";
        // line 13
        $this->loadTemplate("block/secondary.twig", "block/content.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div>
";
    }

    public function getTemplateName()
    {
        return "block/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  56 => 13,  50 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\">
\t<div class=\"quest-row site-content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"primary\" class=\"content-area single col-md-9\">
\t\t\t\t\t<div id=\"main\" class=\"site-main\" role=\"main\">
\t\t\t\t\t\t{% include \"blog/blog.twig\" %}
            \t\t\t{% include \"block/comments.twig\" %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- #main -->
\t\t\t\t</div>
\t\t\t\t<!-- #primary -->
\t\t\t\t{% include \"block/secondary.twig\" %}
\t\t\t</div>
\t\t\t<!-- .row -->
\t\t</div>
\t\t<!-- .container -->
\t</div>
\t<!-- .quest-row -->
</div>
", "block/content.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/content.twig");
    }
}
