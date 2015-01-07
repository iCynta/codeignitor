<section class="">
    
        <div class="row">
            <div class="col-lg-12">
                <div class="col-sm-8 pull-left">
                    <div class="big-cta shadow-box">
                        <div class="cta-text">
                            <h1><span>iCynta.com</span> IT Consulting and IT development</h1>
                            <p style="text-align: justify;">
                                We are a team of IT professionals specializing in the areas of innovative web design, development and maintenance. 
                                Bringing together world-class technology and revolutionary designs, we help companies strengthen their business network, enhance corporate image and increase their influence on the limitless world of web. 
                            </p>
                            <p style="text-align: justify;">
                                Once we understand about the business, we thoroughly analyze the needs. We mainly focus on the targeted audience and clearly set the website design objective. All the facts will be clearly discussed with the clients and also gather the brilliant ideas from our clients and collects maximum information about the business. We believe that the client knows about their business better than anybody else in the world. We discuss about different types of websites, possibilities of online trading and online marketing, brand identity, security, different website development languages and server details.
                            </p>

                            <blockquote>
                                <p>We don&#39;t believe in JUST A WEBSITE concept. Before any of the web design work we undertake, we clearly understand the design objective. We believe that a quality website is a result of our clients&#39; brilliant ideas.</p>
                            </blockquote>

                            <p style="text-align: justify;">
                                Our web design packages are competitive and always trying to give best quality websites affordable to all. Since we an aspiring team of enthusiasts in the field, our prices and quality rendered are no match to many established organization. 
                            </p>

                        </div>
                    </div>
                </div>
                <!-- LATEST NEWS AREA -->

                <div class="col-lg-4 pull-left shadow-box" style="margin-left:-2px; margin-right:-2px;">
                    <div class="box ">
                        <div class="box-bottom">
                            <a href="#">Latest Updates</a>
                        </div>
                        <div class="box-gray aligncenter ">
                            <div id="carousel-example-generic " class="carousel slide" data-ride="carousel">
                                 <!-- Wrapper for slides -->
                                <?php
                                $i = 1;
                                ?>
                                <div class="carousel-inner">

                                    <?php foreach ($news as $news_item): ?>
                                        <div class="item <?php echo ($i == 1) ? 'active' : ' ' ?>">

                                            <h6><?php echo $news_item['title']; ?></h6>
                                            <img src="<?php echo base_url() . 'uploads/news/' . $news_item['image']; ?>" 
                                                 class="img-thumbnail center-block" alt="<?php echo $news_item['title']; ?>" style="max-width:100%; max-height:120px;" />
                                                 <?php
                                                 $this->load->helper('text');
                                                 $detail = strip_tags($news_item['detail']);
                                                 echo "<p style='text-align:justify;margin:5px;'>" . character_limiter($detail, 240) . '!!</p>';
                                                 ?>
                                            <div class="box-bottom">
                                                <a href="<?php echo base_url() ?>index.php/news/view/<?php echo $news_item['slug']?>">Read more</a>
                                            </div>

                                        </div>

                                        <?php
                                        $i++;
                                    endforeach
                                    ?>
                                </div>

                                <!-- Controls -->
