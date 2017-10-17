<?php
namespace Magento\Newsletter\Model\Queue;

/**
 * Interceptor class for @see \Magento\Newsletter\Model\Queue
 */
class Interceptor extends \Magento\Newsletter\Model\Queue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Newsletter\Model\Template\Filter $templateFilter, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Newsletter\Model\TemplateFactory $templateFactory, \Magento\Newsletter\Model\ProblemFactory $problemFactory, \Magento\Newsletter\Model\ResourceModel\Subscriber\CollectionFactory $subscriberCollectionFactory, \Magento\Newsletter\Model\Queue\TransportBuilder $transportBuilder, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array(), \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $templateFilter, $date, $templateFactory, $problemFactory, $subscriberCollectionFactory, $transportBuilder, $resource, $resourceCollection, $data, $timezone);
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
