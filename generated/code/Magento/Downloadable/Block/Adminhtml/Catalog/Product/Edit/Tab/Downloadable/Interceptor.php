<?php
namespace Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable
 */
class Interceptor extends \Magento\Downloadable\Block\Adminhtml\Catalog\Product\Edit\Tab\Downloadable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $data);
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
