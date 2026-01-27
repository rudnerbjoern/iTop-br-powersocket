<?php

/**
 *
 * @copyright   Copyright (C) 2022-2026 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2026-01-27
 */

namespace BR\Extension\PowerSocket\Hook;

use PDU;
use Dict;
use iPopupMenuExtension;
use SeparatorPopupMenuItem;
use URLPopupMenuItem;
use UserRights;
use utils;

class PowerSocketOtherActions implements iPopupMenuExtension
{
    public static function EnumItems($iMenuId, $param)
    {
        $aItems = array();

        if ($iMenuId === iPopupMenuExtension::MENU_OBJDETAILS_ACTIONS && ($param instanceof PDU)) {
            // Optional: Nur anzeigen, wenn der User Modify-Rechte hat
            if (!UserRights::IsActionAllowed('PDU', UR_ACTION_MODIFY, $oObject)) {
                return $aItems;
            }

            $oObj = $param;

            $iCapacity = $oObj->Get('capacity');
            if (!is_null($iCapacity) && ($iCapacity > 0)) {
                $id = $oObj->GetKey();

                $aItems[] = new SeparatorPopupMenuItem();
                $oPowerSocketSet = $oObj->Get('powersocket_list');
                $iPowerSocketCount = $oPowerSocketSet->Count();
                if ($iPowerSocketCount < $iCapacity) {
                    $sMenu = 'UI:PowerSocket:Action:Create:PDU:CreatePowerSockets';
                    $aItems[] = new URLPopupMenuItem($sMenu, Dict::S($sMenu), utils::GetAbsoluteUrlAppRoot() . "pages/UI.php?route=powersocket.create_power_sockets&id=$id");
                }
            }
        }

        return $aItems;
    }
}
