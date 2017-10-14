<?php

/* demo/demo.html */
class __TwigTemplate_789f999a446c97fa7160f4965c04a12ff86b18fe772c6c762e477739101daf86 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<h1>数据决定地位，代码控制世界</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "demo/demo.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<h1>数据决定地位，代码控制世界</h1>
</body>
</html>", "demo/demo.html", "/Applications/MAMP/htdocs/app/template/demo/demo.html");
    }
}
