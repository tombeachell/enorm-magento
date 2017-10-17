<?php
namespace Magento\Indexer\Model\Indexer\State;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer\State
 */
class Interceptor extends \Magento\Indexer\Model\Indexer\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Indexer\Model\ResourceModel\Indexer\State $resource, \Magento\Indexer\Model\ResourceModel\Indexer\State\Collection $resourceCollection, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
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
