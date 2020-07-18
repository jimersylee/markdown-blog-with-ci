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

/* block/header.twig */
class __TwigTemplate_965eb0e7d571bb522dc16a314d4e6d27bfb0b81311dd3a08746bba98b61649bb extends Template
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
        echo "<header id=\"masthead\" class=\"main-header\" role=\"banner\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"site-branding col-md-4\">
\t\t\t<h1 class=\"site-title\"><a href=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "url", [], "any", false, false, false, 5);
        echo "\" rel=\"home\">";
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 5);
        echo "</a></h1>
\t\t\t\t<span class=\"site-description\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "subtitle", [], "any", false, false, false, 6);
        echo "</span>
\t\t</div>
\t\t<!-- .site-branding -->
\t</div>
</div>
</header>";
    }

    public function getTemplateName()
    {
        return "block/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"masthead\" class=\"main-header\" role=\"banner\">
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"site-branding col-md-4\">
\t\t\t<h1 class=\"site-title\"><a href=\"{{ site.url }}\" rel=\"home\">{{ site.title }}</a></h1>
\t\t\t\t<span class=\"site-description\">{{ site.subtitle }}</span>
\t\t</div>
\t\t<!-- .site-branding -->
\t</div>
</div>
</header>", "block/header.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/header.twig");
    }
}
