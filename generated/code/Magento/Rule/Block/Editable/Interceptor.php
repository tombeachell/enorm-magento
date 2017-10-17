<?php
namespace Magento\Rule\Block\Editable;

/**
 * Interceptor class for @see \Magento\Rule\Block\Editable
 */
class Interceptor extends \Magento\Rule\Block\Editable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Translate\InlineInterface $inlineTranslate, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $inlineTranslate, $data);
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
