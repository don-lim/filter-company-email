<?php
			$disallowed_keywords = array(
				"gmail",
				"yahoo",
				"hotmail",
				"aol",
				"outlook",
				"msn.com",
				"live.com",
				"icloud.com",
				"me.com",
				"mac.com",
				"qq.com",
				"163.com",
				"126.com",
				"sina.com",
				"sohu.com",
				"139.com",
				"189.cn",
				"21cn.com",
				"263.net",
				"yeah.net",
				"tom.com",
				"51.com",
				"56.com",
				"163.net",
				"3721.net",
				"126.net",
				"263.net",
				"vip.sina.com",
				"vip.qq.com",
				"vip.163.com",
				"vip.126.com",
				"yahoo.co.jp",
				"yahoo.co.kr",
				"naver.com",
				"daum.net",
				"mail.com",
				"mail.ru",
				"yandex.ru",
				"rambler.ru",
				"tut.by",
				"onet.pl",
				"wp.pl",
        "zoho.com",
        "proton.me",
        "gmx.com",
        "titan.email"
			);

            $disallowed_count = 0;
            foreach ($disallowed_keywords as $keyword) {
                if (stripos($email, $keyword) !== false) {
                    $disallowed_count++;
                }
            }
            if ($disallowed_count > 0) {
	            http_response_code(200);
	            echo json_encode(array("status"=>0, "message"=>"Sorry. You have to use the email address from your organization. Send an email to admin@example.com if this is an error."));
	            exit;
            }
?>
