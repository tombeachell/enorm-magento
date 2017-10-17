<?php
namespace Magento\Persistent\Model\Session;

/**
 * Interceptor class for @see \Magento\Persistent\Model\Session
 */
class Interceptor extends \Magento\Persistent\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Persistent\Helper\Data $persistentData, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $coreConfig, $jsonHelper, $persistentData, $cookieManager, $cookieMetadataFactory, $storeManager, $mathRandom, $sessionConfig, $resource, $resourceCollection, $data);
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
