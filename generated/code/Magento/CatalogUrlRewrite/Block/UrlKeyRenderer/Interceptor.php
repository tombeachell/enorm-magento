<?php
namespace Magento\CatalogUrlRewrite\Block\UrlKeyRenderer;

/**
 * Interceptor class for @see \Magento\CatalogUrlRewrite\Block\UrlKeyRenderer
 */
class Interceptor extends \Magento\CatalogUrlRewrite\Block\UrlKeyRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $data);
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
