<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_37212d0b0411f1af7d481efa4da47bdebfc97681de790fbda602b8d5b5e7cded extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\" />
    <title>404 Page</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style-default.css"), "html", null, true);
        echo "\" data-source=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_color\" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"error-404\">
<div class=\"error-wrap error-wrap-404\">
    <div class=\"metro big terques\">
        <span> OOPS! </span>
    </div>
    <div class=\"metro green\">
        <span> 4 </span>
    </div>
    <div class=\"metro yellow\">
        <span> 0 </span>
    </div>
    <div class=\"metro purple\">
        <span> 4 </span>
    </div>
    <div class=\"metro double red\">
        <span class=\"page-txt\"> Page Not Found </span>
    </div>
    <div class=\"metro gray\">
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "schemeAndHttpHost"), "html", null, true);
        echo "\" class=\"home\"><i class=\"icon-home\"></i> </a>
    </div>

</div>
</body>
<!-- END BODY -->
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 39,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
