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

/* block/footer.twig */
class __TwigTemplate_381709ebffd4c509f8e88a84ef786c59898eefd9ef8ecfc66f2a3adc6a3653f3 extends Template
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
        echo "<footer id=\"colophon\" class=\"copyright quest-row\" role=\"contentinfo\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 copyright-text\">
                <a href=\"https://github.com/jimersylee\">Made with Love</a>
            </div>
            <div class=\"col-md-6 social-icon-container clearfix\">
                <ul>
                    <li>
                        <a href=\"https://github.com/jimersylee\">Github</a>
                        <a href=\"https://resume.jimersylee.com\">简历</a>
                        <a href=\"https://www.jimersylee.com\">个人主页</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
";
    }

    public function getTemplateName()
    {
        return "block/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"colophon\" class=\"copyright quest-row\" role=\"contentinfo\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 copyright-text\">
                <a href=\"https://github.com/jimersylee\">Made with Love</a>
            </div>
            <div class=\"col-md-6 social-icon-container clearfix\">
                <ul>
                    <li>
                        <a href=\"https://github.com/jimersylee\">Github</a>
                        <a href=\"https://resume.jimersylee.com\">简历</a>
                        <a href=\"https://www.jimersylee.com\">个人主页</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
", "block/footer.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/footer.twig");
    }
}
