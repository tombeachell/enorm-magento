<?php
namespace Magento\GoogleOptimizer\Block\Code\Product;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Code\Product
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Code\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\GoogleOptimizer\Helper\Data $helper, \Magento\Framework\Registry $registry, \Magento\GoogleOptimizer\Helper\Code $codeHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $helper, $registry, $codeHelper, $data);
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
