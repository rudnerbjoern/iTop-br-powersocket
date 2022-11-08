<?php

/**
 * @copyright   Copyright (C) 2022 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2022-11-08
 *
 * Localized data
 */

//
// Class: PowerSocket
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:PowerSocket' => 'Power Socket',
    'Class:PowerSocket/Name' => '%2$s - %1$s',
    'Class:PowerSocket/Attribute:name' => 'Name',
    'Class:PowerSocket/Attribute:status' => 'Status',
    'Class:PowerSocket/Attribute:comment' => 'Comment',
    'Class:PowerSocket/Attribute:pdu_id' => 'PDU',
    'Class:PowerSocket/Attribute:pdu_name' => 'PDU name',
    'Class:PowerSocket/Attribute:datacenterdevice_id' => 'Datacenter device',
    'Class:PowerSocket/Attribute:datacenterdevice_name' => 'Datacenter device name',
));

//
// Class: PDU
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:PDU/Attribute:powersocket_list' => 'Power Socket(s)',
    'Class:PDU/Attribute:powersocket_list+' => '',
));

//
// Class: DatacenterDevice
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:DatacenterDevice/Attribute:powerAsocket_id' => 'PowerA socket',
    'Class:DatacenterDevice/Attribute:powerAsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerAsocket_name' => 'PowerA socket name',
    'Class:DatacenterDevice/Attribute:powerAsocket_name+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_id' => 'PowerB socket',
    'Class:DatacenterDevice/Attribute:powerBsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_name' => 'PowerB socket name',
    'Class:DatacenterDevice/Attribute:powerBsocket_name+' => '',
));
