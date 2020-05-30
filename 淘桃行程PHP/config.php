<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016102200737171",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEAz/tYALLmWsUk3YYl44apSzqIWNBzChu9kUuUtm1Tq5SOnldS23Cy0zutRgmsa2Ys80WvOnyxLZCOIzTaiRZ/ObqHc0ukpKGe0DA7gpjgVu6NX7S6sncf3NJIKdtViJ1rF2e8nUcmVnrgF+t5TpstihogN3cQgCzF+DkmHsvwDnwOBdL6YUnzkqHNcFU0pNwiDtKmB6cP1HlbGzl+mWPo3OvIKj1WxqAsTAQnx6Z/BZRwWinsJVcs5mPatRyUVtsyANbnynwajLCa6j+9oD7aXJUgeeJGkiur/BUvyTNy3f00YvYzFGmkXokQ9blBTcWX51+2wxS9FevKx7I5LYCkfwIDAQABAoIBAGMKtVC34Pyuzyxy2o4sLWh2ukFZGr9gkHilfm8VRvf5aaU7vmhjlbUDwTMOHj6SzKsYryZyBMnHAfkADWWlAfcSvbgI+KGxmXhYz64UcRjUxxwha5rbIaA9v0G3glbpZ/sgWnCnVjlukFKzvvPQ7/HJGThwiboQGEJprJ6TzYCHdJn9PWQzKW1sbXD5nhy1jOF8WNeRoJeL97Jf5puCAD0IN/pNIBbRdzYNwWBoWNlxCfcs3JrwzKzWsVY/yLhFZrvgO+Qe1wd7hedLJa2Knt7WzBh5W9y9qbgHI9wTIyZmjdhVHQT7byC7nHuhsqZMfip8OYzQO/l8mKFhoWs+eCkCgYEA+Qg3c+c3GgGXOXCmwK/M4D79dUhCPNfXOCnLJeMMcBnaIxlEsSBDBq47wWD5ODaysXdFu2FBAshN4Pt19M84QiGz2+ms8M9k0vgiTvLbVqj1jGQpTqOfgqW5riflm5hv9HzYnfLCSOdE0pByYu1F4xNaTT98StNCoVXzPEJzK2MCgYEA1c0W6HrXFFOL4R4plXqxjVWZ/yE7h7eFPo8ZgWk4972PpbffPWr2jgRPNXhjjmdQja0ZXNMaPpQDkSpB5LxvyNcyZ2S6bvW8FPaHE3DGrJz+ofH+6zuula6UTZ9xKxl4+Gmp4TP9zA49lNFjQ6ookqOnihpyML0wYBETCPxHgzUCgYEAzDGRjoay5q8ROXcGNA6yNdlQaB9UuKDeht22Bh3SsARymb75VSc37j1lH94M26v1/4/l7IwFC2wEd4qYoKBc59TMrnA/bsEPUfFF6Gg3syodFP135VRC0ZRj2Mo7+cYXXmgUEgbgiXigNOtd74HQgS34KEj6+DubccCRDgMKfjMCgYBHc2jqfNMQOfOPYlMnX3+i6i6y8tpAOvbOt2ggtZeSQ8mT6mUy02Jeh9Yo2nj7CFAFaQoG2Y31x+WBSAwJc2gwSKrRnvonRvx6TQFLX+8llLoMSSGWX7Wy1Es/vb9GVhb1feqGFqgE3+V4rJlt7Zntl7/QCZKL804NbOddo2IK2QKBgQC7ITom6n4kITmpytpwiCJIVEumOR1ENeETGM/ilWQilI5I3zq4bPdXQDClmRR0NGxzH1kVEH5lUfWSsD5raebehb0Jomk+8ViSi5gmO6tb/Z4jAQE5t6y2s17qQ4ejGCfPm/+Z2LiGvgEsUp2aTtDYdeP7k69a+85SMLsEaR7dDQ==",
		
		//异步通知地址
		'notify_url' => "https://songbin.club/alipay/notify_url.php",
		
		//同步跳转
		'return_url' => "https://songbin.club/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmttMjA9b69aYUnGv2hW6LeMs6S4Usw/aISKv0uEXuddYBUT5oY2RX5ljxC/+GJyB6c5wrDKmamAuwMU89l3XXQgSFYN5L8Cxq0k31XTi2fsf4+T4N8aPcY9dVXiG7AnvlLUfVXhGzLGsr/BQTs0Qi0SniSH9SHc4ntUfDZbbliNMHnkjWYOFxCR7CKc8owdqcW7UJ53xMJfvwQgmmRN5LykB4TQId6nTwK+5hkBhAHKby43FXOuWpQW6dHgXQee2aLxNd8hfAPOw+Pe6WckYF51kjmsCwd/4iObtgyWCkubSwTG8dsdTolWq/drzPgBLaSRtSb0bogP818dpNKyGmwIDAQAB",
);