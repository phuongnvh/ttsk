<?php

/* CMSMainBundle:Default:menu.html.twig */
class __TwigTemplate_0ba56243d591f9697ec99f7550527801f6b6e21d8ffd0c2663bf150cf49cb484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["position"]) ? $context["position"] : null) == "top")) {
            // line 2
            echo "<nav class=\"blog-nav\">
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 4
                echo "    <a class=\"blog-nav-item\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</nav>
";
        }
        // line 8
        echo "
";
        // line 9
        if (((isset($context["position"]) ? $context["position"] : null) == "bot")) {
            // line 10
            echo "<div class=\"row nav-main-bot\">
    <ul>
    ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 13
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "</a></li>
        ";
                // line 14
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 4) == 0)) {
                    echo "</ul><ul>";
                }
                // line 15
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "CMSMainBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 16,  90 => 15,  86 => 14,  74 => 13,  57 => 12,  53 => 10,  48 => 8,  44 => 6,  28 => 4,  24 => 3,  19 => 1,  246 => 49,  243 => 48,  238 => 12,  164 => 84,  160 => 83,  156 => 82,  152 => 81,  134 => 66,  118 => 56,  110 => 50,  108 => 48,  100 => 43,  92 => 38,  85 => 37,  73 => 30,  66 => 26,  62 => 25,  55 => 21,  49 => 18,  37 => 12,  32 => 10,  21 => 2,  265 => 70,  249 => 58,  237 => 55,  232 => 53,  222 => 49,  213 => 48,  206 => 46,  195 => 45,  192 => 44,  188 => 43,  178 => 35,  171 => 33,  157 => 32,  144 => 29,  129 => 28,  126 => 27,  123 => 26,  106 => 25,  103 => 24,  99 => 23,  95 => 21,  80 => 16,  71 => 15,  60 => 11,  51 => 9,  47 => 8,  43 => 15,  38 => 4,  35 => 3,  29 => 2,);
    }
}
