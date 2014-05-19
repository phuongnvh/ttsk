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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "<div class=\"row-fluid\">
    <div class=\"span6 hidden-phone\">
        <div id=\"editable-sample_info\" class=\"dataTables_info\">Showing 1 to ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["numItemsPerPage"]) ? $context["numItemsPerPage"] : null), "html", null, true);
            echo " of ";
            echo twig_escape_filter($this->env, (isset($context["totalCount"]) ? $context["totalCount"] : null), "html", null, true);
            echo " entries</div>
    </div>
    <div class=\"span6\">
        <div class=\"dataTables_paginate paging_bootstrap pagination\">
            <ul>
                ";
            // line 9
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null)))) {
                // line 10
                echo "                    <li class=\"first\">
                        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["first"]) ? $context["first"] : null)))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
                echo "\">Previous</a>
                    <li>
                ";
            }
            // line 20
            echo "
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "                    ";
                if (((isset($context["page"]) ? $context["page"] : null) != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 23
                    echo "                        <li>
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["page"]) ? $context["page"] : null)))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a>
                        </li>
                    ";
                } else {
                    // line 27
                    echo "                        <li class=\"active\">
                            <a href=\"#\">";
                    // line 28
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
                echo "\">Next</a>
                    </li>
                ";
            }
            // line 38
            echo "
                ";
            // line 39
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null)))) {
                // line 40
                echo "                    <li class=\"last\">
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["last"]) ? $context["last"] : null)))), "html", null, true);
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
        return array (  124 => 44,  115 => 40,  113 => 39,  101 => 34,  96 => 32,  84 => 28,  81 => 27,  70 => 23,  67 => 22,  63 => 21,  54 => 17,  46 => 14,  40 => 11,  25 => 4,  104 => 35,  90 => 31,  86 => 14,  74 => 13,  57 => 12,  53 => 10,  48 => 8,  44 => 6,  28 => 4,  24 => 3,  19 => 1,  246 => 49,  243 => 48,  238 => 12,  164 => 84,  160 => 83,  156 => 82,  152 => 81,  134 => 66,  118 => 41,  110 => 38,  108 => 48,  100 => 43,  92 => 38,  85 => 37,  73 => 24,  66 => 26,  62 => 25,  55 => 21,  49 => 15,  37 => 10,  32 => 10,  21 => 2,  265 => 70,  249 => 58,  237 => 55,  232 => 53,  222 => 49,  213 => 48,  206 => 46,  195 => 45,  192 => 44,  188 => 43,  178 => 35,  171 => 33,  157 => 32,  144 => 29,  129 => 28,  126 => 27,  123 => 26,  106 => 25,  103 => 24,  99 => 33,  95 => 21,  80 => 16,  71 => 15,  60 => 20,  51 => 16,  47 => 8,  43 => 15,  38 => 4,  35 => 9,  29 => 2,);
    }
}
