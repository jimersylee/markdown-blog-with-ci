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

/* blog/content.twig */
class __TwigTemplate_d2b8246217f8ede0e35924898af01937565991dd6dea18cf32d5f24fabacc445 extends Template
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
        echo "<div class=\"entry-content\">
\t";
        // line 2
        if ((0 === twig_compare(($context["pageName"] ?? null), "blog"))) {
            // line 3
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "content", [], "any", false, false, false, 3);
            echo "
\t";
        } else {
            // line 5
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "summary", [], "any", false, false, false, 5);
            echo "
\t";
        }
        // line 7
        echo "</div><!-- .entry-content -->";
    }

    public function getTemplateName()
    {
        return "blog/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"entry-content\">
\t{% if pageName == \"blog\" %}
\t{{ blog.content | raw }}
\t{% else %}
\t{{ blog.summary | raw }}
\t{% endif %}
</div><!-- .entry-content -->", "blog/content.twig", "/var/www/html/blog-with-ci/public/theme/quest/blog/content.twig");
    }
}
