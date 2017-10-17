<?php
namespace Magento\Multishipping\Block\Checkout\Billing;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Billing
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Billing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Model\Method\SpecificationInterface $paymentSpecification, array $data = array(), array $additionalChecks = array())
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $multishipping, $checkoutSession, $paymentSpecification, $data, $additionalChecks);
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
