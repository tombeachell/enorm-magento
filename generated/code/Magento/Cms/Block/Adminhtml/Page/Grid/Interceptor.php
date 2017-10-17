<?php
namespace Magento\Cms\Block\Adminhtml\Page\Grid;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Page\Grid
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Page\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Cms\Model\Page $cmsPage, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $collectionFactory, \Magento\Framework\View\Model\PageLayout\Config\BuilderInterface $pageLayoutBuilder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $cmsPage, $collectionFactory, $pageLayoutBuilder, $data);
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
