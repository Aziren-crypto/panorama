<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("form");
CModule::IncludeModule("iblock");
session_start();
$PLANER_IB_ID = 49;
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/?>
<script src="jquery-1.12.4.js"></script>
 <script src="jquery-ui.js"></script>
 <link rel="stylesheet" href="jquery-ui.css">
<?

$sizes = array();
$sizes['дверь1.png'] = array('width' => '76', 'height' => '72');
$sizes['дверь2.png'] = array('width' => '76', 'height' => '72');
$sizes['дверь3.png'] = array('width' => '76', 'height' => '72');
$sizes['дверь4.png'] = array('width' => '76', 'height' => '72');
$sizes['дверь5.png'] = array('width' => '72', 'height' => '76');
$sizes['дверь6.png'] = array('width' => '72', 'height' => '76');
$sizes['дверь7.png'] = array('width' => '72', 'height' => '76');
$sizes['дверь8.png'] = array('width' => '72', 'height' => '76');
$sizes['окно-10х15.png'] = array('width' => '100', 'height' => '14');
$sizes['окно_10х15.png'] = array('width' => '12', 'height' => '101');
$sizes['окно-15х15.png'] = array('width' => '142', 'height' => '14');
$sizes['окно_15х15.png'] = array('width' => '11', 'height' => '152');
$sizes['ТВ Тумба1.png'] = array('width' => '370', 'height' => '96');
$sizes['ТВ Тумба2.png'] = array('width' => '419', 'height' => '84');
$sizes['ТВ Тумба3.png'] = array('width' => '274', 'height' => '85');
$sizes['ТВ Тумба4.png'] = array('width' => '243', 'height' => '92');
$sizes['Комод 1.png'] = array('width' => '153', 'height' => '87');
$sizes['Комод 2.png'] = array('width' => '332', 'height' => '94');
$sizes['Платяной шкаф.png'] = array('width' => '143', 'height' => '87');
$sizes['Шкаф-купе с боковой полкой 1.png'] = array('width' => '240', 'height' => '88');
$sizes['Шкаф-купе с боковой полкой 2.png'] = array('width' => '238', 'height' => '89');
$sizes['Шкаф-купе прямой.png'] = array('width' => '263', 'height' => '65');
$sizes['Шкаф-купе волна 1.png'] = array('width' => '388', 'height' => '127');
$sizes['Шкаф-купе волна 2.png'] = array('width' => '390', 'height' => '124');
$sizes['Стеллаж соты.png'] = array('width' => '245', 'height' => '58');
$sizes['Стеллаж с полками.png'] = array('width' => '59', 'height' => '42');
$sizes['Столик туалетный.png'] = array('width' => '122', 'height' => '64');
$sizes['Ковер.png'] = array('width' => '220', 'height' => '111');
$sizes['Растение напольное.png'] = array('width' => '167', 'height' => '150');
$sizes['Детская кроватка.png'] = array('width' => '159', 'height' => '295');
$sizes['Кровать 1.5 сп.png'] = array('width' => '213', 'height' => '347');
$sizes['Кровать 1сп.png'] = array('width' => '457', 'height' => '261');
$sizes['Кровать 2 сп.png'] = array('width' => '267', 'height' => '345');
$sizes['Обеденная группа.png'] = array('width' => '381', 'height' => '325');
$sizes['Стол рабочий.png'] = array('width' => '372', 'height' => '374');
$sizes['Столик журнальный.png'] = array('width' => '283', 'height' => '156');
$sizes['Стул обеденный.png'] = array('width' => '131', 'height' => '150');
$sizes['Даниель.png'] = array('width' => '354', 'height' => '354');
$sizes['Арчи-2.png'] = array('width' => '354', 'height' => '354');
$sizes['Томас-2.png'] = array('width' => '354', 'height' => '354');
$sizes['Матео-2.png'] = array('width' => '354', 'height' => '354');
$sizes['Мтео-Люкс.png'] = array('width' => '354', 'height' => '354');
$sizes['Норман.png'] = array('width' => '354', 'height' => '354');
$sizes['Норман-2-люкс.png'] = array('width' => '354', 'height' => '354');
$sizes['Фостеръ.png'] = array('width' => '354', 'height' => '354');
$sizes['Фостер-2-угол.png'] = array('width' => '354', 'height' => '354');
$sizes['Фостер-2-оттоманка.png'] = array('width' => '354', 'height' => '354');
$sizes['Абердин-2-оттоманка.png'] = array('width' => '354', 'height' => '354');
$sizes['Абердин-2-угол.png'] = array('width' => '354', 'height' => '354');
$sizes['Эдинбург-2-У.png'] = array('width' => '354', 'height' => '354');
$sizes['Эдинбург-2-УУ.png'] = array('width' => '354', 'height' => '354');

$sizes['Лас-вегас_1.png'] = array('width' => '354', 'height' => '354');
$sizes['Лас-Вегас_2.png'] = array('width' => '354', 'height' => '354');
$sizes['Лас-Вегас_3.png'] = array('width' => '354', 'height' => '354');
$sizes['Бонн.png'] = array('width' => '354', 'height' => '354');
$sizes['Бонн-у.png'] = array('width' => '354', 'height' => '354');
$sizes['Штутгард-оттоманка.png'] = array('width' => '354', 'height' => '354');
$sizes['Кембридж.png'] = array('width' => '354', 'height' => '354');
$sizes['Кембридж-угол.png'] = array('width' => '354', 'height' => '354');
$sizes['Старк.png'] = array('width' => '354', 'height' => '354');
$sizes['Старк-2'] = array('width' => '354', 'height' => '354');
$sizes['Фабио-2.png'] = array('width' => '354', 'height' => '354');
$sizes['Аделаида.png'] = array('width' => '354', 'height' => '354');
$sizes['Аделаида-оттоманка.png'] = array('width' => '354', 'height' => '354');
$sizes['Аделаида-угол.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-2ка.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-3ка.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-оттоманка.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-оттоманка2.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-угол1.png'] = array('width' => '354', 'height' => '354');
$sizes['Атланта-угол2.png'] = array('width' => '354', 'height' => '354');
$sizes['Барон-2ка.png'] = array('width' => '354', 'height' => '354');
$sizes['Барон-3ка.png'] = array('width' => '354', 'height' => '354');

