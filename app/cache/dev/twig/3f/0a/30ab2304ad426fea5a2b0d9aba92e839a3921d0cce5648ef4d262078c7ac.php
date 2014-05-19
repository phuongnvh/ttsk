<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_3f0a30ab2304ad426fea5a2b0d9aba92e839a3921d0cce5648ef4d262078c7ac extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  288 => 4,  286 => 3,  282 => 2,  271 => 1,  261 => 94,  250 => 92,  237 => 90,  228 => 85,  226 => 84,  224 => 83,  222 => 82,  218 => 79,  212 => 76,  210 => 75,  206 => 74,  203 => 73,  198 => 69,  196 => 68,  193 => 66,  191 => 65,  188 => 63,  186 => 62,  183 => 60,  180 => 58,  178 => 57,  174 => 54,  171 => 53,  167 => 50,  165 => 49,  148 => 46,  128 => 43,  122 => 39,  119 => 37,  103 => 24,  98 => 23,  95 => 22,  93 => 21,  90 => 20,  86 => 17,  81 => 15,  74 => 11,  72 => 10,  65 => 94,  62 => 93,  60 => 92,  57 => 91,  52 => 89,  50 => 53,  45 => 37,  42 => 36,  40 => 20,  37 => 19,  30 => 9,  27 => 8,  492 => 233,  488 => 196,  485 => 195,  481 => 21,  478 => 20,  473 => 8,  465 => 235,  463 => 233,  457 => 230,  450 => 226,  443 => 222,  439 => 221,  432 => 217,  428 => 216,  424 => 215,  420 => 214,  401 => 197,  399 => 195,  396 => 194,  387 => 191,  384 => 190,  379 => 189,  370 => 186,  367 => 185,  363 => 184,  354 => 178,  307 => 138,  299 => 137,  291 => 136,  283 => 135,  266 => 125,  258 => 124,  241 => 114,  233 => 113,  225 => 112,  217 => 111,  200 => 70,  192 => 100,  184 => 99,  176 => 56,  124 => 40,  118 => 57,  78 => 23,  73 => 20,  69 => 9,  63 => 18,  59 => 17,  55 => 90,  51 => 15,  47 => 52,  43 => 13,  39 => 12,  32 => 14,  23 => 1,  153 => 66,  149 => 64,  139 => 64,  135 => 63,  131 => 45,  126 => 42,  120 => 55,  114 => 54,  110 => 53,  106 => 52,  100 => 42,  96 => 47,  88 => 42,  84 => 16,  79 => 39,  75 => 22,  53 => 19,  38 => 6,  35 => 15,  29 => 3,);
    }
}
