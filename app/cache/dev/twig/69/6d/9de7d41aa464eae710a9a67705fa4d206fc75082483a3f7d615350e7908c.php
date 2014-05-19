<?php

/* CMSAdminBundle:Article:index.html.twig */
class __TwigTemplate_696d9de7d41aa464eae710a9a67705fa4d206fc75082483a3f7d615350e7908c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CMSAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CMSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Article";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"span12\">
    <!-- BEGIN BASIC PORTLET-->
    <div class=\"widget red\">
        <div class=\"widget-title\">
            <h4><i class=\"icon-reorder\"></i> List Article Table</h4>
        <span class=\"tools\">
            <a class=\"icon-chevron-down\" href=\"javascript:;\"></a>
            <a class=\"icon-remove\" href=\"javascript:;\"></a>
        </span>
        </div>
        <div class=\"widget-body\">
            <div class=\"clearfix\">
                 <div class=\"btn-group\">
                     <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\" class=\"btn green\">
                         Add New <i class=\"icon-plus\"></i>
                     </a>
                 </div>
                 <div class=\"btn-group pull-right\">
                     <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">Tools <i class=\"icon-angle-down\"></i>
                     </button>
                     <ul class=\"dropdown-menu pull-right\">
                         <li><a href=\"#\">Delete All</a></li>
                         <li><a href=\"#\">Save as PDF</a></li>
                         <li><a href=\"#\">Export to Excel</a></li>
                     </ul>
                 </div>
             </div>
             <div class=\"space15\"></div>
            <table class=\"table table-striped table-bordered table-advance table-hover\">
                <thead>
                <tr>
                    <th class=\"sorting_disabled\"><input class=\"group-checkable\" type=\"checkbox\"></th>
                    <th class=\"hidden-phone\">";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
                    <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
                    <th>Group</th>
                    <th class=\"hidden-phone\">";
        // line 41
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date Create", "a.dateCreate");
        echo "</th>
                    <th class=\"hidden-phone\">";
        // line 42
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Views", "a.views");
        echo "</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "                    <tr>
                        <td class=\"checkbox-column\">
                            <input class=\"checkboxes\" type=\"checkbox\">
                        </td>
                        <td class=\"hidden-phone\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupArticle")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupArticle"), "name"), "html", null, true);
            }
            echo "</td>
                        <td class=\"hidden-phone\">";
            // line 55
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datecreate"), "H:i:s d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td class=\"hidden-phone\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "views"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-success\" title=\"Show\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-search\"></i></a>
                            <a class=\"btn btn-primary\" title=\"Edit\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
                            <a class=\"btn btn-danger\" title=\"Delete\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
            ";
        // line 66
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>
    <!-- END BASIC PORTLET-->
</div>
";
    }

    public function getTemplateName()
    {
        return "CMSAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 66,  149 => 64,  139 => 60,  135 => 59,  131 => 58,  126 => 56,  120 => 55,  114 => 54,  110 => 53,  106 => 52,  100 => 48,  96 => 47,  88 => 42,  84 => 41,  79 => 39,  75 => 38,  53 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
