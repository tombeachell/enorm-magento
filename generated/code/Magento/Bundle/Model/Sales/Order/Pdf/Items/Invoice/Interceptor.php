<?php
namespace Magento\Bundle\Model\Sales\Order\Pdf\Items\Invoice;

/**
 * Interceptor class for @see \Magento\Bundle\Model\Sales\Order\Pdf\Items\Invoice
 */
class Interceptor extends \Magento\Bundle\Model\Sales\Order\Pdf\Items\Invoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Tax\Helper\Data $taxData, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Framework\Stdlib\StringUtils $coreString, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $taxData, $filesystem, $filterManager, $coreString, $resource, $resourceCollection, $data, $serializer);
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
