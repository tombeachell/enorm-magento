<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $subscriberFactory, $customerAccountManagement, $data);
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
