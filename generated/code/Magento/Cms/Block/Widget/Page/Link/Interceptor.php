<?php
namespace Magento\Cms\Block\Widget\Page\Link;

/**
 * Interceptor class for @see \Magento\Cms\Block\Widget\Page\Link
 */
class Interceptor extends \Magento\Cms\Block\Widget\Page\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\ResourceModel\Page $resourcePage, \Magento\Cms\Helper\Page $cmsPage, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourcePage, $cmsPage, $data);
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
