
const disallowed_keywords = [
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
    "yandex",
    "rambler",
    "tut.by",
    "onet.pl",
    "wp.pl",
    "zoho.com",
    "proton.me",
    "gmx.com",
    "titan.email"
];

let disallowed_count = 0;
for (const keyword of disallowed_keywords) {
    if (email.includes(keyword)) {
        disallowed_count++;
    }
}
if (disallowed_count > 0) {
    res.status(200).json({status: 0, message: "Sorry. You have to use email address for your organization. Send an email to admin@example.com if this is an error."});
    return;
}