<!--                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>-->
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    
</section>
<section id="">

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box shadow-box">
                            <div class="box-gray aligncenter">
                                <h4>IT Consulting</h4>
                                <div class="icon">
                                    <i class="fa fa-desktop fa-3x"></i>
                                </div>
                                <?php
                                $it_consulting = $this->content_model->get_content('it_consulting_and_solution_providers');
                                $this->load->helper('text');
                                $detail = strip_tags($it_consulting['detail']);
                                echo character_limiter($detail, 110) . '!!';
                                ?>																
                            </div>
                            <div class="box-bottom">
                                <a href="<?php echo base_url() . 'index.php/content/' . $it_consulting['slug'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-box">
                            <div class="box-gray aligncenter">
                                <h4>Software Development</h4>
                                <div class="icon">
                                    <i class="fa fa-pagelines fa-3x"></i>
                                </div>
                                <?php
                                $it_consulting = $this->content_model->get_content('software_development_and_methodolgies');
                                $this->load->helper('text');
                                $detail = strip_tags($it_consulting['detail']);
                                echo character_limiter($detail, 100) . '!!';
                                ?>

                            </div>
                            <div class="box-bottom">
                                <a href="<?php echo base_url() . 'index.php/content/' . $it_consulting['slug'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-box">
                            <div class="box-gray aligncenter">
                                <h4>Web Development</h4>
                                <div class="icon">
                                    <i class="fa fa-edit fa-3x"></i>
                                </div>
                                <?php
                                $it_consulting = $this->content_model->get_content('web_application_development');
                                $this->load->helper('text');
                                $detail = strip_tags($it_consulting['detail']);
                                echo character_limiter($detail, 110) . '!!';
                                ?>

                            </div>
                            <div class="box-bottom">
                                <a href="<?php echo base_url() . 'index.php/content/' . $it_consulting['slug'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-box">
                            <div class="box-gray aligncenter">
                                <h4>Server &AMP; Networking </h4>
                                <div class="icon">
                                    <i class="fa fa-code fa-3x"></i>
                                </div>
                                <?php
                                $it_consulting = $this->content_model->get_content('digital_and_social_marketing');
                                $this->load->helper('text');
                                $detail = strip_tags($it_consulting['detail']);
                                echo character_limiter($detail, 110) . '!!';
                                ?>

                            </div>
                            <div class="box-bottom">
                                <a href="<?php echo base_url() . 'index.php/content/' . $it_consulting['slug'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="google_adv" class="center-block">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Home Page Middle Horizontal -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:728px;height:90px"
                         data-ad-client="ca-pub-7747916642885946"
                         data-ad-slot="5357060719"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
            <div class="col-lg-12">
                <!--<h4 class="heading">Recent Works</h4> -->
                <div class="shadow-box">
                    <section id="iCynta-Technology-Magazine">
                        <div class="box-bottom"> <a href="#">iCynta Technology Magazine</a> </div>
                        <div class=" box-gray ">
                        
                          <div class="widget">
                            <a href="<?php echo base_url() ?>index.php/technology/view_all/" class="btn btn-danger pull-right">READ ALL</a>
                            <div class="solidline"></div>
                            <ul class="recent">
                                <?php
                                foreach ($techs as $tech_item):
                                    $url = base_url() . "index.php/technology/view/" . $tech_item['slug'];
                                    ?>

                                    <li>
                                        <div class="shadow-box">
                                            <?php
                                            $image_detail   =   explode('.', $tech_item['image']);
                                            ?>
                                        <a href="#"><img src="<?php echo base_url() . 'uploads/technology/thumb/'.$image_detail[0]."_thumb.".$image_detail[1]; ?>" alt="<?php echo $tech_item['slug']; ?>" class="pull-left img-thumbnail" style="max-width:120px; max-height: 120px;" /></a>
                                        <h4><a href="<?php echo $url; ?>"><?php echo $tech_item['title']; ?></a></h4>
                                        <p>
                                            <?php
                                            $this->load->helper('text');
                                            $detail = strip_tags($tech_item['detail']);
                                            echo character_limiter($detail,450);
                                            ?>
                                            <a href="<?php echo $url ?>">Read More</a>   
                                        </p>
                                        </div>
                                    </li>
                                    <!--<li><div class="solidline"></div></li>-->
                                        <?php endforeach ?>

                            </ul>        
                        </div> 
                        </div>
                    </section>
                    <?php
//                    $page_id = '145527778951094';
//                    $access_token = '1433509836927365|kxGm9vN7Fj6S0nWTQvXg5sCGXt4';
//                    //Get the JSON
//                    $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id .
//                                    '/posts?access_token=' . $access_token);
//                    //Interpret data
//                    $fbdata = json_decode($json_object);
//
//                    foreach ($fbdata->data as $post) {
////                                            echo (isset($post->link) ? $post->link ."<br />":"");
////                                            echo (isset($post->message) ? $post->message ."<br />":"");
////                                            echo (isset($post->description) ? $post->description ."<br />":"");
//                    }

                    //var_dump($fbdata);
                    ?>
                </div>
            </div>
        </div>


</section>