<?php
namespace Magento\Cms\Block\Widget\Block;

/**
 * Interceptor class for @see \Magento\Cms\Block\Widget\Block
 */
class Interceptor extends \Magento\Cms\Block\Widget\Block implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Cms\Model\BlockFactory $blockFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $filterProvider, $blockFactory, $data);
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
