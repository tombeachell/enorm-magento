<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Catalog\Category\Chooser;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Catalog\Category\Chooser
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Catalog\Category\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTree, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Backend\Model\Auth\Session $backendSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $categoryTree, $registry, $categoryFactory, $jsonEncoder, $resourceHelper, $backendSession, $data);
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
