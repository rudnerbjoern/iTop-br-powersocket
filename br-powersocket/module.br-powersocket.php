<?php

/**
 * @copyright   Copyright (C) 2022-2024 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2024-09-05
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-powersocket/3.1.4',
    array(
        // Identification
        //
        'label' => 'Datamodel: Add Powersockets to PDUs',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            'itop-structure/3.0.0',
            'itop-datacenter-mgmt/2.7.0',
            'teemip-datacenter-mgmt-adaptor/2.7.0',
            'teemip-network-mgmt-extended/1.1.0',
            'itop-virtualization-mgmt/2.7.0',
            'itop-storage-mgmt/2.7.0'
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(),
        'webservice' => array(),
        'data.struct' => array(
            // add your 'structure' definition XML files here,
        ),
        'data.sample' => array(
            // add your sample data XML files here,
        ),

        // Documentation
        //
        'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
        'doc.more_information' => '', // hyperlink to more information, if any

        // Default settings
        //
        'settings' => array(
            // Module specific settings go here, if any
        ),
    )
);