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
    // Class: PowerSocketType
    'Class:PowerSocketType' => 'Power socket type',
    'Class:PowerSocketType+' => 'Defines the connector/socket type used by a PowerSocket (e.g. C13, C19, Schuko).',
    'Class:PowerSocketType/Attribute:name' => 'Name',
    'Class:PowerSocketType/Attribute:name+' => 'Short identifier of the socket type (e.g. C13, C19, Schuko).',
    'Class:PowerSocketType/Attribute:description' => 'Description',
    'Class:PowerSocketType/Attribute:description+' => 'Optional description of this socket type.',
    'Class:PowerSocketType/Attribute:picture' => 'Picture',
    'Class:PowerSocketType/Attribute:picture+' => 'Optional image representing this socket type (connector).',
    'Class:PowerSocketType/UniquenessRule:name' => 'Name must be unique',
    'Class:PowerSocketType/UniquenessRule:name+' => 'The name of the power socket type must be unique.',
    // Class: PowerSocket
    'Class:PowerSocket' => 'Power Socket',
    'Class:PowerSocket/Name' => '%2$s - %1$s',
    'Class:PowerSocket/Attribute:name' => 'Name',
    'Class:PowerSocket/Attribute:status' => 'Status',
    'Class:PowerSocket/Attribute:comment' => 'Comment',
    'Class:PowerSocket/Attribute:socket_type_id'  => 'Socket type',
    'Class:PowerSocket/Attribute:socket_type_id+' => 'Type of this power socket (e.g. C13, C19, Schuko).',
    'Class:PowerSocket/Attribute:socket_type_name'  => 'Socket type name',
    'Class:PowerSocket/Attribute:pdu_id' => 'PDU',
    'Class:PowerSocket/Attribute:pdu_name' => 'PDU name',
    'Class:PowerSocket/Attribute:datacenterdevice_id' => 'Datacenter device',
    'Class:PowerSocket/Attribute:datacenterdevice_name' => 'Datacenter device name',
    'Class:PowerSocket/Message:NoFreeSocketOnDatacenterDevice' => 'Could not assign the PowerSocket to the DatacenterDevice because no free socket is available.',
    'Class:PowerSocket/Error:NoFreeSocketOnDatacenterDevice' => 'Das ausgewählte DatacenterDevice verfügt über keinen freien PowerSocket.',
    'Class:PowerSocket/Error:SocketTypeMismatch' => 'The selected DatacenterDevice requires a different socket type.',
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
    'Class:DatacenterDevice/Attribute:required_socket_type_id'  => 'Required socket type',
    'Class:DatacenterDevice/Attribute:required_socket_type_id+' => 'If set, only PowerSockets of this type can be assigned to this device (Power A / Power B).',
    'Class:DatacenterDevice/Attribute:required_socket_type_name'  => 'Required socket type name',
));
