<?php
namespace Magento\SendFriend\Model\SendFriend;

/**
 * Interceptor class for @see \Magento\SendFriend\Model\SendFriend
 */
class Interceptor extends \Magento\SendFriend\Model\SendFriend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Catalog\Helper\Image $catalogImage, \Magento\SendFriend\Helper\Data $sendfriendData, \Magento\Framework\Escaper $escaper, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $transportBuilder, $catalogImage, $sendfriendData, $escaper, $remoteAddress, $cookieManager, $inlineTranslation, $resource, $resourceCollection, $data);
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
