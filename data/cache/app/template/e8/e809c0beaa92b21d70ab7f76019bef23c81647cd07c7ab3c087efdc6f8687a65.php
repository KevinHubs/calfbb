<?php

/* demo/demo.php */
class __TwigTemplate_51efc5c4fea4a0225117ff80314a1cda60611e4d0225afa19091c13d2621fd7f extends Twig_Template
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
        echo "<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 2017/10/14
 * Time: 上午8:32
 */
echo 1;die;
echo '这是demo 模版文件';";
    }

    public function getTemplateName()
    {
        return "demo/demo.php";
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
        return new Twig_Source("<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 2017/10/14
 * Time: 上午8:32
 */
echo 1;die;
echo '这是demo 模版文件';", "demo/demo.php", "/Applications/MAMP/htdocs/app/template/demo/demo.php");
    }
}
