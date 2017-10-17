<?php
namespace Magento\UrlRewrite\Block\Catalog\Category\Tree;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Catalog\Category\Tree
 */
class Interceptor extends \Magento\UrlRewrite\Block\Catalog\Category\Tree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTree, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Backend\Helper\Data $adminhtmlData, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $categoryTree, $registry, $categoryFactory, $jsonEncoder, $productFactory, $adminhtmlData, $categoryRepository, $data);
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
