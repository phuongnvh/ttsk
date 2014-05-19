<?php

/* CMSMainBundle:Default:rightSlideBar.html.twig */
class __TwigTemplate_36fb0d694ac0abcf8c3ed8931cbf930f662e5ce0269d9b498c7c256508ff7249 extends Twig_Template
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
        echo "<div class=\"col-sm-4 blog-sidebar\">
    ";
        // line 2
        if ((isset($context["cpc"]) ? $context["cpc"] : null)) {
            // line 3
            echo "    <div class=\"sidebar-module ad\">
        <a href=\"#\" title=\"cpc\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/ad.png"), "html", null, true);
            echo "\" alt=\"\">
        </a>
    </div>
    ";
        }
        // line 9
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specials"]) ? $context["specials"] : null));
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
            // line 10
            echo "        ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                // line 11
                echo "            <div class=\"sidebar-module\">
                <h4>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "</h4>
                ";
                // line 13
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "articles"));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 14
                    echo "                <div class=\"sidebar-half\">
                    <div class=\"sidebar-img\">
                        <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/article/145x145/"), "html", null, true);
                    echo "s_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">
                        </a>
                    </div>
                    <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "</a>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </div>
        ";
            } else {
                // line 25
                echo "            <div class=\"sidebar-module\">
                <h4>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name"), "html", null, true);
                echo "</h4>
                ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "articles"));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 28
                    echo "                <div class=\"sidebar-full\">
                    <div class=\"sidebar-img\">
                        <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/article/300x300/"), "html", null, true);
                    echo "m_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">
                        </a>
                    </div>
                    <div class=\"sidebar-description\">
                        <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "</a>
                        <p class=\"sidebar-date-time\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "datecreate"), "d/m/Y"), "html", null, true);
                    echo "</p>
                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            </div>
        ";
            }
            // line 42
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
        // line 43
        echo "
    <div class=\"sidebar-module view-best\">
        <h4>TIN XEM NHIỀU NHẤT</h4>
        <ul class=\"sidebar-best\">
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewBests"]) ? $context["viewBests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 48
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "title"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </ul>
    </div>
</div><!-- /.blog-sidebar -->";
    }

    public function getTemplateName()
    {
        return "CMSMainBundle:Default:rightSlideBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 50,  182 => 43,  168 => 42,  154 => 36,  145 => 35,  125 => 30,  121 => 28,  117 => 27,  59 => 12,  56 => 11,  22 => 2,  124 => 44,  115 => 40,  113 => 26,  101 => 34,  96 => 32,  84 => 28,  81 => 27,  70 => 23,  67 => 14,  63 => 13,  54 => 17,  46 => 14,  40 => 11,  25 => 4,  104 => 35,  90 => 20,  86 => 14,  74 => 13,  57 => 12,  53 => 10,  48 => 8,  44 => 6,  28 => 5,  24 => 3,  19 => 1,  246 => 49,  243 => 48,  238 => 12,  164 => 40,  160 => 83,  156 => 82,  152 => 81,  134 => 31,  118 => 41,  110 => 25,  108 => 48,  100 => 43,  92 => 38,  85 => 37,  73 => 24,  66 => 26,  62 => 25,  55 => 21,  49 => 15,  37 => 10,  32 => 10,  21 => 2,  265 => 70,  249 => 58,  237 => 55,  232 => 53,  222 => 49,  213 => 48,  206 => 46,  195 => 45,  192 => 48,  188 => 47,  178 => 35,  171 => 33,  157 => 32,  144 => 29,  129 => 28,  126 => 27,  123 => 26,  106 => 23,  103 => 24,  99 => 33,  95 => 21,  80 => 17,  71 => 16,  60 => 20,  51 => 16,  47 => 8,  43 => 15,  38 => 4,  35 => 9,  29 => 2,);
    }
}
