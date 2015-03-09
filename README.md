# typecho-theme-bing
一款背景图片为 bing 图片的typecho主题

**演示地址：** <http://scunet.cn>

1. 背景图片每日自动更新。

1. 抓取 bing 图片写得很简陋，直接用的 `file_get_contents()` 方法，待更新。

1. logo 是用的 QQ 群头像接口，也可将其替换为自己的 QQ 头像接口。代码在 `header.php` 第47行。


附：

QQ 头像接口: `http://q1.qlogo.cn/g?b=qq&s=100&nk={号码}`

QQ 群头像接口: `http://p.qlogo.cn/gh/{群号}/{群号}/100`
