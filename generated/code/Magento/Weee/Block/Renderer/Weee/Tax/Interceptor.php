<?php
namespace Magento\Weee\Block\Renderer\Weee\Tax;

/**
 * Interceptor class for @see \Magento\Weee\Block\Renderer\Weee\Tax
 */
class Interceptor extends \Magento\Weee\Block\Renderer\Weee\Tax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Model\Config\Source\Country $sourceCountry, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sourceCountry, $directoryHelper, $registry, $data);
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
