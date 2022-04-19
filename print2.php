<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("form");
CModule::IncludeModule("iblock");
session_start();
$PLANER_IB_ID = 84;
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/?><script src="jquery-1.12.4.js"></script>
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
		CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], 84, array('furniture_string' => $arr_imgs_val));
		CIBlockElement::SetPropertyValuesEx($_REQUEST['id'], 84, array('furniture_coor' => $arr_coors_val));
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
			$res = CIBlockElement::GetProperty(84, $_REQUEST['id'], "sort", "asc", array("CODE" => "furniture_string"));
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

<div style="display:flex;">
<div style="display:inline-block; padding: 10px; height: auto; "><!--width: 70%; 1754px; width: 1240px; h2>План помещения</h2><p>Элементы можно перетаскивать и менять их размер.</p-->
	<?	//echo '<p>'.$_COOKIE['planer_user_name'].', '.$_COOKIE['planer_shop'].', '.$_COOKIE['planer_email'].', '.$_COOKIE['planer_phone'].'</p>'?>
	<div class="picture" style="height: auto; width: auto;"><?//height: 1754px; width: 1240px;?>
		<img src="<?=$arProps['fon_string']['VALUE'] //CFile::GetPath($arProps['fon']['VALUE'])?>" style=""/> <?//width="100%" max-height:100%; max-width: 100%;?>

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
	</div><?//height: 46px; ?>
	<div style="position: absolute; bottom: 0; padding: 5px;">
		<?//width:50%; ?>
		<div style="display: inline-block; vertical-align: middle;" align="left">
			<img src="/calc_test/brands.png">
		</div>
		<div style="display: inline-block; height:100%; text-align: left; /*! vertical-align: middle; */" align="right">
			<?=$_COOKIE['planer_user_name']?> , <?=$_COOKIE['planer_shop']?>, <?=$_COOKIE['planer_email']?>, <?=$_COOKIE['planer_phone']?>		</div>
	</div>
	<form method="post" enctype="multipart/form-data" style="visibility: hidden; vertical-align:top; border:1px solid black; padding: 10px; display:inline-block;">
	<p>Нажмите на элемент, чтобы добавить его к плану помещения.</p>
<div class="tabs">

</div>

</form>

</div>
<?/*
$kos = array();
foreach ($imgs as $k => $v){?>

	<img id="<?=$k?>" src="/panorama/imgs/<?=$v['img']?>" style="position: relative;
	left: <?=$v['left']?>px !important;
	top: <?=$v['top']?>px !important;
	<?if((int) $v['width'] > 0){?>
		width: <?=$v['width']?>px !important;
<?}else{
		$kos[$v['img']] = $v['img'];
}?>
	<?if((int) $v['height'] > 0){?>
		height: <?=$v['height']?>px !important;
<?}else{
		$kos[$v['img']] = $v['img'];
}?>
	transform: <?=$v['rotation']?>;
	" class="draggable drag_image elt" />

<?}*/?>
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
.ui-wrapper.ui-draggable.ui-draggable-handle.ui-rotatable{
	position: absolute!important; 
}
.ui-resizable-handle.ui-resizable-se{
	display: none !important;
}
</style>
<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>