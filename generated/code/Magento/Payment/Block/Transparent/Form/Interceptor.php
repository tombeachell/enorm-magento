<?php
namespace Magento\Payment\Block\Transparent\Form;

/**
 * Interceptor class for @see \Magento\Payment\Block\Transparent\Form
 */
class Interceptor extends \Magento\Payment\Block\Transparent\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\Config $paymentConfig, \Magento\Checkout\Model\Session $checkoutSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $checkoutSession, $data);
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