<?php

/**
 * @copyright   Copyright (C) 2022-2026 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2026-01-27
 *
 * iTop module definition file
 */

/** @disregard P1009 Undefined type SetupWebPage */
SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-powersocket-bridge-for-datacenter-view-extended/3.2.2',
    array(
        // Identification
        'label' => 'Links between Molkobain Datacenter view extended and power socket',
        'category' => 'business',

        // Setup
        'dependencies' => array(
            'itop-config-mgmt/3.2.0',
            'itop-datacenter-mgmt/3.2.0',
            'br-powersocket/3.2.2',
            'molkobain-datacenter-view-extended/1.11.0||br-powersocket/3.2.1',
        ),
        'mandatory' => false,
        'visible' => true,
        'auto_select' => 'SetupInfo::ModuleIsSelected("br-powersocket") && SetupInfo::ModuleIsSelected("molkobain-datacenter-view")',

        // Components
        'datamodel' => array(),
        'webservice' => array(),
        'dictionary' => array(),
        'data.struct' => array(),
        'data.sample' => array(),

        // Documentation
        'doc.manual_setup' => '',
        'doc.more_information' => '',

        // Default settings
        'settings' => array(),
    )
);
