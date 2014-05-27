<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?$APPLICATION->IncludeComponent(
	"nair:standard.elements.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams['IBLOCK_TYPE'],
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
		"SHOW_NAV" => $arParams['SHOW_NAV'],
		"COUNT" => $arParams['COUNT'],
		"SORT_FIELD1" => $arParams['SORT_FIELD1'],
		"SORT_DIRECTION1" => $arParams['SORT_DIRECTION1'],
		"SORT_FIELD2" => $arParams['SORT_FIELD2'],
		"SORT_DIRECTION2" => $arParams['SORT_DIRECTION2'],
		"CACHE_TYPE" => $arParams['CACHE_TYPE'],
		"CACHE_TIME" => $arParams['CACHE_TIME']
	),
$component
);?>