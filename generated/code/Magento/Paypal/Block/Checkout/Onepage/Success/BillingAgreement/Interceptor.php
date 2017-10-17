<?php
namespace Magento\Paypal\Block\Checkout\Onepage\Success\BillingAgreement;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Checkout\Onepage\Success\BillingAgreement
 */
class Interceptor extends \Magento\Paypal\Block\Checkout\Onepage\Success\BillingAgreement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Paypal\Model\Billing\AgreementFactory $agreementFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $customerSession, $agreementFactory, $data);
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
