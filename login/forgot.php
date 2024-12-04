<?
//define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpasswd", 
	"flat", 
	array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => "/login/register.php",
		"COMPONENT_TEMPLATE" => "flat"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>