if(isset($_REQUEST['delete'])){
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
	$arFilter = Array("ID"=>$_REQUEST['id'], "ACTIVE"=>"Y");
	$rest = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	while($ob = $rest->GetNextElement()){ 
		 $arFields = $ob->GetFields();  
		//echo '<pre>'; print_r($arFields); echo '</pre>'; 
		 $arProps = $ob->GetProperties();
		$imgs = array();
		$coors = array();
		if(is_array($arProps['furniture_string']['VALUE'])){
			foreach($arProps['furniture_string']['VALUE'] as $k => $v){
				if($k != $_REQUEST['delete']){
					$imgs[] = $v;
					$coors[] = $arProps['furniture_coor']['VALUE'][$k];
				}
			}
			//echo '<pre>'; print_r($imgs); echo '</pre>'; 
			//echo '<pre>'; print_r($coors); echo '</pre>'; 
			CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], false, array('furniture_string' => $imgs));
			CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], false, array('furniture_coor' => $coors));
		}
	}?>
	<script>window.location.replace('<?=$APPLICATION->GetCurPageParam("", array("delete"));?>')</script>
<?}
if(isset($_REQUEST['id'])){
	if((isset($_REQUEST['new_fon'])) && (strlen($_REQUEST['new_fon']) > 0)){
		$PROPERTY_CODE = 'fon_string';  // код свойства
		$PROPERTY_VALUE = $_REQUEST['new_fon'];
		CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], false, array($PROPERTY_CODE => $PROPERTY_VALUE));
	}
	if(isset($_REQUEST['plan_edit'])){
		//echo '<pre>'; print_r($_REQUEST); echo '</pre>';
		$new_img = array();
		$new_desc = array();
		$arr_imgs_val = array();
		$arr_coors_val = array();
		foreach($_REQUEST['furn'] as $k => $v){
			$arr_imgs_val[] = $_REQUEST['furn'][$k]['id'];
			$arr_coors_val[] = $_REQUEST['furn'][$k]['left'].';'.$_REQUEST['furn'][$k]['top'].';'.$_REQUEST['furn'][$k]['width'].';'.$_REQUEST['furn'][$k]['height'].';'.$_REQUEST['furn'][$k]['rotation'];
		}
		CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], $PLANER_IB_ID, array('furniture_string' => $arr_imgs_val));
		CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], $PLANER_IB_ID, array('furniture_coor' => $arr_coors_val));
	}
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
	$arFilter = Array("ID"=>$_REQUEST['id'], "ACTIVE"=>"Y");
	$rest = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	while($ob = $rest->GetNextElement()){ 
		 $arFields = $ob->GetFields();  
		//echo '<pre>'; print_r($arFields); echo '</pre>'; 
		 $arProps = $ob->GetProperties();
		$imgs = array();
		if(is_array($arProps['furniture_string']['VALUE'])){
			foreach($arProps['furniture_string']['VALUE'] as $k => $v){
				$coor = explode(';', $arProps['furniture_coor']['VALUE'][$k]);
				//echo '<br>id: '.$v;
				//$path = CFile::GetPath($v);
				$imgs[] = array('id' => $v, 'img' => $v, 'left' => $coor[0], 'top' => $coor[1], 'width' => $coor[2], 'height' => $coor[3], 'rotation' => $coor[4]);
			}
		}
		if(isset($_REQUEST['new_element']) && strlen($_REQUEST['new_element']) > 0){
			$res = CIBlockElement::GetProperty($PLANER_IB_ID, $_REQUEST['id'], "sort", "asc", array("CODE" => "furniture_string"));
			$arr_els = array();
			while ($ob = $res->GetNext()){
				$arr_els[] = $ob['VALUE'];
			}
			$arr_els[] = $_REQUEST['new_element'];
			$ELEMENT_ID = $_REQUEST['id'];  // код элемента
			$PROPERTY_CODE = 'furniture_string';  // код свойства
			$PROPERTY_VALUE = $arr_els;  // значение свойства
			CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
			$imgs[] = array('id' => $_REQUEST['new_element'], 'img' => $_REQUEST['new_element'], 'left' => '0', 'top' => '0', 'width' => $sizes[$_REQUEST['new_element']]['width'], 'height' => $sizes[$_REQUEST['new_element']]['height'], 'rotation' => 'none');
		}
	}


if(isset($_REQUEST['opacity'])){
	$_SESSION['opacity'] = $_REQUEST['opacity'];
}
?>
<form method="post" id="plan_form" enctype="multipart/form-data" style="vertical-align:top; border:1px solid black; padding: 10px; "><?// overflow: scroll; display:inline-block;?>
<input type="hidden" name="plan_edit" value="Y">
<input type="hidden" id="new_element" name="new_element" value="">
<input type="hidden" id="new_fon" name="new_fon" value="">
<!--h2>Таблица элементов</h2-->
	<p><a target="_blank" href="print2.php?id=<?=$_REQUEST['id']?>">Версия для печати</a></p>
	<p>Прозрачность, число от 0 до 9</p>
