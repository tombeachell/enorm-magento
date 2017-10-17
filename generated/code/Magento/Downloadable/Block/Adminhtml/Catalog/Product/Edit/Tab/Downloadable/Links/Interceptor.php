<?php
namespace Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable\Links;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable\Links
 */
class Interceptor extends \Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable\Links implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Downloadable\Helper\File $downloadableFile, \Magento\Framework\Registry $coreRegistry, \Magento\Config\Model\Config\Source\Yesno $sourceModel, \Magento\Downloadable\Model\Link $link, \Magento\Eav\Model\Entity\AttributeFactory $attributeFactory, \Magento\Backend\Model\UrlFactory $urlFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $coreFileStorageDatabase, $downloadableFile, $coreRegistry, $sourceModel, $link, $attributeFactory, $urlFactory, $data);
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
