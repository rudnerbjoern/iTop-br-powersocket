<?php

/**
 * @copyright   Copyright (C) 2022-2025 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2025-06-12
 *
 * Localized data
 */

/** @disregard P1009 Undefined type Dict */
Dict::Add('DE DE', 'German', 'Deutsch', array(
    // Class: PowerSocketType
    'Class:PowerSocketType' => 'Stromanschluss-Typ',
    'Class:PowerSocketType+' => 'Definiert den Steckertyp / Socket-Typ eines PowerSockets (z. B. C13, C19, Schuko).',
    'Class:PowerSocketType/Attribute:name' => 'Name',
    'Class:PowerSocketType/Attribute:name+' => 'Kurzbezeichnung des Anschluss-Typs (z. B. C13, C19, Schuko).',
    'Class:PowerSocketType/Attribute:description' => 'Beschreibung',
    'Class:PowerSocketType/Attribute:description+' => 'Optionale Beschreibung dieses Anschluss-Typs.',
    'Class:PowerSocketType/Attribute:picture' => 'Bild',
    'Class:PowerSocketType/Attribute:picture+' => 'Optionales Bild, das diesen Steckertyp darstellt.',
    'Class:PowerSocketType/UniquenessRule:name' => 'Name muss eindeutig sein',
    'Class:PowerSocketType/UniquenessRule:name+' => 'Der Name des Stromanschluss-Typs muss eindeutig sein.',
    // Class: PowerSocket
    'Class:PowerSocket' => 'Stromanschluss',
    'Class:PowerSocket/Name' => '%2$s - %1$s',
    'Class:PowerSocket/Attribute:name' => 'Name',
    'Class:PowerSocket/Attribute:status' => 'Status',
    'Class:PowerSocket/Attribute:comment' => 'Kommentar',
    'Class:PowerSocket/Attribute:phase'  => 'Phase',
    'Class:PowerSocket/Attribute:phase+' => 'Elektrische Phase, an der dieser Anschluss angeschlossen ist.',
    'Class:PowerSocket/Attribute:phase/Value:L1' => 'L1',
    'Class:PowerSocket/Attribute:phase/Value:L1+' => 'Phase L1.',
    'Class:PowerSocket/Attribute:phase/Value:L2' => 'L2',
    'Class:PowerSocket/Attribute:phase/Value:L2+' => 'Phase L2.',
    'Class:PowerSocket/Attribute:phase/Value:L3' => 'L3',
    'Class:PowerSocket/Attribute:phase/Value:L3+' => 'Phase L3.',
    'Class:PowerSocket/Attribute:socket_type_id'  => 'Anschluss-Typ',
    'Class:PowerSocket/Attribute:socket_type_id+' => 'Typ dieses Anschlusses (z. B. C13, C19, Schuko).',
    'Class:PowerSocket/Attribute:socket_type_name'  => 'Name des Anschluss-Typs',
    'Class:PowerSocket/Attribute:pdu_id' => 'PDU',
    'Class:PowerSocket/Attribute:pdu_name' => 'PDU Name',
    'Class:PowerSocket/Attribute:datacenterdevice_id' => 'Datacenter-Gerät',
    'Class:PowerSocket/Attribute:datacenterdevice_name' => 'Datacenter-Gerät Name',
    'Class:PowerSocket/Message:NoFreeSocketOnDatacenterDevice' => 'Der PowerSocket konnte dem DatacenterDevice nicht zugewiesen werden, da kein freier Socket verfügbar ist.',
    'Class:PowerSocket/Error:NoFreeSocketOnDatacenterDevice' => 'Kann keine Verbindung mit dem Datacenter-Gerät herstellen, kein freier Stromanschluss verfügbar.',
    'Class:PowerSocket/Error:SocketTypeMismatch' => 'Das ausgewählte DatacenterDevice erfordert einen anderen Socket-Typ.',
    // Class: PDU
    'Class:PDU/Attribute:powersocket_list' => 'Stromanschlüsse',
    'Class:PDU/Attribute:powersocket_list+' => '',
    // Class: DatacenterDevice
    'Class:DatacenterDevice/Attribute:powerAsocket_id' => 'PowerA-Anschluss',
    'Class:DatacenterDevice/Attribute:powerAsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerAsocket_name' => 'PowerA-Anschluss Name',
    'Class:DatacenterDevice/Attribute:powerAsocket_name+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_id' => 'PowerB-Anschluss',
    'Class:DatacenterDevice/Attribute:powerBsocket_id+' => '',
    'Class:DatacenterDevice/Attribute:powerBsocket_name' => 'PowerB-Anschluss Name',
    'Class:DatacenterDevice/Attribute:powerBsocket_name+' => '',
    'Class:DatacenterDevice/Attribute:required_socket_type_id'  => 'Erforderlicher Anschluss-Typ',
    'Class:DatacenterDevice/Attribute:required_socket_type_id+' => 'Wenn gesetzt, können diesem Gerät (Power A / Power B) nur Anschlüsse dieses Typs zugewiesen werden.',
    'Class:DatacenterDevice/Attribute:required_socket_type_name'  => 'Name des erforderlichen Anschluss-Typs',
));
