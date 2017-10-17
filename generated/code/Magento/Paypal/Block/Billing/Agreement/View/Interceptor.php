<?php
namespace Magento\Paypal\Block\Billing\Agreement\View;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Billing\Agreement\View
 */
class Interceptor extends \Magento\Paypal\Block\Billing\Agreement\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\Order\Config $orderConfig, \Magento\Paypal\Helper\Data $helper, \Magento\Paypal\Model\ResourceModel\Billing\Agreement $agreementResource, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $orderCollectionFactory, $customerSession, $orderConfig, $helper, $agreementResource, $data);
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
