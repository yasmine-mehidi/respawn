<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.pdf.credit_slip_pdf_generator' shared service.

return $this->services['prestashop.adapter.pdf.credit_slip_pdf_generator'] = new \PrestaShop\PrestaShop\Adapter\PDF\CreditSlipPdfGenerator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, 'respawn', ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});
