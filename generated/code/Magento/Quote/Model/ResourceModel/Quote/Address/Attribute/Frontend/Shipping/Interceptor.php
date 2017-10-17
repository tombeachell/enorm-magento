<?php
namespace Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Frontend\Shipping;

/**
 * Interceptor class for @see \Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Frontend\Shipping
 */
class Interceptor extends \Magento\Quote\Model\ResourceModel\Quote\Address\Attribute\Frontend\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Attribute\Source\BooleanFactory $attrBooleanFactory, \Magento\Framework\App\CacheInterface $cache = null, $storeResolver = null, array $cacheTags = null, \Magento\Store\Model\StoreManagerInterface $storeManager = null, \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($attrBooleanFactory, $cache, $storeResolver, $cacheTags, $storeManager, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabel');
        if (!$pluginInfo) {
            return parent::getLabel();
        } else {
            return $this->___callPlugins('getLabel', func_get_args(), $pluginInfo);
        }
    }
}