<input type="number" id="opacity" name="opacity" value="<?=$_SESSION['opacity']?>">
<?
if(isset($_REQUEST['resize_show_change'])){
	if($_SESSION['resize_show'] == 'N'){
		$_SESSION['resize_show'] = 'Y';
	}else{
		$_SESSION['resize_show'] = 'N';
	}
	LocalRedirect($APPLICATION->GetCurPageParam("", array(resize_show_change)));
}
if($_SESSION['resize_show'] == 'N'){
	echo '<style>
	.ui-resizable-handle.ui-resizable-se{
		display: none !important;
	}</style>';
}

?>
<p><input type="checkbox" name="resize_show" value="Y"<?if($_SESSION['resize_show'] != 'N') echo ' checked';?> onclick="document.location.href = '<?echo $APPLICATION->GetCurPageParam("resize_show_change=Y", array());?>'; return false;"> Показывать значки изменения размера</p>
<details>
	<summary>Таблица добавленных элементов</summary>
	<table>
		<tr><td>Картинка</td><td>Горизонтально</td><td>Вертикально</td><td>Ширина</td><td>Высота</td><td>Угол</td></tr>
		<?foreach ($imgs as $k => $v){?>
			<tr id="tr_<?=$k?>"><td><?=$v['img']?><input type="hidden" name="furn[<?=$k?>][img]" value="<?=$v['img']?>">
			<input type="hidden" name="furn[<?=$k?>][id]" value="<?=$v['id']?>"></td>
			<td><input class="left" type="number" name="furn[<?=$k?>][left]" value="<?=$v['left']?>"></td>
			<td><input class="top" type="number" name="furn[<?=$k?>][top]" value="<?=$v['top']?>"></td>
			<td><input class="width" type="number" name="furn[<?=$k?>][width]" value="<?=$v['width']?>"></td>
			<td><input class="height" type="number" name="furn[<?=$k?>][height]" value="<?=$v['height']?>"></td>
			<td><input class="rotation" type="text" name="furn[<?=$k?>][rotation]" value="<?=$v['rotation']?>"></td>
			<td><button onclick="window.location.replace('<?=$APPLICATION->GetCurPageParam("delete=".$k, array());?>'); return false;">Удалить</button></td>
			</tr>
		<?}?>
	</table>
</details>
<script>
$('body').on('input','table .left', function(){
	arr = $(this).closest('tr').attr('id').split('_')[1];
	thisval = $(this).val();
	$('img#'+arr).css('left', thisval+'px'); 
});
$('body').on('input','table .top', function(){
	arr = $(this).closest('tr').attr('id').split('_')[1];
	$('img#'+arr).css('top', $(this).val()+'px');
});
</script>
<button>Сохранить расположение всех элементов</button>

</form>
<div style="display:flex;">
<div style="display:inline-block; border: 1px solid black; padding: 10px; height: auto; width: 70%;"><!--1754px; width: 1240px; h2>План помещения</h2><p>Элементы можно перетаскивать и менять их размер.</p-->
	<?	//echo '<p>'.$_COOKIE['planer_user_name'].', '.$_COOKIE['planer_shop'].', '.$_COOKIE['planer_email'].', '.$_COOKIE['planer_phone'].'</p>'?>
	<div class="picture" style=""><?//height: 1754px; width: 1240px;?>
		<img src="<?=$arProps['fon_string']['VALUE'] //CFile::GetPath($arProps['fon']['VALUE'])?>" style="max-height:100%; max-width: 100%;"/> <?//width="100%" ?>
		<?
		$kos = array();
		foreach ($imgs as $k => $v){?>
		
			<img id="<?=$k?>" src="/panorama/imgs/<?=$v['img']?>" style="position: relative;
			left: <?=$v['left']?>px !important;
			top: <?=$v['top']?>px !important;
			<?if((int) $v['width'] > 0){?>
				width: <?=$v['width']?>px !important;
		<?}/*else{
				$kos[$v['img']] = $v['img'];
		}*/?>
			<?if((int) $v['height'] > 0){?>
				height: <?=$v['height']?>px !important;
		<?}/*else{
				$kos[$v['img']] = $v['img'];
		}*/?>
			transform: <?=$v['rotation']?>;
			" class="draggable drag_image elt" />
		
		<?}?>
	</div>
<div id="box"></div>
</div>

<form method="post" enctype="multipart/form-data" style="vertical-align:top; border:1px solid black; padding: 10px; display:inline-block;">
	<p>Нажмите на элемент, чтобы добавить его к плану помещения.</p>
