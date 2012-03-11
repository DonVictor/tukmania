<?php

/* ::login.html.twig */
class __TwigTemplate_cb3c7f38637472d235f250d0e37d2517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__"] = $this->env->loadTemplate("::macros.html.twig");
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
\t\t\t\t";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3aa1f14_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_001-jquery-1.7.1.min_1.js");
            // line 12
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_002-jquery-ui-1.8.18.custom.min_2.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_003-jquery.color_3.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_004-jquery.Jcrop.min_4.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_005-jquery.qtip-1.0.0-rc3.min_5.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_006-jquery.tipTip.min_6.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_007-jquery.validate.min_7.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_008-additional-methods.min_8.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_009-jquery.form_9.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_010-jquery.metadata_10.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_011-jquery.mockjax_11.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_012-jquery.Rut.min_12.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_013-sticky.min_13.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_014-jquery.pnotify.min_14.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_015-jquery.noty_15.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_100-jquery.layout_16.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "3aa1f14_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14_part_1_localization_17.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        } else {
            // asset "3aa1f14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3aa1f14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3aa1f14.js");
            echo "\t\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t\t\t\t
\t\t    <!-- custom javascripts, commonly -->
\t\t    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "\t\t\t\t
\t\t\t\t<!-- common styles (bundles), commonly it's one less file -->
\t\t    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "48d2f08_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_Jcrop_1.css");
            // line 20
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_close_2.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_jquery-ui-1.8.18.custom_3.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_jquery.Jcrop_4.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_jquery.noty_5.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_sticky.min_6.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
            // asset "48d2f08_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08_part_1_tipTip_7.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
        } else {
            // asset "48d2f08"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48d2f08") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48d2f08.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "\t\t    
\t\t    ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9d3a545_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9d3a545_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9d3a545_part_1_app_1.css");
            // line 24
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
        } else {
            // asset "9d3a545"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9d3a545") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9d3a545.css");
            echo "\t\t    \t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "\t\t\t\t<!-- json languages -->
\t\t    <script>var translate = ";
        // line 27
        echo $this->env->getExtension('actions')->renderAction("TukMainBundle:Default:translate", array(), array());
        echo ";</script>
\t\t\t\t
    </head>
    <body>
    <div id=\"login-register\" class=\"cfix\">
    \t<div id=\"sidebar-logo\">
    \t</div>
    \t<div id=\"content\">
        ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "      </div>
\t\t</div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Registrate";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
