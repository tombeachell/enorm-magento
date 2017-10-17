<?php
namespace Magento\ImportExport\Model\History;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\History
 */
class Interceptor extends \Magento\ImportExport\Model\History implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\ImportExport\Model\ResourceModel\History $resource, \Magento\ImportExport\Model\ResourceModel\History\Collection $resourceCollection, \Magento\ImportExport\Helper\Report $reportHelper, \Magento\Backend\Model\Auth\Session $authSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $reportHelper, $authSession, $data);
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
