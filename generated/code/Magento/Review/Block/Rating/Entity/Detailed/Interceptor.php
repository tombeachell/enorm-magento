<?php
namespace Magento\Review\Block\Rating\Entity\Detailed;

/**
 * Interceptor class for @see \Magento\Review\Block\Rating\Entity\Detailed
 */
class Interceptor extends \Magento\Review\Block\Rating\Entity\Detailed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\RatingFactory $ratingFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $ratingFactory, $data);
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
