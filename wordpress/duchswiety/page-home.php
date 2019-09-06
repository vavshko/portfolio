<?php
/*
    Template Name: Strona główna 
 */

/*
    Advanced Custom Fields
*/

//SECTION 01
$section_01_image = get_field('section_01_image');
$section_01_icon = get_field('section_01_icon');
$section_01_text_01_line = get_field('section_01_text_01_line');
$section_01_text_02_line = get_field('section_01_text_02_line');

//SECTION 02
$section_02_text_01_line = get_field('section_02_text_01_line');
$section_02_text_02_line = get_field('section_02_text_02_line');
$section_02_text_source = get_field('section_02_text_source');

//SECTION 03
$section_03_image_01 = get_field('section_03_image_01');
$section_03_image_02 = get_field('section_03_image_02');
$section_03_image_03 = get_field('section_03_image_03');
$section_03_image_04 = get_field('section_03_image_04');

$section_03_image_01_text = get_field('section_03_image_01_text');
$section_03_image_02_text = get_field('section_03_image_02_text');
$section_03_image_03_text = get_field('section_03_image_03_text');
$section_03_image_04_text = get_field('section_03_image_04_text');

$section_03_image_01_link = get_field('section_03_image_01_link');
$section_03_image_02_link = get_field('section_03_image_02_link');
$section_03_image_03_link = get_field('section_03_image_03_link');
$section_03_image_04_link = get_field('section_03_image_04_link');

$section_03_button = get_field('section_03_button');

//SECTION 04
$section_04_image = get_field('section_04_image');
$section_04_text_01_line = get_field('section_04_text_01_line');
$section_04_text_02_line = get_field('section_04_text_02_line');

$section_04_link_01 = get_field('section_04_link_01');
$section_04_link_02 = get_field('section_04_link_02');

$section_04_text_center = get_field('section_04_text_center');
$section_04_button = get_field('section_04_button');

//SECTION 05
$section_05_text = get_field('section_05_text');

$section_05_image_01 = get_field('section_05_image_01');
$section_05_image_02 = get_field('section_05_image_02');

$section_05_image_01_text = get_field('section_05_image_01_text');
$section_05_image_02_text = get_field('section_05_image_02_text');

$section_05_image_01_link = get_field('section_05_image_01_link');
$section_05_image_02_link = get_field('section_05_image_02_link');

$section_05_button = get_field('section_05_button');

//SECTION 06
$section_06_text = get_field('section_06_text');

$section_06_image_01 = get_field('section_06_image_01');
$section_06_image_02 = get_field('section_06_image_02');
$section_06_image_03 = get_field('section_06_image_03');
$section_06_image_04 = get_field('section_06_image_04');
$section_06_image_05 = get_field('section_06_image_05');
$section_06_image_06 = get_field('section_06_image_06');

get_header();
?>
  

<!-- BLOCK-01-->
<section id="block-01">
  <div class="container-fluid">
      <div class="row h-100 justify-content-center align-items-center">
          <div class="col-12 pl-0 pr-0 ">
              <div data-jarallax data-speed="0.2" class="jarallax">
      
                <?php if( !empty($section_01_image) ) : ?>
                <img src="<?php echo $section_01_image['url']; ?>" class="jarallax-img" alt="<?php echo $section_01_image['alt']; ?>">
                <?php endif; ?>  
                  
                <?php if( !empty($section_01_icon) ) : ?>

                <img src="<?php echo $section_01_icon['url']; ?>" class="img-fluid top-image-icon" alt="<?php echo $section_01_icon['alt']; ?>">
                
                <?php endif; ?>             
                
                <h2 class="top-image-text"><?php echo $section_01_text_01_line; ?><br><?php echo $section_01_text_02_line; ?></h2>
              
            </div>
          </div>
      </div>
  </div>
</section> 

<!-- BLOCK-02 -->
<section id="block-02" class="padd-top-58 padd-bott-96">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 mx-auto">
        <div class="verse">
          <h2 class="mb-0">
          <?php echo $section_02_text_01_line; ?>
          <br>
          <?php echo $section_02_text_02_line; ?>
          </h2>
          <h4><span class="source"><?php echo $section_02_text_source; ?></span></h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BLOCK-03 -->
