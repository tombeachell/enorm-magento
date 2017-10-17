<?php
namespace Magento\Backend\Block\System\Design\Edit\Tab\General;

/**
 * Interceptor class for @see \Magento\Backend\Block\System\Design\Edit\Tab\General
 */
class Interceptor extends \Magento\Backend\Block\System\Design\Edit\Tab\General implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory, \Magento\Store\Model\System\Store $systemStore, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $labelFactory, $systemStore, $data);
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
