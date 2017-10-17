<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Carts;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Carts
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Carts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Customer\Model\Config\Share $shareConfig, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $shareConfig, $customerDataFactory, $dataObjectHelper, $data);
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
