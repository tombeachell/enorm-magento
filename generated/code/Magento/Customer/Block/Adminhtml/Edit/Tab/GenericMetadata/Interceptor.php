<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $dataObjectProcessor, $data);
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
