
<link rel="stylesheet" href="<?php echo base_url()?>assest/css/lite-yt-embed.css" />
<main class="main">
    <div class="spacer_s"></div>
    <div class="pattern_bar"></div>
    <div class="spacer_s"></div>
    <div class="container">
        <div class="bh_content">
            <div class="row justify-content-between">
                <div class="col-md-8 p-4">
                
                    <div class="py-2">
                        <h1 class="head_h2"><?php echo @$blog->name?></h1>
                    </div>
                    <div class="py-3 flex">
                        <p class="fcard_p"><span>Created On:  <?php echo @$blog->date?></span></p>
                    </div>
                    <div class="featured_image py-3">
                        <lite-youtube params="controls=0&start=10&end=30&modestbranding=2&rel=0&enablejsapi=1" videoid="<?php echo @$blog->video_link?>" class="w-100"></lite-youtube>
                    </div>
                    <div class="spacer_s"></div>
                    <p class="fcard_p"><?php echo @$blog->about?></p>
                    
                </div>
                <div class="col-md-3 ">
                    <div class="py-3">
                        <h3 class="head_h3">Best of Burger Harbour</h3>
                    </div>
                    <ul class="lstn">
                        <li class="mb-3"> <a href="" class="tdn sidebarlink">Best Pizza All Around the world This Trick</a>
                        </li>
                        <li> <a href="mb-3" class="tdn sidebarlink">Which cheeze Of Burgur is most Expensive?</a>
                        </li>
                        <li> <a href="" class="tdn sidebarlink">Best Allo tikki Reciepe of burgur harbour?</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer_s"></div>
</main>
<script src="<?php echo base_url()?>assest/js/lite.js"></script>