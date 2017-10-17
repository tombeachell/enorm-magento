<?php
namespace Magento\UrlRewrite\Block\GridContainer;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\GridContainer
 */
class Interceptor extends \Magento\UrlRewrite\Block\GridContainer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\UrlRewrite\Block\Selector $urlrewriteSelector, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $urlrewriteSelector, $data);
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
