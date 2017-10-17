<?php
namespace Magento\CatalogRule\Model\Flag;

/**
 * Interceptor class for @see \Magento\CatalogRule\Model\Flag
 */
class Interceptor extends \Magento\CatalogRule\Model\Flag implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $json = null, \Magento\Framework\Serialize\Serializer\Serialize $serialize = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data, $json, $serialize);
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
