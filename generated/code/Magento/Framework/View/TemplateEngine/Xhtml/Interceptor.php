<?php
namespace Magento\Framework\View\TemplateEngine\Xhtml;

/**
 * Interceptor class for @see \Magento\Framework\View\TemplateEngine\Xhtml
 */
class Interceptor extends \Magento\Framework\View\TemplateEngine\Xhtml implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\Config\Provider\Template $templateProvider, \Magento\Framework\View\TemplateEngine\Xhtml\ResultFactory $resultFactory, \Magento\Framework\View\TemplateEngine\Xhtml\TemplateFactory $templateFactory, \Magento\Framework\View\TemplateEngine\Xhtml\CompilerFactory $compilerFactory)
    {
        $this->___init();
        parent::__construct($templateProvider, $resultFactory, $templateFactory, $compilerFactory);
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
