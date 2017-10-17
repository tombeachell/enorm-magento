<?php
namespace Magento\Cms\Block\Block;

/**
 * Interceptor class for @see \Magento\Cms\Block\Block
 */
class Interceptor extends \Magento\Cms\Block\Block implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Cms\Model\BlockFactory $blockFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $filterProvider, $storeManager, $blockFactory, $data);
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
