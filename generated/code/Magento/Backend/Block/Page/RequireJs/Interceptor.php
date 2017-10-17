<?php
namespace Magento\Backend\Block\Page\RequireJs;

/**
 * Interceptor class for @see \Magento\Backend\Block\Page\RequireJs
 */
class Interceptor extends \Magento\Backend\Block\Page\RequireJs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Form\FormKey $formKey, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $formKey, $data);
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
