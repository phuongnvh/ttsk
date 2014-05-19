<?php

/* CMSMainBundle::layout.html.twig */
class __TwigTemplate_c735aab76b609804739e07cf4a490b7911de24da1657051aba951a67a4750d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/ico/favicon.ico"), "html", null, true);
        echo "\">

    <title>Thông tin sự kiện - ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/css/bootstrap-full.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/ie8-responsive-file-warning.js"), "html", null, true);
        echo "\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <script type=\"text/javascript\">
        var base_url = \"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "\";
    </script>
</head>

<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"logo\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "\" title=\"Home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/logo.png"), "html", null, true);
        echo "\"></a></div>
        <div class=\"banner\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/banner.png"), "html", null, true);
        echo "\"></div>
    </div>
</div>
<div class=\"nav-top\">
    <div class=\"container\">
        ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CMSMainBundle:Default:menu", array("position" => "top")));
        echo "
    </div>
</div>

<div class=\"container wrapper\">
    ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "</div>

<div class=\"footer\">
    <div class=\"nav-bot\">
        <div class=\"container\">
            <nav class=\"blog-nav\">
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getBaseURL", array(), "method"), "html", null, true);
        echo "\" title=\"Home page\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/logo-footer.png"), "html", null, true);
        echo "\" alt=\"thonginsukien.info\"></a>
                <a class=\"blog-nav-item active\" href=\"#\">Home</a>
                <a class=\"blog-nav-item\" href=\"#\">New features</a>
                <a class=\"blog-nav-item\" href=\"#\">Press</a>
                <a class=\"blog-nav-item\" href=\"#\">New hires</a>
                <a class=\"blog-nav-item\" href=\"#\">About</a>
            </nav>
        </div>
    </div>
    <div class=\"footer-content container\">
        ";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CMSMainBundle:Default:menu", array("position" => "bot")));
        echo "
        <div class=\"row info\">
            <p>Bản quyền © 2014 thongtinsukien.info<br>
            Ghi rõ nguồn thongtinsukien.info khi phát hành lại thông tin từ website này.<br>
            Website đang trong quá trình thử nghiệm, chờ cấp phép của Bộ Thông Tin và Truyền Thông
            </p>
        </div>
    </div>
</div>

<div class=\"trigger\"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/docs.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/js/common.js"), "html", null, true);
        echo "\"></script>
<script>
    var \$i = 0;
    var flat = 0;
    var \$lenght = \$(\".blog-banner-main .flipper\").length;

    \$(document).ready(function(){
        /* --- Setup right slide bar scroll ---*/
        // define value
        var \$scrollDom = \$('.blog-sidebar .view-best');
        var \$triggerDom = \$('.trigger');
        var \$viewTop = \$scrollDom.offset().top-20;
        var \$margin = (\$(window).width() - \$('.wrapper').width())/2 -15;
        \$scrollDom.clone().appendTo(\".trigger\");

        // fix margin value when window resize
        \$(window).resize(function(){
            \$margin = (\$(window).width() - \$('.wrapper').width())/2 -15;
            \$triggerDom.css('right',\$margin);
        });

        // scroll event process
        \$(window).scroll(function(){
            if(\$(this).scrollTop()>=\$viewTop){
                \$scrollDom.css('display','none');
                \$triggerDom.css({right: \$margin, display: 'block', top: (\$(this).scrollTop()+20)+'px'});
            }else{
                \$scrollDom.css('display','block');
                \$triggerDom.css('display','none');
            }
        });
        /* --- END Setup right slide bar scroll ---*/

        // setup flip banner event
        \$(\".newest:eq(0)\").addClass('active');
        setTimeout(\"counter(\$lenght)\",3000);
    });

    function counter(lenght)
    {
        \$lenght = lenght;
        if(\$i < \$lenght){
            var element = \".blog-banner-main .flipper:eq(\"+\$i+\")\";
            \$(element).poFlip({
                effect : 'random'
            });
            flat++;
        }else{
            \$i = 0;
            flat = 0;

            var element = \".blog-banner-main .flipper:eq(\"+\$i+\")\";
            \$(element).poFlip({
                effect : 'random'
            });
            flat++;
        }

        if(flat==2){
            var \$newFeed = \".newest:eq(\"+\$i+\")\";
            \$(\$newFeed).fadeOut().removeClass('active').next().fadeIn().addClass('active');
            \$i++;
            flat = 0;
        }
        setTimeout(\"counter(\$lenght)\",3000);
    }
</script>
</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CMSMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 49,  243 => 48,  238 => 12,  164 => 84,  160 => 83,  156 => 82,  152 => 81,  134 => 66,  118 => 56,  110 => 50,  108 => 48,  100 => 43,  92 => 38,  85 => 37,  73 => 30,  66 => 26,  62 => 25,  55 => 21,  49 => 18,  37 => 12,  32 => 10,  21 => 1,  265 => 70,  249 => 58,  237 => 55,  232 => 53,  222 => 49,  213 => 48,  206 => 46,  195 => 45,  192 => 44,  188 => 43,  178 => 35,  171 => 33,  157 => 32,  144 => 29,  129 => 28,  126 => 27,  123 => 26,  106 => 25,  103 => 24,  99 => 23,  95 => 21,  80 => 16,  71 => 15,  60 => 11,  51 => 10,  47 => 8,  43 => 15,  38 => 4,  35 => 3,  29 => 2,);
    }
}
