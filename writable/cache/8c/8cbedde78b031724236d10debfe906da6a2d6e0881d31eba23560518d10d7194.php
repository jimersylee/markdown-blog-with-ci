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

/* blog/blog.twig */
class __TwigTemplate_93def4bf1efa5cb545716a93eb3cbc70eace1dd8830b4afeee5cb703347cf1ae extends Template
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
        echo "<article class=\"post hentry\">
\t";
        // line 2
        $this->loadTemplate("blog/header.twig", "blog/blog.twig", 2)->display($context);
        // line 3
        echo "\t";
        $this->loadTemplate("blog/content.twig", "blog/blog.twig", 3)->display($context);
        // line 4
        echo "\t";
        $this->loadTemplate("blog/footer.twig", "blog/blog.twig", 4)->display($context);
        // line 5
        echo "</article><!-- #post-## -->
";
    }

    public function getTemplateName()
    {
        return "blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"post hentry\">
\t{% include \"blog/header.twig\" %}
\t{% include \"blog/content.twig\" %}
\t{% include \"blog/footer.twig\" %}
</article><!-- #post-## -->
", "blog/blog.twig", "/var/www/html/blog-with-ci/public/theme/quest/blog/blog.twig");
    }
}