<div class="tabs">
  <ul>
    <li>
     <input type="radio" name="tabs-0" id="tabs-0-0" />
        <label for="tabs-0-0">Комната</label>
     <div>
		 <div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">3 х 5.7
			<a href="" onclick="$('#new_fon').val('imgs/3 х 5.7.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/3 х 5.7.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">3 х 6
			<a href="" onclick="$('#new_fon').val('imgs/3 х 6.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/3 х 6.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">4 х 5.5
			<a href="" onclick="$('#new_fon').val('imgs/4 х 5.5.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/4 х 5.5.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">4 х 5
			<a href="" onclick="$('#new_fon').val('imgs/4 х 5.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/4 х 5.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Студия
			<a href="" onclick="$('#new_fon').val('imgs/Студия.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Студия.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">6 x 3.png
			<a href="" onclick="$('#new_fon').val('imgs/6 x 3.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/6 x 3.png"></a>
		</div>


    </div>
   </li>
    <li>
     <input type="radio" name="tabs-0" checked="checked" id="tabs-0-1" />
        <label for="tabs-0-1">Двери</label>
     <div>
		 <div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь3.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь3.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь4.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь4.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь5.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь5.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь6.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь6.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь7.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь7.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('дверь8.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/дверь8.png"></a>
		</div>
    </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-2" />
       <label for="tabs-0-2">Окна</label>
     <div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			 <a href="" onclick="$('#new_element').val('окно-10х15.png'); $('#plan_form').submit(); return false;"><img style="margin: auto; position: absolute; max-height: 90%; max-width: 90%; height: auto;top: 0;
left: 0;
bottom: 0;
right: 0;" class="palitr" src="imgs/окно-10х15.png"></a>
		</div>
		<div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('окно_10х15.png'); $('#plan_form').submit(); return false;"><img style="margin: auto; position: absolute; max-height: 90%; max-width: 90%; height: auto;top: 0;
left: 0;
bottom: 0;
right: 0;" class="palitr" src="imgs/окно_10х15.png"></a>
		</div>
		<div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('окно-15х15.png'); $('#plan_form').submit(); return false;"><img style="margin: auto; position: absolute; max-height: 90%; max-width: 90%; height: auto;top: 0;
left: 0;
bottom: 0;
right: 0;" class="palitr" src="imgs/окно-15х15.png"></a>
		</div>
		<div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">
			<a href="" onclick="$('#new_element').val('окно_15х15.png'); $('#plan_form').submit(); return false;"><img style="margin: auto; position: absolute; max-height: 90%; max-width: 90%; height: auto;top: 0;
left: 0;
bottom: 0;
right: 0;" class="palitr" src="imgs/окно_15х15.png"></a>
		</div>
    </div>
    </li>
    <li>
      <input type="radio" name="tabs-0" id="tabs-0-3" />
        <label for="tabs-0-3">Мебель</label>
      <div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">ТВ Тумба1
			<a href="" onclick="$('#new_element').val('ТВ Тумба1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/ТВ Тумба1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">ТВ Тумба2
			<a href="" onclick="$('#new_element').val('ТВ Тумба2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/ТВ Тумба2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">ТВ Тумба3
			<a href="" onclick="$('#new_element').val('ТВ Тумба3.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/ТВ Тумба3.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">ТВ Тумба4
			<a href="" onclick="$('#new_element').val('ТВ Тумба4.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/ТВ Тумба4.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Комод 1
			<a href="" onclick="$('#new_element').val('Комод 1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Комод 1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Комод 2<br>
			<a href="" onclick="$('#new_element').val('Комод 2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Комод 2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Платяной шкаф<br>
			<a href="" onclick="$('#new_element').val('Платяной шкаф.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Платяной шкаф.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Шкаф-купе с боковой полкой 1<br>
			<a href="" onclick="$('#new_element').val('Шкаф-купе с боковой полкой 1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Шкаф-купе с боковой полкой 1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Шкаф-купе с боковой полкой 2<br>
			<a href="" onclick="$('#new_element').val('Шкаф-купе с боковой полкой 2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Шкаф-купе с боковой полкой 2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Шкаф-купе прямой<br>
			<a href="" onclick="$('#new_element').val('Шкаф-купе прямой.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Шкаф-купе прямой.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Шкаф-купе волна 1<br>
			<a href="" onclick="$('#new_element').val('Шкаф-купе волна 1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Шкаф-купе волна 1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Шкаф-купе волна 2<br>
			<a href="" onclick="$('#new_element').val('Шкаф-купе волна 2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Шкаф-купе волна 2.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Стеллаж соты<br>
			<a href="" onclick="$('#new_element').val('Стеллаж соты.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Стеллаж соты.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Стеллаж с полками<br>
			<a href="" onclick="$('#new_element').val('Стеллаж с полками.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Стеллаж с полками.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Столик туалетный<br>
			<a href="" onclick="$('#new_element').val('Столик туалетный.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Столик туалетный.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Ковер<br>
			<a href="" onclick="$('#new_element').val('Ковер.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Ковер.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; border: 1px solid #BBB9B9; padding: 5px; margin: 5px; padding-top: 25px;" ><br>
			<a href="" onclick="$('#new_element').val('Детская кроватка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Детская кроватка.png" data-title="Детская кроватка"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;"><br>
			<a href="" onclick="$('#new_element').val('Кровать 1.5 сп.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кровать 1.5 сп.png" data-title="Кровать 1.5 сп"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кровать 1сп<br>
			<a href="" onclick="$('#new_element').val('Кровать 1сп.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кровать 1сп.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кровать 2 сп<br>
			<a href="" onclick="$('#new_element').val('Кровать 2 сп.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кровать 2 сп.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Обеденная группа<br>
			<a href="" onclick="$('#new_element').val('Обеденная группа.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Обеденная группа.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Стол рабочий<br>
			<a href="" onclick="$('#new_element').val('Стол рабочий.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Стол рабочий.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Столик журнальный<br>
			<a href="" onclick="$('#new_element').val('Столик журнальный.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Столик журнальный.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Стул обеденный<br>
			<a href="" onclick="$('#new_element').val('Стул обеденный.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Стул обеденный.png"></a>
		</div>
      </div>
   </li>
    <li>
      <input type="radio" name="tabs-0" id="tabs-0-4" />
        <label for="tabs-0-4">Диваны</label>
      <div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Даниель
			<a href="" onclick="$('#new_element').val('Даниель.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Даниель.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Арчи-2
			<a href="" onclick="$('#new_element').val('Арчи-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Арчи-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Томас-2
			<a href="" onclick="$('#new_element').val('Томас-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Томас-2.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Матео-2
			<a href="" onclick="$('#new_element').val('Матео-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Матео-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Мтео-Люкс
			<a href="" onclick="$('#new_element').val('Мтео-Люкс.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Мтео-Люкс.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Норман
			<a href="" onclick="$('#new_element').val('Норман.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Норман.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Норман-2-люкс
			<a href="" onclick="$('#new_element').val('Норман-2-люкс.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Норман-2-люкс.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Фостеръ
			<a href="" onclick="$('#new_element').val('Фостеръ.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Фостеръ.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Фостер-2-угол
			<a href="" onclick="$('#new_element').val('Фостер-2-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Фостер-2-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Фостер-2-оттоманка
			<a href="" onclick="$('#new_element').val('Фостер-2-оттоманка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Фостер-2-оттоманка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Абердин-2-оттоманка
			<a href="" onclick="$('#new_element').val('Абердин-2-оттоманка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Абердин-2-оттоманка.png"></a>
		</div>


		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Абердин-2-угол
			<a href="" onclick="$('#new_element').val('Абердин-2-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Абердин-2-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Эдинбург-2-У
			<a href="" onclick="$('#new_element').val('Эдинбург-2-У.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Эдинбург-2-У.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Эдинбург-2-УУ
			<a href="" onclick="$('#new_element').val('Эдинбург-2-УУ.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Эдинбург-2-УУ.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лас-вегас_1
			<a href="" onclick="$('#new_element').val('Лас-вегас_1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лас-вегас_1.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лас-Вегас_2
			<a href="" onclick="$('#new_element').val('Лас-Вегас_2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лас-Вегас_2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лас-Вегас_3
			<a href="" onclick="$('#new_element').val('Лас-Вегас_3.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лас-Вегас_3.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Бонн
			<a href="" onclick="$('#new_element').val('Бонн.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Бонн.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Бонн-у
			<a href="" onclick="$('#new_element').val('Бонн-у.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Бонн-у.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Штутгард-оттоманка
			<a href="" onclick="$('#new_element').val('Штутгард-оттоманка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Штутгард-оттоманка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кембридж
			<a href="" onclick="$('#new_element').val('Кембридж.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кембридж.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кембридж-угол
			<a href="" onclick="$('#new_element').val('Кембридж-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кембридж-угол.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Старк
			<a href="" onclick="$('#new_element').val('Старк.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Старк.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Старк-2
			<a href="" onclick="$('#new_element').val('Старк-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Старк-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Фабио-2
			<a href="" onclick="$('#new_element').val('Фабио-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Фабио-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Аделаида
			<a href="" onclick="$('#new_element').val('Аделаида.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Аделаида.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Аделаида-оттоманка
			<a href="" onclick="$('#new_element').val('Аделаида-оттоманка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Аделаида-оттоманка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Аделаида-угол
			<a href="" onclick="$('#new_element').val('Аделаида-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Аделаида-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-2ка
			<a href="" onclick="$('#new_element').val('Атланта-2ка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-2ка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-3ка
			<a href="" onclick="$('#new_element').val('Атланта-3ка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-3ка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-оттоманка
			<a href="" onclick="$('#new_element').val('Атланта-оттоманка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-оттоманка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-оттоманка2
			<a href="" onclick="$('#new_element').val('Атланта-оттоманка2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-оттоманка2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-угол1
			<a href="" onclick="$('#new_element').val('Атланта-угол1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-угол1.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Атланта-угол2
			<a href="" onclick="$('#new_element').val('Атланта-угол2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Атланта-угол2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Барон-2ка
			<a href="" onclick="$('#new_element').val('Барон-2ка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Барон-2ка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Барон-3ка
			<a href="" onclick="$('#new_element').val('Барон-3ка.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Барон-3ка.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Барон-отт
			<a href="" onclick="$('#new_element').val('Барон-отт.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Барон-отт.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Барон-угол
			<a href="" onclick="$('#new_element').val('Барон-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Барон-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Виченца
			<a href="" onclick="$('#new_element').val('Виченца.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Виченца.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Голливуд
			<a href="" onclick="$('#new_element').val('Голливуд.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Голливуд.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Голливуд-2
			<a href="" onclick="$('#new_element').val('Голливуд-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Голливуд-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Голливуд-угол
			<a href="" onclick="$('#new_element').val('Голливуд-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Голливуд-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кливленд
			<a href="" onclick="$('#new_element').val('Кливленд.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кливленд.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кливленд-отт
			<a href="" onclick="$('#new_element').val('Кливленд-отт.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кливленд-отт.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кливленд-угол
			<a href="" onclick="$('#new_element').val('Кливленд-угол.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кливленд-угол.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон
			<a href="" onclick="$('#new_element').val('Хьюстон.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон-2
			<a href="" onclick="$('#new_element').val('Хьюстон-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон-отт
			<a href="" onclick="$('#new_element').val('Хьюстон-отт.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон-отт.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон-отт-2
			<a href="" onclick="$('#new_element').val('Хьюстон-отт-2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон-отт-2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон-у
			<a href="" onclick="$('#new_element').val('Хьюстон-у.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон-у.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Хьюстон-у2
			<a href="" onclick="$('#new_element').val('Хьюстон-у2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Хьюстон-у2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лейпциг
			<a href="" onclick="$('#new_element').val('Лейпциг.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лейпциг.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лейпциг-отт
			<a href="" onclick="$('#new_element').val('Лейпциг-отт.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лейпциг-отт.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Лейпциг-уг
			<a href="" onclick="$('#new_element').val('Лейпциг-уг.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Лейпциг-уг.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Поло
			<a href="" onclick="$('#new_element').val('Поло.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Поло.png"></a>
		</div>

		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Поло2
			<a href="" onclick="$('#new_element').val('Поло2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Поло2.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Поло-отт
			<a href="" onclick="$('#new_element').val('Поло-отт.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Поло-отт.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Поло-уг
			<a href="" onclick="$('#new_element').val('Поло-уг.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Поло-уг.png"></a>
		</div>
		<div class="element_mini" style="height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Венеция
			<a href="" onclick="$('#new_element').val('Венеция.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Венеция.png"></a>
		</div>
      </div>
   </li>
   <li>
     <input type="radio" name="tabs-0" id="tabs-0-5" />
       <label for="tabs-0-5">Прочее</label>
     <div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">ТВ
			 <a href="" onclick="$('#new_element').val('ТВ.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/ТВ.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Батарея 1
			 <a href="" onclick="$('#new_element').val('Батарея 1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Батарея 1.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Батарея 2
			 <a href="" onclick="$('#new_element').val('Батарея 2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Батарея 2.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Камин
			 <a href="" onclick="$('#new_element').val('Камин.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Камин.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Ваза
			 <a href="" onclick="$('#new_element').val('Ваза.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Ваза.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Растение напольное
			 <a href="" onclick="$('#new_element').val('Растение напольное.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Растение напольное.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Пианино
			 <a href="" onclick="$('#new_element').val('Пианино.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Пианино.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кухня угол 1
			 <a href="" onclick="$('#new_element').val('Кухня угол 1.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кухня угол 1.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кухня угол 2
			 <a href="" onclick="$('#new_element').val('Кухня угол 2.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кухня угол 2.png"></a>
		</div>
		 <div class="element_mini" style="position: relative; height: 100px; width: 100px; display:inline-block; border: 1px solid #BBB9B9; padding: 5px; margin: 5px;">Кухня ниша
			 <a href="" onclick="$('#new_element').val('Кухня ниша.png'); $('#plan_form').submit(); return false;"><img class="palitr" src="imgs/Кухня ниша.png"></a>
		</div>
    </div>
    </li>
  </ul>
</div>

</form>
</div>

<?}else{

	global $USER;
	if(isset($_REQUEST['reset'])){
		LocalRedirect($APPLICATION->GetCurPageParam("", array('reset')));
	}

	/*echo '<pre>$_REQUEST: '; print_r($_REQUEST); echo '</pre>';
	echo '<pre>$_SESSION: '; print_r($_SESSION); echo '</pre>';
echo '<pre>$_COOKIE: '; print_r($_COOKIE); echo '</pre>';*/
	if(isset($_SESSION['planer_user_name'])){
		setcookie('planer_user_name', $_SESSION['planer_user_name'], time() + 3600 * 24 * 365);;
	}
	if(isset($_SESSION['planer_shop'])){
		setcookie('planer_shop', $_SESSION['planer_shop'], time() + 3600 * 24 * 365);;
	}
	if(isset($_SESSION['planer_email'])){
		setcookie('planer_email', $_SESSION['planer_email'], time() + 3600 * 24 * 365);;
	}
	if(isset($_SESSION['planer_phone'])){
		setcookie('planer_phone', $_SESSION['planer_phone'], time() + 3600 * 24 * 365);;
	}
	$CUserID = $USER->GetID();
	if($_GET['edit_user_props'] == 'Y'){
		$_SESSION['edit_user_props'] = $_GET['edit_user_props'];
		setcookie('edit_user_props', '1', time() - 1);
		$reset = false;
		if(isset($_GET['planer_user_name'])){
			$_SESSION['planer_user_name'] = $_GET['planer_user_name'];
			setcookie('planer_user_name', '1', time() - 1);
			//setcookie('planer_user_name', $_REQUEST['planer_user_name'], time() + 3600 * 24 * 365);
			$reset = true;
		}
		if(isset($_GET['planer_shop'])){
			$_SESSION['planer_shop'] = $_GET['planer_shop'];
			setcookie('planer_shop', '1', time() - 1);
			//setcookie('planer_shop', $_REQUEST['planer_shop'], time() + 3600 * 24 * 365);
			$reset = true;
		}
		if(isset($_GET['planer_email'])){
			$_SESSION['planer_email'] = $_GET['planer_email'];
			setcookie('planer_email', '1', time() - 1);
			//setcookie('planer_email', $_REQUEST['planer_email'], time() + 3600 * 24 * 365);
			$reset = true;
		}
		if(isset($_GET['planer_phone'])){
			$_SESSION['planer_phone'] = $_GET['planer_phone'];
			setcookie('planer_phone', '1', time() - 1);
			//setcookie('planer_phone', $_REQUEST['planer_phone'], time() + 3600 * 24 * 365);
			$reset = true;
		}
		if(isset($_REQUEST['new_item_name']) && strlen($_REQUEST['new_item_name']) > 0){
			$el = new CIBlockElement;

			$PROP = array();
			$PROP['user'] = $CUserID;
			
			$arLoadProductArray = Array(
			  "IBLOCK_ID"      => $PLANER_IB_ID,
			  "PROPERTY_VALUES"=> $PROP,
			  "NAME"           => $_REQUEST['new_item_name'],
			  );

			if($PRODUCT_ID = $el->Add($arLoadProductArray))
				echo '<p>Схема создана. <a href="?id='.$PRODUCT_ID.'">Перейти</a></p>';
			else
			  echo "Error: ".$el->LAST_ERROR;
		}echo '<br>RESET';
		if($reset){echo '<br> Y';
			LocalRedirect($APPLICATION->GetCurPageParam("reset=Y", array('planer_phone', 'planer_email', 'planer_shop', 'planer_user_name', 'new_item_name', 'edit_user_props')));
		}else{echo '<br> N';}
	}
	echo '<form method="get" id="user_params" style="vertical-align:top; border:1px solid black; padding: 10px; ">';
		echo '<p><input type="hidden" name="edit_user_props" value="Y"></p>';
		echo '<table><tr><td><h3>Ваше ФИО*:</h3></td>';
		//$_SESSION['planer_user_name'] = '34534653tregdfhyh56y566yh56ytrghrth65yh';
	if(!isset($_COOKIE['planer_user_name'])){
		$_COOKIE['planer_user_name'] = $USER->GetFullName();
	}
	echo '<td><input required style="font-family: monospace" size="'.(strlen($_COOKIE['planer_user_name'])).'" onkeydown="size=value.length||10" onkeyup="onkeydown()" onkeypress="onkeydown()" onchange="onkeydown()" type="text" name="planer_user_name" value="'.$_COOKIE['planer_user_name'].'"></td></tr>';
		echo '<tr><td><h3>Торговый центр*:</h3></td>';
		echo '<td><input required style="font-family: monospace" size="'.(strlen($_COOKIE['planer_shop'])).'" onkeydown="size=value.length||10" onkeyup="onkeydown()" onkeypress="onkeydown()" onchange="onkeydown()" type="text" name="planer_shop" value="'.$_COOKIE['planer_shop'].'"></td></tr>';
		echo '<tr><td><h3>Email*:</h3></td>';
		echo '<td><input required style="font-family: monospace" size="'.(strlen($_COOKIE['planer_email'])).'" onkeydown="size=value.length||10" onkeyup="onkeydown()" onkeypress="onkeydown()" onchange="onkeydown()" type="text" name="planer_email" value="'.$_COOKIE['planer_email'].'"></td></tr>';
		echo '<tr><td><h3>Ваш телефон*:</h3></td>';
	echo '<td><input required style="font-family: monospace" size="'.(strlen($_COOKIE['planer_phone'])).'" onkeydown="size=value.length||10" onkeyup="onkeydown()" onkeypress="onkeydown()" onchange="onkeydown()" type="text" name="planer_phone" value="'.$_COOKIE['planer_phone'].'" ></td></tr>';
		echo '<tr><td><h3>Название новой схемы:</h3></td>';
		echo '<td><input style="font-family: monospace" onkeydown="size=value.length||10" onkeyup="onkeydown()" onkeypress="onkeydown()" onchange="onkeydown()" type="text" name="new_item_name" value="" ></td></table>';
		echo '<p><button>Ввести данные</button></p>';
	echo '</form>';

	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
	$arFilter = Array("IBLOCK_ID" => $PLANER_IB_ID, "PROPERTY_user"=>$CUserID, "ACTIVE"=>"Y");
	$rest = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	//echo '<h3>Ваши схемы:</h3>';
	while($ob = $rest->GetNextElement()){ 
		 $arFields = $ob->GetFields();  
		//echo '<pre>'; print_r($arFields); echo '</pre>'; 
		 $arProps = $ob->GetProperties();
		echo '<p><a href="?id='.$arFields['ID'].'">'.$arFields['NAME'].'</a></p>';
	}

}
//echo '<br>$_SESSION[edit_user_props] '.$_SESSION['edit_user_props'];
//echo '<br>$_COOKIE[edit_user_props] '.$_COOKIE['edit_user_props'];

	if(isset($_SESSION['edit_user_props']) && strlen($_SESSION['edit_user_props']) > 0 && !isset($_COOKIE['edit_user_props'])){
		unset($_SESSION['edit_user_props']);
		echo '<script>window.location.reload(true); </script>';
	}
