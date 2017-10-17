<?php
namespace Magento\MediaStorage\Model\File\Storage;

/**
 * Interceptor class for @see \Magento\MediaStorage\Model\File\Storage
 */
class Interceptor extends \Magento\MediaStorage\Model\File\Storage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\MediaStorage\Helper\File\Storage $coreFileStorage, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\MediaStorage\Model\File\Storage\Flag $fileFlag, \Magento\MediaStorage\Model\File\Storage\FileFactory $fileFactory, \Magento\MediaStorage\Model\File\Storage\DatabaseFactory $databaseFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $coreFileStorage, $scopeConfig, $coreConfig, $fileFlag, $fileFactory, $databaseFactory, $filesystem, $resource, $resourceCollection, $data);
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
