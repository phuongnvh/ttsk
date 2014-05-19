<?php

/* CMSAdminBundle:Plugin:sliding.html.twig */
class __TwigTemplate_4b409147ef547a2a9bd38bf27f6769d1ba094ad4c6d7ce5dd9b0c5bcf2f84926 extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "<div class=\"row-fluid\">
    <div class=\"span6 hidden-phone\">
        <div id=\"editable-sample_info\" class=\"dataTables_info\">Showing 1 to ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["numItemsPerPage"]) ? $context["numItemsPerPage"] : $this->getContext($context, "numItemsPerPage")), "html", null, true);
            echo " of ";
            echo twig_escape_filter($this->env, (isset($context["totalCount"]) ? $context["totalCount"] : $this->getContext($context, "totalCount")), "html", null, true);
            echo " entries</div>
    </div>
    <div class=\"span6\">
        <div class=\"dataTables_paginate paging_bootstrap pagination\">
            <ul>
                ";
            // line 9
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 10
                echo "                    <li class=\"first\">
                        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">First</a>
                    </li>
                ";
            }
            // line 14
            echo "
                ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                echo "                    <li class=\"prev\">
                        <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">Previous</a>
                    <li>
                ";
            }
            // line 20
            echo "
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "                    ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 23
                    echo "                        <li>
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                } else {
                    // line 27
                    echo "                        <li class=\"active\">
                            <a href=\"#\">";
                    // line 28
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                }
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                ";
            // line 33
            if (array_key_exists("next", $context)) {
                // line 34
                echo "                    <li class=\"next\">
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">Next</a>
                    </li>
                ";
            }
            // line 38
            echo "
                ";
            // line 39
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 40
                echo "                    <li class=\"last\">
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">Last</a>
                    </li>
                ";
            }
            // line 44
            echo "            </ul>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "CMSAdminBundle:Plugin:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  113 => 39,  104 => 35,  101 => 34,  99 => 33,  70 => 23,  67 => 22,  54 => 17,  49 => 15,  46 => 14,  25 => 4,  21 => 2,  19 => 1,  288 => 4,  286 => 3,  282 => 2,  271 => 1,  261 => 94,  250 => 92,  237 => 90,  228 => 85,  226 => 84,  224 => 83,  222 => 82,  218 => 79,  212 => 76,  210 => 75,  206 => 74,  203 => 73,  198 => 69,  196 => 68,  193 => 66,  191 => 65,  188 => 63,  186 => 62,  183 => 60,  180 => 58,  178 => 57,  174 => 54,  171 => 53,  167 => 50,  165 => 49,  148 => 46,  128 => 43,  122 => 39,  119 => 37,  103 => 24,  98 => 23,  95 => 22,  93 => 21,  90 => 31,  86 => 17,  81 => 27,  74 => 11,  72 => 10,  65 => 94,  62 => 93,  60 => 20,  57 => 91,  52 => 89,  50 => 53,  45 => 37,  42 => 36,  40 => 11,  37 => 10,  30 => 9,  27 => 8,  492 => 233,  488 => 196,  485 => 195,  481 => 21,  478 => 20,  473 => 8,  465 => 235,  463 => 233,  457 => 230,  450 => 226,  443 => 222,  439 => 221,  432 => 217,  428 => 216,  424 => 215,  420 => 214,  401 => 197,  399 => 195,  396 => 194,  387 => 191,  384 => 190,  379 => 189,  370 => 186,  367 => 185,  363 => 184,  354 => 178,  307 => 138,  299 => 137,  291 => 136,  283 => 135,  266 => 125,  258 => 124,  241 => 114,  233 => 113,  225 => 112,  217 => 111,  200 => 70,  192 => 100,  184 => 99,  176 => 56,  124 => 44,  118 => 41,  78 => 23,  73 => 24,  69 => 9,  63 => 21,  59 => 17,  55 => 90,  51 => 16,  47 => 52,  43 => 13,  39 => 12,  32 => 14,  23 => 1,  153 => 66,  149 => 64,  139 => 64,  135 => 63,  131 => 45,  126 => 42,  120 => 55,  114 => 54,  110 => 38,  106 => 52,  100 => 42,  96 => 32,  88 => 42,  84 => 28,  79 => 39,  75 => 22,  53 => 19,  38 => 6,  35 => 9,  29 => 3,);
    }
}
