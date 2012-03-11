<?php

/* TukModelBundle:Default:index.html.twig */
class __TwigTemplate_dee0744ca578759feb7006d51a2a70ff extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "TukModelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
