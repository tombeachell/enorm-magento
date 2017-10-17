<?php
namespace Magento\Checkout\Block\Success;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Success
 */
class Interceptor extends \Magento\Checkout\Block\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\OrderFactory $orderFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $orderFactory, $data);
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