<section id="block-03" class="padd-bott-62 text-center text-uppercase">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="hovereffect"> 

        <?php if( !empty($section_03_image_01) ) : ?>
        <img src="<?php echo $section_03_image_01['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_03_image_01['alt']; ?>">
        <?php endif; ?>  

          <div class="overlay">
              <a class="info" href="<?php echo $section_03_image_01_link; ?>"><?php echo $section_03_button; ?></a>
            </div>
          <h5 class="inscription padd-top-32"><?php echo $section_03_image_01_text; ?></h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="hovereffect"> 
          
        <?php if( !empty($section_03_image_02) ) : ?>
        <img src="<?php echo $section_03_image_02['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_03_image_02['alt']; ?>">
        <?php endif; ?>  

            <div class="overlay">
              <a class="info" href="<?php echo $section_03_image_02_link; ?>"><?php echo $section_03_button; ?></a>
            </div>
          <h5 class="inscription padd-top-32"><?php echo $section_03_image_02_text; ?></h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="hovereffect"> 
         
        <?php if( !empty($section_03_image_03) ) : ?>
        <img src="<?php echo $section_03_image_03['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_03_image_03['alt']; ?>">
        <?php endif; ?>  

            <div class="overlay">
              <a class="info" href="<?php echo $section_03_image_03_link; ?>"><?php echo $section_03_button; ?></a>
            </div>
            <h5 class="inscription padd-top-32"><?php echo $section_03_image_03_text; ?></h5>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="hovereffect"> 
         
        <?php if( !empty($section_03_image_04) ) : ?>
        <img src="<?php echo $section_03_image_04['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_03_image_04['alt']; ?>">
        <?php endif; ?>  

            <div class="overlay">
              <a class="info" href="<?php echo $section_03_image_04_link; ?>"><?php echo $section_03_button; ?></a>
            </div>
            <h5 class="inscription padd-top-32"><?php echo $section_03_image_04_text; ?></h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BLOCK-04 -->
<section id="block-04">
  <div class="container-fluid">
      <div class="row h-100 justify-content-center align-items-center">
          <div class="col-12 pl-0 pr-0">
            <div data-jarallax data-speed="0.2" class="jarallax">
      
              <?php if( !empty($section_04_image) ) : ?>
              <img src="<?php echo $section_04_image['url']; ?>" class="jarallax-img" alt="<?php echo $section_04_image['alt']; ?>">
              <?php endif; ?>  
       
                <div class="row justify-content-center align-items-center ml-0 mr-0">
                    <div class="col-7 block-4-col"></div>
                    <div class="col-5 block-4-col offset-6">
                        <article class="col">
                            <div class="spacer"></div>
                            <div class="circle">
                              <div class="wrapcontent">
                                <h3 class="circle-line-01"><a href="<?php echo $section_04_link_01; ?>"><?php echo $section_04_text_01_line; ?><br><?php echo $section_04_text_02_line; ?></a></h3>
                                <h3 class="circle-line-02"><?php echo $section_04_text_center; ?></h3>
                                <h3><a href="<?php echo $section_04_link_02; ?>" class="circle-line-03" role="button"><?php echo $section_04_button; ?></a></h3>
                              </div>
                            </div>
                        </article>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- BLOCK-05 -->
<section id="block-05" class="padd-top-77 padd-bott-185 text-center text-uppercase">
    <h1 class="block-05-years padd-bott-114"><?php echo $section_05_text; ?></h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="hovereffect"> 
             
                <?php if( !empty($section_05_image_01) ) : ?>
                <img src="<?php echo $section_05_image_01['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_05_image_01['alt']; ?>">
                <?php endif; ?> 

                <div class="overlay">
                  <a class="info" href="<?php echo $section_05_image_01_link; ?>"><?php echo $section_05_button; ?></a>
                </div>
                <h5 class="inscription padd-top-32"><?php echo $section_05_image_01_text; ?></h5>
              </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="hovereffect"> 

              <?php if( !empty($section_05_image_02) ) : ?>
              <img src="<?php echo $section_05_image_02['url']; ?>" class="img-fluid to-circle" alt="<?php echo $section_05_image_02['alt']; ?>">
              <?php endif; ?>  

              <div class="overlay">
                <a class="info" href="<?php echo $section_05_image_02_link; ?>"><?php echo $section_05_button; ?></a>
              </div>
              <h5 class="inscription padd-top-32"><?php echo $section_05_image_02_text; ?></h5>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- BLOCK-06 -->
<section id="block-06" class="padd-bott-156 text-center">
  <h1 class="block-06-headline padd-bott-90"><?php echo $section_06_text; ?></h1>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">

        <?php if( !empty($section_06_image_01) ) : ?>
        <img src="<?php echo $section_06_image_01['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_01['alt']; ?>">
        <?php endif; ?>  

      </div>
    
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
     
        <?php if( !empty($section_06_image_02) ) : ?>
        <img src="<?php echo $section_06_image_02['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_02['alt']; ?>">
        <?php endif; ?>  
     
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
        
        <?php if( !empty($section_06_image_03) ) : ?>
        <img src="<?php echo $section_06_image_03['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_03['alt']; ?>">
        <?php endif; ?>  
     
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
      
      
        <?php if( !empty($section_06_image_04) ) : ?>
        <img src="<?php echo $section_06_image_04['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_04['alt']; ?>">
        <?php endif; ?>  
      
      
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
      
        <?php if( !empty($section_06_image_05) ) : ?>
        <img src="<?php echo $section_06_image_05['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_05['alt']; ?>">
        <?php endif; ?> 
     
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
      
        <?php if( !empty($section_06_image_06) ) : ?>
        <img src="<?php echo $section_06_image_06['url']; ?>" class="recommendations img-fluid" alt="<?php echo $section_06_image_06['alt']; ?>">
        <?php endif; ?> 
     
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