?>
<script src="jquery.ui.rotatable.js"></script>
<!-- this is small and will allow you to override look/feel of handle -->
<style>
.ui-rotatable-handle {
    height: 16px;
    width: 16px;
    cursor: pointer;
		// background-image: url(rotate.png);
    background-size: 100%;
    left: 2px;
    bottom: 2px;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {
        var params = {
            // Callback fired on rotation start.
            start: function(event, ui) {
            },
            // Callback fired during rotation.
            rotate: function(event, ui) {
            },
            // Callback fired on rotation end.
            stop: function(event, ui) {
            },
            // Set the rotation center
            rotationCenterOffset: {
                top: 20,
                left: 20
            },
            transforms: {
                translate: '(50%, 50%)',
                scale: '(2)'
                //any other transforms
            }
        };
        $('#target').rotatable(params);
    });
</script>
<script>
	$('body').height($('div.picture img').height() + 300);
	$('html').height($('div.picture img').height() + 300);
	//$( function() {
		//$( ".draggable" ).draggable();
	//alert('44');
	$( ".draggable" ).resizable({ /*aspectRatio:true */});
	$( ".ui-wrapper" ).draggable();
        var params = {
            // Callback fired on rotation start.
            start: function(event, ui) {
            },
            // Callback fired during rotation.
            rotate: function(event, ui) {
            },
            // Callback fired on rotation end.
            stop: function(event, ui) {
            },
            // Set the rotation center
            rotationCenterOffset: {
                top: 20,
                left: 20
            },
            transforms: {
                translate: '(50%, 50%)',
                scale: '(2)'
                //any other transforms
            }
        };
        $('.ui-wrapper').rotatable(params);
		//$( ".draggable" ).resizable({ aspectRatio:true }).draggable();
	//$( ".draggable" ).resizable({ aspectRatio:true });
	//$( "#resizable" ).resizable();
		$('.ui-wrapper').each(function (indx, element){
			id = $(element).find('img').attr('id');
			$(element).attr('id', 'wrapper_'+id);
			
			trans = $(element).find('img').css('transform');
			$(element).css('transform', trans);
			
			$(element).find('img').css('transform', '');
			//alert('wrapper_'+id);

			var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver,
				log = document.getElementById('box'),
				//log = document.getElementsByClassName('.log_class');
				config = {
					attributes: true,
					attributeFilter: ['style']
				},
				//target = document.getElementById('wrapper_<?=$k?>'), li;
				//target = $('.ui-wrapper:has(img#<?=$k?>)').eq(0), li;
					//target = $('img#<?=$k?>').closest('.ui-wrapper').eq(0), li;
				target = document.getElementById('wrapper_'+id), li;
	
				var observer = new MutationObserver(function(mutations) {
					mutations.forEach(function(mutation) {
						//li = '<li>' + (mutation.target.style.display === 'none' ? 'Скрыли' : 'Показали') + '</li>';
						//log.insertAdjacentHTML('beforeEnd', li);
						//var_top = $('.ui-wrapper:has(img#<?=$k?>)').css('top');
						id = $(target).attr('id').split('_')[1];
						//alert($(target).css('top'));
						//left = $('.ui-wrapper:has(img#<?=$k?>)').css('left');
						//left = $('.ui-wrapper#wrapper_'+id).css('left');
						//var_top = $('.ui-wrapper#wrapper_'+id).css('top');
						left = $(target).css('left');
						var_top = $(target).css('top');
						width = $(target).css('width');
						height = $(target).css('height');
						rotation = $(target).css('transform');
						//$('tr#tr_<?=$k?> .left').value = left;
						$('tr#tr_'+id+' .left').val(parseInt(left));
						$('tr#tr_'+id+' .top').val(parseInt(var_top));
						$('tr#tr_'+id+' .width').val(parseInt(width));
						$('tr#tr_'+id+' .height').val(parseInt(height));
						$('tr#tr_'+id+' .rotation').val(rotation);
						//console.log('left '+left);
						//console.log('top '+var_top);
						//alert('');
					});
				});
				observer.observe(target, config);
			});

		//} );

