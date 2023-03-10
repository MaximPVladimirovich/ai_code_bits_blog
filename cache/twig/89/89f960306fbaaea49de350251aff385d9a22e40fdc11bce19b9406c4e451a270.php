<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pagination.html.twig */
class __TwigTemplate_4fa694a65895b487f5f17febfee95e34c087d3f6693fb441f407258523859daa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"pagenavi\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "        <a rel=\"prev\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">&laquo;</a>
    ";
            }
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 13
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", [])) {
                    // line 15
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 16
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["paginate"], "number", []), "html", null, true);
                    echo "</a>
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 20
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 21
                echo "        <a rel=\"next\" href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\">&raquo;</a>
    ";
            }
            // line 23
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  91 => 21,  88 => 20,  85 => 19,  79 => 18,  71 => 16,  68 => 15,  66 => 14,  61 => 13,  58 => 12,  53 => 11,  47 => 9,  44 => 8,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"pagenavi\">
    {% if pagination.hasPrev %}
        {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" href=\"{{ url }}\">&laquo;</a>
    {% endif %}
    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span class=\"current\">{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <a href=\"{{ url }}\">{{ paginate.number }}</a>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a rel=\"next\" href=\"{{ url }}\">&raquo;</a>
    {% endif %}
    </div>
</div>
{% endif %}
", "pagination.html.twig", "/Users/pooldash/code/grav-skeleton-pinpress-site+admin-1.0.0/user/themes/pinpress/templates/pagination.html.twig");
    }
}
