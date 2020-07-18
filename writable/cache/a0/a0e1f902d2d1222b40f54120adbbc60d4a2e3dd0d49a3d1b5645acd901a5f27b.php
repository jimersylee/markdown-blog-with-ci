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

/* block/comments.twig */
class __TwigTemplate_7c1149f48a183d48e085601610262f7961a76698209bbb2308a23205c89aba83 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "disqus", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div id=\"comments\" class=\"clearfix\">
\t<div id=\"respond\" class=\"comment-respond\">
\t\t<div id=\"disqus_thread\"></div>
\t\t<script>
\t\t   var disqus_config = function () {
\t\t   this.page.url = location.href;
\t\t   this.page.identifier = '";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "blogId", [], "any", false, false, false, 8);
            echo "';
\t\t   };
\t\t(function() {
\t\t\tvar d = document, s = d.createElement('script');
\t\t\ts.src = '//";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "disqus", [], "any", false, false, false, 12);
            echo ".disqus.com/embed.js';
\t\t\ts.setAttribute('data-timestamp', +new Date());
\t\t\t(d.head || d.body).appendChild(s);
\t\t})();
\t\t</script>
\t\t<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
\t</div><!-- #respond -->
</div>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 20
($context["site"] ?? null), "youyan", [], "any", false, false, false, 20)) {
            // line 21
            echo "<!-- UY BEGIN -->
<div id=\"uyan_frame\"></div>
<script type=\"text/javascript\" src=\"http://v2.uyan.cc/code/uyan.js?uid=";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "youyan", [], "any", false, false, false, 23);
            echo "\"></script>
<!-- UY END -->
";
        }
    }

    public function getTemplateName()
    {
        return "block/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  67 => 21,  65 => 20,  54 => 12,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if site.disqus %}
<div id=\"comments\" class=\"clearfix\">
\t<div id=\"respond\" class=\"comment-respond\">
\t\t<div id=\"disqus_thread\"></div>
\t\t<script>
\t\t   var disqus_config = function () {
\t\t   this.page.url = location.href;
\t\t   this.page.identifier = '{{ blog.blogId }}';
\t\t   };
\t\t(function() {
\t\t\tvar d = document, s = d.createElement('script');
\t\t\ts.src = '//{{ site.disqus }}.disqus.com/embed.js';
\t\t\ts.setAttribute('data-timestamp', +new Date());
\t\t\t(d.head || d.body).appendChild(s);
\t\t})();
\t\t</script>
\t\t<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
\t</div><!-- #respond -->
</div>
{% elseif site.youyan %}
<!-- UY BEGIN -->
<div id=\"uyan_frame\"></div>
<script type=\"text/javascript\" src=\"http://v2.uyan.cc/code/uyan.js?uid={{site.youyan}}\"></script>
<!-- UY END -->
{% endif %}
", "block/comments.twig", "/var/www/html/blog-with-ci/public/theme/quest/block/comments.twig");
    }
}
