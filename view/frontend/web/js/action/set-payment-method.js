/*
 * Copyright (c) 2017. CopeX GmbH (https://copex.io), Author: Roman Hutterer (roman)
 * File: set-payment-method.js
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 */

define([
    'Magento_Checkout/js/model/quote',
    'Magento_Checkout/js/action/set-payment-information'
], function (quote, setPaymentInformation) {
    'use strict';

    return function (messageContainer) {
        return setPaymentInformation(messageContainer, quote.paymentMethod());
    };
});