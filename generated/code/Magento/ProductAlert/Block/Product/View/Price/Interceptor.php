<?php
namespace Magento\ProductAlert\Block\Product\View\Price;

/**
 * Interceptor class for @see \Magento\ProductAlert\Block\Product\View\Price
 */
class Interceptor extends \Magento\ProductAlert\Block\Product\View\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\ProductAlert\Helper\Data $helper, \Magento\Framework\Registry $registry, \Magento\Framework\Data\Helper\PostHelper $coreHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $helper, $registry, $coreHelper, $data);
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
