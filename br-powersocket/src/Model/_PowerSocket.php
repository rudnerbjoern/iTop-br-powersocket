<?php

/**
 * @copyright   Copyright (C) 2022-2026 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2026-01-22
 */

namespace BR\Extension\PowerSocket\Model;

use Combodo\iTop\Service\Events\EventData;
use cmdbAbstractObject;
use MetaModel;
use Dict;

class _PowerSocket extends cmdbAbstractObject
{

    public function OnPowerSocketCheckToWrite(EventData $oEventData)
    {
        // This method will block the PowerSocket modification, by adding a Check Issue
        $aChanges = $this->ListChanges();

        // Current User may not be allowed to see User class, so we can't use
        if (array_key_exists('datacenterdevice_id', $aChanges)) {
            // Make sure there is a free socket on the target
            if ($this->Get('datacenterdevice_id') != 0) {
                $datacenterdevice_id = $this->Get('datacenterdevice_id');
                $oDatacenterDeviceObject = MetaModel::GetObject('DatacenterDevice', $datacenterdevice_id, false);
                if (is_object($oDatacenterDeviceObject)) {
                    // Check if PowerSockets are already connected
                    if (($oDatacenterDeviceObject->Get('powerAsocket_id') != 0) && ($oDatacenterDeviceObject->Get('powerBsocket_id') != 0)) {
                        // Check if we are not already connected
                        if (($oDatacenterDeviceObject->Get('powerAsocket_id') != $this->GetKey()) && ($oDatacenterDeviceObject->Get('powerBsocket_id') != $this->GetKey())) {
                            // Generate Error Message
                            $this->AddCheckIssue(Dict::Format('Class:PowerSocket/Error:NoFreePowerSocketOnDatacenterDevice'));
                        }
                    }
                }
            }
        }
    }

    public function OnPowerSocketBeforeWrite(EventData $oEventData)
    {
        if ($oEventData->Get('is_new') === true) {
            // OnInsert
        } else {
            // OnUpdate
            $aChanges = $this->ListChanges();
            if (array_key_exists('datacenterdevice_id', $aChanges)) {
                // record in the memory object that the DatacenterDevice was changed
                $this->iDatacenterDeviceChanged = true;
                // disconnect the old DatacenterDevice
                $this->DisconnectPowerSocket($this->GetOriginal('datacenterdevice_id'));
            }
        }
    }

    public function OnPowerSocketAfterWrite(EventData $oEventData)
    {
        if ($oEventData->Get('is_new') === true) {
            // AfterInsert
            if ($this->Get('datacenterdevice_id') != 0)
                $this->ConnectPowerSocket($this->Get('datacenterdevice_id'));
        } else {
            // AfterUpdate
            // The PowerSocket is updated in DB and DatacenterDevice was changed
            if (isset($this->iDatacenterDeviceChanged))
                $this->ConnectPowerSocket($this->Get('datacenterdevice_id'));
        }
    }

    public function OnPowerSocketAboutToDelete(EventData $oEventData)
    {
        $aChanges = $this->ListChanges();
        if (array_key_exists('datacenterdevice_id', $aChanges))
            $this->DisconnectPowerSocket($this->Get('datacenterdevice_id'));
    }


    public function ConnectPowerSocket($datacenterdevice_id)
    {
        if ($datacenterdevice_id != 0) {
            $oDatacenterDeviceObject = MetaModel::GetObject('DatacenterDevice', $datacenterdevice_id, false);
            if (is_object($oDatacenterDeviceObject)) {
                // find powerAsocket_id or powerBsocket_id to be empty
                if ($oDatacenterDeviceObject->Get('powerAsocket_id') == 0) {
                    //set powersource form pdu_id
                    $oDatacenterDeviceObject->Set('powerA_id', $this->Get('pdu_id'));
                    // set powersocket from id
                    $oDatacenterDeviceObject->Set('powerAsocket_id', $this->GetKey());
                    $oDatacenterDeviceObject->DBUpdate();
                } elseif ($oDatacenterDeviceObject->Get('powerBsocket_id') == 0) {
                    //set powersource form pdu_id
                    $oDatacenterDeviceObject->Set('powerB_id', $this->Get('pdu_id'));
                    // set powersocket from id
                    $oDatacenterDeviceObject->Set('powerBsocket_id', $this->GetKey());
                    $oDatacenterDeviceObject->DBUpdate();
                } elseif (($oDatacenterDeviceObject->Get('powerAsocket_id') != $this->GetKey()) && ($oDatacenterDeviceObject->Get('powerBsocket_id') != $this->GetKey())) {
                    // unable to connect to powerAsocket or powerBsocket - so remove connection again
                    $this->Set('datacenterdevice_id', '');

                    $this->SetSessionMessageFromInstance('powersocket-1', 'Could not assign PowerSocket to DatacenterDevice, no free socket available', 'error', 1);
                }
            }
        }
    }

    public function DisconnectPowerSocket($datacenterdevice_id)
    {
        if ($datacenterdevice_id != 0) {
            $oDatacenterDeviceObject = MetaModel::GetObject('DatacenterDevice', $datacenterdevice_id, false);
            if (is_object($oDatacenterDeviceObject)) {
                // find powerAsocket_id or powerBsocket_id
                if ($oDatacenterDeviceObject->Get('powerAsocket_id') == $this->GetKey()) {
                    $oDatacenterDeviceObject->Set('powerA_id', '');
                    $oDatacenterDeviceObject->Set('powerAsocket_id', '');
                    $oDatacenterDeviceObject->DBUpdate();
                } elseif ($oDatacenterDeviceObject->Get('powerBsocket_id') == $this->GetKey()) {
                    $oDatacenterDeviceObject->Set('powerB_id', '');
                    $oDatacenterDeviceObject->Set('powerBsocket_id', '');
                    $oDatacenterDeviceObject->DBUpdate();
                }
            }
        }
    }
}
