<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/data/home/qxu1146510236/htdocs/public/../application/index/view/index/feedback.html";i:1511531446;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提问</title>
<!--     <link href="css/public.css" rel="stylesheet"/>-->
    <link href="__CSS__/show/aui.css" rel="stylesheet" />
      <link rel="icon" href="__IMG__/show/icon/yi-23.ico"/>
    <style>
/*        #35b558*/
        html,body{
            height: 100%;
            position: relative;
        }
        #main{
            width: 60%;
            min-width: 1024px;
            margin: 0 auto;
            padding-top: 50px;
        }
        #main .red{
            background: rgba(53, 181, 88, 0.62);
            display: inline-block;
            width: 15px;
            height: 15px;
            position: relative;
            margin-right: 10px;
        }
        #main .red i{
            position: absolute;
            top: 4px;
            left: 4px;
            width: 7px;
            height: 7px;
            display: inline-block;
            background: #35b558;
        }
        #main .txt{
            color: #434343;
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 500;
        }
        #main .txt span{
            font-size: 14px;
            color: #838383;
        }
        #main .txt em{
            color: #35b558;
            font-size: 14px;
        }
        #main input[type='text'],#main textarea{
            border: 1px solid #d2d2d2;
            min-height: 50px;
            padding-left: 10px;
            width: 100%;
        }
        #main textarea{
            height: 215px;
            padding-top: 5px;
        }
        #main .lable span{
            padding: 0 25px;
            line-height: 40px;
            display: inline-block;
            cursor: pointer;
            background: #eeeeee;
            color: #636363;
            font-size: 14px;
            margin-right: 15px;
        }
        #main .lable span.active{
            background: #35b558;
            color: #fff;
        }
        #main .city select{
            border: 1px solid #d2d2d2;
            width: 290px;
            height: 50px;
            padding-left: 10px;
           color: #acacac;
            font-size: 16px;
            margin-right: 50px;
            background: url("img/select.png") no-repeat scroll 260px center transparent
        }
        #input div{
            position: relative;
             width: 290px;
            margin-right: 50px;
        }
        
        #input div>span{
            position: absolute;
            color:#35b558;
            top: 36%;
            left: 5px;
        }
        #main input[type='submit'],.submit a{
            background: #434343;
            color: #fff;
            width: 220px;
            line-height: 50px;
            margin-right: 50px;
            text-align: center;
             transition: all .6s;
        -webkit-transition: all .6s;
        -moz-transition: all .6s;
            transform-origin: 5px 8px ;
        }
        #main .submit{
            margin-top: 70px;
        }
        #main .city,#main .lable{
            margin-bottom: 40px;
        }
        #main input[type='submit']:hover,.submit a:hover{
            color: #fff;
            background: #35b558
        }
        #footer{
                position: absolute;
    bottom: 10px;
    width: 100%;
    left: 0;
    font-size: 12px;
    color: #333;
        }
           #head {
            padding: 30px 0;
        }
        #head h1{
            display:table-cell;
            font-weight:500; 
            font-size: 26px;
             vertical-align: middle;
            color: #35b558
        }
        #head img{
            width: 180px;
            display:table-cell;
             vertical-align: middle;
        }
        #head .logo{
            display: table;
        }
        #head .aui-row{
            width: 1024px;
            margin: 0 auto;
              width: 60%;
            min-width: 1024px;
        }
        #head{
            border-bottom: 1px solid #eee;
        }
        #head .right{
            margin-top: 30px;
        }
         .none{
            visibility:hidden;
           
        }
         .none.show{
            visibility:inherit;
        }
    </style>
     
</head>
<body>

    <div id="head">
       <div class="aui-row clear">
           <a href="index.html" class="aui-pull-left logo">
              <img src="__IMG__/show/yi-23.png" alt="">
               <h1>上网,从yi-23开始</h1>
           </a>
           <div class="aui-pull-right right">
               <a href="login.html">登录</a><span class="cursor">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
               <a href="register.html">注册</a>
           </div>
       </div>
   </div>
    <div id="main">
        <p class="txt"><span class="red"><i></i></span>一句话来描述您的问题</p>
        <div><input type="text" id="text" placeholder="请在这概述你的问题" required></div>
        <p class="txt clear"><em class="none aui-pull-left">最少填写一个问题哦！</em> <em class="aui-pull-right">标题不超过40个字</em></p>
        <p class="txt"><span class="red"><i></i></span>问题补充 <span>(选填)</span></p>
        <div class="aui-margin-b-15">
            <textarea id="mome"></textarea>
        </div>
         <p class="txt"><span class="red"><i></i></span>选择标签 <span>(最多选择3个标签，方便准确定位您的问题)</span></p>
         <div class="lable">
         <span class="active">界面太丑</span>
         <span>功能不齐全</span>
         <span>皮肤不好看</span>
         <span>操作太复杂</span>
         <span>皮肤太少</span>
        
         </div>
       
        
          <p class="txt"><span class="red"><i></i></span>联系方式 <span>(请留下联系资料，对外保密 <em>有账号直接登录</em>)</span></p>
          <div class="clear" id="input">
              <div class="aui-pull-left">
                  <input type="text" id="name" placeholder="姓名">
<!--                  <span>*</span>-->
              </div>
              <div class="aui-pull-left">
                  <input type="text" id="phone" placeholder="手机号">
                
              </div>
              <div class="aui-pull-left">
                  <input type="text" id="email" placeholder="E-mail">
                  
              </div>
          </div>
          <div class="clear submit" >
              <input onclick="mysubmit()" type="submit" class="aui-pull-left" value="提交反馈">
          </div>
    </div>

<footer class="aui-text-center" id="footer">
        <p>©2017&nbsp;&nbsp;&nbsp;Yi-23 闽ICP备15012318号</p>
    </footer>
 <script src="__JS__/jquery.js"></script>
    <script>
        $("#main .lable span").on('click',function(){
            if($(this).hasClass('active')){
                 $(this).removeClass('active')
            }else{
                if($("#main .lable .active").length >= 3) return;
                  $(this).addClass('active')
            }
        })
       function mysubmit(){
        
            var data = {}
           if(!$("#text").val()){
               $(".none").addClass('show');
               setTimeout(function(){
                    $(".none").removeClass('show');
               },3000)
               return;
           }
           var arr = [];
           $(".lable .active").each(function(o,i){
               arr.push($(i).text())
           })
          data['label'] = arr.join() || '';
          data['email'] = $("#email").val() || '';
          data['text'] = $("#text").val() || '';
          data['phone'] = $("#phone").val() || '';
          data['name'] = $("#name").val() || '';
          data['mome'] = $("#mome").val() || '';
        post('show/Usermsg/fb',data,function(r){
            alert('谢谢您的反馈，我们会做到更好！')
        })
       }
         function post(url,data,callback){
    $.ajax({
        url:'__ROOT__/'+url,
        timeout: 10000, // 超时时间 10 秒
        headers: 'aaaaaaaaaaaaa',
        type:'POST',
        data:data,
        dataType:'json',
        complete:function(r){
         if(r.status == 200){
             //responseText
               callback(r,r.responseText)
            }else{

            }
        }
    })
    };
    </script>
</body>
</html>