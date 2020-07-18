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

/* blog/header.twig */
class __TwigTemplate_8a1425e8be3aec2573c62ae9765d9d98d33443777608bb01530a3c23a1f720bb extends Template
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
        echo "<header class=\"entry-header\">
\t<h1 class=\"post-title\"><a href=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "siteURL", [], "any", false, false, false, 2);
        echo "\" rel=\"bookmark\">";
        echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "title", [], "any", false, false, false, 2);
        echo " ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "top", [], "any", false, false, false, 2), 0))) {
            echo "<span class=\"top\">[置顶]</span>";
        }
        echo "</a></h1>
\t<div class=\"entry-meta\">
\t\t<time class=\"post-date\"><i class=\"fa fa-clock-o\"></i>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "date", [], "any", false, false, false, 4);
        echo "</time>
\t\t";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "author", [], "any", false, false, false, 5)) {
            // line 6
            echo "\t\t<span class=\"seperator\">/</span>
\t    <span><i class=\"fa fa-user\"></i> ";
            // line 7
            echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "author", [], "any", false, false, false, 7);
            echo "</span>
\t    ";
        }
        // line 9
        echo "\t</div><!-- .entry-meta -->
</header><!-- .entry-header -->
";
    }

    public function getTemplateName()
    {
        return "blog/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 7,  57 => 6,  55 => 5,  51 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"entry-header\">
\t<h1 class=\"post-title\"><a href=\"{{ blog.siteURL }}\" rel=\"bookmark\">{{ blog.title }} {% if blog.top != 0 %}<span class=\"top\">[置顶]</span>{% endif %}</a></h1>
\t<div class=\"entry-meta\">
\t\t<time class=\"post-date\"><i class=\"fa fa-clock-o\"></i>{{ blog.date}}</time>
\t\t{% if blog.author %}
\t\t<span class=\"seperator\">/</span>
\t    <span><i class=\"fa fa-user\"></i> {{ blog.author }}</span>
\t    {% endif %}
\t</div><!-- .entry-meta -->
</header><!-- .entry-header -->
", "blog/header.twig", "/var/www/html/blog-with-ci/public/theme/quest/blog/header.twig");
    }
}
