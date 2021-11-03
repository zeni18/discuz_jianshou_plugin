<?php

class plugin_jianshou
{
    public function discuzcode($param)
    {
        global $_G;

        $_G['discuzcodemessage'] = preg_replace('/\[raishpay=(\w+)\](.*?)\[\/raishpay\]/is', '<div class="radish-content" data-hashid="$1">###简售付费内容，发布后可见效果###</div>', $_G['discuzcodemessage']);
    }
}

class plugin_jianshou_forum extends plugin_jianshou
{

    public function post_editorctrl_left()
    {
        $html = $this->getCss();
        $html .= '<a id="add_radishpay" href="javascript:void(0);">出售</a>';

        return $html;
    }

    public function post_bottom()
    {
        return '<script src="https://jianshou.online/js/discuz.js" charset="utf-8" type="text/javascript"></script>';
    }

    public function viewthread_bottom()
    {

        return '<script src="https://jianshou.online/js/embed.js" charset="utf-8" type="text/javascript"></script>';
    }

    private function getCss()
    {
        $css = '<link rel="stylesheet" type="text/css" href="https://jianshou.online/layer/layer.css" />';
        $css .= '<style type="text/css">';
        $css .= '#add_radishpay{background:url(/source/plugin/jianshou_online/img/radishpay-icon.png) 0 -1px no-repeat;}';
        $css .= '.b1r #add_radishpay{background:url(/source/plugin/jianshou_online/img/radishpay-icon.png) 0 -1px no-repeat;}';
        $css .= '.b2r #add_radishpay{background-position: -7px -47px;}';
        $css .= '</style>';

        return $css;
    }
}
