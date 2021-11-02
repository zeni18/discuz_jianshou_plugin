<?php


class mobileplugin_snsiopay
{
    public function discuzcode($param)
    {
        global $_G;

        $_G['discuzcodemessage'] = preg_replace('/\[snspay=(\w+)\](.*?)\[\/snspay\]/is', '<div class="snspay-content" data-hashid="$1">###云售付费内容，发布后显示效果###</div>', $_G['discuzcodemessage']);
    }
}


class mobileplugin_snsiopay_forum extends mobileplugin_snsiopay
{
    public function viewthread_bottom_mobile()
    {
        return '<script src="//sns.io/js/embed.js" charset="utf-8" type="text/javascript"></script>';
    }
}
