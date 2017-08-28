<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28
 * Time: 14:55
 */

class Index
{
    public function display()
    {
        // ob_start();
        ?>


        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>

            <!-- External CSS -->
            <link rel="stylesheet" href="./Public/layui/css/layui.css">
            <!--            <link rel="stylesheet" href="./Public/bootstrap/3.3.0/css/bootstrap.min.css">-->
            <!--            <link rel="stylesheet" href="./Public/Common/css/base.css">-->
            <!--            <link rel="stylesheet" href="./Public/Common/css/report.css">-->

            <!-- JS   -->
            <script src="./Public/jquery/2.0.0/jquery.js"></script>
            <!--            <script src="./Public/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
            <script src="./Public/jquery/2.0.0/jquery.min.js"></script>
            <!--    <script src="./Public/My97DatePicker/WdatePicker.js"></script>-->
            <script src="./Public/layui/layui.js"></script>


            <!--  style  -->


            <!-- script   -->
            <script>

            </script>
        </head>
        <body>


        <ul class="layui-nav" lay-filter="">
            <li class="layui-nav-item "><a href="">店铺收发表</a></li>
            <li class="layui-nav-item layui-this"><a href="">新建</a></li>
            <!--    <li class="layui-nav-item">-->
            <!--        <a href="javascript:;">解决方案</a>-->
            <!--        <dl class="layui-nav-child"> <!-- 二级菜单 -->-->
            <!--            <dd><a href="">移动模块</a></dd>-->
            <!--            <dd><a href="">后台模版</a></dd>-->
            <!--            <dd><a href="">电商平台</a></dd>-->
            <!--        </dl>-->
            <!--    </li>-->

        </ul>
        <div style="width: 100%; height: 50px"></div>
        <div class="layui-collapse">
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">新建</h2>
                <div class="layui-colla-content layui-show">
                    <form class="layui-form" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">店铺名</label>
                            <div class="layui-input-block">
                                <input type="text" name="title" required lay-verify="required" placeholder="请输入输入店铺名"
                                       autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">密码框</label>
                            <div class="layui-input-inline">
                                <input type="password" name="password" required lay-verify="required"
                                       placeholder="请输入密码"
                                       autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">辅助文字</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">选择框</label>
                            <div class="layui-input-block">
                                <select name="city" lay-verify="required">
                                    <option value=""></option>
                                    <option value="0">北京</option>
                                    <option value="1">上海</option>
                                    <option value="2">广州</option>
                                    <option value="3">深圳</option>
                                    <option value="4">杭州</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">复选框</label>
                            <div class="layui-input-block">
                                <input type="checkbox" name="like[write]" title="写作">
                                <input type="checkbox" name="like[read]" title="阅读" checked>
                                <input type="checkbox" name="like[dai]" title="发呆">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">开关</label>
                            <div class="layui-input-block">
                                <input type="checkbox" name="switch" lay-skin="switch">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">单选框</label>
                            <div class="layui-input-block">
                                <input type="radio" name="sex" value="男" title="男">
                                <input type="radio" name="sex" value="女" title="女" checked>
                            </div>
                        </div>
                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">文本域</label>
                            <div class="layui-input-block">
                                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            //Demo
            layui.use('form', function () {
                var form = layui.form;

                //监听提交
                form.on('submit(formDemo)', function (data) {
                    layer.msg(JSON.stringify(data.field));
                    return false;
                });
            });
        </script>
        </body>
        </html>

        <?php
    }
}

?>