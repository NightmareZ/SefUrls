<?php
	/***
	 * Сontact: m.m.makarov@gmail.com
	 * Copyright 2019 Mikhail Makarov
	 * Released under the MIT license
	 **/
 
	function generateSefUrl($russianString)
	{
		$encoding = 'UTF-8';
		$russianString = mb_strtolower($russianString, $encoding);

		$chars = array(
			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
			'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
			'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
			'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'i', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
			'я' => 'ya'
		);

		$result = '';
		$len = mb_strlen($russianString, $encoding);

		for ($i = 0; $i < $len; ++$i) {
			$ch = mb_substr($russianString, $i, 1, $encoding);

			if (!($ch >= 'A' && $ch <= 'z' ||
				  $ch >= 'А' && $ch <= 'я' ||
				  $ch >= '0' && $ch <= '9'))
			{
				$ch = '-';
			}

			if (array_key_exists($ch, $chars)) {
				$result .= $chars[$ch];
			} else {
				$result .= $ch;
			}
		}

		return $result;
	}
