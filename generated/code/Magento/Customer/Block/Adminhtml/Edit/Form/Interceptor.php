<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Form;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Form
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $customerRepository, $extensibleDataObjectConverter, $data);
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
