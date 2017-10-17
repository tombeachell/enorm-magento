<?php
namespace Magento\Cms\Block\Adminhtml\Block\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Block\Widget\Chooser
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Block\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Cms\Model\BlockFactory $blockFactory, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $collectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $blockFactory, $collectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}
