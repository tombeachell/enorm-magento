<?php
namespace Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Orders;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Orders
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Orders implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\View\Element\UiComponent\DataProvider\CollectionFactory $collectionFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Paypal\Model\ResourceModel\Billing\Agreement $billingAgreementResource, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $coreRegistry, $billingAgreementResource, $data);
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
