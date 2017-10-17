<?php
namespace Mageplaza\Core\Model\Feed;

/**
 * Interceptor class for @see \Mageplaza\Core\Model\Feed
 */
class Interceptor extends \Mageplaza\Core\Model\Feed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Backend\App\ConfigInterface $backendConfig, \Magento\AdminNotification\Model\InboxFactory $inboxFactory, \Magento\Framework\HTTP\Adapter\CurlFactory $curlFactory, \Magento\Framework\App\DeploymentConfig $deploymentConfig, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $backendConfig, $inboxFactory, $curlFactory, $deploymentConfig, $productMetadata, $urlBuilder, $resource, $resourceCollection, $data);
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
