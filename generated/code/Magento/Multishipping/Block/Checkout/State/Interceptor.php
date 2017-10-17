<?php
namespace Magento\Multishipping\Block\Checkout\State;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\State
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping\State $multishippingState, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $multishippingState, $data);
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
