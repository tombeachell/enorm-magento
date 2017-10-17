<?php
namespace Magento\CatalogSearch\Block\Advanced\Result;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Block\Advanced\Result
 */
class Interceptor extends \Magento\CatalogSearch\Block\Advanced\Result implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\CatalogSearch\Model\Advanced $catalogSearchAdvanced, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Framework\UrlFactory $urlFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $catalogSearchAdvanced, $layerResolver, $urlFactory, $data);
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
