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

/* widget/text.twig */
class __TwigTemplate_c354f5972c9707c435f5de96ef189959544220c0bd81358f6f5902ffa5e4794e extends Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "text", [], "any", false, false, false, 1), "intro", [], "any", false, false, false, 1)) {
            // line 2
            echo "<aside class=\"widget widget_text sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">";
            // line 3
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "text", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3);
            echo "</h3>
\t<div class=\"textwidget\">
\t\t<p>";
            // line 5
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "text", [], "any", false, false, false, 5), "intro", [], "any", false, false, false, 5);
            echo "</p>
\t</div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "widget/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if attribute(site.text, \"intro\") %}
<aside class=\"widget widget_text sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">{{ site.text.title }}</h3>
\t<div class=\"textwidget\">
\t\t<p>{{ site.text.intro }}</p>
\t</div>
</aside>
{% endif %}", "widget/text.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/text.twig");
    }
}
