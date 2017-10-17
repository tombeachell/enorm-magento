<?php
namespace Magento\Catalog\Block\Navigation;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Navigation
 */
class Interceptor extends \Magento\Catalog\Block\Navigation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Framework\App\Http\Context $httpContext, \Magento\Catalog\Helper\Category $catalogCategory, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\Indexer\Category\Flat\State $flatState, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $categoryFactory, $productCollectionFactory, $layerResolver, $httpContext, $catalogCategory, $registry, $flatState, $data);
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
