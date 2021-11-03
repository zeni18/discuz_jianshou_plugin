<?php


class mobileplugin_snsiopay
{
    public function discuzcode($param)
    {
        global $_G;

        $_G['discuzcodemessage'] = preg_replace('/\[radishpay=(\w+)\](.*?)\[\/radishpay\]/is', '<div class="radish-content" data-hashid="$1">###简售付费内容，发布后可见效果###</div>', $_G['discuzcodemessage']);
    }
}


class mobileplugin_snsiopay_forum extends mobileplugin_snsiopay
{
    public function viewthread_bottom_mobile()
    {
        return '<script src="https://jianshou.online/js/embed.js" charset="utf-8" type="text/javascript"></script>';
    }
}
