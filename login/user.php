<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent(
	"bitrix:blog.user", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"ID" => $id,
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"PATH_TO_BLOG" => "",
		"PATH_TO_USER" => "",
		"PATH_TO_USER_EDIT" => "",
		"PATH_TO_SEARCH" => "",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
		),
		"BLOG_VAR" => "",
		"PAGE_VAR" => "",
		"USER_VAR" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>