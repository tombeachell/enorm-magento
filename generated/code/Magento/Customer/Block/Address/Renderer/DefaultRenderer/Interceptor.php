<?php
namespace Magento\Customer\Block\Address\Renderer\DefaultRenderer;

/**
 * Interceptor class for @see \Magento\Customer\Block\Address\Renderer\DefaultRenderer
 */
class Interceptor extends \Magento\Customer\Block\Address\Renderer\DefaultRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Customer\Model\Metadata\ElementFactory $elementFactory, \Magento\Directory\Model\CountryFactory $countryFactory, \Magento\Customer\Api\AddressMetadataInterface $metadataService, \Magento\Customer\Model\Address\Mapper $addressMapper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $countryFactory, $metadataService, $addressMapper, $data);
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
