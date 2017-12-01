<?php
/**
 * Copyright (c) 2017. CopeX GmbH (https://copex.io), Author: Roman Hutterer (roman)
 * File: Express.php
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

namespace CopeX\PaypalFix\Model;

use Magento\Paypal\Model\Express as PaypalExpress;
use Magento\Quote\Api\Data\PaymentInterface;

class Express extends PaypalExpress
{
    /**
     * Assign data to info model instance
     *
     * @param array|\Magento\Framework\DataObject $data
     * @return \Magento\Payment\Model\Info
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function assignData(\Magento\Framework\DataObject $data)
    {
        \Magento\Payment\Model\Method\AbstractMethod::assignData($data);

        $additionalData = $data->getData(PaymentInterface::KEY_ADDITIONAL_DATA);

        if (!is_array($additionalData)) {
            return $this;
        }

        foreach ($additionalData as $key => $value) {
            // Skip extension attributes
            if ($key === \Magento\Framework\Api\ExtensibleDataInterface::EXTENSION_ATTRIBUTES_KEY) {
                continue;
            }
            $this->getInfoInstance()->setAdditionalInformation($key, $value);
        }
        return $this;
    }
}