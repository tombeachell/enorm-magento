<?php
namespace Magento\Customer\Block\Adminhtml\Group\Edit\Form;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Group\Edit\Form
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Group\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Tax\Model\TaxClass\Source\Customer $taxCustomer, \Magento\Tax\Helper\Data $taxHelper, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Customer\Api\Data\GroupInterfaceFactory $groupDataFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $taxCustomer, $taxHelper, $groupRepository, $groupDataFactory, $data);
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
