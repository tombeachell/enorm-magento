<?php
namespace Magento\Braintree\Block\Adminhtml\Form\Field\CcTypes;

/**
 * Interceptor class for @see \Magento\Braintree\Block\Adminhtml\Form\Field\CcTypes
 */
class Interceptor extends \Magento\Braintree\Block\Adminhtml\Form\Field\CcTypes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Braintree\Helper\CcType $ccTypeHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $ccTypeHelper, $data);
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
