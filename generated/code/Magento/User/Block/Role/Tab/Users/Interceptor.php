<?php
namespace Magento\User\Block\Role\Tab\Users;

/**
 * Interceptor class for @see \Magento\User\Block\Role\Tab\Users
 */
class Interceptor extends \Magento\User\Block\Role\Tab\Users implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Backend\Model\Auth\Session $authSession, \Magento\User\Model\ResourceModel\User\CollectionFactory $userCollectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $authSession, $userCollectionFactory, $data);
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
