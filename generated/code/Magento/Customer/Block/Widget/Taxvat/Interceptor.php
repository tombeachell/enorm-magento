<?php
namespace Magento\Customer\Block\Widget\Taxvat;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\Taxvat
 */
class Interceptor extends \Magento\Customer\Block\Widget\Taxvat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $data);
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
