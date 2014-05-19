<?php

/* CMSMainBundle:Default:group.html.twig */
class __TwigTemplate_ff6da8b2f02516baff96c31be404754fdbf3d7991ceff84201f69a356c6d5c3b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">

        <div class=\"col-sm-8 blog-main\">
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "articles"), "count")) {
            // line 8
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 9
                echo "                <div class=\"blog-post\">
                    <h2 class=\"blog-post-title\"><a href=\"";
                // line 10
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
                // line 11
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datecreate")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "datecreate"), "H:i d/m/Y"), "html", null, true);
                }
                echo "</p>
                    <div class=\"blog-post-image\">
                        <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/article/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title"), "html", null, true);
                echo "\">
                        </a>
                    </div>
                    <div class=\"blog-post-description\">
                        ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sortDescription"), "html", null, true);
                echo " ....
                    </div>
                    <p class=\"blog-post-view-more\"><a href=\"";
                // line 20
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
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            <div class=\"alert\">
                <span>Dữ liệu đang được cập nhật</span>
            </div><!-- /.blog-post -->
        ";
        }
        // line 28
        echo "            <!--
            <ul class=\"pagination pagination-custom\">
                <li class=\"disabled\"><span>Đầu</span></li>
                <li class=\"active\"><span>1 <span class=\"sr-only\">(current)</span></span></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">Cuối</a></li>
            </ul>
-->
        </div><!-- /.blog-main -->
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CMSMainBundle:Default:rightSlideBar", array("cpc" => true)));
        echo "
    </div><!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "CMSMainBundle:Default:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  116 => 28,  110 => 24,  107 => 23,  95 => 20,  90 => 18,  80 => 14,  71 => 13,  64 => 11,  53 => 10,  50 => 9,  45 => 8,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
