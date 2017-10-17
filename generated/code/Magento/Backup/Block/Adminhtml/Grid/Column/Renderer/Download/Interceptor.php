<?php
namespace Magento\Backup\Block\Adminhtml\Grid\Column\Renderer\Download;

/**
 * Interceptor class for @see \Magento\Backup\Block\Adminhtml\Grid\Column\Renderer\Download
 */
class Interceptor extends \Magento\Backup\Block\Adminhtml\Grid\Column\Renderer\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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
