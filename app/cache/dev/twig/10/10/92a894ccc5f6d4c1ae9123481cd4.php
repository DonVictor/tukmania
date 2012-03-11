<?php

/* TukMainBundle:Default:register.html.twig */
class __TwigTemplate_101092a894ccc5f6d4c1ae9123481cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tTukmania!
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"content\">
\t<div id=\"banner-logo\">
\t
\t</div>
\t<div id=\"logo\">
\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TukMainBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