</script>
<?foreach ($imgs as $k => $v){?>

<?}?>
	<script>

	</script>
<style>
.ui-wrapper, .ui-wrapper img{
		//height: auto !important;
		//min-width: 10px;
}
	/*.ui-wrapper{
		height: auto !important;
		width: auto !important;
}*/
.picture
{
    position:relative;
    display:inline-block;
}
.picture img {
    display:block;
}
.picture2
{
	//background: url('0cbd0afd08c1fc0847c516d48a57e6a7.png') 50% 50% no-repeat;
	background-image: url('0cbd0afd08c1fc0847c516d48a57e6a7.png');
		//background-position: 50% 50%;
	background-repeat: no-repeat;
    width: 100%;
    height: 100%;
    position:absolute;
    left:0;
    top:0;
}



.tabs {
    width: 100%;
    height: 400px;
}
.tabs ul,
.tabs li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.tabs,
.tabs input[type="radio"]:checked + label {
    position: relative;
}
.tabs li,
.tabs input[type="radio"] + label {
    display: inline-block;
}
.tabs li > div,
.tabs input[type="radio"] {
    position: absolute;
}
.tabs li > div,
.tabs input[type="radio"] + label {
    border: solid 1px #ccc;
}
.tabs {
font: normal 11px Arial, Sans-serif;
    color: #404040;
}
.tabs li {
    vertical-align: top;
}
.tabs li:first-child {
    margin-left: 8px;
}
.tabs li > div {
    top: 33px;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 8px;
    overflow: auto;
    background: #fff;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.tabs input[type="radio"] + label {
    margin: 0 2px 0 0;
    padding: 0 18px;
    line-height: 32px;
    background: #f1f1f1;
    text-align: center;
    border-radius: 5px 5px 0 0;
    cursor: pointer;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
}
.tabs input[type="radio"]:checked + label {
    z-index: 1;
    background: #fff;
    border-bottom-color: #fff;
    cursor: default;
}
.tabs input[type="radio"] {
    opacity: 0;
}
.tabs input[type="radio"] ~ div {
    display: none;
}
.tabs input[type="radio"]:checked:not(:disabled) ~ div {
    display: block;
}
.tabs input[type="radio"]:disabled + label {
    opacity: .5;
    cursor: no-drop;
}

