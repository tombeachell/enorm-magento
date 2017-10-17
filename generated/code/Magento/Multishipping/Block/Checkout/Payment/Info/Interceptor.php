<?php
namespace Magento\Multishipping\Block\Checkout\Payment\Info;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Payment\Info
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Payment\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentData, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paymentData, $multishipping, $data);
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
