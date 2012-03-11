<?php

/* TukUserBundle:Default:register.html.twig */
class __TwigTemplate_6e10395378bba2227e190ceca814c2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5670646_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5670646_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5670646_part_1_register_1.js");
            // line 5
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "5670646"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5670646") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5670646.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"welcome content-child\">
<p>
\t<span class=\"ttu cfix\">Bienvenidos a Tukmania.</span>
\t<span class=\"cfix\">Te invitamos a participar y ganar los tuk que mas te gusten, solo tienes que hacer click.</span>
</p>
</div>

<div id=\"login-home\" class=\"content-child\">
\t<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check"), "html", null, true);
        echo "\" method=\"post\" class=\"login-form validate-form\">
\t\t<div>
\t\t\t<input id=\"login_username\" type=\"text\" name=\"account[email]\" required=\"required\" 
\t\t\tmaxlength=\"255\" placeholder=\"Escribe tu email\" data-title=\"Escribe tu email\">
\t\t</div>
\t\t<div>
\t\t\t<input id=\"login_username\" type=\"password\" name=\"account[password]\" required=\"required\" 
\t\t\tmaxlength=\"255\" placeholder=\"Escribe tu contraseña\" data-title=\"Escribe tu contraseña\">
\t\t</div>
\t\t<p>
\t\t\t<button type=\"submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Register me"), "method"), "html", null, true);
        echo "</button>
\t\t</p>
\t</form>
</div>

<div class=\"register content-child\">
\t<div class=\"are-new\">
\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "You're new in Tuk?"), "method"), "html", null, true);
        echo "
\t\t<span class=\"ttu\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "You're new in Tuk?"), "method"), "html", null, true);
        echo "</span>
\t</div>
\t<form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"register-form validate-form\">
\t\t<div>
\t\t  ";
        // line 40
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "names"));
        echo "
\t\t  ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "names"), array("attr" => array("placeholder" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the names"), "method"), "data-title" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the names"), "method"), "class" => "name")));
        // line 42
        echo "
\t  </div>
\t  <div>
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "last_names"));
        echo "
\t\t  ";
        // line 46
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "last_names"), array("attr" => array("placeholder" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the last names"), "method"), "data-title" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the last names"), "method"), "class" => "name")));
        // line 47
        echo "
\t  </div>
\t  <div>
\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "dni"));
        echo "
\t\t  ";
        // line 51
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "dni"), array("attr" => array("placeholder" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the dni"), "method"), "data-title" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the dni"), "method"), "class" => "rut")));
        // line 52
        echo "
\t  </div>
\t  <div>
\t  \t<input type=\"text\" data-title=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the email"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the email"), "method"), "html", null, true);
        echo "\" maxlength=\"255\" required=\"required\" name=\"account[email]\" id=\"account_email\">
\t  </div>
\t  <div>
\t  <div>
\t  \t<input type=\"password\" data-title=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the password"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the password"), "method"), "html", null, true);
        echo "\" maxlength=\"255\" required=\"required\" name=\"account[password]\" id=\"account_password\">
\t  </div>
\t  <div>
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "birthday_at"));
        echo "
\t\t  ";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "birthday_at"), array("attr" => array("placeholder" => "AAAA/MM/DD", "data-title" => $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Type the birthday at"), "method"), "class" => "datepicker")));
        // line 64
        echo "
\t  </div>
\t
\t        ";
        // line 67
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t    <p>
\t        <button type=\"submit\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "__"), "tr", array(0 => "Register me"), "method"), "html", null, true);
        echo "</button>
\t    </p>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "TukUserBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
