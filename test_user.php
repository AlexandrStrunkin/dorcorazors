<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
    $APPLICATION->SetPageProperty("title", htmlspecialchars(COption::GetOptionString("main", "site_name", "Bitrix24")));
?>
<?

                use Bitrix\Sale\Order;
                use Bitrix\Main\Loader;
    
                \Bitrix\Main\Loader::includeModule('sale');

                $order = \Bitrix\Sale\Order::load(2192);
                /** @var \Bitrix\Sale\ShipmentCollection $shipmentCollection */
                $shipmentCollection = $order->getShipmentCollection();
                /** @var \Bitrix\Sale\Shipment $shipment */
                foreach ($shipmentCollection as $shipment) {
                    if ($shipment->getField("ALLOW_DELIVERY") == "Y") {
                        echo $shipment->getStoreId() . "<br>";
                        $shipment->setStoreId(1);
                        $shipment->save();
                        echo $shipment->getStoreId();
                    }
                }

                $order->save();



?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>