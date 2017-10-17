<?php
namespace Magento\Developer\Model\TemplateEngine\Decorator\DebugHints;

/**
 * Interceptor class for @see \Magento\Developer\Model\TemplateEngine\Decorator\DebugHints
 */
class Interceptor extends \Magento\Developer\Model\TemplateEngine\Decorator\DebugHints implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\TemplateEngineInterface $subject, $showBlockHints)
    {
        $this->___init();
        parent::__construct($subject, $showBlockHints);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\View\Element\BlockInterface $block, $templateFile, array $dictionary = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($block, $templateFile, $dictionary);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
        }
    }
}
