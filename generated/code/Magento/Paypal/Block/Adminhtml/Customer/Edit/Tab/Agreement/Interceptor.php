<?php
namespace Magento\Paypal\Block\Adminhtml\Customer\Edit\Tab\Agreement;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Customer\Edit\Tab\Agreement
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Customer\Edit\Tab\Agreement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Paypal\Helper\Data $helper, \Magento\Paypal\Model\ResourceModel\Billing\Agreement\CollectionFactory $agreementFactory, \Magento\Paypal\Model\Billing\Agreement $agreementModel, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $helper, $agreementFactory, $agreementModel, $coreRegistry, $data);
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
