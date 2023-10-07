<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


	<section id="article" data-speed="2" data-type="background">

		<div class="row">	
			<div class="col-lg-1 col-sm-1"></div>
			<div class="col-lg-10 col-sm-10">

			<h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
			<p>It looks you found an empty part of my brain. Maybe try a search?</p>
			
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						    <div class="input-group">
							      <input type="text" class="form-control" placeholder="Search for..." name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" >
							      <span class="input-group-btn">
							        <button class="btn btn-primary" id="search-submit" type="submit">Search</button>
							      </span>
						    </div>
					</form>
				</div>
			</div>
	
	</section>	




<?php get_footer(); ?>
