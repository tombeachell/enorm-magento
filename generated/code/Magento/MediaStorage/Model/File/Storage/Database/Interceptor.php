<?php
namespace Magento\MediaStorage\Model\File\Storage\Database;

/**
 * Interceptor class for @see \Magento\MediaStorage\Model\File\Storage\Database
 */
class Interceptor extends \Magento\MediaStorage\Model\File\Storage\Database implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\Framework\Stdlib\DateTime\DateTime $dateModel, \Magento\Framework\App\Config\ScopeConfigInterface $configuration, \Magento\MediaStorage\Helper\File\Media $mediaHelper, \Magento\MediaStorage\Model\ResourceModel\File\Storage\Database $resource, \Magento\MediaStorage\Model\File\Storage\Directory\DatabaseFactory $directoryFactory, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, $connectionName = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $coreFileStorageDb, $dateModel, $configuration, $mediaHelper, $resource, $directoryFactory, $resourceCollection, $connectionName, $data);
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
