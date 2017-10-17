<?php
namespace Magento\Catalog\Model\Product\Image;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Image
 */
class Interceptor extends \Magento\Catalog\Model\Product\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product\Media\Config $catalogProductMediaConfig, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Image\Factory $imageFactory, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array(), \Magento\Catalog\Model\View\Asset\ImageFactory $viewAssetImageFactory = null, \Magento\Catalog\Model\View\Asset\PlaceholderFactory $viewAssetPlaceholderFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $catalogProductMediaConfig, $coreFileStorageDatabase, $filesystem, $imageFactory, $assetRepo, $viewFileSystem, $scopeConfig, $resource, $resourceCollection, $data, $viewAssetImageFactory, $viewAssetPlaceholderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
