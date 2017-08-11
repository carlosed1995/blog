@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif


<head>
        <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="shortcut icon" href="/images/krajee-logo.ico" type="image/x-icon">
        <link rel="icon" href="/images/krajee-logo.ico" type="image/x-icon">
        <title>Bootstrap File Input Demo - © Kartik</title>
        <link href="/assets/prod/all-krajee.css" rel="stylesheet">
<link href="/assets/dcbbc97c/css/fileinput.min.css" rel="stylesheet">
<script id="twitter-wjs" src="http://platform.twitter.com/widgets.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-4718928441117602.js"></script><script src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" async=""></script>
<script type="text/javascript">function closepop() { $("#pop").popover("hide"); }
(adsbygoogle=window.adsbygoogle||[]).push({google_ad_client:'ca-pub-4718928441117602',enable_page_level_ads:true});</script>    <script type="text/javascript" async="" src="//krajee.disqus.com/embed.js"></script><link rel="preload" as="style" href="https://c.disquscdn.com/next/embed/styles/lounge.a219a5731bfdc6a1d16fa492c1ac36e9.css"><link rel="preload" as="script" href="https://c.disquscdn.com/next/embed/common.bundle.a4849fee956376877b26b8e6c72d72af.js"><link rel="preload" as="script" href="https://c.disquscdn.com/next/embed/lounge.bundle.d735d49630e10f25dc6756b3389202b7.js"><link rel="preload" as="script" href="https://disqus.com/next/config.js"><script async="" type="text/javascript" src="//krajee.disqus.com/count.js"></script><script src="//krajee.disqus.com/count-data.js?2=http%3A%2F%2Fplugins.krajee.com%2Ffile-auto-replace-demo"></script><script src="https://c.disquscdn.com/next/embed/alfie.f51946af45e0b561c60f768335c9eb79.js" async="" charset="UTF-8"></script><script type="text/javascript" charset="utf-8" async="" src="https://platform.twitter.com/js/button.fbaa419ee3b1f63d563b4dc1677c1aa4.js"></script></head>


<div class="bs-example">
				<label class="control-label">Select File</label>
<div class="file-input file-input-new"><div class="file-preview">
    <div class="close fileinput-remove">×</div>
    <div class="file-drop-disabled">
    <div class="file-preview-thumbnails"></div>
    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>
</div>
<div class="kv-upload-progress hide"><div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        0%
     </div>
</div></div>
<div class="input-group input-group-lg">
   <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
   <div class="file-caption-name" title=""></div>
</div>

   <div class="input-group-btn">
       <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
       <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
       
       <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input id="input-6" name="input6[]" type="file" multiple="" class=""></div>
   </div>
</div></div>			</div>