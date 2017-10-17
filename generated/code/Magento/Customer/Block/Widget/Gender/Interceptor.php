<?php
namespace Magento\Customer\Block\Widget\Gender;

/**
 * Interceptor class for @see \Magento\Customer\Block\Widget\Gender
 */
class Interceptor extends \Magento\Customer\Block\Widget\Gender implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Session $customerSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $addressHelper, $customerMetadata, $customerRepository, $customerSession, $data);
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
