<?php
	/***
	 * Сontact: m.m.makarov@gmail.com
	 * Copyright 2019 Mikhail Makarov
	 * Released under the MIT license
	 **/
 
	function generateSefUrl($russianString)
	{
		$russianString = preg_replace('/[^A-zА-я]+/', '-', $russianString);

		$chars = array(
			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
			'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
			'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
			'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'i', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
			'я' => 'ya'
		);

		$result = '';
		$len = strlen($russianString);

		for ($i = 0; $i < $len; ++$i) {
			$ch = $russianString[$i];

			if (key_exists($ch, $chars)) {
				$result .= $chars[$ch];
			} else {
				$result .= $ch;
			}
		}

		return $result;
	}
