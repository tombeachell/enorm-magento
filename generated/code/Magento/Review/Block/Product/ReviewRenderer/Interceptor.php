<?php
namespace Magento\Review\Block\Product\ReviewRenderer;

/**
 * Interceptor class for @see \Magento\Review\Block\Product\ReviewRenderer
 */
class Interceptor extends \Magento\Review\Block\Product\ReviewRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\ReviewFactory $reviewFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $reviewFactory, $data);
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
