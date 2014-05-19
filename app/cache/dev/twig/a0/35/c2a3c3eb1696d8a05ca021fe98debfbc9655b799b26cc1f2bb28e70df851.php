<?php

/* CMSAdminBundle:Security:login.html.twig */
class __TwigTemplate_a035c2a3c3eb1696d8a05ca021fe98debfbc9655b799b26cc1f2bb28e70df851 extends Twig_Template
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
   <title>Login</title>
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
        echo "\" rel=\"stylesheet\" id=\"style_color\" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"lock\">
    <div class=\"lock-header\">
        <!-- BEGIN LOGO -->
        <a class=\"center\" id=\"logo\" href=\"index.html\">
            <img class=\"center\" alt=\"logo\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/logo.png"), "html", null, true);
        echo "\">
        </a>
        <!-- END LOGO -->
    </div>
    <div class=\"login-wrap\">
        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_cms_admin_security_login_check");
        echo "\" method=\"post\">
            <div class=\"metro single-size red\">
                <div class=\"locked\">
                    <i class=\"icon-lock\"></i>
                    <span>Login</span>
                </div>
            </div>
            <div class=\"metro double-size green\">
                <div class=\"input-append lock-input\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"required\" placeholder=\"username\">
                </div>
            </div>
            <div class=\"metro double-size yellow\">
                <div class=\"input-append lock-input\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"required\" placeholder=\"password\">
                </div>
            </div>
            <div class=\"metro single-size terques login\">
                <button type=\"submit\" class=\"btn login-btn\">
                    Login
                    <i class=\" icon-long-arrow-right\"></i>
                </button>
            </div>
            <div class=\"login-footer\">
                <div class=\"remember-hint pull-left\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\"  /> Remember Me
                </div>
                <div class=\"forgot-hint pull-right\">
                    <a id=\"forget-password\" class=\"\" href=\"javascript:;\">Forgot Password?</a>
                </div>
            </div>
        </form>
    </div>
</body>
<!-- END BODY -->
</html>";
    }

    public function getTemplateName()
    {
        return "CMSAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  71 => 30,  63 => 25,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
