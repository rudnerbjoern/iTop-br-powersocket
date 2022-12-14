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
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PowerSocket' => 'Stromanschluss',
    'Class:PowerSocket/Name' => '%2$s - %1$s',
    'Class:PowerSocket/Attribute:name' => 'Name',
    'Class:PowerSocket/Attribute:status' => 'Status',
    'Class:PowerSocket/Attribute:comment' => 'Kommentar',
    'Class:PowerSocket/Attribute:pdu_id' => 'PDU',
    'Class:PowerSocket/Attribute:pdu_name' => 'PDU Name',
    'Class:PowerSocket/Attribute:datacenterdevice_id' => 'Datacenter-Gerät',
    'Class:PowerSocket/Attribute:datacenterdevice_name' => 'Datacenter-Gerät Name',
));

//
// Class: PDU
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PDU/Attribute:powersocket_list' => 'Stromanschlüsse',
    'Class:PDU/Attribute:powersocket_list+' => '',
));

//
// Class: DatacenterDevice
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:DatacenterDevice/Attribute:powerAsocket_id' => 'PowerA-Anschluss',
    'Class:DatacenterDevice/Attribute:powerAsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerAsocket_name' => 'PowerA-Anschluss Name',
    'Class:DatacenterDevice/Attribute:powerAsocket_name+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_id' => 'PowerB-Anschluss',
    'Class:DatacenterDevice/Attribute:powerBsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_name' => 'PowerB-Anschluss Name',
    'Class:DatacenterDevice/Attribute:powerBsocket_name+' => '',
));
