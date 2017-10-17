<?php
namespace Magento\Cms\Ui\Component\Listing\Column\PageActions;

/**
 * Interceptor class for @see \Magento\Cms\Ui\Component\Listing\Column\PageActions
 */
class Interceptor extends \Magento\Cms\Ui\Component\Listing\Column\PageActions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Cms\Block\Adminhtml\Page\Grid\Renderer\Action\UrlBuilder $actionUrlBuilder, \Magento\Framework\UrlInterface $urlBuilder, array $components = array(), array $data = array(), $editUrl = 'cms/page/edit')
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $actionUrlBuilder, $urlBuilder, $components, $data, $editUrl);
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
