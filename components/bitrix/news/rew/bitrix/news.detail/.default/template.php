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

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
		<?=$arResult["DETAIL_TEXT"]?>
		</div>
		<div class="review-autor">
		<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>г., <?=$arResult["POSITION"]["VALUE"]?>, <?=$arResult["COMPANY"]["NAME"]?>
		</div>
	</div>
<div style="clear: both;" class="review-img-wrap">

<?if($arResult["DETAIL_PICTURE"] != NULL):?>
	<img  src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img">
<?endif?>
<?if($arResult["DETAIL_PICTURE"] = NULL):?>
	<img src="<?SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
<?endif?>
</div>

<div class="exam-review-doc">
	<p>Документы:</p>
	<?foreach($arResult["DISPLAY_PROPERTIES"]['ATTACH']['FILE_VALUE'] as $pid=>$arProperty):?>
		<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a  href="<?=$arProperty['SRC']?>">Файл </a></div>
	<?endforeach?>
</div>

  







