<?php
namespace Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Info;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Info
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Billing\Agreement\View\Tab\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $customerRepository, $data);
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
