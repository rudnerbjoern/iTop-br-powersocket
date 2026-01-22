<?php

/**
 * @copyright   Copyright (C) 2022-2025 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2025-06-12
 *
 * Localized data
 */

/** @disregard P1009 Undefined type Dict */
Dict::Add('EN US', 'English', 'English', array(
    // Class: PowerSocket
    'Class:PowerSocket' => 'Power Socket',
    'Class:PowerSocket/Name' => '%2$s - %1$s',
    'Class:PowerSocket/Attribute:name' => 'Name',
    'Class:PowerSocket/Attribute:status' => 'Status',
    'Class:PowerSocket/Attribute:comment' => 'Comment',
    'Class:PowerSocket/Attribute:pdu_id' => 'PDU',
    'Class:PowerSocket/Attribute:pdu_name' => 'PDU name',
    'Class:PowerSocket/Attribute:datacenterdevice_id' => 'Datacenter device',
    'Class:PowerSocket/Attribute:datacenterdevice_name' => 'Datacenter device name',
    'Class:PowerSocket/Message:NoFreeSocketOnDatacenterDevice' => 'Could not assign the PowerSocket to the DatacenterDevice because no free socket is available.',
    'Class:PowerSocket/Error:NoFreeSocketOnDatacenterDevice' => 'Das ausgewählte DatacenterDevice verfügt über keinen freien PowerSocket.',
    // Class: PDU
    'Class:PDU/Attribute:powersocket_list' => 'Power Sockets',
    'Class:PDU/Attribute:powersocket_list+' => '',
    // Class: DatacenterDevice
    'Class:DatacenterDevice/Attribute:powerAsocket_id' => 'PowerA socket',
    'Class:DatacenterDevice/Attribute:powerAsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerAsocket_name' => 'PowerA socket name',
    'Class:DatacenterDevice/Attribute:powerAsocket_name+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_id' => 'PowerB socket',
    'Class:DatacenterDevice/Attribute:powerBsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_name' => 'PowerB socket name',
    'Class:DatacenterDevice/Attribute:powerBsocket_name+' => '',
));
