<?php

class plugin_jianshou
{
    public function discuzcode($param)
    {
        global $_G;

        $_G['discuzcodemessage'] = preg_replace('/\[snspay=(\w+)\](.*?)\[\/snspay\]/is', '<div class="snspay-content" data-hashid="$1">###云售付费内容，发布后显示效果###</div>', $_G['discuzcodemessage']);
    }
}

class plugin_jianshou_forum extends plugin_jianshou
{

    public function post_editorctrl_left()
    {
        $html = $this->getCss();
        $html .= '<a id="e_snspay" href="javascript:void(0);">出售</a>';

        return $html;
    }

    public function post_bottom()
    {
        return '<script src="//yunshou.snscz.com/js/min/discuz.js" charset="utf-8" type="text/javascript"></script>';
    }

    public function viewthread_bottom()
    {
        return '<script src="//yunshou.snscz.com/js/embed.js" charset="utf-8" type="text/javascript"></script>';
    }

    private function getCss()
    {
        $css = '<link rel="stylesheet" type="text/css" href="//yunshou.snscz.com/lib/layer/skin/layer.css" />';
        $css .= '<style type="text/css">';
        $css .= '#e_snspay{background:url(/source/plugin/jianshou_online/img/snspay-icon.png) 0 -1px no-repeat;}';
        $css .= '.b1r #e_snspay{background:url(/source/plugin/jianshou_online/img/snspay-icon.png) 0 -1px no-repeat;}';
        $css .= '.b2r #e_snspay{background-position: -7px -47px;}';
        $css .= '</style>';

        return $css;
    }
}
