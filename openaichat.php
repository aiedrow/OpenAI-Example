<?php include("assets/header.php"); ?>

<div style='position:fixed;top:0;left:0;right:0;padding:21px 11px;background:#fff;border-bottom:1px solid #dbdbdb;z-index:999;'>
    <b>Aiedrow's ChatBot</b>
</div>

<div class='jiv' style='height:95vh;overflow:scroll;padding-top:69px;padding-bottom:69px;'>
<div id='openaichatresponse' style=''>
    
</div><br><br><br>
</div>

<div style='position:fixed;bottom:0;left:0;right:0;padding:21px 11px;background:#fff;border-top:1px solid #dbdbdb;'>
    <input type="text" id="openaichatquery" style="border:0;outline:none;width:99%;background:#f1f1f1;padding:11px 21px;padding-right:51px;border-radius:100px;" placeholder="Enter Your Query Here">
    <button onclick="openai_chat()" style="border:0;outline:none;background:none;padding:10px 10px;width:10%;position:absolute;margin-left:-11%;">></button>
</div>