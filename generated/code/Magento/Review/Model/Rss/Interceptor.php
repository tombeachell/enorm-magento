<?php
namespace Magento\Review\Model\Rss;

/**
 * Interceptor class for @see \Magento\Review\Model\Rss
 */
class Interceptor extends \Magento\Review\Model\Rss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Review\Model\ReviewFactory $reviewFactory)
    {
        $this->___init();
        parent::__construct($eventManager, $reviewFactory);
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
