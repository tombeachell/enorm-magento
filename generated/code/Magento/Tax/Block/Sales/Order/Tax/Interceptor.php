<?php
namespace Magento\Tax\Block\Sales\Order\Tax;

/**
 * Interceptor class for @see \Magento\Tax\Block\Sales\Order\Tax
 */
class Interceptor extends \Magento\Tax\Block\Sales\Order\Tax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Tax\Model\Config $taxConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $taxConfig, $data);
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
