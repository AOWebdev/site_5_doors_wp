<?php 
// Template Name: Портфолио
get_header(); 
?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(<?php echo CFS()->get('portfolio_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <?php 
              $loop = CFS()->get('portfolio');
              foreach($loop as $row) {
                ?>
                <a href="<?= $row['portfolio_img']; ?>" data-caption="<?= $row['portfolio_title']; ?>">
                  <img src="<?= $row['portfolio_img']; ?>" alt="<?= $row['portfolio_description']; ?>">
                </a>
                <?php
              }
            ?>            
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>