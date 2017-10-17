<?php
namespace Magento\Search\Block\Term;

/**
 * Interceptor class for @see \Magento\Search\Block\Term
 */
class Interceptor extends \Magento\Search\Block\Term implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Search\Model\ResourceModel\Query\CollectionFactory $queryCollectionFactory, \Magento\Framework\UrlFactory $urlFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $queryCollectionFactory, $urlFactory, $data);
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
