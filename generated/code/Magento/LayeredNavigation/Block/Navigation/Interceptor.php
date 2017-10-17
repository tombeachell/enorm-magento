<?php
namespace Magento\LayeredNavigation\Block\Navigation;

/**
 * Interceptor class for @see \Magento\LayeredNavigation\Block\Navigation
 */
class Interceptor extends \Magento\LayeredNavigation\Block\Navigation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Model\Layer\FilterList $filterList, \Magento\Catalog\Model\Layer\AvailabilityFlagInterface $visibilityFlag, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $layerResolver, $filterList, $visibilityFlag, $data);
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
