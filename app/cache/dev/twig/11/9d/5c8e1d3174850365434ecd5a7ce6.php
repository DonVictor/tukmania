<?php

/* TukMainBundle:Default:index.html.twig */
class __TwigTemplate_119d5c8e1d3174850365434ecd5a7ce6 extends Twig_Template
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
        echo "\t";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "TukMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
