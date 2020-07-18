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

/* widget/archive.twig */
class __TwigTemplate_eac8941e9d853f2f1b6af247fbf71f28ddc475a46fcf6ac94fb08485ff7f651a extends Template
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
        echo "<aside class=\"widget widget_archive sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">文章归档</h3>
\t<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yearMonthList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["yearMonth"]) {
            // line 5
            echo "\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["yearMonth"], "url", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["yearMonth"], "name", [], "any", false, false, false, 5);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yearMonth'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
</aside>";
    }

    public function getTemplateName()
    {
        return "widget/archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"widget widget_archive sidebar-widget clearfix\">
\t<h3 class=\"widget-title\">文章归档</h3>
\t<ul>
\t{% for yearMonth in yearMonthList %}
\t<li><a href=\"{{ yearMonth.url }}\">{{ yearMonth.name }}</a></li>
\t{% endfor %}
\t</ul>
</aside>", "widget/archive.twig", "/var/www/html/blog-with-ci/public/theme/quest/widget/archive.twig");
    }
}
