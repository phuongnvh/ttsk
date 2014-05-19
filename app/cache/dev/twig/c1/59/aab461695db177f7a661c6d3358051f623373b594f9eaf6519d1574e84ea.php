<?php

/* CMSAdminBundle::layout.html.twig */
class __TwigTemplate_c159aab461695db177f7a661c6d3358051f623373b594f9eaf6519d1574e84ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
   <title>Admin Panel - ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
   <meta content=\"Admin Panel\" name=\"description\" />
   <meta content=\"Admin Panel\" name=\"author\" />
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/data-tables/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
   <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/style-default.css"), "html", null, true);
        echo "\" data-source=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_color\" />
   <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/bootstrap-colorpicker/css/colorpicker.css"), "html", null, true);
        echo "\" />
   ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <script type=\"text/javascript\">
        var base_url = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "schemeAndHttpHost"), "html", null, true);
        echo "\";
        if(base_url == 'http://localhost') base_url = 'http://localhost/FlatCMS/web';
    </script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class=\"fixed-top\">
   <!-- BEGIN HEADER -->
   <div id=\"header\" class=\"navbar navbar-inverse navbar-fixed-top\">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class=\"navbar-inner\">
           <div class=\"container-fluid\">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class=\"sidebar-toggle-box hidden-phone\">
                   <div class=\"icon-reorder\"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class=\"brand\" href=\"index.html\">
                   <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/logo.png"), "html", null, true);
        echo "\" alt=\"HR\" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class=\"btn btn-navbar collapsed\" id=\"main_menu_trigger\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                   <span class=\"icon-bar\"></span>
                   <span class=\"icon-bar\"></span>
                   <span class=\"icon-bar\"></span>
                   <span class=\"arrow\"></span>
               </a>
               <div class=\"top-nav \">
                   <ul class=\"nav pull-right top-menu\" >
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class=\"dropdown\">
                           <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                              <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/avatar1_small.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "user"), "username"), "html", null, true);
        echo "\">
                               <span class=\"username\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "user"), "username"), "html", null, true);
        echo "</span>
                               <b class=\"caret\"></b>
                           </a>
                           <ul class=\"dropdown-menu extended logout\">
                               <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "user"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-user\"></i> My Profile</a></li>
                               <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "user"), "id"))), "html", null, true);
        echo "\"><i class=\"icon-cog\"></i> Change Password</a></li>
                               <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutUrl("main"), "html", null, true);
        echo "\"><i class=\"icon-key\"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id=\"container\" class=\"row-fluid\">
      <!-- BEGIN SIDEBAR -->
      <div class=\"sidebar-scroll\">
        <div id=\"sidebar\" class=\"nav-collapse collapse\">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class=\"navbar-inverse\">
            <form class=\"navbar-search visible-phone\">
               <input type=\"text\" class=\"search-query\" placeholder=\"Search\" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class=\"sidebar-menu\">
              <li class=\"sub-menu\">
                  <a href=\"javascript:;\">
                      <i class=\"icon-tasks\"></i>
                      <span>Group Article</span>
                      <span class=\"arrow\"></span>
                  </a>
                  <ul class=\"sub\">
                      <li ";
        // line 98
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "grouparticle")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("grouparticle");
        echo "\">Group Articles</a></li>
                      <li ";
        // line 99
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "grouparticle_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("grouparticle_new");
        echo "\">New Group</a></li>
                      <li ";
        // line 100
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "specgrp")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("specgrp");
        echo "\">Special Group</a></li>
                      <li ";
        // line 101
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "specgrp_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("specgrp_new");
        echo "\">New Special Group</a></li>
                  </ul>
              </li>
              <li class=\"sub-menu\">
                  <a href=\"javascript:;\">
                      <i class=\"icon-book\"></i>
                      <span>Article</span>
                      <span class=\"arrow\"></span>
                  </a>
                  <ul class=\"sub\">
                      <li ";
        // line 111
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "article")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">Articles</a></li>
                      <li ";
        // line 112
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "article_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\">New Article</a></li>
                      <li ";
        // line 113
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "tag")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tag");
        echo "\">Tags</a></li>
                      <li ";
        // line 114
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "tag_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tag_new");
        echo "\">New Tag</a></li>
                  </ul>
              </li>
              <li class=\"sub-menu\">
                  <a href=\"javascript:;\">
                      <i class=\"icon-file-alt\"></i>
                      <span>CMS Pages</span>
                      <span class=\"arrow\"></span>
                  </a>
                  <ul class=\"sub\">
                      <li ";
        // line 124
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "cmspage")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("cmspage");
        echo "\">List CMS Pages</a></li>
                      <li ";
        // line 125
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "cmspage_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("cmspage_new");
        echo "\">New CMS Pages</a></li>
                  </ul>
              </li>
              <li class=\"sub-menu\">
                  <a href=\"javascript:;\">
                      <i class=\"icon-user\"></i>
                      <span>Users &amp; Roles</span>
                      <span class=\"arrow\"></span>
                  </a>
                  <ul class=\"sub\">
                      <li ";
        // line 135
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "user")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Users</a></li>
                      <li ";
        // line 136
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "user_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">New User</a></li>
                      <li ";
        // line 137
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "role")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("role");
        echo "\">Roles</a></li>
                      <li ";
        // line 138
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "role_new")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("role_new");
        echo "\">New Role</a></li>
                  </ul>
              </li>
              <li>
                  <a href=\"#\">
                    <i class=\"icon-wrench\"></i>
                    <span>Setting</span>
                  </a>
              </li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id=\"main-content\">
         <!-- BEGIN PAGE CONTAINER-->
         <div class=\"container-fluid\">
            <!-- BEGIN PAGE HEADER-->
            <div class=\"row-fluid\">
               <div class=\"span12\">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id=\"theme-change\" class=\"hidden-phone\">
                       <i class=\"icon-cogs\"></i>
                        <span class=\"settings\">
                            <span class=\"text\">Theme Color:</span>
                            <span class=\"colors\">
                                <span class=\"color-default\" data-style=\"default\"></span>
                                <span class=\"color-green\" data-style=\"green\"></span>
                                <span class=\"color-gray\" data-style=\"gray\"></span>
                                <span class=\"color-purple\" data-style=\"purple\"></span>
                                <span class=\"color-red\" data-style=\"red\"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class=\"page-title\">
                     Dashboard
                   </h3>
                   ";
        // line 178
        echo $this->env->getExtension('knp_menu')->render("main");
        echo "
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            ";
        // line 184
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "successfull"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 185
            echo "            <div class=\"flash-notice alert-success alert\">
             ";
            // line 186
            echo (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"));
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 190
            echo "            <div class=\"flash-notice alert-danger alert\">
             ";
            // line 191
            echo (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage"));
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "            <div class=\"row-fluid\">
                ";
        // line 195
        $this->displayBlock('content', $context, $blocks);
        // line 197
        echo "            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id=\"footer\">
       2014 &copy; FlatCMS Version 1.0.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
   <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/excanvas.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/respond.js"), "html", null, true);
        echo "\"></script>
   <![endif]-->

   <!--common script for all pages-->
   <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/common-scripts.js"), "html", null, true);
        echo "\"></script>
   <script>
        \$(document).ready(function(){
           \$('.active').parent().parent().addClass('active');
           \$('#search-form').attr('action','";
        // line 230
        echo $this->env->getExtension('routing')->getPath($this->getAttribute(twig_split_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), "_"), 0, array(), "array"));
        echo "');
        });
   </script>
";
        // line 233
        $this->displayBlock('javascripts', $context, $blocks);
        // line 235
        echo "   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "   ";
    }

    // line 195
    public function block_content($context, array $blocks = array())
    {
        // line 196
        echo "                ";
    }

    // line 233
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CMSAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 233,  488 => 196,  485 => 195,  481 => 21,  478 => 20,  473 => 8,  465 => 235,  463 => 233,  457 => 230,  450 => 226,  443 => 222,  439 => 221,  432 => 217,  428 => 216,  424 => 215,  420 => 214,  401 => 197,  399 => 195,  396 => 194,  387 => 191,  384 => 190,  379 => 189,  370 => 186,  367 => 185,  363 => 184,  354 => 178,  307 => 138,  299 => 137,  291 => 136,  283 => 135,  266 => 125,  258 => 124,  241 => 114,  233 => 113,  225 => 112,  217 => 111,  200 => 101,  192 => 100,  184 => 99,  176 => 98,  124 => 58,  118 => 57,  78 => 23,  73 => 20,  69 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  32 => 8,  23 => 1,  153 => 66,  149 => 64,  139 => 64,  135 => 63,  131 => 62,  126 => 56,  120 => 55,  114 => 54,  110 => 53,  106 => 52,  100 => 42,  96 => 47,  88 => 42,  84 => 41,  79 => 39,  75 => 22,  53 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
