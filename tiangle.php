<?php 
		if(!empty($_POST)) {
			$mat_price;
			$levels_extra;
			
			$length = filter_var(
				$_POST['length'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
			$length = intval($length);

			$width = filter_var(
				$_POST['width'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
			$width = intval($width);
			
			$lamps = filter_var(
				$_POST['lamps'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
			// стоимость установки лампочек
			$lamps_price = intval($lamps * 5);

			$levels = filter_var(
				$_POST['levels'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
            $levels = intval($levels);


            $material = filter_var(
				$_POST['material'],
				FILTER_SANITIZE_STRING,
				FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
			// устанавливаем цену в зависимости от материала
			switch($material){
				case "satin" : $mat_price = 2;
                break;
				case "glance" : $mat_price = 3;
                break;
				case "silk" : $mat_price = 4;
				case "matt" : $mat_price = 4;
			}
			
			$price = ($mat_price * ($length * $width));
			// за каждый уровень начиная от второго, +10% к стоимости потолка без учёта лампочек
			if($levels > 1) {
				$levels_extra = ($price / 100) * ($levels - 1) * 10;
                $price = $price + $levels_extra;
			}
			// добавляем цену лампочек
			$final_price =  $price + $lamps_price;
			// выводим цену
            echo $final_price;
		}
	?>