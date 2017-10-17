<?php
namespace Magento\Paypal\Block\Billing\Agreements;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Billing\Agreements
 */
class Interceptor extends \Magento\Paypal\Block\Billing\Agreements implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Paypal\Model\ResourceModel\Billing\Agreement\CollectionFactory $agreementCollection, \Magento\Paypal\Helper\Data $helper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $agreementCollection, $helper, $data);
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
