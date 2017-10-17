<?php
namespace Magento\UrlRewrite\Block\Catalog\Category\Edit;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Catalog\Category\Edit
 */
class Interceptor extends \Magento\UrlRewrite\Block\Catalog\Category\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\UrlRewrite\Model\UrlRewriteFactory $rewriteFactory, \Magento\Backend\Helper\Data $adminhtmlData, \Magento\Catalog\Model\CategoryFactory $categoryFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $rewriteFactory, $adminhtmlData, $categoryFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}