.element_mini{
	position: relative; 
	height: 100px; 
	width: 100px; 
	display:inline-block; 
	border: 1px solid #BBB9B9; 
	padding: 5px; 
	margin: 5px;
}
.element_mini img{
	margin: auto; 
	position: absolute;
	max-height: 90%; 
	max-width: 90%; 
	height: auto;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
}
.element_mini img:hover::after {
    content: attr(data-title); /* Выводим текст */
    position: absolute; /* Абсолютное позиционирование */
    left: 20%; top: 30%; /* Положение подсказки */
    z-index: 1; /* Отображаем подсказку поверх других элементов */
    background: rgba(255,255,230,0.9); /* Полупрозрачный цвет фона */
    font-family: Arial, sans-serif; /* Гарнитура шрифта */
    font-size: 11px; /* Размер текста подсказки */
    padding: 5px 10px; /* Поля */
    border: 1px solid #333; /* Параметры рамки */
}
.drag_image, .element_mini img{
	opacity: 0.<?=$_SESSION['opacity']?>;
}

input {
    border: 1px solid #dedede;
    color: #000000;
    display: block;
    font-family: PT Sans, Arial;
		//font-size: 18px;
		//line-height: 55px;
		//height: 45px;
		//padding: 0 14px;
    -webkit-box-shadow: 2px 2px 0 #f4f4f4 inset;
    -moz-box-shadow: 2px 2px 0 #f4f4f4 inset;
    box-shadow: 2px 2px 0 #f4f4f4 inset;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.ui-wrapper.ui-draggable.ui-draggable-handle.ui-rotatable{
	position: absolute!important; 
}
</style>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>