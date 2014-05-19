<?php

/* CMSMainBundle:Default:index.html.twig */
class __TwigTemplate_942affb435c24d55a101bf08908826ab0ebfc1e475a139e613076859e66016ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CMSMainBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CMSMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Trang chủ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"blog-banner\">
        <div class=\"row\">
            <div class=\"col-sm-8 blog-banner-main\">
                ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialGroup"]) ? $context["specialGroup"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["special"]) {
            // line 8
            echo "                <div class=\"flipper\">
                    <div class=\"flipper-1\">
                        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "name"), "html", null, true);
            echo "\">
                            <img alt=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "name"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/group/145x145/"), "html", null, true);
            echo "s_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "image"), "html", null, true);
            echo "\" >
                        </a>
                    </div>
                    <div class=\"flipper-2\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "name"), "html", null, true);
            echo "\">
                            <img alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "name"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/group/145x145/"), "html", null, true);
            echo "s_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["special"]) ? $context["special"] : null), "imageActive"), "html", null, true);
            echo "\" />
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </div>
            <div class=\"col-sm-4 blog-banner-slide-bar\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialGroup"]) ? $context["specialGroup"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["special"]) {
            // line 24
            echo "                    <ul class=\"newest\">
                    ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["special"]) ? $context["special"] : null), "articles"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 26
                echo "                        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") < 3)) {
                    // line 27
                    echo "                        <li>
                            <a href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/article/300x300/"), "html", null, true);
                    echo "m_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\"></a>
                            <a class=\"opacity\" href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "</a>
                        </li>
                        ";
                }
                // line 32
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-sm-8 blog-main\">

            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "            <div class=\"blog-post\">
                <h2 class=\"blog-post-title\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
            echo "</a></h2>
                <p class=\"blog-post-meta\">";
            // line 46
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datecreate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datecreate"), "H:i d/m/Y"), "html", null, true);
            }
            echo "</p>
                <div class=\"blog-post-image\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/article/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
            echo "\">
                    </a>
                </div>
                <div class=\"blog-post-description\">
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sortDescription"), "html", null, true);
            echo " ....
                </div>
                <p class=\"blog-post-view-more\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\" title=\"Xem tiếp\">Xem tiếp</a></p>
            </div><!-- /.blog-post -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            ";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
            <ul class=\"pagination pagination-custom\">
                <li class=\"disabled\"><span>Đầu</span></li>
                <li class=\"active\"><span>1 <span class=\"sr-only\">(current)</span></span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">Cuối</a></li>
            </ul>

        </div><!-- /.blog-main -->
        ";
        // line 70
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CMSMainBundle:Default:rightSlideBar", array("cpc" => false)));
        echo "
    </div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "CMSMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 70,  249 => 58,  237 => 55,  232 => 53,  222 => 49,  213 => 48,  206 => 46,  195 => 45,  192 => 44,  188 => 43,  178 => 35,  171 => 33,  157 => 32,  144 => 29,  129 => 28,  126 => 27,  123 => 26,  106 => 25,  103 => 24,  99 => 23,  95 => 21,  80 => 16,  71 => 15,  60 => 11,  51 => 10,  47 => 8,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
