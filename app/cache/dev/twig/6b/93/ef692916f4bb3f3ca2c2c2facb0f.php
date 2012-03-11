<?php

/* ::macros.html.twig */
class __TwigTemplate_6b93ef692916f4bb3f3ca2c2c2facb0f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function gettr($text = null, $params = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "text" => $text,
            "params" => $params,
        ));

        $blocks = array();

        ob_start();
        try {
            if (($this->getContext($context, "params") != "")) {
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "text"), $this->getContext($context, "params"));
            } else {
                echo $this->env->getExtension('translator')->trans($this->getContext($context, "text"));
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 2
    public function getdateformat($value = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "value" => $value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t";
            if (($this->getContext($context, "value") != null)) {
                // line 4
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this, "trans", array(0 => $this->getAttribute($this, "trans", array(0 => "format_text_date"), "method"), 1 => array("%day%" => twig_date_format_filter($this->env, $this->getContext($context, "value"), "j"), "%month%" => $this->getAttribute($this, "trans", array(0 => twig_date_format_filter($this->env, $this->getContext($context, "value"), "F")), "method"), "%year%" => twig_date_format_filter($this->env, $this->getContext($context, "value"), "Y"))), "method"), "html", null, true);
                echo "
\t";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 7
    public function getformatDmy($value = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "value" => $value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            if ((((array_key_exists("value", $context)) ? (_twig_default_filter($this->getContext($context, "value"), "")) : ("")) != "")) {
                // line 9
                echo "\t\t";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getContext($context, "value"), "d/m/Y"), "html", null, true);
                echo "
\t";
            }
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
