<?php
namespace Magento\Integration\Model\Oauth\Token;

/**
 * Interceptor class for @see \Magento\Integration\Model\Oauth\Token
 */
class Interceptor extends \Magento\Integration\Model\Oauth\Token implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Integration\Model\Oauth\Consumer\Validator\KeyLengthFactory $keyLengthFactory, \Magento\Framework\Url\Validator $urlValidator, \Magento\Integration\Model\Oauth\ConsumerFactory $consumerFactory, \Magento\Integration\Helper\Oauth\Data $oauthData, \Magento\Framework\Oauth\Helper\Oauth $oauthHelper, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $keyLengthFactory, $urlValidator, $consumerFactory, $oauthData, $oauthHelper, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
