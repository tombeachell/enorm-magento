<?php
namespace Magento\Eav\Model\Entity\Attribute\Frontend\DefaultFrontend;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Frontend\DefaultFrontend
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Frontend\DefaultFrontend implements \Magento\Framework\Interception\InterceptorInterface
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
