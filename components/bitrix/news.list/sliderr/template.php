<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="item-wrap">
	<div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="item">
		<div class="side-block side-opin">
			<div class="inner-block">
				<div class="title">
					<div class="photo-block">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
					</div>
					<div class="name-block"><a href="<? echo $arResult["ITEM"]["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
					<div class="pos-block">Генеральный директор,"Офис+"</div>
				</div>
				<div class="text-block"><?=$arItem["PREVIEW_TEXT"]?></div>
			</div>
		</div>
	</div>
<?endforeach;?>
</div>
</div>
