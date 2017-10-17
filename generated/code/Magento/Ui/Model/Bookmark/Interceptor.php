<?php
namespace Magento\Ui\Model\Bookmark;

/**
 * Interceptor class for @see \Magento\Ui\Model\Bookmark
 */
class Interceptor extends \Magento\Ui\Model\Bookmark implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Ui\Model\ResourceModel\Bookmark $resource, \Magento\Ui\Model\ResourceModel\Bookmark\Collection $resourceCollection, \Magento\Framework\Json\DecoderInterface $jsonDecoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $resource, $resourceCollection, $jsonDecoder, $data);
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
