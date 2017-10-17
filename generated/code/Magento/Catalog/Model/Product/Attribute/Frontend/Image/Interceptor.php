<?php
namespace Magento\Catalog\Model\Product\Attribute\Frontend\Image;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Frontend\Image
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Frontend\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($storeManager);
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
