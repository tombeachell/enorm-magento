<?php
namespace Magento\Cms\Ui\Component\Listing\Column\BlockActions;

/**
 * Interceptor class for @see \Magento\Cms\Ui\Component\Listing\Column\BlockActions
 */
class Interceptor extends \Magento\Cms\Ui\Component\Listing\Column\BlockActions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $urlBuilder, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        if (!$pluginInfo) {
            return parent::prepare();
        } else {
            return $this->___callPlugins('prepare', func_get_args(), $pluginInfo);
        }
    }
}
